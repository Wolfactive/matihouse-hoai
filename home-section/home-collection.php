<section class="collection">
	<div class="container">
		<div class="collection__sub-menu-mobile">
 			<?php wp_nav_menu(array( 'theme_location' => 'subMenu' )) ?>
		</div>
		
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
									<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail(get_the_ID());?></a>	
								</div>
								<div class="collection__grid__item-1__grid__item__tag-color">
									<div class="collection__grid__item-1__grid__item__tag-color__tag-name">
										<?php the_tags( ' ', ', ', '<br />' ); ?>
									</div>
									<div class="collection__grid__item-1__grid__item__tag-color__color">
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
							</div>
							<div class="collection__grid__item-1__grid__price">
								<span><?php the_field('price'); ?>$ </span>
								<a href=""><i class="fas fa-heart"></i></a>
							</div>
							<div class="collection__grid__item-1__grid__spring">
								<a href="<?php
									$name = get_field('home_page_collection_title','option');
								 	echo site_url('/category/'.$name); 
								?>"><h3><?php the_field('home_page_collection_title','option') ?></h3></a>
							</div>
							<div class="collection__grid__item-1__grid__collection">
								<a href="<?php
									$name = get_field('home_page_collection_sub_title','option');
								 	echo site_url('/category/'.$name); 
								?>"><h3><?php the_field('home_page_collection_sub_title','option') ?></h3></a>
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
						<a href="<?php echo site_url( '/category/spring-collection' ); ?>">spring collection</a>
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
							<div>							
								<div class="collection__grid__item-2__grid__item__img">
									<a href="<?php echo the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID());?></a>
								</div>
								<div class="collection__grid__item-2__grid__item__tag-color">
									<div class="collection__grid__item-2__grid__item__tag-color__tag-name">
										<?php the_tags( ' ', ', ', '<br />' ); ?>
									</div>
									<div class="collection__grid__item-2__grid__item__tag-color__color">
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
								<div class="collection__grid__item-2__grid__item__price">
									<span><?php the_field('price'); ?>$ </span>
									<a href=""><i class="fas fa-heart"></i></a>
								</div>	
							</div>			
						</div>		
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
</section>