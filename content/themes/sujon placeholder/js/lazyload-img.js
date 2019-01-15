console.clear();

// convert node list to array
const images = document.querySelectorAll('.js-lazy-image');
let imageCount = images.length;

let observer;

// If we don't have support for intersection observer, loads the images immediately
if (!('IntersectionObserver' in window)) {
	images.forEach(image => {
		image.style.paddingBottom = Math.min(image.attributes.width.value / image.attributes.height.value * 100, image.attributes.height.value / image.attributes.width.value * 100) + '%';
		
		preloadImage(image);
	});
} else {
	// It is supported, load the images
	observer = new IntersectionObserver(onIntersection, {
		rootMargin: '100px 0px',
		threshold: 0.1
	});

	// observe each image
	images.forEach(image => {
		if (image.classList.contains('js-lazy-image--handled')) {
			return;
		}

		// image.style.paddingBottom = Math.min(image.attributes.width.value / image.attributes.height.value * 100, image.attributes.height.value / image.attributes.width.value * 100) + '%';

		observer.observe(image);
	});
}

/**
 * Preloads the image
 * @param {object} image 
 */
function preloadImage(image) {
	const imageSource = image.src;

	if (!imageSource) {
		return;
	}

	let promise = new Promise((resolve, reject) => {
		const imagePlaceholder = new Image();
		imagePlaceholder.src = imageSource;
		imagePlaceholder.onload = resolve;
		imagePlaceholder.onerror = reject;
	}).then(() => {
		// Prevents this from being lazy loaded a second time.
		image.classList.add('js-lazy-image--handled');
		image.src = imageSource;
		image.removeAttribute('style');
	}).then(() => {
		image.classList.add('fade-in');
	}).catch(() => {
		console.log('error');
	});

	return promise;
}

/**
 * On intersection
 * @param {array} entries 
 */
function onIntersection(entries) {
	// Disconnect if we've already loaded all of the images
	if (imageCount === 0) {
		observer.disconnect();
	}

	// Loop through the entries
	entries.forEach(entry => {
		// Are we in viewport?
		if (entry.intersectionRatio > 0) {
			imageCount--;

			// Stop watching and load the image
			observer.unobserve(entry.target);
			preloadImage(entry.target);
		}
	});
}