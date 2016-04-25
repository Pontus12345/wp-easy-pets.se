<!DOCTYPE html>
<html>

<head>
	<title><?php wp_title('Easy Pets'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body id="bootstrap-overrides">
	<div id="wrapper">
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Logga</a>
					</div>
					
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							<li class="dropdown open">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Products <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#">Contact Us: xxx-xxx-xx</a>
							</li>
							
							<li class="active">
								<a href="#">Account <span class="sr-only">(current)</span></a>
							</li>
							
							<li>
								<a href="#">Cart </a>
							</li>
							<li class="dropdown open">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Name <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Login</a>
									</li>
									
									<li>
										<a href="#">Logout</a>
									</li>
								</ul>
							</li>					
						</ul>
					</div>
				</div>
			</nav>
		</header>


