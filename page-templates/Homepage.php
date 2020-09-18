 <?php
 /**
 * template name: Home Page
 */
 get_header();
?>
<?php get_template_part('home-section/home','carousel') ?>
<?php get_template_part('home-section/home','collection') ?>
<?php get_template_part('home-section/home','sub_collection') ?>
<?php get_template_part('home-section/home','sub_banner') ?>
<?php get_template_part('home-section/home','best_seller') ?>

<?php
 get_footer();
?>
 