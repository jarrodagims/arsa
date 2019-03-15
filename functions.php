<?php
	
	// Always Needed
	$includes = array(
		'checks.php', 					      // Set up options
		'constants.php',				      // Add in Constants
		'styles.php', 					      // Enqueue our styles
		'scripts.php', 					      // Enqueue our scripts
		'sidebars.php',					      // Set up our sidebar
		'sherpa-excerpt.php',			      // Special excerpt so that includes a read more button
		'sherpa-theme-options-page.php',      // Create our options page - Settings => Theme Options
		'do-shortcode-widget.php',		      // Create a widget to do a single shortcode
		'menus.php',					      // Set up our menus
		'navs.php',						      // Include our navs functions
		'paging-nav.php',				      // Set up our paging nav
		'theme-features.php',			      // Set up our theme features
		'cpt/testimonials-cpt.php',			  // Set up our Testimonials Custom Post Type
		'wp_bootstrap_navwalker.php',	      // Set up our Custom Walker for Bootstrap 3.x for wp_nav_menu()
		'prevent-image-size-attr.php',	      // Prevent WP from adding Height and Width to images
		'SocialMedia.php',			          // Set up social media function
		'google-analytics.php',		          // Include Google Analytics
		'stat-counter.php',				      // Include Stat Counter
		'google-site-verification.php',	      // Include Google Site Verification
		'schema.php',                         // Include Schema Function (www.schema.org)
		'create-pages.php',                   // Create the home page and the blog page upon activation
		'address.php',                        // Address and their related functions
		'sherpa-gallery.php',                 // Make gallery shortcode work with colorbox
		'class-tgm-plugin-activation.php',    // Allow for required plugins
		'required-plugins.php',               // Set up required plugins
		'disable-emoji.php',                  // Disable Emoji
		'add-to-any.php',                     // Add filter for 'the_content' to add Social Media sharing buttons
		'add-image-to-post.php',              // Add featured image to post
		'sherpa-video-embed-shortcode.php',   // Add shortcode 
		'add-tags-to-single.php',             // Add tags to the content on single posts
		'get-stars-for-rating.php',           // Get Stars for ratings on testimonials
		
	);
	
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	
	// Conditional Includes
	if(file_exists(__DIR__ . '/plugins/acf/acf.php') && !is_plugin_active('advanced-custom-fields-pro/acf.php') && !is_plugin_active( 'advanced-custom-fields/acf.php' ))
	{
    	$includes[] = 'plugin-acf.php';
    	$includes[] = 'acf-testimonial.php';
	}
	
	$prefix = 'inc/';
	
	foreach($includes as $include) {
		require_once($prefix . $include);
	}

	//Allow Advanced Custom Fields to be upgraded
	define('ACF_EARLY_ACCESS', '5');


/**
 * Register our sidebars and widgetized areas.
 *
 */

function form_widgets_init() {

	register_sidebar( array(
		'name'          => 'Form Widgets',
		'id'            => 'form_widgets',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
 
}
add_action( 'widgets_init', 'form_widgets_init' );

//Allow image in shortcodes

add_filter('widget_text', 'do_shortcode');

//use shortcode img-directory for images url
add_shortcode( 'img-directory', function( $atts ){
    return get_template_directory_uri() . '/img/';
});

//add shortcode for wp url
add_shortcode( 'wpurl', function( $atts ){
    return site_url();
});

function register_my_menus() {
    register_nav_menus(
        array(
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function liveReload(){
    if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ) {
        echo '<script>document.write(\'<script src="http://\' + (location.host    \'localhost\').split(\':\')[0] +\':35729/livereload.js?snipver=1"></\' + \'script>\')</script>';
    }
}
add_action( 'wp_footer', 'liveReload',100 );

add_action( 'wp_footer', 'mycustom_wp_footer' );

//redirect to thank you page
function mycustom_wp_footer()
{
    echo '<script type="text/javascript">';
    echo 'document.addEventListener( \'wpcf7mailsent\', function( event ) {';
    echo 'window.dataLayer.push({
        "event" : "cf7submission", 
        "formId" : event.detail.contactFormId,
        "response" : event.detail.inputs
    });';
    echo 'location = "' . SITEURL . '/thank-you/";';
    echo '}, false );';
    echo '</script>';
}

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'yoast-seo-breadcrumbs' );
}

//print the phone with parenthesis
function printPhone() {
    if (!empty(get_option('sherpa_telephone_number'))) :
        $num = get_option('sherpa_telephone_number');
        $area = substr($num, 0, 3);
        $first = substr($num, 3, 3);
        $last = substr($num, 6, 4);
        echo "(". $area . ") " . $first . "-" . $last;
    endif;
}

//disable tinyMCE
//add_filter( 'user_can_richedit' , '__return_false', 50 );

