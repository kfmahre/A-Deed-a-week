<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> ng-app="wpAngularTheme">
<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  	<meta name="author" content="Ciplex">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link rel="shortcut icon" href="/favicon.ico">
  	<link rel="apple-touch-icon" href="/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic' rel='stylesheet' type='text/css'>
   	<?php wp_head();?>
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
</head>
<body <?php body_class(); ?>>
<header class="container">
		<div class="row">
			<div class="col-sm-7">
				<h1>
					<a class="blog-name" href="/">
						<?php echo bloginfo('name'); ?>
					</a>
				</h1>
			</div>
			<div class="col-sm-4 col-sm-offset-1">

			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php wp_nav_menu(); ?>
			</div>
		</div>
</header>
<div class="container-fluid content-wrapper">
	<div class="container">
