<div class="carousel">
	<div class="my-carousel text-focus-in">
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
							<div  class="container-img__aturmn__item__hot-dress">
								<h3>Hot black dresh</h3>
								<span>125$ <img src="<?php the_field('heart','option'); ?>" alt=""></span>
							</div>
						</div>
					</div>		
				</div>
				<div  class="container-img__view-all">
					<h3><a href="<?php echo site_url( '/category/collection/' ); ?>">View all collection</a></h3>
					<span></span>
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
								<span></span>
							</div>
							<div class="container-img__dot__group__item">
								<span></span>
							</div>
							<div class="container-img__dot__group__item">
								<span></span>
							</div>
						
						</div>
						
					</div>	
				</div>
				<div class="container-img__icon">
					<div class="container">
						<div class="container-img__icon__item">
							<div class="container-img__icon__item__facebook">
								<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
							</div>
							<div class="container-img__icon__item__instagram">
								<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						
					</div>	
				</div>
			</div>
		</section>
	</div>	
	<div class="my-carousel text-focus-in">
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
					<div class="container">
						<p>glamorous</p>
					</div>
				</div>
				<div class="container-img__collection">
					<div class="container">
					<span>collection</span>
					</div>
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
	</div>
</div>