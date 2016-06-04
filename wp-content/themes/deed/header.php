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
   	<?php wp_head();?>
    <!--[if lt IE 9]>
	    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php // Facebook code ?>

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1732805993602261&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
	window.isLoggedIn = <?php is_User_Logged_In() ?>
	</script>
  	<?php // end facebook ?>
</head>
<body <?php body_class(); ?>>
<header class="container header">
		<div class="row">
			<div class="col-sm-7">
				<h1>
					<a ui-sref="list">
						<?php echo bloginfo('name'); ?>
					</a>
				</h1>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<span><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">WATCH THIS VIDEO!</a></span>
			</div>
		</div>
</header>
<div class="container-fluid content-wrapper">
	<div class="container">
