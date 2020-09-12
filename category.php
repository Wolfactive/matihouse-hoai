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
<section>
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
<section>
  <div class="container">
    <div class="sidebar-category">
      <div class="sidebar-category__item">
        <div class="sidebar-category__item__title">
          <h3><?php single_cat_title(); ?></h3>
        </div>
        <div class="sidebar-category__item__menu">
          <?php wp_nav_menu( array('theme_location'=>'sideBarMenu')); ?>
          <a class="sidebar-category__item__menu__arrow-down" id="sidebar-category__item__menu__arrow-down"
          onclick="click_down();">
            <i class="fas fa-caret-down"></i>
          </a>
          <div class="sidebar-category__item__menu__arrow-up" id="sidebar-category__item__menu__arrow-up"
          onclick="click_up();">
            <i class="fas fa-caret-up"></i>
          </div>
        </div>
        <div class="sidebar-category__item__color">
          <div class="sidebar-category__item__color__title">
            <p>colors</p>
          </div>

            
            <div class="sidebar-category__item__color__grid">
              <?php 
                for($i =1; $i <= 10; $i++)
                {
                  
              ?>
                <div class="sidebar-category__item__color__grid__item" style="background:
                    <?php echo the_field('color_category_'.$i,'option'); ?>">
                </div>
              <?php     
                }
              ?>  
            </div>

            <div class="sidebar-category__item__color__arrow-up" id="sidebar-category__item__color__arrow-up"
          onclick="click_up_color();">
            <i class="fas fa-caret-up"></i>
            </div>
            <div class="sidebar-category__item__color__arrow-down" id="sidebar-category__item__color__arrow-down"
          onclick="click_down_color();">
            <i class="fas fa-caret-down"></i>
            </div>
        </div>
        <div class="sidebar-category__item__size">
          <div class="sidebar-category__item__size__title">
            <p>size</p>
          </div>
          <div class="sidebar-category__item__size__items">
            <label class="sidebar-category__item__size__items__check">One size
              <input type="checkbox" checked="checked">
              <span class="sidebar-category__item__size__items__check__img"></span>
            </label>
            <label class="sidebar-category__item__size__items__check">XS
              <input type="checkbox">
              <span class="sidebar-category__item__size__items__check__img"></span>
            </label>
            <label class="sidebar-category__item__size__items__check">S
              <input type="checkbox">
              <span class="sidebar-category__item__size__items__check__img"></span>
            </label>
            <label class="sidebar-category__item__size__items__check">M
              <input type="checkbox">
              <span class="sidebar-category__item__size__items__check__img"></span>
            </label>
            <label class="sidebar-category__item__size__items__check">L
              <input type="checkbox">
              <span class="sidebar-category__item__size__items__check__img"></span>
            </label>
            <label class="sidebar-category__item__size__items__check">XL
              <input type="checkbox">
              <span class="sidebar-category__item__size__items__check__img"></span>
            </label>
          </div>
          

          <div class="sidebar-category__item__size__arrow-up" id="sidebar-category__item__size__arrow-up"
          onclick="click_up_size();">
            <i class="fas fa-caret-up"></i>
            </div>
            <div class="sidebar-category__item__size__arrow-down" id="sidebar-category__item__size__arrow-down"
          onclick="click_down_size();">
            <i class="fas fa-caret-down"></i>
            </div>
        </div>

        <div class="sidebar-category__item__material">
          <div class="sidebar-category__item__material__title">
            <p>material</p>
          </div>
          <div class="sidebar-category__item__material__arrow-up" onclick="click_up_material()" id="sidebar-category__item__material__arrow-up">
            <i class="fas fa-caret-up"></i>
          </div>
          <div class="sidebar-category__item__material__arrow-down" onclick="click_down_material()" id="sidebar-category__item__material__arrow-down">
            <i class="fas fa-caret-down"></i>
          </div>
        </div>
        <div class="sidebar-category__item__season">
          <div class="sidebar-category__item__season__title">
            <p>season</p>
          </div>
          <div class="sidebar-category__item__season__arrow-up" onclick="click_up_season()" id="sidebar-category__item__season__arrow-up">
            <i class="fas fa-caret-up"></i>
          </div>
          <div class="sidebar-category__item__season__arrow-down" onclick="click_down_season()" id="sidebar-category__item__season__arrow-down">
            <i class="fas fa-caret-down"></i>
          </div>
        </div>
      </div>
      <div class="sidebar-category__item-content">
        <div class="sidebar-category__item-content__head">
          <div class="sidebar-category__item-content__head__products">
            <span>100 products</span>
            <p>new item</p>
          </div>
          <div class="sidebar-category__item-content__head__sort-by">
              <div class="sidebar-category__itemv__head__sort-by__recommed">Sort by Recommend <i class="fas fa-angle-down"></i></div>
              <ul class="sidebar-category__item-content__head__sort-by__dot">
                <li class="dot-active"><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
              </ul>
          </div>
        </div>
        
        <div class="sidebar-category__item-content__grid-head">
        <?php
            $args = array(
              'post_type' => 'Blog',
              'posts_per_page' => 2,
              'category__and' => array( 34 , 22 ),

            );
            $the_query = new WP_Query($args);
          ?>
          <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="sidebar-category__item-content__grid-head__item">
              <div class="sidebar-category__item-content__grid-head__item__img">
                <?php echo get_the_post_thumbnail(get_the_ID());?>
                <div class="sidebar-category__item-content__grid-head__item__img__add">
                  <a href="">+ Add to bag</a>
                </div>
              </div>
              <div class="sidebar-category__item-content__grid-head__item__tag-color">
                <div class="sidebar-category__item-content__grid-head__item__tag-color__tag-name">
                  <?php the_tags( ' ', ', ', '<br />' ); ?>
                </div>
                <div class="sidebar-category__item-content__grid-head__item__tag-color__price">
                  <span><?php the_field('price'); ?>$ </span>
                  <a href=""><i class="fas fa-heart"></i></a>
                  			
                </div>	
                <div class="sidebar-category__item-content__grid-head__item__tag-color__line">
                    <span></span>
                </div>
                <div class="sidebar-category__item-content__grid-head__item__tag-color__color">
                  <div style="background-color:<?php the_field('color_1');?>;"></div>
                  <div style="background-color:<?php the_field('color_2');?>;"></div>	
                  <div style="background-color:<?php the_field('color_3');?>;"></div>
                </div>
              </div>	
             
              
            </div>		
          <?php endwhile;?>
        </div>

        <div class="sidebar-category__item-content__grid-body">
          <?php
            $args = array(
              'post_type' => 'Blog',
              'posts_per_page' => 9,
              'category_name' => 'Dresses',
              'category__not_in' => array(34),
            );
            $the_query = new WP_Query($args);
          ?>
          <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="sidebar-category__item-content__grid-body__item">
              <div class="sidebar-category__item-content__grid-body__item__img">
               <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID());?></a> 
                <div class="sidebar-category__item-content__grid-body__item__img__add">
                  <a href="">+ Add to bag</a>
                </div>
              </div>
              <div class="sidebar-category__item-content__grid-body__item__tag-color">
                <div class="sidebar-category__item-content__grid-body__item__tag-color__tag-name">
                  <?php the_tags( ' ', ', ', '<br />' ); ?>
                </div>
                <div class="sidebar-category__item-content__grid-body__item__tag-color__color">
                  <div style="background-color:<?php the_field('color_1');?>;"></div>
                  <div style="background-color:<?php the_field('color_2');?>;"></div>	
                  <div style="background-color:<?php the_field('color_3');?>;"></div>
                </div>
              </div>	
              <div class="sidebar-category__item-content__grid-body__item__price">
                <span><?php the_field('price'); ?>$ </span>
                <a href=""><i class="fas fa-heart"></i></a>
                <div class="sidebar-category__item-content__grid-body__item__price__line">
                  <span></span>
                </div>			
              </div>	
              
            </div>		
          <?php endwhile;?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
 get_footer();
?>
 