//shorten blog post titles
function short_title($after = '', $length) {
    $mytitle = explode(' ', get_the_title(), $length);
    if (count($mytitle)>=$length) {
        array_pop($mytitle);
        $mytitle = implode(" ",$mytitle). $after;
    } else {
        $mytitle = implode(" ",$mytitle);
    }
    return $mytitle;
}

//allow shortcode in wp menu
add_filter('wp_nav_menu_items', 'do_shortcode');

//site url shortcode
function url_shortcode() {
    return bloginfo('url');
}
add_shortcode('wpurl','url_shortcode');

add_filter('the_content', 'do_shortcode');

function my_acf_format_value( $value, $post_id, $field ) {

    // run do_shortcode on all textarea values
    $value = do_shortcode($value);


    // return
    return $value;
}

add_filter('acf/format_value/type=textarea', 'my_acf_format_value', 10, 3);

// Add backend styles for Gutenberg.
// add_action( 'enqueue_block_editor_assets', 'add_gutenberg_assets' );

// /**
//  * Load Gutenberg stylesheet.
//  */
// function add_gutenberg_assets() {
// 	// Load the theme styles within Gutenberg.
// 	wp_enqueue_style( 'gutenberg', get_theme_file_uri( '/css/gutenberg-editor-style.css' ), false );
// } 


function mytheme_block_editor_styles() {
    wp_enqueue_style(
		'slug-block-editor-styles',
		get_theme_file_uri( '/css/gutenberg-editor-style.css' ),
		false
	);
}

add_action( 'enqueue_block_editor_assets', 'mytheme_block_editor_styles' );

function wpb_add_fonts() {
    wp_enqueue_style( 'moderno', 'https://use.typekit.net/axr8qtl.css', false );
} 

add_action( 'wp_enqueue_scripts', 'wpb_add_fonts' );

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
 
    if(!is_front_page()) {
		$classes[] = 'internal';
	}

	return $classes;
     
}


// add_filter( 'user_can_richedit', 'custom_user_can_richedit');

// function custom_user_can_richedit($type) {
//     global $post_type;

//     if ($post_type === 'page')
//         return false;
//     return $type;
// }

/*
Plugin Name: My Custom Post Types
Description: Add post types for Floorplans and Floorplan reviews
Author: Liam Carberry
*/
 
// Hook <strong>lc_custom_post_Floorplan()</strong> to the init action hook
add_action( 'init', 'lc_custom_post_floorplan' );
 
// The custom function to register a Floorplan post type
function lc_custom_post_Floorplan() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Floor Plans' ),
    'singular_name'      => __( 'Floor Plan' ),
    'add_new'            => __( 'Add New Floorplan' ),
    'add_new_item'       => __( 'Add New Floorplan' ),
    'edit_item'          => __( 'Edit Floorplan' ),
    'new_item'           => __( 'New Floorplan' ),
    'all_items'          => __( 'All Floorplans' ),
    'view_item'          => __( 'View Floorplan' ),
    'search_items'       => __( 'Search Floorplans' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our Floorplans and Floorplan specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes' ),
    'has_archive'       => 'floor-plans',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
	'query_var'         => 'floorplan',
	'taxonomies'          => array( 'floorplan_categories' )
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'Floorplan', $args);
}
 

// hook into the init action and call create_floorplan_taxonomies when it fires
add_action( 'init', 'create_floorplan_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "floorplan"
function create_floorplan_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Neighborhoods', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Neighborhood', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Neighborhoods', 'textdomain' ),
		'all_items'         => __( 'All Neighborhoods', 'textdomain' ),
		'parent_item'       => __( 'Parent Neighborhood', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Neighborhood:', 'textdomain' ),
		'edit_item'         => __( 'Edit Neighborhood', 'textdomain' ),
		'update_item'       => __( 'Update Neighborhood', 'textdomain' ),
		'add_new_item'      => __( 'Add New Neighborhood', 'textdomain' ),
		'new_item_name'     => __( 'New Neighborhood Name', 'textdomain' ),
		'menu_name'         => __( 'Neighborhood', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'neighborhood/' , 'with_front' => false),
		'rewrite'           => array( 'slug' => 'neighborhood' ),
	);

	

	register_taxonomy( 'neighborhood', array( 'floorplan' ), $args );
}

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
			'total' => $total_pages,
			'prev_text'=> '&lt;',
			'next_text' => '&gt;'
        ));
    }
}

/* enable uls as children of H tags */
function override_mce_options($initArray) {
	$opts = '+h2[ul],+h3[ul],+h1[ul],+h2[id],+div[span]';
	$initArray['valid_children'] = $opts;
	$initArray['extended_valid_elements'] = 'span,span[class],h2[href],h1[href],h3[href],h2[id],h2[class],h1[id],h1[class],h3[id],h3[class]';
	return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');