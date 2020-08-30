<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
	   <link rel="profile" href="http://wolfactive.net/">
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="header box-shadow py-12">
	<div class="header__contain container">
	   <div class="header__item">
	      <a href="<?php echo site_url(); ?>" class="d--block logo mr-auto">
	        <img src="<?php echo get_field('logo','option') ?>" alt="logo-Diva">
	      </a>
	   </div>
	   <div class="header__item dp--none">
	      <?php
	       wp_nav_menu(array(
		    'theme_location' => 'headerMenuLocation' ));
	      ?>
	   </div>
	   <div class="header__item d--none dp--block">
	      <button class="btn" id="navBtn">
	          <i class="fas fa-bars icon--text"></i>
	      </button>
	      <div class="d--none" id="headerNavBar">
	         <?php
	         wp_nav_menu(array(
		      'theme_location' => 'headerMenuLocation' ));
	        ?>
	      </div>
	   </div>
	</div>
</section>
