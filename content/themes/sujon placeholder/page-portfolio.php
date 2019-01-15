<?php $this->theme->header(); ?>


		<!-- ==================== single-blog-section start ====================-->
		<section id="single-blog-section" class="single-blog-section w100dt mb-50">
			<div class="container">
				<div class="row">

					<div class="col s12">

						<div class="blogs mb-30">
							<div class="card">

								<div class="card-image imageblog">
									<img src="<?php echo Page::getStore()->imagepage ?>" alt="Image">
								</div>
								<!-- /.card-image -->
								<div class="card-content w100dt ui justified container">
									<p>
										<p href="#" class="tag left w100dt l-blue mb-30"><?php echo Page::getStore()->category ?></p>
									</p>
									<a href="#" class="card-title mb-30">
										<?php Page::title() ?>
									</a>
									<p class="mb-30 justify-text">
										<?php Page::description() ?>
									</p>
									<div >
									<ul class="post-mate-time left mb-30">
										<li>
											<i class="icofont icofont-ui-calendar"></i><?php Page::date() ?>
										</li>
									</ul>

									<ul class="post-mate right mb-30">
										<li class="like">
												<i class="icofont icofont-eye-alt"></i> <?php Page::qual_view() ?>
										</li>
									</ul>
									</div>
									<div class="content-blog">
										<?php Page::content() ?>
									</div>

									<ul class="tag-list left">
										<?php
										 	$keyw = Page::getStore()->seo_keywords;
											$pieces = explode(", ", $keyw);
										?>
										<?php for ($i=0; $i < count($pieces); $i++):?>
										<li><a href="#!" class="waves-effect"><?php echo '#' . $pieces[$i];?></a></li>
										<?php  endfor; ?>
									</ul>

									<ul class="share-links right">
										<li><a href="https://www.facebook.com/sharer.php?u=<?php echo 'http://test1.ru/' . Page::getStore()->segment; ?>" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
										<li><a href="http://twitter.com/share?text=<?php Page::description() ?>&url=<?php echo 'http://test1.ru/' . Page::getStore()->segment;?>" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
										<li><a href="https://plus.google.com/share?url=<?php echo 'http://test1.ru/' . Page::getStore()->segment; ?>" class="google-plus"><i class="icofont icofont-social-google-plus"></i></a></li>
										<li><a href="https://vk.com/share.php?url=<?php echo 'http://test1.ru/' . Page::getStore()->segment; ?>" class="linkedin"><i class="icofont icofont-social-vk"></i></a></li>
										
									</ul>

								</div>
								<!-- /.card-content -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.blogs -->

					<div class="prv-nxt-post w100dt mb-30">
							<div class="row">

						<?php $array = array(Post::getPage('publish', 'post', 'date')); $aa = Page::getStore()->title?>
						<?php for ($i=0; $i < count($array[0]); $i++):?>

							<?php if ($aa == $array[0][$i]->title):?>
								<?php if ($i > 0):?>
								<div class="col m6 s12">
									<div class="sb-prv-post">
										<div class="pn-img left">
											<img class="imagemini" src="<?php echo $array[0][$i-1]->imagepage ?>" alt="Image">
										</div>
										<div style="" class="pn-text left-align">
											<a href="<?php echo 'http://test1.ru' . '/' . $array[0][$i-1]->segment ?>" class="title-name mb-10"><?php echo $array[0][$i-1]->title ?></a><br>
											<a href="<?php echo 'http://test1.ru' . '/' . $array[0][$i-1]->segment ?>" class="prv-nxt-btn l-blue"><i class="icofont icofont-caret-left"></i> Preveious</a>
										</div>
									</div>
									<!-- /.sb-prv-post -->
								</div>
								 <?php else: ?>
									<div class="col m6 s12">
									<div class="sb-prv-post">
										<div class="pn-img left">
											<img src="/content/themes/sujon placeholder/img/img1.jpg" alt="Image">
										</div>
										<div style="" class="pn-text left-align">
											
										</div>
									</div>
									<!-- /.sb-prv-post -->
								</div>
								<?php  endif; ?>
								<!-- colm6 -->
								<?php if ($i != count($array[0])-1):?>
								<div class="col m6 s12">
									<div class="sb-nxt-post">
										<div class="pn-img right">
											<img class="imagemini"  src="<?php echo $array[0][$i+1]->imagepage ?>" alt="Image">
										</div>
										<div style="" class="pn-text right-align">
											<a href="<?php echo 'http://test1.ru' . '/' .$array[0][$i+1]->segment ?>" class="title-name mb-10"><?php echo $array[0][$i+1]->title ?></a><br>
											<a href="<?php echo 'http://test1.ru' . '/' . $array[0][$i+1]->segment ?>" class="prv-nxt-btn l-blue">Next <i class="icofont icofont-caret-right"></i></a>
										</div>
									</div>
									<!-- /.sb-nxt-post -->
								</div>
								<?php else: ?>
									<div class="col m6 s12">
									<div class="sb-nxt-post">
										<div class="pn-img right">
											<img src="/content/themes/sujon placeholder/img/img2.jpg" alt="Image">
										</div>
										<div style="" class="pn-text right-align">
											
										</div>
									</div>
									<!-- /.sb-nxt-post -->
								</div>
								<?php  endif; ?>
								<!-- colm6 -->
							<?php  endif; ?>
						<?php  endfor; ?>
						</div>
							<!-- row -->
					</div>

						

						
					</div>	
					<!-- colm8 -->



				
					
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</section>
		<!-- /#single-blog-section -->
		<!-- ==================== single-blog-section end ====================-->
<?php 
error_reporting(0); 
$id = Page::getStore()->id;
$view = Page::getStore()->qual_view;
Post::setPage($id, $view); ?>
<?php $this->theme->footer(); ?>