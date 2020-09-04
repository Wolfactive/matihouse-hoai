<?php
 /*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
 
/*
 *  INCLUDED FILES
 */

$file_includes = [ 
    'includes/theme-assets.php',                // Style and JS   
    'includes/theme-setup.php',                // General theme setting	
    'includes/acf-options.php',               // ACF Option page
    'includes/crop-image.php',
];

foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }

    require_once $filePath;
}

unset($file, $filePath);
 
 // Import feauture images
 function theme_features() {  
//   register_nav_menu('headerMenuLocation','Header Menu Location');
//   register_nav_menu('catalogueFooter','Catalogue Menu Footer');
//   register_nav_menu('aboutFooter','About Menu Footer');
  register_nav_menus(
    array(
      'headerMenuLocation' => __( 'Header Menu Location' ),
      'catalogueFooter' => __( 'Catalogue Menu Footer' ),
      'aboutFooter' => __( 'About Menu Footer' )
    )
  );
  
}

add_action('init', 'theme_features');

function arphabet_widgets_init()
            {

                register_sidebar(array(
                    'name'          => 'Single sidebar',
                    'id'            => 'single_sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2 class="title--section text--upcase">',
                    'after_title'   => '</h2>',
                ));          
            }
add_action( 'widgets_init', 'arphabet_widgets_init' );
   // Shortcode-post-navigaiton
            function post_navigaiton($atts, $content = null)
            {

                return '<!--nextpage-->';
            }
            add_shortcode('pos-nav', 'post_navigaiton');
?>