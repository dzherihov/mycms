<!DOCTYPE html>
<html lang="zxx">

	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php Theme::title()?></title>
		
	<?php if ($GLOBALS["_SERVER"]["PHP_SELF"] != "/index.php"): ?>
		<meta name="description" content="<?php Page::description() ?>">
		<meta name="keywords" content="<?php Page::keywords() ?>">
	<?php else: ?>
		<meta name="description" content="<?php Theme::field('description') ?>">
		<meta name="keywords" content="<?php Theme::field('description') ?>">
	<?php endif; ?>

		<?php Asset::render('css'); ?>
	</head>


	<body>

	<!-- ==================== header-section Start ==================== -->
		<header id="header-section" class="header-section w100dt navbar-fixed">

			<nav class="nav-extended main-nav">
				<div class="container">
					<div class="row">
						<div class="nav-wrapper w100dt">

							<div class="logo left">
								<a href="index.html" class="brand-logo">
									<img class="logomain" src="\content\uploads\generalImg\logoDC.png" alt="brand-logo">
								</a>
							</div>
							<!-- logo -->

							<div>
								<a href="#" data-activates="mobile-demo" class="button-collapse">
									<i class="icofont icofont-navigation-menu"></i>
								</a>
								<ul id="nav-mobile" class="main-menu center-align hide-on-med-and-down">
 									<?php foreach (Menu::getItems(4) as $item): ?>
                    					<li>
                        				<a href="<?php echo $item->link ?>"><?php echo $item->name ?></a> 
                    					</li>
                    				<?php  endforeach; ?>
<!-- /
									<li class="active"><a href="index.html">HOME</a></li>
									<li><a href="cateogry.html">CATEGORIES</a></li>
									<li class="dropdown">
										<a href="#">PAGES <i class="icofont icofont-simple-down"></i></a>
										<ul class="dropdown-container">
											<li><a href="404.html">404 Page</a></li>
										</ul>
										<!-- /.dropdown-container 
									</li>
									<li><a href="single-blog.html">BLOG SINGLE</a></li>
									<li><a href="contact.html">CONTACT</a></li>
									.main-menu -->
								</ul>
								

								<!-- ******************** sidebar-menu ******************** -->
								<ul class="side-nav" id="mobile-demo">
									<li class="snavlogo center-align"><img class="logomain" src="\content\uploads\generalImg\logoDC.png" alt="logo"></li>
									<?php foreach (Menu::getItems(4) as $item): ?>
                    					<li>
                        				<a href="<?php echo $item->link ?>"><?php echo $item->name ?></a> 
                    					</li>
                    				<?php  endforeach; ?>
									
								</ul>
							</div>
							<!-- main-menu -->

							<!--<a href="#" class="search-trigger right">
								<i class="icofont icofont-search"></i>
							</a>
							 search 
							<div id="myNav" class="overlay">
								<a href="javascript:void(0)" class="closebtn">&times;</a>
								<div class="overlay-content">
									<form>
										<input type="text" name="search" placeholder="Search...">
										<br>
										<button class="waves-effect waves-light" type="submit" name="action">Search</button>
									</form>
								</div>
							</div>-->

						</div>
						<!-- /.nav-wrapper -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</nav>

		</header>
		<!-- /#header-section -->
		<!-- ==================== header-section End ==================== -->
		<?php if ($GLOBALS["_SERVER"]["PHP_SELF"] != "/index.php"): ?>
		<!-- ==================== header-section Start ==================== -->
		<section id="breadcrumb-section" class="breadcrumb-section w100dt mb-30">
			<div class="container">

				<nav class="breadcrumb-nav w100dt">
					<div class="page-name hide-on-small-only left">
						<h4><?php Page::title() ?></h4>
					</div>
				</nav>
				<!-- /.breadcrumb-nav -->

			</div>
			<!-- container -->
		</section>
		<!-- /.breadcrumb-section -->
		<!-- ==================== header-section End ==================== -->
		<?php endif; ?>