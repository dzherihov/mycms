			<!-- ==================== instag leftram-section Start ==================== -->
		<section id="instagram-section" class="instagram-section w100dt">

			<div class="instagram-link w100dt">
				<a href="tel:<?php Theme::field('mob-number')?>">
					<span>Связаться по телефону</span>
					<p style="font-size:20px"><?php Theme::field('mob-number')?></p>
				</a>
			</div>

		</section>
		<!-- /#instag leftram-section -->
		<!-- ==================== instag leftram-section End ==================== -->
		<!-- ==================== footer-section Start ==================== -->
		<footer id="footer-section" class="footer-section w100dt">
			<div class="container">

				<div class="footer-logo w100dt center-align mb-30">
					<a href="#" class="brand-logo">
						<img class="logomain" src="\content\uploads\generalImg\logoDC.png"  alt="brand-logo">
					</a>
				</div>
				<!-- /.footer-logo -->

				<ul class="footer-social-links w100dt center-align mb-30">
					<li><a target="_blank" href="<?php Theme::field('facebook')?>" class="facebook">FACEBOOK</a></li>
					<li><a target="_blank" href="<?php Theme::field('twitter')?>" class="twitter">TWITTER</a></li>
					<li><a target="_blank" href="<?php Theme::field('google-plus')?>" class="google-plus">GOOGLE+</a></li>
					<li><a target="_blank" href="<?php Theme::field('vkontakte')?>" class="linkedin">VKONTAKTE</a></li>
					<li><a target="_blank" href="<?php Theme::field('youtube')?>" class="pinterest">YOUTUBE</a></li>
					<li><a target="_blank" href="<?php Theme::field('instagram')?>" class="instagram">INSTAGRAM</a></li>
				</ul>

				<p class="center-align">
					<i class="icofont icofont-heart-alt l-blue"></i>  
					All Right Reserved, Deasined by 
					<a href="#" class="l-blue">HTMLmate</a>
				</p>

			</div>
			<!-- container -->
		</footer>
		<!-- /#footer-section -->
		<!-- ==================== footer-section End ==================== -->

<?php Asset::render('js'); ?>

	</body>

</html>