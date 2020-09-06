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
						<h3>Hot black dresh</h3>
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
	<div class="container">
		<div class="collection__grid">
			<div class="collection__grid__item-1">
				<div class="collection__grid__item-1__grid">
						<?php
							$args = array(
								'post_type' => 'Blog',
								'posts_per_page' => 1,
								'category_name' => 'New collection',
							);
							$the_query = new WP_Query($args);
						?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="collection__grid__item-1__grid__item">
								<div class="collection__grid__item-1__grid__item__img">
									<?php echo get_the_post_thumbnail(get_the_ID());?>
								</div>
								<div class="collection__grid__item-1__grid__item__tag-color">
									<div class="collection__grid__item-1__grid__item__tag-color__tag-name">
										<?php the_tags( ' ', ', ', '<br />' ); ?>
									</div>
									<div class="collection__grid__item-1__grid__item__tag-color__color">
										<div style="background-color:<?php the_field('color_1');?>;"></div>
										<div class="collection__grid__item-1__grid__item__tag-color__color__border" style="background-color:<?php the_field('color_2');?>;"></div>	
										<div style="background-color:<?php the_field('color_3');?>;"></div>
									</div>
								</div>					
							</div>
							<div class="collection__grid__item-1__grid__price">
								<span><?php the_field('price'); ?>$ </span>
								<a href=""><i class="fas fa-heart"></i></a>
							</div>
							<div class="collection__grid__item-1__grid__spring">
								<h3>spring</h3>
							</div>
							<div class="collection__grid__item-1__grid__collection">
								<h3>collection</h3>
							</div>		
						<?php endwhile;?>
					</div>
			</div>
			<div class="collection__grid__item-2">
 				<div class="collection__grid__item-2__sub-menu">
 					<?php wp_nav_menu(array( 
            		'theme_location' => 'subMenu' )) ?>
				</div>
				<div class="collection__grid__item-2__line"></div>
				<div class="collection__grid__item-2__title">
					
					<h3>
						spring collection
					</h3>
				</div>
				<div class="collection__grid__item-2__grid">
					<?php
						$args = array(
							'post_type' => 'Blog',
							'posts_per_page' => 2,
							'category_name' => 'New',
							'orderby'   => 'meta_value',
        					'order' => 'ASC',
						);
						$the_query = new WP_Query($args);
					?>
					
					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="collection__grid__item-2__grid__item">
						
							<div class="collection__grid__item-2__grid__item__content">
								<?php the_content(); ?>
							</div>
							<div class="collection__grid__item-2__grid__item__button">
								<a href="<?php the_field('button'); ?>"><?php the_field('button_text'); ?></a>
							</div>
							<div class="collection__grid__item-2__grid__item__img">
								<?php echo get_the_post_thumbnail(get_the_ID());?>
							</div>
							<div class="collection__grid__item-2__grid__item__tag-color">
								<div class="collection__grid__item-2__grid__item__tag-color__tag-name">
									<?php the_tags( ' ', ', ', '<br />' ); ?>
								</div>
								<div class="collection__grid__item-2__grid__item__tag-color__color">
									<div style="background-color:<?php the_field('color_1');?>;"></div>
									<div style="background-color:<?php the_field('color_2');?>;"></div>	
									<div style="background-color:<?php the_field('color_3');?>;"></div>
								</div>
							</div>	
							<div class="collection__grid__item-2__grid__item__price">
								<span><?php the_field('price'); ?>$ </span>
								<a href=""><i class="fas fa-heart"></i></a>
							</div>				
						</div>		
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sub-collection">
	<div class="container-fuild">
		<div class="sub-collection__contain">
			<div class="col-divide-7">
					<?php
						$args = array(
							'post_type' => 'Blog',
							'p' => 116,
							
						);
						$the_query = new WP_Query($args);
					?>
					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="sub-collection__contain__item">
							<div class="sub-collection__contain__item__img">
								<?php echo get_the_post_thumbnail(get_the_ID());?>
							</div>
							<div class="sub-collection__contain__item__tag-color">
								<div class="sub-collection__contain__item__tag-color__tag-name">
									<?php the_tags( ' ', ', ', '<br />' ); ?>
								</div>
								<div class="sub-collection__contain__item__tag-color__color">
									<div style="background-color:<?php the_field('color_1');?>;"></div>
									<div style="background-color:<?php the_field('color_2');?>;"></div>	
									<div style="background-color:<?php the_field('color_3');?>;"></div>
								</div>
							</div>	
							<div class="sub-collection__contain__item__price">
								<span><?php the_field('price'); ?>$ </span>
								<a href=""><i class="fas fa-heart"></i></a>
							</div>				
						</div>		
					<?php endwhile;?>
				
			</div>
			<div class="col-divide-5 sub-collection__contain-abs">
				<?php
						$args = array(
							'post_type' => 'Blog',
							'p' => 118,
							
						);
						$the_query = new WP_Query($args);
					?>
					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="sub-collection__contain-abs__item">
							<div class="sub-collection__contain-abs__item__img">
								<?php echo get_the_post_thumbnail(get_the_ID());?>
							</div>
							<div class="sub-collection__contain-abs__item__tag-color">
								<div class="sub-collection__contain-abs__item__tag-color__tag-name">
									<?php the_tags( ' ', ', ', '<br />' ); ?>
								</div>
								<div class="sub-collection__contain-abs__item__tag-color__color">
									<div style="background-color:<?php the_field('color_1');?>;"></div>
									<div style="background-color:<?php the_field('color_2');?>;"></div>	
									<div style="background-color:<?php the_field('color_3');?>;"></div>
								</div>
							</div>	
							<div class="sub-collection__contain-abs__item__price">
								<span><?php the_field('price'); ?>$ </span>
								<a href=""><i class="fas fa-heart"></i></a>
							</div>				
						</div>		
					<?php endwhile;?>
			</div>
		</div>
		<div class="sub-collection__view">
			<h3><a href="">View all collection</a></h3>
		</div>
	</div>
