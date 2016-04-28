<!DOCTYPE html>
<html>

<head>
	<title><?php wp_title('Easy Pets'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body>
	<div id="wrapper">
		<header>
			<nav>
				<div class="big-container nav-bar-header">
					<div class="Logo">
						<a class="nav-logga" href="<?php echo home_url(); ?>"><img class="normal-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/examplelogo.png"></a>
					</div>
					
					<div id="elements-show" class="mov-right">
						<div class="inline"><?php get_search_form(); ?></div>
						<div class="inline">
							<i style="display: none;"class="fa fa-bars"></i>
							<i style="display: none;"class="fa fa-times"></i>
						</div>
					</div>
					<div id="navbar" class="navbar">
						<?php wp_nav_menu( ['sort_column' => 'menu_order', 'container_class' => 'menu-header' ] ); ?>
					</div>
				</div>
			</nav>
		</header>


