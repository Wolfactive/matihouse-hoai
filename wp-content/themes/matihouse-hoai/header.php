<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
	<link rel="profile" href="http://wolfactive.net/">
	<link rel="stylesheet" href="<?php _e(get_theme_file_uri('/assets/fonts/fontawesome-free-5.14.0-web/css/all.css'))?>">
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="site-header">		
	<div class="container">
		<div class="menu-bar">
			<div class="menu-bar__icon">
				<img src="<?php the_field('memu','option') ?>" alt="">
			</div>
			<div class="menu-bar__logo">
				<img src="<?php the_field('logo','option') ?>" alt="">
			</div>
			<div class="menu-bar__group-icon">
				<div class="menu-bar__group-icon__cart">
					<img src="<?php the_field('cart','option') ?>" alt="">
				</div>
				<div class="menu-bar__group-icon__user">
					<img src="<?php the_field('user','option') ?>" alt="">
				</div>
				<div class="menu-bar__group-icon__heart-o">
					<img src="<?php the_field('heart-o','option') ?>" alt="">
				</div>
				<div class="menu-bar__group-icon__search">
					<img src="<?php the_field('search','option') ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
