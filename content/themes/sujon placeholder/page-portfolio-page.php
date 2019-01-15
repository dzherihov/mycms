<?php $this->theme->header(); ?>

		<!-- ==================== cateogry-section start ==================== -->
		<section id="cateogry-section" class="cateogry-section w100dt mb-50">

			<div class="container">
				<div class="row">
					<div class="col s12 m8 l8">
						<div class="row containerblog">
							<div class="toolbar mb2 mt2">
							  <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
							    <li class="tab"><a class="fil-cat btnkat active" data-rel="All" href="#all">All</a></li>
							    <li class="tab"><a class="fil-cat btnkat" data-rel="Web" href="#websites">Web</a></li>
							    <li class="tab"><a class="fil-cat btnkat" data-rel="Gamedev" href="#gamedev">Gamedev</a></li>
							    <li class="tab"><a class="fil-cat btnkat" data-rel="VirtualReality" href="#virtualreality">Virtual Reality</a></li>
							    <li class="tab"><a class="fil-cat btnkat" data-rel="Other" href="#other">Other</a></li>
							  </ul>
							</div> 
							<div style="clear:both;"></div>   
							<div id="portfolio">
							<?php $i=0; ?>
							<?php foreach (Post::getPage('publish', 'portfolio', 'date') as $item): ?>
                        	<?php $i++; if ($i > 9) { break;} ?> 	
                        	<?php $cat = explode(", ", $item->category); ?>
							<div class="col m6 s12 itemblog scale-anm All <?php for ($i=0; $i < count($cat); $i++){echo $cat[$i] . ' ';} ?>">
								<div class="blogs mb-30">
									<div class="card blockblog">
										<div class="card-image lazyimg">
											<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="waves-effect">
											<img class="js-lazy-image postimgmini" src="<?php echo $item->imagepage ?>" alt="Image"></a>
										</div>
										<!-- /.card-image -->
										<div class="card-content w100dt">
											<div class="w100dt">
												<?php for ($i=0; $i < count($cat); $i++):?>		
													<a style=" padding-right: 1em" href="#" class="tag left l-blue mb-30 fil-cat"  data-rel="<?php echo $cat[$i] ?>"><?php echo $cat[$i]; ?></a>
												<?php  endfor; ?>
											</div>
												<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>" class="card-title flow-text">
										 			<?php echo $item->title ?>
												</a>
											<p class="mb-30">
												<?php echo mb_substr($item->seo_description, 0, 200) . '...'; ?>
												<a href="<?php echo 'http://test1.ru' . '/' . $item->segment ?>">[Читать далее>>]</a>
											</p>
											<div class="card-action">
											<ul class="post-mate-time left ">
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
							<!-- colm6 -->
						<?php  endforeach; ?>
						</div>
						<div style="clear:both;"></div> 
						</div>
						<!-- row -->
<!-- 
						<ul id="pagination" class="pagination w100dt">
							<li class="waves-effect"><a href="#!"><i class="icofont icofont-simple-left"></i></a></li>
							<li class="active next"><a href="#">1</a></li>
							<li class="waves-effect"><a href="#!">2</a></li>
							<li class="waves-effect"><a href="#!">3</a></li>
							<li class="waves-effect"><a href="#!">4</a></li>
							<li class="waves-effect"><a href="#!">5</a></li>
							<li class="waves-effect "><a href="#!"><i class="icofont icofont-simple-right"></i></a></li>
						</ul>
row -->
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
		<!-- /#cateogry-section -->
		<!-- ==================== cateogry-section end ==================== -->

<?php $this->theme->footer(); ?>
<script type="text/javascript">
	$(function() {
	  var selectedClass = "";
	  $(".fil-cat").click(function() {
	    selectedClass = $(this).attr("data-rel");
	    $("#portfolio").fadeTo(100, 0.1);
	    $("#portfolio>div")
	      .not("." + selectedClass)
	      .fadeOut()
	      .removeClass("scale-anm");
	    setTimeout(function() {
	      $("." + selectedClass)
	        .fadeIn()
	        .addClass("scale-anm");
	      $("#portfolio").fadeTo(300, 1);
	    }, 300);
	  });
	});
</script>