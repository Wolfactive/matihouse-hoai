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
				 
				</div>
				
			</div>
		<?php }	}	?>

    </div>
    <div style="background-color:<?php the_field('color_1');?>; height:80px; width:80px">
	<div style="background-color:<?php the_field('color_2');?>; height:80px; width:80px">	
	</div>
 </section>
<?php
 get_footer();
?>
 