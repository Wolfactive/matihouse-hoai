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
	<link rel="stylesheet" href="<?php _e(get_theme_file_uri('/assets/css/slick.css'))?>">
	<link rel="stylesheet" href="<?php _e(get_theme_file_uri('/assets/css/slick-theme.css'))?>">
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="site-header">		
	<div class="container">
		<div class="menu-bar">
			<div class="menu-bar__icon">
				<span onclick="openNav()">
					<?php if(is_singular('blog')): ?>
					<i style="color:#000000;" class="fas fa-bars"></i>	
					<?php else: ?>
					<i class="fas fa-bars"></i>
					<?php endif; ?>	
				</span>

				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'headerMenuLocation',
							'container_class' => 'my_main_menu_class')); 
					?>
				</div>
			</div>
			<div class="menu-bar__logo">
				<a href="<?php echo site_url( '/home/' ); ?>">
					<?php if(is_page_template('page-templates/Homepage.php') || is_category()):?>
						<img src="<?php the_field('logo','option') ?>" alt="">
					<?php else:?>
						<img src="<?php the_field('logo_black','option') ?>" alt="">
					<?php 
						endif;
					?>
				</a>	
			</div>
			<div class="menu-bar__group-icon">
				<div class="menu-bar__group-icon__cart">
					<a href="">
						<i class="fas fa-shopping-bag"></i>
					</a>
				</div>
				<div class="menu-bar__group-icon__user">
					<a href=""><i class="far fa-user"></i></a>
				</div>
				<div class="menu-bar__group-icon__heart-o">
					<a href=""><i class="far fa-heart"></i></a>
				</div>
				<div class="menu-bar__group-icon__search">
					<a href=""><i class="fas fa-search"></i></a>
					<?php get_search_form(); ?> 
				</div>
			</div>
		</div>
	</div>
</section>
