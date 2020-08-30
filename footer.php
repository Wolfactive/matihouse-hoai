    <section class="footer">
	    <!----------=========Main==========-------->
	  <div class="footer__main">
	     <div class="main__contain container row-divide">
		   <div class="footer__item col-divide-4 col-divide-md-12">
		       <img src="<?php echo get_field('logo','option') ?>" alt="footer-logo logo">
		    </div>		  
		  <div class="footer__item col-divide-4 col-divide-md-12">
		      <h3 class="footer__title title--section text--upcase">thông tin liên hệ</h3>
		      <p><b><i class="fas fa-map-marker-alt icon"></i></b><?php echo get_field('tru_so_chinh','option') ?></p>
		      <p><b><i class="fas fa-phone icon"></i></b><?php echo get_field('hotline','option') ?></p>
		      <p><b><i class="fas fa-envelope icon"></i></b><?php echo get_field('mail','option') ?></p>
		  </div>
		  <div class="footer__item col-divide-4 col-divide-md-12">
		       <?php // echo do_shortcode('[contact-form-7 id="28" title="Đăng ký tư vấn"]') ?>
		  </div>
		 </div>
	  </div>    
	    <!----------=========Main==========-------->
		
		<!----------=========Sub==========-------->
	  <div class="footer__sub">
	    <div class="container"><p class="text--center">Copyright © 2014 - 2020 Công Ty TNHH Viện Thẩm Mỹ DIVA. All Right Reserved.</p></div>
	  </div>
	    <!----------=========Sub==========-------->
</section>  
   
  <?php wp_footer(); ?>   
 </body>
</html>