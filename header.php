<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<?php if ( is_front_page()):?>
		<header id="header" class="wrapper">
			<article class="menubar">
				<a id="logo" href="<?php bloginfo('url'); ?>"><h3><?php echo bloginfo(); ?></h3></a>
				<!-- burger menu -->
				<div class="container" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
				<!-- full width menu -->
				<?php wp_nav_menu(array('theme_location'=>'haupt', 'container_id' => 'desktop-nav')); ?>
				<!-- menu responsive -->
				<?php wp_nav_menu(array('theme_location'=>'haupt', 'container_id' => 'mobile-nav')); ?>

			</article>
		</header>
		<!-- banner should display only on front page -->
		<section id="banner" class="" style="background-image: url(<?php echo get_background_image();?>);">
			<div class="wrapper">
				<?php dynamic_sidebar( 'header-msg'); ?>
				<!-- <button type="button" name="button">Contact me</button> -->
			</div>
		</section>
		<section id="skills" class="wrapper-fluid">
			<?php dynamic_sidebar( 'skills'); ?>
		</section>
	<?php elseif (is_page()): ?>
	<header id="header" class=" background-blue">
		<article class="menubar wrapper">
			<a id="logo" href="<?php bloginfo('url'); ?>"><h3><?php echo bloginfo(); ?></h3></a>
		</article>
	</header>
<?php else: ?>
	<p>Default Content</p>
	<?php endif; ?>
<!-- <pre>
homepage?
<?php var_dump((bool) is_page('sample-page')); ?><br>
shop?
<?php var_dump((bool) is_page('About me')); ?>
</pre> -->
