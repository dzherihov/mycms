<div class="featured-posts w100dt mb-30">
							<div class="sidebar-title center-align">
								<h2>Топ новостей</h2>
							</div>
							<!-- /.sidebar-title -->

							<div class="sidebar-posts">
						<?php $i=0; ?>
						<?php foreach (Post::getPage('publish', 'post', 'qual_view') as $item): ?>
                        <?php $i++; if ($i > 3) { break;} ?>
								<div class="card">
									<div class="card-image mb-10 lazyimg">
										<img class="js-lazy-image" src="<?php echo $item->imagepage ?>" alt="Image">
										<span class="effect"></span>
									</div>
									<!-- /.card-image -->
									<div class="card-content w100dt">
										<p>
											<a href="#" class="tag left w100dt l-blue mb-10">Lifestyle</a>
										</p>
										<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="card-title">
											 <?php echo $item->title ?>
										</a>
										<ul class="post-mate-time left">
											<li>
												<p class="hero left">
													<i class="icofont icofont-ui-calendar"></i> <?php echo $item->date ?>
												</p>
											</li>
										</ul>

										<ul class="post-mate right">
											<li class="like">
													<i class="icofont icofont-eye-alt"></i> <?php echo $item->qual_view ?>
											</li>
										</ul>
									</div>
									<!-- /.card-content -->
								</div>
								<!-- /.card -->
  						<?php  endforeach; ?>

								

								
							</div>
							<!-- /.sidebar-posts -->

						</div>