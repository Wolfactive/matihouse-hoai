 <?php 
 get_header();
?>
 <section class="wrapper" id="singlePost">    
     <div class="post__contain">
      <?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();?>
			 <div class="container">
				<h3 class="title--section text--center my-20"><?php the_title(); ?></h3>		
				<div class="title--underline"></div>
				<div class="thumbnail my-20"><?php the_post_thumbnail('large') ?></div>
				<div class="row-divide">
				  <div class="new__content text--justify col-divide-8 col-divide-md-12">
				  <?php the_content() ?>
				 </div>
				 <div  class="single__sidebar col-divide-4 col-divide-md-12">
				    <?php
                        if (is_active_sidebar('single_sidebar')) {
                            dynamic_sidebar('single_sidebar');
                        }
                    ?>
				 </div>
				</div>
				
			</div>
		<?php }	}	?>

    </div>
    <?php      
     get_template_part('sections/new-popular');
    ?>
 </section>
<?php
 get_footer();
?>
 