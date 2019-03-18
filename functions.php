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

/* enable uls as children of H tags */
function override_mce_options($initArray) {
	$opts = '+h2[ul],+h3[ul],+h1[ul],+h2[id],+div[span]';
	$initArray['valid_children'] = $opts;
	$initArray['extended_valid_elements'] = 'span,span[class],h2[href],h1[href],h3[href],h2[id],h2[class],h1[id],h1[class],h3[id],h3[class]';
	return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');