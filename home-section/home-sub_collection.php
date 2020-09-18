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
								<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail(get_the_ID());?></a>
							</div>
							<div class="sub-collection__contain-abs__item__tag-color">
								<div class="sub-collection__contain-abs__item__tag-color__tag-name">
									<?php the_tags( ' ', ', ', '<br />' ); ?>
								</div>
								<div class="sub-collection__contain-abs__item__tag-color__color">
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
							<div class="sub-collection__contain-abs__item__price">
								<span><?php the_field('price'); ?>$ </span>
								<a href=""><i class="fas fa-heart"></i></a>
							</div>				
						</div>		
					<?php endwhile;?>
			</div>
		</div>
		<div class="sub-collection__view">
			<h3><a href="<?php echo site_url( '/category/collection/' ); ?>">View all collection</a></h3>
		</div>
	</div>
</section>