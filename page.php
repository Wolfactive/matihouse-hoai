<?php
 /**
 * template name: Introduce
 */
 get_header();
?>
 <section class="wrapper" id="HomePage">   
     <div class="carousel">
     <?php echo do_shortcode('[rev_slider alias="home-slider"]'); ?>
    </div>
    <?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();?>
			 <div class="container">
				<h3 class="title--section text--center text--upcase my-20"><?php the_title(); ?></h3>
				<div class="text--center title--underline"></div>
				<div class="page__Content my-20">				
				   <?php the_content(); ?>
				</div>
			</div>
				</div>
			</div>
			<?php }		

		}?>
    
 </section>
<?php
 get_footer();
?>
 