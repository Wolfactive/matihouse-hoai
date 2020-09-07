 <?php 
 get_header();
?>
<section class="site-header-category">
 	<div class="container-img position--relative">
		<div class="container-img__behind">
			<img src="<?php the_field('img_head','option'); ?>" alt="">
		</div>
		<div class="container-img__front">
      <div class="container">
        <img src="<?php the_field('img_head_2','option'); ?>" alt="">
      </div>	
    </div>
    <div class="container-img__glamorous">
      
        <p>glamorous</p>
     
    </div>
    <div class="container-img__collection">
      
        <span>collection</span>
      
    </div>
    <div class="container-img__title">
        <span><?php 
            single_cat_title();
  
          ?></span>
    </div>
    <div  class="container-img__hot-dress">
				<h3>Hot black dresh</h3>
				<span>325$ <img src="<?php the_field('heart','option'); ?>" alt=""></span>
		</div>
  </div>
</section>
<section>
  <div class="container">
    <div class="sub-menu-cat">
<?php

?>
    </div>
  </div>
  
</section>
<section>
  <div class="container">

  </div>
</section>
<?php
 get_footer();
?>
 