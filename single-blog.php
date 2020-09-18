<?php 
 get_header();
?>
<style>
    .site-header{
        display:none;
    }
</style>

<?php get_template_part('details-section/detail','navbar'); ?>
<?php get_template_part('details-section/detail','sub_menu_view'); ?>
<?php get_template_part('details-section/detail','body'); ?>
<?php get_template_part('details-section/detail','recently_view'); ?>
<?php
 get_footer();
?>