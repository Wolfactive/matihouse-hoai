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
						<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID());?></a>		
					</div>
					<div class="best-seller__grid__item__tag-color">
						<div class="best-seller__grid__item__tag-color__tag-name">
							<?php the_tags( ' ', ', ', '<br />' ); ?>
						</div>
						<div class="best-seller__grid__item__tag-color__color">
							<div class="color-item" style="background-color:<?php the_field('color_1');?>;
											<?php if(get_field('color_1')=="#ffffff"){echo 'border:1px solid #000;';}?>">
											<a href=""> </a>
							</div>
							<div class="color-item" style="background-color:<?php the_field('color_2');?>;
											<?php if(get_field('color_2')=="#ffffff"){echo 'border:1px solid #000;';}?>">
											<a href=""> </a>
							</div>	
							<div class="color-item" style="background-color:<?php the_field('color_3');?>;
											<?php if(get_field('color_3')=="#ffffff"){echo 'border:1px solid #000;';}?>">
											<a href=""> </a>
							</div>
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