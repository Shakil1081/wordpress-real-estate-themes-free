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
			'default' => '00-000-0000',
		  ),
		  
		)
		);

	/*--=========================================--*/	  
// Color section 
/*--=========================================--*/
$options[]    = array(
	'name'      => 'section_color_section',
	'title'     => 'Color Section',
	'icon'      => 'fa fa-caret-right',
	'fields'    => array(
		array(
			'id'      => 'main_picker', 
			'type'    => 'color_picker',
			'title'   => 'Main color',
			'desc'    => 'The main color will use as a background for main menu background, Button background color default color #ff2d43',
			'default' => '#ff2d43',
			),
			array(
				'id'      => 'brand_text_color', 
				'type'    => 'color_picker',
				'title'   => 'Brand Text color',
				'desc'    => 'Logo text color, mani menu text color, phone number  text color, phone number title color, footer copyright color, Button Text color default color #FFF',
				'default' => '#FFF',
				),
			array(
				'id'      => 'text_head', 
				'type'    => 'color_picker',
				'title'   => 'H1,H2 color',
				'desc'    => 'H1, H1 a, color_b , H2 title color default color #464646',
				'default' => '#464646',
				),

				array(
					'id'      => 'table_section', 
					'type'    => 'color_picker',
					'title'   => 'Table section',
					'desc'    => 'Table section background color default color #ff2d43',
					'default' => '#ff2d43',
					),
					array(
						'id'      => 'table_section_text', 
						'type'    => 'color_picker',
						'title'   => 'Table section Text',
						'desc'    => 'Table section Text color default color #fff',
						'default' => '#fff',
						),						
			array(
				'id'      => 'title_color_picker', 
				'type'    => 'color_picker',
				'title'   => 'Body Color',
				'desc'    => 'Main body color section text color default color #666',
				'default' => '#666',
				),
			array(
				'id'      => 'text_color_picker', 
				'type'    => 'color_picker',
				'title'   => 'Section baground Color',
				'desc'    => 'Section baground Color for all other section default color #f1f1f1',
				'default' => '#f1f1f1',
				),

				array(
					'id'      => 'baground_color_sectopm', 
					'type'    => 'color_picker',
					'title'   => 'Section Background Color',
					'desc'    => 'Footer sub section Background color default color #ff2d44',
					'default' => '#ff2d44',
					),
			array(
					'id'      => 'Other_color_picker', 
					'type'    => 'color_picker',
					'title'   => 'footer Color',
					'desc'    => 'footer Background Color default color #ff2d43',
					'default' => '#ff2d43',
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
			'title'   => 'http://facebook.com',
			'default' => 'http://facebook.com/',
		  ),
		  array(
			'id'      => 'twitter_link',
			'type'    => 'text',
			'title'   => 'http://twitter.com',
			'default' => 'http://twitter.com/',
		  ),
		 array(
			'id'      => 'linkedin_link',
			'type'    => 'text',
			'title'   => 'http://linkedin.com',
			'default' => 'http://linkedin.com/',
		  ),
		  array(
			'id'      => 'pinterest_link',
			'type'    => 'text',
			'title'   => 'http://instagram.com',
			'default' => 'http://instagram.com/',
		  ),
	)
  );
