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
				<div class="nav-bar-header">
					<div class="Logo">
						<a class="nav-logga" href="#">Logga</a>
					</div>
					
					<div id="navbar" class="navbar-collapse collapse">
						<?php wp_nav_menu( ['sort_column' => 'menu_order', 'container_class' => 'menu-header' ] ); ?>
					</div>
				</div>
			</nav>
		</header>


