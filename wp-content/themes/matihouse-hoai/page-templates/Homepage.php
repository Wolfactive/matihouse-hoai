 <?php
 /**
 * template name: Home Page
 */
 get_header();
?>
<section class="site-header-home-page">
 	<div class="container-img position--relative">
		<div class="container-img__behind">
			<img src="<?php the_field('header_img','option'); ?>" alt="">
		</div>
		<div class="container-img__front">
			<div class="container">
				<div class="container-img__front__item">
					<img src="<?php the_field('front_image','option'); ?>" alt="">
				</div>
			</div>		
		</div>
		<div class="container-img__aturmn">
			<div class="container">
				<div class="container-img__aturmn__item">
					<h1>AUTURMN</h1>
					<h2>COLLECTION 2020</h2>
					<div  class="container-img__aturmn__item__text">
						<h3>View all collection</h3>
						<span></span>
					</div>
					<div  class="container-img__aturmn__item__hot-dress">
						<h3>Hot black dresses <i class="fas fa-home"></i></h3>
						<span>125$ <img src="<?php the_field('heart','option'); ?>" alt=""></span>
					</div>
				</div>
			</div>		
		</div>
		<div class="container-img__fashion">
			<div class="container">
				<div class="container-img__fashion__item">
					<h2>fashion</h2>
				</div>
			</div>		
		</div>
		<div class="container-img__dot">
			<div class="container abs--dot">
				<div class="container-img__dot__group">
					<div class="container-img__dot__group__item-circle">
						<img src="<?php the_field('dot_circle','option'); ?>" alt="">
					</div>
					<div class="container-img__dot__group__item">
						<img src="<?php the_field('dot','option'); ?>" alt="">
					</div>
					<div class="container-img__dot__group__item">
						<img src="<?php the_field('dot','option'); ?>" alt="">
					</div>
					<div class="container-img__dot__group__item">
						<img src="<?php the_field('dot','option'); ?>" alt="">
					</div>
				
				</div>
				
			</div>	
		</div>
		<div class="container-img__icon">
			<div class="container">
				<div class="container-img__icon__item">
					<div class="container-img__icon__item__facebook">
						<a href=""><i class="fab fa-facebook-f"></i></a>
					</div>
					<div class="container-img__icon__item__instagram">
						<a href=""><i class="fab fa-instagram"></i></a>
					</div>
				</div>
				
			</div>	
		</div>
    </div>
</section>
<section class="collection">

</section>
<?php
 get_footer();
?>
 