/*--=========================================--*/	  
// Logo section
/*--=========================================--*/
	  $options[]    = array(
		'name'      => 'section_header_c',
		'title'     => 'Header logo/favicon',
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
					array(
				'id'            => 'favicon',
				'type'          => 'upload',
				'title'         => 'favicon',
				'settings'      => array(
				 'upload_type'  => 'image',
				 'button_title' => 'Select Logo',
				 'frame_title'  => 'Select an image',
				 'insert_title' => 'Use this image',
				),
				),
				
			  array(
				'id'      => 'logo_text_c',
				'type'    => 'text',
				'title'   => 'Text Logo',
				'desc'    => 'This is text logo when image loog is not available',
				'help'    => 'Write something',
				'default' => 'Lorem Ipsum',
			  ),
		  
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
		  )
	  
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
// Local schema Setting
/*--=========================================--*/
$options[]    = array(
	'name'      => 'localschemasetting',
	'title'     => 'Local schema Setting',
	'icon'      => 'fa fa-caret-right',
	'fields'    => array(
		array(
			'id'      => 'lname',
			'type'    => 'text',
			'title'   => 'Name',
			'default' => '',
		  ),
		  array(
			'id'      => 'lImageURL',
			'type'    => 'text',
			'title'   => 'Image URL',
			'default' => '',
		  ),
		   array(
			'id'      => 'lidURL',
			'type'    => 'text',
			'title'   => '@id (URL)',
			'default' => '',
		  ),
		  array(
			'id'      => 'lURL',
			'type'    => 'text',
			'title'   => 'URL',
			'default' => '',
		  ),
		  array(
			'id'      => 'lPhone',
			'type'    => 'text',
			'title'   => 'Phone',
			'default' => '',
		  ),
		 array(
			'id'      => 'lPricerange',
			'type'    => 'text',
			'title'   => 'Price range',
			'default' => '',
		  ),
		  array(
			'id'      => 'lStreet',
			'type'    => 'text',
			'title'   => 'Street',
			'default' => '',
		  ),
		   array(
			'id'      => 'lCity',
			'type'    => 'text',
			'title'   => 'City',
			'default' => '',
		  ),
		   array(
			'id'      => 'lZipcode',
			'type'    => 'text',
			'title'   => 'Zip code',
			'default' => '',
		  ),
		   array(
			'id'      => 'lcountry',
			'type'    => 'text',
			'title'   => 'Country',
			'default' => '',
		  ),
		   array(
			'id'      => 'laddressRegion',
			'type'    => 'text',
			'title'   => 'Address Region',
			'default' => '',
		  ),
		   array(
			'id'      => 'lLatitude',
			'type'    => 'text',
			'title'   => 'Latitude',
			'default' => '',
		  ),
		   array(
			'id'      => 'lLongitude',
			'type'    => 'text',
			'title'   => 'Longitude',
			'default' => '',
		  ),
		   array(
			'id'      => 'lfacebookurl',
			'type'    => 'text',
			'title'   => 'Facebook Link',
			'default' => '',
		  ),
		   array(
			'id'      => 'ltwitterurl',
			'type'    => 'text',
			'title'   => 'twitter Link',
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
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*
Creating custom table for user  
*/
function bilder_create_db() {
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'Contactus';
	$sql = "CREATE TABLE $table_name (
	id mediumint(9) NOT NULL AUTO_INCREMENT,
	`name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `realtor` varchar(5) NOT NULL,
	UNIQUE KEY id (id)
	) $charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}

add_action('after_switch_theme', 'bilder_create_db');

/*=================================
 contact form 7 data
==============================*/

add_action( 'wpcf7_mail_sent', 'your_wpcf7_mail_sent_function' ); 

function your_wpcf7_mail_sent_function( $contact_form ) {
    $title = $contact_form->title;
    $submission = WPCF7_Submission::get_instance();
  
    if ( $submission ) {
    	$posted_data = $submission->get_posted_data();
    }
       
   if ( 'Reagistation' == $title ) {
        $name = strtolower($posted_data['text-name']);
	    $name = strtolower(str_replace(' ', '_',  $name));
        $email = strtolower($posted_data['email']);
        $phone = strtolower($posted_data['phone']);
	  	 $url = site_url();
        $Areyouarealtor = $posted_data['Areyouarealtor'];
	    $ayor = strtolower($Areyouarealtor['0']);
   
$curl = curl_init();

curl_setopt_array($curl, array(
   CURLOPT_URL => 'domianname'.$name.'&email='.$email.'&phone='.$phone.'&Areyouarealtor='.$ayor.'&url='.$url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 20,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "undefined=",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded",
    "Postman-Token: 0d1ceeb2-fcb9-4024-b642-7b9cfc9b5e1b",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

 }
}