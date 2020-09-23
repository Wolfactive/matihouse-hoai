<?php 
 get_header();
?>
<style>
    .menu-bar__group-icon i{
        color:#000000;
    }

</style>
<?php get_template_part('details-section/detail','sub_menu_view'); ?>
<?php get_template_part('details-section/detail','body'); ?>
<?php get_template_part('details-section/detail','recently_view'); ?>
<?php
 get_footer();
?>