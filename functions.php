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
      'aboutFooter' => __( 'About Menu Footer' ),
      'subMenu' => __( 'Sub Menu Location' ),
      'sideBarMenu' => __( 'SideBar Menu Location' ),
      'categoryMenu' => __( 'Category Menu Location' ),
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

function wolfactive_post_types() {
    register_post_type('Blog', array(
        'public' => true,
        'labels' => array(
        'name' => 'Blogs',
        'add_new_item' => __('Add New Blog'),
        'edit_item' =>  __('Edit Blog'),
        'all_items' =>  __('All Blog'),
        'singular_name' => __('All Blog'),
        'view_item' => __('View Blogs'),
        'search_items' => __('Search Blogs'),
        'featured_image' => __('Image Blog'),
        'tag' => __('Set tags'),
        'set_featured_image' => __('Choose Image Blog'),
        'menu_name' => __( 'Tags' ),
        
    ),
    'menu_icon' => 'dashicons-book',
    'has_archive' => true,
    'taxonomies' => array('category', 'post_tag'),
    'supports' => array(
        'title',
        'thumbnail',
        'custom-fields',
        'editor',
        
    ),
  ));
}
        add_action('init', 'wolfactive_post_types');


      
        function get_specifications_fields() {
        
            global $post;
            
            $specifications_group_id = 149; // Post ID of the specifications field group.
            $specifications_fields = array();
            
            $fields = acf_get_fields( $specifications_group_id );
            
            foreach ( $fields as $field ) {
                $field_value = get_field( $field['name'] );
                
                if ( $field_value && !empty( $field_value ) ) {
                    $specifications_fields[$field['name']] = $field;
                    $specifications_fields[$field['name']]['value'] = $field_value;
                }
            }
            
            return $specifications_fields;
        
        }
?>