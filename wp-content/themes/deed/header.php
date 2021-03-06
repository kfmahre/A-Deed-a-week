<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="wpAngularTheme">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="author" content="Ciplex">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic' rel='stylesheet' type='text/css'>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<?php // Facebook code ?>
			<script>
				(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1732805993602261&version=v2.0";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				window.isLoggedIn = false;
			</script>
		<?php // end facebook ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-78766846-1', 'auto');
			ga('require', 'displayfeatures');
			ga('require', 'linkid');
			ga('send', 'pageview');
		</script>

	<?php if(is_user_logged_in()) : ?>
	<script>window.isLoggedIn = true;</script>
	<?php endif ?>

	<?php wp_head();?>
</head>
<body class="container-fluid" <?php body_class(); ?>>

	<header class="container">

    <?php
        $header_image = esc_url( get_header_image() );

        if( !empty( $header_image ) ){
            echo '<div class="header-img" style="background-image: url(' . esc_url( $header_image ) . ');">';
            echo '<img src="' . esc_url( $header_image ) . '" alt="' . esc_attr( $blog_title . ' - ' . $blog_description ) . '">';
            echo '</div>';
        }
    ?>
			<div class="row logo-title-row">
				<img src="http://dev-a-deed-a-week.pantheonsite.io/wp-content/themes/deed/build/images/bracelet300px.png" class="logo" alt="picture">
				<h1 class="title"><?php echo bloginfo('name'); ?></h1>
			</div>
			<nav class="row">
				<div class="col-sm-12">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu',  'container_class' => 'header_menu' ) ); ?>
				</div>
			</nav>


	</header><!-- #masthead -->

<div id="main" class="container-fluid content-wrapper">
	<div class="container floating-middle">