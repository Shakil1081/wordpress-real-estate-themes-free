<?php
/**
 * Reat Estate Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reat_Estate_Theme
 */
/**
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 */
require_once get_template_directory() .'/cs-framework/cs-framework.php';
define( 'CS_ACTIVE_LIGHT_THEME',  true  );

// framework options filter example
function extra_cs_framework_options( $options ) {

	$options      = array(); // remove old options
  
/*--=========================================--*/	  
// Phone call 
/*--=========================================--*/
	$options[]    = array(
		'name'      => 'section_top_c',
		'title'     => 'Top Header',
		'icon'      => 'fa fa-caret-right',
		'fields'    => array(
		  array(
			'id'    => 'phone_number',
			'type'  => 'text',
			'title' => 'Phone Number',
			'default' => 'Call: xxx-xxx-xxxx',
		  ),
		  
		)
	  );
/*--=========================================--*/	  
// Hero section 
/*--=========================================--*/
$options[]    = array(
	'name'      => 'section_socal_c',
	'title'     => 'Social link Setting',
	'icon'      => 'fa fa-caret-right',
	'fields'    => array(
		array(
			'id'      => 'facebook_link',
			'type'    => 'text',
			'title'   => 'Facebook link',
			'default' => '',
		  ),
		  array(
			'id'      => 'twitter_link',
			'type'    => 'text',
			'title'   => 'twitter link',
			'default' => '',
		  ),
		 array(
			'id'      => 'linkedin_link',
			'type'    => 'text',
			'title'   => 'Google Plus',
			'default' => '',
		  ),
		  array(
			'id'      => 'pinterest_link',
			'type'    => 'text',
			'title'   => 'instagram link',
			'default' => '',
		  ),
	)
  );
/*--=========================================--*/	  
// Logo section
/*--=========================================--*/
	  $options[]    = array(
		'name'      => 'section_header_c',
		'title'     => 'Header logo/',
		'icon'      => 'fa fa-caret-right',
		'fields'    => array(
			array(
				'id'            => 'log_c',
				'type'          => 'upload',
				'title'         => 'Logo',
				'settings'      => array(
				 'upload_type'  => 'image',
				 'button_title' => 'Select Logo',
				 'frame_title'  => 'Select an image',
				 'insert_title' => 'Use this image',
				),
				),
			  /*array(
				'id'      => 'logo_text_c',
				'type'    => 'text',
				'title'   => 'Text Logo',
				'desc'    => 'This is text logo when image loog is not available',
				'help'    => 'Write something',
				'default' => 'Lorem Ipsum',
			  ),*/
		  
		)
	  );

/*--=========================================--*/	  
// Hero section 
/*--=========================================--*/
	  $options[]    = array(
		'name'      => 'section_hero_c',
		'title'     => 'Hero',
		'icon'      => 'fa fa-caret-right',
		'fields'    => array(
			array(
				'id'      => 'heto_title', 
				'type'    => 'text',
				'title'   => 'Title',
				'default' => 'NOTTING HILL CONDOS',
			  ),
			  array(
				'id'      => 'heto_sub_title', 
				'type'    => 'text',
				'title'   => 'Sub Title',
				'default' => 'Where does it come from?',
			  ),
			  array(
				'id'      => 'heto_button_text', 
				'type'    => 'text',
				'title'   => 'Button text',
				'default' => 'Register Here',
			  ),
			  array(
				'id'      => 'heto_button_link',
				'type'    => 'text',
				'title'   => 'Button link',
				'default' => 'http://nottinghillcondovip.ca/#contact',
			  ),
		  
		)
	  );
/*--=========================================--*/	  
// Hero section 
/*--=========================================--*/
$options[]    = array(
	'name'      => 'section_video_c',
	'title'     => 'Video link',
	'icon'      => 'fa fa-youtube',
	'fields'    => array(
		array(
			'id'      => 'video_title', 
			'type'    => 'text',
			'title'   => 'Video Title',
			'default' => '',
		  ),
		  array(
			'id'      => 'video_sub_title', 
			'type'    => 'text',
			'title'   => 'Video Sub Title',
			'default' => '',
		  ),
		  array(
			'id'      => 'bideo_link',
			'type'    => 'text',
			'title'   => 'Video link',
			'default' => 'https://www.youtube.com/embed/sbpq7RvWDM0',
		  ),
	  
	)
	);
	
	/*--=========================================--*/	  
// Tabale section 
/*--=========================================--*/
$options[]    = array(
	'name'      => 'section_table',
	'title'     => 'Table setting',
	'icon'      => 'fa fa-table',
	'fields'    => array(
		array(
			'id'      => 'table_sat_title', 
			'type'    => 'text',
			'title'   => 'Title',
			'default' => '',
			),
			array(
				'id'            => 'upload_image_table',
				'type'          => 'upload',
				'title'         => 'Upload Field',
				'settings'      => array(
				 'upload_type'  => 'image',
				 'button_title' => 'Upload',
				 'frame_title'  => 'Select an image',
				 'insert_title' => 'Use this image',
				),
			),
		  array(
				'id'    => 'table_descriptio',
				'type'  => 'wysiwyg',
				'title' => 'Details Footer',
				'default' => '<table>
				<tbody><tr class="borderBottom">
						<th class="borderright">Project Name</th>
						<th>1914 translation by H. Rackham</th>
				</tr>
				<tr class="borderBottom">
						<td class="borderright">Building Type</td>
						<td>Condo</td>
				</tr>
				<tr class="borderBottom">
						<td class="borderright">Address</td>
						<td>1914 translation by H. Rackham</td>
				</tr>
				<tr class="borderBottom">
						<td class="borderright">Developer</td>
						<td>1914 translation by H. Rackham</td>
				</tr>
				<tr class="borderBottom">
						<td class="borderright">Architects</td>
						<td>1914 translation by H. Rackham</td>
				</tr>
				<tr>
						<td class="borderright">Units &amp; Storeys</td>
						<td>1914 translation by H. Rackham</td>
				</tr>
		</tbody></table>',
				), 	)
	);
	


/*--=========================================--*/	  
// Bellov Tabale section 
/*--=========================================--*/

/*--=========================================--*/	  
// Map section 
/*--=========================================--*/
		$options[]    = array(
			'name'      => 'section_maping',
			'title'     => 'Google embed map',
			'icon'      => 'fa fa-caret-right',
			'fields'    => array(
				array(
				'id'    => 'mping',
				'type'  => 'wysiwyg',
				'title' => 'maping',
				'default' => '',
				),
			)
			);
/*--=========================================--*/	  
// Phone call 
/*--=========================================--*/
	$options[]    = array(
		'name'      => 'section_contactform',
		'title'     => 'Contact form7',
		'icon'      => 'fa fa-caret-right',
		'fields'    => array(
		    		array(
			'id'      => 'contactform7_title', 
			'type'    => 'text',
			'title'   => 'Title',
			'default' => 'Register Here',
			),
			array(
			'id'      => 'contactform7_sub_title', 
			'type'    => 'text',
			'title'   => 'Sub title',
			'default' => 'Register to Receive Prices and Floor Plans',
			),
		  array(
			'id'    => 'contactform7',
			'type'  => 'wysiwyg',
			'title' => 'Form Sotcode',
			'default' => '',
		  ),
		)
	  );

/*--=========================================--*/	  
// Footer section 
/*--=========================================--*/

	  $options[]    = array(
		'name'      => 'section_footer_c',
		'title'     => 'Footer',
		'icon'      => 'fa fa-caret-right',
		'fields'    => array(		  
		  array(
			'id'    => 'footer_contactinfo',
			'type'  => 'wysiwyg',
			'title' => 'Contact',
			'default' => '<h4 style="text-align: center;">CONTACT US</h4>
			<p style="text-align: center;">Ricky Verma
			Salesperson, Cityscape Real Estate Ltd
			Ph:<a href="tel:416660-8555">416-660-8555</a>
			Address: 144 Simcoe Street, Toronto, M5H3G4
			Email:<a href="mailto:ricky@homekick.ca">ricky@homekick.ca</a></p>',
		  ),
		  array(
			'id'    => 'foorer_descriptio',
			'type'  => 'wysiwyg',
			'title' => 'Details Footer',
			'default' => '<span style="color: #ffffff;">We are independent Realtors and do not represent the developer. Information &amp; Prices are subject to change without notice. E.&amp;O.E.</span>',
		  ),
		  array(
			'id'    => 'copuright',
			'type'  => 'text',
			'title' => 'Copyright',
			'default' => 'Copyright © 2018',
		  ),
		  
		)
	  );
	  
	return $options;
  
  }
  add_filter( 'cs_framework_options', 'extra_cs_framework_options' );

if ( ! function_exists( 'reat_estate_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function reat_estate_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Reat Estate Theme, use a find and replace
		 * to change 'reat-estate-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'reat-estate-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'reat-estate-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'reat_estate_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'reat_estate_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reat_estate_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'reat_estate_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'reat_estate_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reat_estate_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reat-estate-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'reat-estate-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'reat_estate_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reat_estate_theme_scripts() {
	wp_enqueue_style( 'reat-estate-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'reat-estate-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'reat-estate-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reat_estate_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/*--====================================--*/
// theme requirment AFC 
/*--====================================--*/

/*
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/inc/advanced-custom-fields/';
    return $path;
    
}
 

add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    $dir = get_stylesheet_directory_uri() . '/inc/advanced-custom-fields/';
    
    return $dir;
    
}

require_once dirname( __FILE__ ) . '/inc/advanced-custom-fields/acf.php';
Include include_once( get_stylesheet_directory() . '/inc/advanced-custom-fields/acf.php' );
*/

/*--==============================================--*/
/* this is contacr form  */
/*--==============================================--*/