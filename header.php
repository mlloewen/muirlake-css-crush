<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Muir Lake
 <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" 
      type="image/png" 
      href="/favicon.png">

<script src="<?php bloginfo('template_directory'); ?>/js/lazysizes.min.js" async=""></script>
<script>
		function loadJS(u){var r=document.getElementsByTagName("script")[ 0 ],s=document.createElement("script");s.src=u;r.parentNode.insertBefore(s,r);}

		if(!window.HTMLPictureElement){
			document.createElement('picture');
			loadJS("<?php bloginfo('template_directory'); ?>/js/ls.respimg.min.js");
		}
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/ls.bgset.min.js" async=""></script>

<?php wp_head(); ?>

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
</head>

<body  <?php body_class(); ?> >
<!-- <div id="ml-bg" class="lazyload" data-bgset="<?php bloginfo('template_directory'); ?>/images/kl_bg500.jpg [(max-width: 720px)] | <?php bloginfo('template_directory'); ?>/images/kl_bg720.jpg [(max-width: 1050px)] | <?php bloginfo('template_directory'); ?>/images/kl_bg.jpg "> -->
<div id="page-container" class="hfeed site" >
	<header id="masthead" class="site-header" role="banner">
		<a href="#" id="show-menu-button"><img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png"></a>

		<div class="container">
			<div class="site-branding">

				<div class="header-left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==></img>
					</a>
				</div>

				<div class="header-right">

					<div class="site-tagline">&quot;Making followers of Jesus who love God and others selflessly.&quot;</div>
				</div>

			</div><!-- #site-branding -->
		</div><!-- #container -->

<!--		<nav id="site-navigation" class="main-navigation" role="navigation">  -->
		<nav id="site-navigation" class="main-navigation" role="navigation"> 
			<div  class="container-desktop-nav">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'muir-lake' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div><!-- #container-desktop-nav -->
		</nav> <!-- #site-navigation -->

	</header><!-- #masthead -->
	<div id="content" class="site-content">