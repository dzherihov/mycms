<?php $this->theme->header(); ?>



		<!-- ==================== blog-slider-section start ==================== -->
		<section id="blog-slider-section" class="blog-slider-section w100dt mb-50">
			<div class="container">

				<div class="slider">
					<ul class="slides">
						<li class="slider-item">
							<img src="/content/uploads/portfolio/VireFit/bolshaya-3.jpg" alt="Image">
							<div class="caption center-align">
								
								<h1 class="card-title mb-10 flow-text">
									VireFit
								</h1>
								<p>
									VireFit - это игра в виртуальной реальности, которая направлена на физическую подготовку людей старше 6 лет.
								</p>
								<a href="http://test1.ru/virefit" class="custom-btn waves-effect waves-light">Подробнее</a>
							</div>
						</li>
						<li class="slider-item">
							<img src="/content/uploads/portfolio/WeddingDom/1.jpg" alt="Image">
							<div class="caption left-align">
								
								<h1 class="card-title mb-10 flow-text">
									Wedding Dom
								</h1>
								<p>
									Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
									Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
								</p>
								<a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>
							</div>
						</li>
						<li class="slider-item">
							<img src="/content/uploads/portfolio/CreateADish/6.jpg" alt="Image">
							<div class="caption right-align">
								
								<h1 class="card-title mb-10 flow-text">
									Create a dish
								</h1>
								<p>
									Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
									Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
								</p>
								<a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>
							</div>
						</li>
					</ul>
				</div>

			</div>
			<!-- container -->
		</section>
		<!-- /#blog-slider-section -->
		<!-- ==================== blog-slider-section end ==================== -->





		<!-- ==================== daily-lifestyle-section Start ==================== -->
		<section id="daily-lifestyle-section" class="daily-lifestyle-section mb-50">
			<div class="container">

				<div class="owl-carousel small-carousel owl-theme">
						<?php $i=0; ?>
						<?php foreach (Post::getPage('publish', 'portfolio', 'date') as $item): ?>
                        <?php $i++; if ($i >= 10) { break;} ?>
						<div class="item">
						<div class="card horizontal">
							<div class="card-image lazyimg">
								<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="waves-effect">
									<img class="miniimgcorusel js-lazy-image" src="<?php echo $item->imagepage ?>" alt="Image"></a>
							</div>
							<!-- /.card-image -->
							<div class="card-stacked">
								<div class="card-content">
									<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="sm-name"> <?php echo $item->title ?></a>
								</div>
								<!-- /.card-content -->
								<div class="card-action">
									
									<ul class="post-mate right">
										<li>
											<i class="icofont icofont-eye-alt"></i> <?php echo $item->qual_view ?>
										</li>
									</ul>
									<!-- /.post-mate -->
								</div>
								<!-- /.card-action -->
							</div>
							<!-- /.card-stacked -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.item -->
                    <?php  endforeach; ?>

					
				</div>
				<!-- /.small-carousel -->
			</div>
			<!-- container -->
		</section>
		<!-- /#daily-lifestyle-section -->
		<!-- ==================== daily-lifestyle-section End ==================== -->





		<!-- ==================== blog-section start ==================== -->
		<section id="blog-section" class="blog-section w100dt mb-50">
			<div class="container">
				<div class="row">

					<div class="col s12 m8 l8">
						<?php $i=0; ?>
						<?php foreach (Post::getPage('publish', 'portfolio', 'date') as $item): ?>
                        <?php $i++; if ($i > 3) { break;} ?>
							<div class="blogs mb-30">
							<div class="card">
								<div class="card-image lazyimg">
									<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="waves-effect">
									<img class="size-ban js-lazy-image" src="<?php echo $item->imagepage ?>" alt="Image"></a>
									
								</div>
								<!-- /.card-image -->
								<div class="card-content w100dt">
									<p>
										<p class="tag left w100dt l-blue mb-30"><?php echo $item->category ?></p>
									</p>
									<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="card-title">
										 <?php echo $item->title ?>
									</a>
									<p class="mb-30">
										 <?php echo $item->seo_description ?>
									</p>
									<div class="card-action">
									<ul class="post-mate-time left">
										<li>
											<i class="icofont icofont-ui-calendar"></i> <?php echo $item->date ?>
										</li>
									</ul>

									<ul class="post-mate right">
										<li class="like">
												<i class="icofont icofont-eye-alt"></i> <?php echo $item->qual_view ?>
										</li>
									</ul>
								</div>
								</div>
								<!-- /.card-content -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.blogs -->

                        <?php  endforeach; ?>
<!--
						<ul class="pagination w100dt">
							<li class="waves-effect"><a href="#!"><i class="icofont icofont-simple-left"></i></a></li>
							<li class="active"><a href="#!">1</a></li>
							<li class="waves-effect"><a href="#!">2</a></li>
							<li class="waves-effect"><a href="#!">3</a></li>
							<li class="waves-effect"><a href="#!">4</a></li>
							<li class="waves-effect"><a href="#!">5</a></li>
							<li class="waves-effect"><a href="#!"><i class="icofont icofont-simple-right"></i></a></li>
						</ul>
-->
					</div>	
					<!-- colm8 -->




					<div class="col s12 m4 l4">

						<?php $this->theme->sidebar('itsme'); ?>
						<!-- /.sidebar-testimonial -->

						<?php $this->theme->sidebar('toppost'); ?>
						<!-- /.featured-posts -->
		
						<?php $this->theme->sidebar('subscribe'); ?>
						<!-- /.sidebar-subscribe -->
	
					</div>	
					<!-- colm4 -->
					
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</section>
		<!-- /#blog-section -->
		<!-- ==================== blog-section end ==================== -->

	

<?php $this->theme->footer(); ?>