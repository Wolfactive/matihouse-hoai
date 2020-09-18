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
				<span onclick="openNav()"><img src="<?php the_field('memu','option') ?>" alt=""></span>

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
					<img src="<?php the_field('logo','option') ?>" alt="">
				</a>	
			</div>
			<div class="menu-bar__group-icon">
				<div class="menu-bar__group-icon__cart">
					<a href=""><img src="<?php the_field('cart','option') ?>" alt=""></a>
				</div>
				<div class="menu-bar__group-icon__user">
					<a href=""><img src="<?php the_field('user','option') ?>" alt=""></a>
				</div>
				<div class="menu-bar__group-icon__heart-o">
					<a href=""><img src="<?php the_field('heart-o','option') ?>" alt=""></a>
				</div>
				<div class="menu-bar__group-icon__search">
					<a href=""><img src="<?php the_field('search','option') ?>" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>
