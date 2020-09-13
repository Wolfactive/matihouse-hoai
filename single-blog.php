<?php 
 get_header();
?>
<style>
    .site-header{
        display:none;
    }
</style>
<section class="details-post-type">		
	<div class="container">
		<div class="details-post-type__menu-bar">
			<div class="details-post-type__menu-bar__icon">
				<img src="<?php the_field('memu_black','option') ?>" alt="">
			</div>
			<div class="details-post-type__menu-bar__logo">
				<img src="<?php the_field('logo_black','option') ?>" alt="">
			</div>
			<div class="details-post-type__menu-bar__group-icon">
				<div class="details-post-type__menu-bar__group-icon__cart">
					<img src="<?php the_field('cart_black','option') ?>" alt="">
				</div>
				<div class="details-post-type__menu-bar__group-icon__user">
					<img src="<?php the_field('user_black','option') ?>" alt="">
				</div>
				<div class="details-post-type__menu-bar__group-icon__heart-o">
					<img src="<?php the_field('heart-o_black','option') ?>" alt="">
				</div>
				<div class="details-post-type__menu-bar__group-icon__search">
					<img src="<?php the_field('search_black','option') ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sub-menu-view">
  <div class="container">
    <div class="sub-menu-cat">
      <div class="sub-menu-cat__contain">
        <ul>
          <li>
            <div class="sub-menu-cat__contain__item">
              <a href="<?php echo site_url( '/home-page/' ); ?>">Main page</a>
            </div>
          </li>
          <li>
            <div class="sub-menu-cat__contain__item">
              <a href="<?php echo site_url( '/category/catalog/' ); ?>">Catalog</a>
            </div>
          </li>
          <li>
            <div class="sub-menu-cat__contain__item">
              <a href="<?php echo site_url( '/category/clothing/' ); ?>">Clothing</a>
            </div>
          </li>
          <li>
            <div class="sub-menu-cat__contain__item">
              <a class="active" href="<?php echo site_url( '/category/dresses/' ); ?>">Dresses</a>
            </div>
          </li>
        </ul>
      </div>
      
    </div>
  </div>
