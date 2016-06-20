<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Freelancer - Start Bootstrap Theme</title>

	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
	<link href="<?php echo get_template_directory_uri () ?>/startbootstrap-freelancer/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo get_template_directory_uri () ?>/startbootstrap-freelancer/css/freelancer.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo get_template_directory_uri () ?>/startbootstrap-freelancer/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#page-top">Start Bootstrap</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
			function register_header_menu() {
				register_nav_menu('header-menu',__( 'Header Menu' ));
			}
			add_action( 'init', 'register_header_menu' );
			?>
			<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
				<!--todo add this to docs
				http://stackoverflow.com/questions/14464505/how-to-add-class-in-li-using-wp-nav-menu-in-wordpress
				-->
				<!--				<ul class="nav navbar-nav navbar-right">-->
				<!--					<li class="hidden">-->
				<!--						<a href="#page-top"></a>-->
				<!--					</li>-->
				<!--					<li class="page-scroll">-->
				<!--						<a href="#portfolio">Portfolio</a>-->
				<!--					</li>-->
				<!--					<li class="page-scroll">-->
				<!--						<a href="#about">About</a>-->
				<!--					</li>-->
				<!--					<li class="page-scroll">-->
				<!--						<a href="#contact">Contact</a>-->
				<!--					</li>-->
				<!--				</ul>-->
				<?php
				wp_nav_menu( array(
					'container' => '',
					'theme_location' => 'header-menu',
					'menu_class'     => 'nav navbar-nav navbar-right',
				) );
				?>
			<?php endif; ?>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>