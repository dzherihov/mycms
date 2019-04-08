<?php $this->theme->header(); ?>


		<!-- ==================== cateogry-section start ==================== -->
		<section id="cateogry-section" class="cateogry-section w100dt mb-50">
			<div class="container">
				<div class="row">

					<div class="col s12">


						<div class="slider mb-30">
							<ul class="slides">
								<li class="slider-item">
									<img src="img/blog4.jpg" alt="Image">
									<div class="caption center-align">
										<a href="#" class="tag l-blue w100dt mb-30">Lifestyle</a>
										<h1 class="card-title mb-10">
											Labore Etdolore Magna Aliqua Utero
										</h1>
										<p>
											Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
											Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
										</p>
										<a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>
									</div>
								</li>
								<li class="slider-item">
									<img src="img/fashion2.jpg" alt="Image">
									<div class="caption left-align">
										<a href="#" class="tag l-blue w100dt mb-30">Fashion</a>
										<h1 class="card-title mb-10">
											Labore Etdolore Magna Aliqua Utero
										</h1>
										<p>
											Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
											Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
										</p>
										<a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>
									</div>
								</li>
								<li class="slider-item">
									<img src="img/travel2.jpg" alt="Image">
									<div class="caption right-align">
										<a href="#" class="tag l-blue w100dt mb-30">Trave</a>
										<h1 class="card-title mb-10">
											Labore Etdolore Magna Aliqua Utero
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

						<div class="row containerblog">
							<?php $i=0; ?>
							<?php foreach (Post::getPage('publish', 'post', 'date') as $item): ?>
                        	<?php $i++; if ($i > 9) { break;} ?>
                        	<?php if($i==1):  ?>
							<div class="col m12 s12">
								<div class="blogs mb-30">
									<div class="card">
										<div class="card-image lazyimg">
											<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" style="width: 100%" class="waves-effect imageblog">
											<img class="size-ban js-lazy-image z-index" src="<?php echo $item->imagepage ?>" alt="Image"></a>
										</div>
										<!-- /.card-image -->
										<div class="card-content w100dt">
											<p>
												<a href="#" class="tag left w100dt l-blue mb-30">Travel</a>
											</p>
											<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="card-title flow-text">
										 			<?php echo $item->title ?>
											</a>
											<p class="mb-30">
												<?php echo $item->seo_description; ?>

											</p>
											<div class="card-action">
											<ul class="post-mate-time left">
												<li>
													<i class="icofont icofont-ui-calendar"></i><?php echo $item->date ?>
												</li>
											</ul>

											<ul class="post-mate right">
												<li class="like">
													<a href="#">
														<i class="icofont icofont-eye-alt"></i> <?php echo $item->qual_view ?>
													</a>
												</li>
											</ul>
										</div>
										</div>
										<!-- /.card-content -->
									</div>
									<!-- /.card -->
								</div>
								<!-- /.blogs -->
							</div>
							<!-- colm6 -->
 							<?php  else: ?>

							<div class="col m4 s12 itemblog">
								<div class="blogs mb-30">
									<div class="card blockblog">
										<div class="card-image lazyimg">
											<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="waves-effect">
											<img class="js-lazy-image postimgmini" src="<?php echo $item->imagepage ?>" alt="Image"></a>
										</div>
										<!-- /.card-image -->
										<div class="card-content w100dt">
												<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="card-title flow-text">
										 			<?php echo $item->title ?>
												</a>
											<p class="mb-30">
												<?php echo mb_substr($item->seo_description, 0, 200) . '...'; ?>
												<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>">[Читать далее>>]</a>
											</p>
											<div class="card-action">
											<ul class="post-mate-time left">
												<li>
													<i class="icofont icofont-ui-calendar"></i><?php echo $item->date ?>
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
							</div>
							<?php  endif; ?>
							<!-- colm6 -->
						<?php  endforeach; ?>
							
						</div>
						<!-- row -->

						<ul id="pagination" class="pagination w100dt">
							<li class="waves-effect"><a href="#!"><i class="icofont icofont-simple-left"></i></a></li>
							<li class="active next"><a href="#">1</a></li>
							<li class="waves-effect"><a href="#!">2</a></li>
							<li class="waves-effect"><a href="#!">3</a></li>
							<li class="waves-effect"><a href="#!">4</a></li>
							<li class="waves-effect"><a href="#!">5</a></li>
							<li class="waves-effect "><a href="#!"><i class="icofont icofont-simple-right"></i></a></li>
						</ul>

					</div>	
					<!-- colm8 -->




					
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</section>
		<!-- /#cateogry-section -->
		<!-- ==================== cateogry-section end ==================== -->

<?php $this->theme->footer(); ?>