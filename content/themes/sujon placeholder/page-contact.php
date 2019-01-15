<?php $this->theme->header(); ?>
		





		<!-- ==================== contact-section start ==================== -->
		<section id="contact-section" class="contact-section w100dt mb-50">
			<div class="container">
				<!--
				<div id="map-section" class="map-section w100dt mb-50">
					<div id="google-map">
						<div id="googleMaps" class="google-map-container"></div>
					</div>
					<!-- /#google-map
				</div>
				 /#map-section -->

				<div class="row">
					<div class="col m9 s12">
						<div class="sidebar-title left-align">
							<h2>Связаться</h2>
						</div>

						<div class="contact-me">
							<div class="row">

								<div class="col m6 s12">
									<div class="mb-30">
									<?php Page::content() ?>
									</div>

									
									<!-- /.contact-things -->
									<div class="contact-things">
										<div class="c-icon">
											<i class="icofont icofont-phone"></i>
										</div>
										<div class="c-text">
											<p><a href="tel:<?php Theme::field('mob-number')?>"><?php Theme::field('mob-number')?></a></p>
										</div>
									</div>
									<!-- /.contact-things -->
									<div class="contact-things">
										<div class="c-icon">
											<i class="icofont icofont-send-mail"></i>
										</div>
										<div class="c-text">
											<p><a href="mailto:<?php Theme::field('e_mail')?>"><?php Theme::field('e_mail')?></a></p>
										</div>
									</div>
									<!-- /.contact-things -->
								</div>
								<!-- colsm6 -->

								<div class="col m6 s12">
									<form class="contact-form" action="#">
										<div class="contact-input">
											<input id="first_name" type="text" class="validate">
											<label class="color-field" for="first_name">First Name</label>
										</div>
										<!-- first_name -->

										<div class="contact-input">
											<input id="email" type="email" class="validate">
											<label class="color-field"  for="email" data-error="wrong" data-success="right">Email</label>
										</div>
										<!-- email -->

										<div class="contact-input">
											<input id="subject" type="text" class="validate">
											<label class="color-field"  for="subject">Subject</label>
										</div>
										<!-- subject -->

										<div class="contact-input">
											<textarea id="textarea1" class="materialize-textarea"></textarea>
											<label class="color-field"  for="textarea1">Type your message</label>
										</div>
										<!-- textarea1 -->
										<button type="button" class="waves-effect waves-light right">SEND MESSAGE</button>
									</form>
									<!-- /.contact-form -->
								</div>
								<!-- colsm6 -->

							</div>
							<!-- row -->
						</div>
						<!-- /.contact-me -->
					</div>
					<!-- colm9 -->

					<div class="col m3 s12">
						<div class="sidebar-title left-align">
							<h2>Социальные сети</h2>
						</div>

						<ul class="social-link">
							<li>
								<a target="_blank" href="<?php Theme::field('vkontakte')?>" class="twitter">
									<span class="s-icon left"><i class="icofont  icofont-social-vk"></i></span>
									<span class="s-name">Vkontakte</span>
								</a>
							</li>
							<li>
								<a target="_blank" href="<?php Theme::field('facebook')?>" class="facebook">
									<span class="s-icon left"><i class="icofont icofont-social-facebook"></i></span>
									<span class="s-name">Facebook</span>
								</a>
							</li>

							
							<li>
								<a target="_blank" href="<?php Theme::field('instagram')?>" class="instagram">
									<span class="s-icon left"><i class="icofont icofont-social-instagram"></i></span>
									<span class="s-name">Instagram</span>
								</a>
							</li>
							
						</ul>
					</div>
					<!-- colm3 -->
				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</section>
		<!-- /#contact-section -->
		<!-- ==================== contact-section end ==================== -->





	
<?php $this->theme->footer(); ?>
