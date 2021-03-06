
<footer>

<div class="container">
  <div class="footer">
    <div class="footer__grid">
      <div class="footer__grid__item-1">
        <a href="<?php echo site_url('/home/'); ?>"><img src="<?php the_field('logo','option') ?>" alt=""></a>
      </div>
      <div class="footer__grid__item-2">
          <div class="footer__grid__item-2__title">
              <a href="<?php echo site_url('/category/catalog'); ?>"><h3>catalogue</h3></a>
            </div>
          <?php
            wp_nav_menu( array( 
                'theme_location' => 'catalogueFooter' ) ); 
          ?>
      </div>
        <div class="footer__grid__item-3">
          <div class="footer__grid__item-3__title">
          <a href="<?php echo site_url('/shop/'); ?>"><h3>shop</h3></a>
          </div>
        <?php
          wp_nav_menu( array( 
              'theme_location' => 'aboutFooter', 
              'container_class' => 'custom-menu-class' ) ); 
        ?>
        </div>
        <div class="footer__grid__item-4">
          <div class="footer__grid__item-4__title">
          <a href="<?php echo site_url('/contact/'); ?>"><h3>contacts</h3></a>
          </div>
          <div class="footer__grid__item-4__phone">
            <a href="">0911 955 500</a>
          </div>
          <div class="footer__grid__item-4__web">
            <a href="">matihouse.com</a>
          </div>
          <div class="footer__grid__item-4__icon">
            <div class="footer__grid__item-4__icon__item">
              <div class="footer__grid__item-4__icon__item__instagram">
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              </div>
              <div class="footer__grid__item-4__icon__item__facebook">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              </div>
            </div>
            
            
          </div>
        </div>
      
      <div class="footer__grid__grid-mobile">
        <div class="footer__grid__grid-mobile__item-2">
          <div class="footer__grid__grid-mobile__item-2__title">
              <h3>catalogue</h3>
            </div>
          <?php
            wp_nav_menu( array( 
                'theme_location' => 'catalogueFooter' ) ); 
          ?>
        </div>
        <div class="footer__grid__grid-mobile__item-3">
          <div class="footer__grid__grid-mobile__item-3__title">
            <h3>shop</h3>
          </div>
        <?php
          wp_nav_menu( array( 
              'theme_location' => 'aboutFooter', 
              'container_class' => 'custom-menu-class' ) ); 
        ?>
        </div>
        <div class="footer__grid__grid-mobile__item-4">
          <div class="footer__grid__grid-mobile__item-4__title">
            <h3>contacts</h3>
          </div>
          <div class="footer__grid__grid-mobile__item-4__phone">
            <a href="">0911 955 500</a>
          </div>
          <div class="footer__grid__grid-mobile__item-4__web">
            <a href="">matihouse.com</a>
          </div>
          <div class="footer__grid__grid-mobile__item-4__icon">
            <div class="footer__grid__grid-mobile__item-4__icon__item">
              <div class="footer__grid__grid-mobile__item-4__icon__item__instagram">
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              </div>
              <div class="footer__grid__grid-mobile__item-4__icon__item__facebook">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__grid__item-5">
        <div class="footer__grid__item-5__title">
          <h3>Subscribe to our newsletter</h3>
        </div>
        <div class="footer__grid__item-5__email">
          <input type="email" name="" id="" placeholder="Your e-mail">
        </div>
      </div>
    </div>
  </div>
</div>

</footer>  
<script>
$(document).ready(function(){
  $('.carousel').slick(
    {
      dots:true,
      autoplay: true,
      autoplaySpeed: 10000,
      arrows: false,
    }
  );
});
</script>

<script scr="<?php _e(get_theme_file_uri('/assets/js/custom.js'))?>"></script>
<script scr="<?php _e(get_theme_file_uri('/assets/js/slick.min.js'))?>"></script>
<script scr="<?php _e(get_theme_file_uri('/assets/js/jquery.js'))?>"></script>
  <?php wp_footer(); ?>   
 </body>
</html>