</section>
<section class="sub-banner">
	<div class="sub-banner__item">
		<div class="sub-banner__item__img col-divide-4">
 			<img src="<?php the_field('sub_banner_1','option') ?>" alt="">
		</div>
		<div class="sub-banner__item__img-2 col-divide-3">
 			<img src="<?php the_field('sub_banner_2','option') ?>" alt="">
		</div>
		<div class="sub-banner__item__bg">
		</div>
		<div class="sub-banner__item__title">
			<h3>summer sale</h3>	
		</div>	
	
		<div class="sub-banner__item__img-3 ">
			<div class="col-divide-8">
				<img src="<?php the_field('five','option') ?>" alt="">
			</div>
 			
		</div>
		<div class="sub-banner__item__img-4">
			<div class="col-divide-8">
				<img src="<?php the_field('zero','option') ?>" alt="">
			</div>
 			
		</div>
		<div class="sub-banner__item__img-5">
			<div class="col-divide-8">
				<img src="<?php the_field('percent','option') ?>" alt="">
			</div>
		</div>
		<div class="sub-banner__item__des ">
			<div class="sub-banner__item__des__contain">
			<p>It’s that time of the year! Enjoy our online Sales before they finish. 
				 Find the best discounts in your favorite looks.</p>
			</div>
 			
		</div>
		<div class="sub-banner__item__shop-now ">
			<div class="sub-banner__item__shop-now__contain">
				<a href="">Shop now</a>
			</div>
		</div>
	</div>
	<!-- <div class="ab-bg">

	</div> -->
</section>
<section class="best-seller">
 	<div class="container-fuild">
		 <div class="best-seller__title">
 			<h3>
				 best seller
			 </h3>
		 </div>
 		<div class="best-seller__grid">
			<?php
				$args = array(
					'post_type' => 'Blog',
					'posts_per_page' => 4,
					'category_name' => 'Sale',
				);
				$the_query = new WP_Query($args);
			?>
			<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="best-seller__grid__item">
					<div class="best-seller__grid__item__img">
						<?php echo get_the_post_thumbnail(get_the_ID());?>
					</div>
					<div class="best-seller__grid__item__tag-color">
						<div class="best-seller__grid__item__tag-color__tag-name">
							<?php the_tags( ' ', ', ', '<br />' ); ?>
						</div>
						<div class="best-seller__grid__item__tag-color__color">
							<div style="background-color:<?php the_field('color_1');?>;"></div>
							<div style="background-color:<?php the_field('color_2');?>;"></div>	
							<div style="background-color:<?php the_field('color_2');?>;"></div>
						</div>
					</div>	
					<div class="best-seller__grid__item__price">
						<span><?php the_field('price'); ?>$ </span>
						<a href=""><i class="fas fa-heart"></i></a>
					</div>				
				</div>		
			<?php endwhile;?>
		</div>
	</div>
</section>

<?php
 get_footer();
?>
 