</section>
<section class="details-body">
    <div class="container-fuild">
        <div class="details-body__grid">
            <div class="details-body__grid__left">
            <img src="<?php the_field('view_full'); ?>" alt="">
            </div>
            <div class="details-body__grid__right">
                <div class="details-body__grid__right__item-1">
                    <div class="details-body__grid__right__item-1__grid">
                        <div class="details-body__grid__right__item-1__grid__img">
                            <img src="<?php the_field('view_size'); ?>" alt="">
                        </div>
                        <div class="details-body__grid__right__item-1__grid__content">
                            <div class="details-body__grid__right__item-1__grid__content__title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__group-color">
                                <div class="details-body__grid__right__item-1__grid__content__group-color__title">
                                    <span>Select color: </span>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__group-color__color">
                                    <div style="background-color:<?php the_field('color_1');?>;"></div>
                                    <div style="background-color:<?php the_field('color_2');?>;"></div>	
                                    <div style="background-color:<?php the_field('color_3');?>;"></div>
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__size">
                                <div class="details-body__grid__right__item-1__grid__content__size__title">
                                    <span>Size:</span>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__size__dropdown">
                                    S <a href=""> <i class="fas fa-caret-down"></i></a> 
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__quantity">
                                <div class="details-body__grid__right__item-1__grid__content__quantity__title">
                                    <span>Quantity</span>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__quantity__plus">
                                    <span>- 1 +</span>
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__price">
                                <span><?php the_field('price'); ?>$ </span>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <div class="details-body__grid__right__item-1__grid__content__price__line">
                                    <span></span>
                                </div>
                                <a href="">Add to bag</a>			
                            </div>	
                            <div class="details-body__grid__right__item-1__grid__content__select">
                                <div class="details-body__grid__right__item-1__grid__content__select__details">
                                    <span>Details </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__select__size">
                                    <span>Sizings </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__select__ship">
                                    <span>Shipping </span><i class="fas fa-caret-down"></i>
                                </div>
                            </div>	
                            <div class="details-body__grid__right__item-1__grid__content__descript">
                                <div class="details-body__grid__right__item-1__grid__content__descript__title">
                                    <h3>descript</h3>
                                </div>
                                <p>Design blouse made of jersey with sequins</p>  
                                <ul>
                                    <li>high front neck</li>
                                    <li>deep V back neck</li>
                                    <li>long sleeves</li>
                                    <li>it creates a set with skirt in the same colour</li>
                                </ul>
                            </div>
                        </div>
                        <div class="details-body__grid__right__item-1__grid__content-ipad">
                            <div class="details-body__grid__right__item-1__grid__content-ipad__title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details-body__grid__right__item-3">
                    <div class="details-body__grid__right__item-3__size">
                                <div class="details-body__grid__right__item-3__size__title">
                                    <span>Size:</span>
                                </div>
                                <div class="details-body__grid__right__item-3__size__dropdown">
                                    S <a href=""> <i class="fas fa-caret-down"></i></a> 
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-3__quantity">
                                <div class="details-body__grid__right__item-3__quantity__title">
                                    <span>Quantity</span>
                                </div>
                                <div class="details-body__grid__right__item-3__quantity__plus">
                                    <span>- 1 +</span>
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-3__price">
                                <span><?php the_field('price'); ?>$ </span>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <div class="details-body__grid__right__item-3__price__line">
                                    <span></span>
                                </div>
                                <a href="">Add to bag</a>			
                            </div>	
                            <div class="details-body__grid__right__item-3__select">
                                <div class="details-body__grid__right__item-3__select__details">
                                    <span>Details </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-3__select__size">
                                    <span>Sizings </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-3__select__ship">
                                    <span>Shipping </span><i class="fas fa-caret-down"></i>
                                </div>
                            </div>	
                            <div class="details-body__grid__right__item-3__content__descript">
                                <div class="details-body__grid__right__item-3__descript__title">
                                    <h3>descript</h3>
                                </div>
                                <p>Design blouse made of jersey with sequins</p>  
                                <ul>
                                    <li>high front neck</li>
                                    <li>deep V back neck</li>
                                    <li>long sleeves</li>
                                    <li>it creates a set with skirt in the same colour</li>
                                </ul>
                            </div>
                </div>
                <div class="details-body__grid__right__item-2">
                    <div class="details-body__grid__right__item-2__img">
                        <img src="<?php the_field('view_style_1') ?>" alt="">
                    </div>
                    <div class="details-body__grid__right__item-2__img">
                        <img src="<?php the_field('view_style_2') ?>" alt="">
                    </div>
                    <div class="details-body__grid__right__item-2__img">
                        <img src="<?php the_field('view_style_3') ?>" alt="">
                    </div>
                </div>
                
            </div>
            <div class="details-body__grid__bottom">
                <div class="details-body__grid__bottom__item-3">
                    <div class="details-body__grid__bottom__item-3__size">
                                <div class="details-body__grid__bottom__item-3__size__title">
                                    <span>Size:</span>
                                </div>
                                <div class="details-body__grid__bottom__item-3__size__dropdown">
                                    S <a href=""> <i class="fas fa-caret-down"></i></a> 
                                </div>
                            </div>
                            <div class="ddetails-body__grid__bottom__item-3__quantity">
                                <div class="details-body__grid__bottom__item-3__quantity__title">
                                    <span>Quantity</span>
                                </div>
                                <div class="details-body__grid__bottom__item-3__quantity__plus">
                                    <span>- 1 +</span>
                                </div>
                            </div>
                            <div class="details-body__grid__bottom__item-3__price">
                                <span><?php the_field('price'); ?>$ </span>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <div class="details-body__grid__bottom__item-3__price__line">
                                    <span></span>
                                </div>
                                <a href="">Add to bag</a>			
                            </div>	
                            <div class="details-body__grid__bottom__item-3__select">
                                <div class="details-body__grid__bottom__item-3__select__details">
                                    <span>Details </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__bottom__item-3__select__size">
                                    <span>Sizings </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__bottom__item-3__select__ship">
                                    <span>Shipping </span><i class="fas fa-caret-down"></i>
                                </div>
                            </div>	
                            <div class="details-body__grid__bottom__item-3__content__descript">
                                <div class="details-body__grid__bottom__item-3__descript__title">
                                    <h3>descript</h3>
                                </div>
                                <p>Design blouse made of jersey with sequins</p>  
                                <ul>
                                    <li>high front neck</li>
                                    <li>deep V back neck</li>
                                    <li>long sleeves</li>
                                    <li>it creates a set with skirt in the same colour</li>
                                </ul>
                            </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<section class="recently-view">
 	<div class="container">
		 <div class="recently-view__title">
 			<h3>
				 recently view
			 </h3>
		 </div>
 		<div class="recently-view__grid">
			<?php
				$args = array(
					'post_type' => 'Blog',
					'posts_per_page' => 4,
					'category_name' => 'Dresses',
                    'category__not_in' => array(34),
				);
				$the_query = new WP_Query($args);
			?>
			<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="recently-view__grid__item">
					<div class="recently-view__grid__item__img">
						<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID());?></a>		
					</div>
					<div class="recently-view__grid__item__tag-color">
						<div class="recently-view__grid__item__tag-color__tag-name">
							<?php the_tags( ' ', ', ', '<br />' ); ?>
						</div>
						<div class="recently-view__grid__item__tag-color__color">
							<div style="background-color:<?php the_field('color_1');?>;"></div>
							<div style="background-color:<?php the_field('color_2');?>;"></div>	
							<div style="background-color:<?php the_field('color_3');?>;"></div>
						</div>
					</div>	
					<div class="recently-view__grid__item__price">
						<span><?php the_field('price'); ?>$ </span>
                        <a href=""><i class="fas fa-heart"></i></a>
                        <div class="recently-view__grid__item__price__line">
                            <span></span>
                        </div>
					</div>				
				</div>		
			<?php endwhile;?>
		</div>
	</div>
</section>
<?php
 get_footer();
?>