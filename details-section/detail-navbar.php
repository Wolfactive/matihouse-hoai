<section class="details-post-type">		
	<div class="container">
		<div class="details-post-type__menu-bar">
			<div class="details-post-type__menu-bar__icon">
                <span onclick="openNav_detail()"><img src="<?php the_field('memu_black','option') ?>" alt=""></span>
                <div id="Sidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav_detail()"><i class="fas fa-times"></i></a>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'headerMenuLocation',
                            'container_class' => 'my_main_menu_class')); 
                    ?>
                </div>
			</div>
			<div class="details-post-type__menu-bar__logo">
                <a href="<?php echo site_url( '/home/' ); ?>">
					<img src="<?php the_field('logo_black','option') ?>" alt="">
				</a>
            </div>
			<div class="details-post-type__menu-bar__group-icon">
				<div class="details-post-type__menu-bar__group-icon__cart">
					<a href="#"><img src="<?php the_field('cart_black','option') ?>" alt=""></a>
				</div>
				<div class="details-post-type__menu-bar__group-icon__user">
					<a href="#"><img src="<?php the_field('user_black','option') ?>" alt=""></a>
				</div>
				<div class="details-post-type__menu-bar__group-icon__heart-o">
					<a href="#"><img src="<?php the_field('heart-o_black','option') ?>" alt=""></a>
				</div>
				<div class="details-post-type__menu-bar__group-icon__search">
					<a href="#"><img src="<?php the_field('search_black','option') ?>" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>