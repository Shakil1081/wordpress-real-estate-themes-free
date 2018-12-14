<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reat_Estate_Theme
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}
?>
    <!-- css -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hover.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/demo1.css">   
    <link href='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php global $wd_wt;?>
<body <?php body_class(); ?>>
    <div class="wrapper" style="background-image: url(<?php if( $meta_data['section_top_bg']){ echo $meta_data['section_top_bg']; }else{ echo esc_url( get_template_directory_uri() ).'/images/home_banner.png'; }?>);">
        <!-- header -->
        <div class="subheader">
            <div class="container-fluid">
               <div class="col-sm-6">
                    <p class="site-info custom_call"><b><?php echo cs_get_option('phone_number');?></b></p>
                </div>
                    <div class="col-sm-6"><ul class="stayInTouch text-right">
                        <li>
                            <a href="<?php echo $meta_data['facebook_link']; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt=""></a>
                        </li>
                        <li>
                            <a href="<?php echo $meta_data['twitter_link']; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt=""></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="header"  data-spy="affix" data-offset-top="197">
            <div class="container-fluid">
                <nav class="navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo cs_get_option('log_c');?>" alt=""></a>
                    </div>
                    <div id="navbar2" class="navbar-collapse collapse">
                        <?php 

                            wp_nav_menu( array('menu' => 'Main Menu','container' => '', 'items_wrap' => '<ul id="cl-effect-3" class="nav navbar-nav navbar-right cl-effect-3">%3$s</ul>') );
                        ?>
                    </div>
                    <!--/.nav-collapse -->
                </nav>
            </div>
        </div>
        <!-- header -->
    </div>
        <!-- banner -->
        <div class="container">
            <div class="bannerOuter">
                <div class="banner">
                    <div class="bannerContent">
                        <h1><?php echo cs_get_option('heto_title');?></h1>
                        <p class="site-info"><?php echo cs_get_option('heto_sub_title');?> </p>
                        <a href="<?php echo cs_get_option('heto_button_link');?>"><button class="btn btn-default hvr-bounce-to-right"><?php echo cs_get_option('heto_button_text');?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->

    <!-- section -->
  <!--  <section class="rating">
        <div class="container">
            <ul>
                <li>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/star.png" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/half_star.png" alt="">
                </li>
                <li><span>41</span>votes</li>
                <li>|</li>
                <li><span style="padding: 11px 4px;">4.21</span>average out of 5</li>
            </ul>
        </div>
    </section>
-->
    <section>
        <div class="container">
            <div class="purchase_service txt-center">
             <!-- Start the Loop. -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; else : ?>
            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <!-- REALLY stop The Loop. -->
            <?php endif; ?>
             </div>
        </div>
    </section>

    <section class="toranto">
        <div class="container">
            <h2 class="txt-center">Toronto & Area</h2>
            <div class="col-sm-6">
                <div class="table">
                    <table>
                        <tr class="borderBottom">
                            <th class="borderright">Project Name</th>
                            <th>Zen King West Condos</th>
                        </tr>
                        <tr class="borderBottom">
                            <td class="borderright">Building Type</td>
                            <td>Condo</td>
                        </tr>
                        <tr class="borderBottom">
                            <td class="borderright">Address</td>
                            <td>Toronto & Area</td>
                        </tr>
                        <tr class="borderBottom">
                            <td class="borderright">Developer</td>
                            <td>CentreCourt Developments</td>
                        </tr>
                        <tr class="borderBottom">
                            <td class="borderright">Architects</td>
                            <td>Page+Steele/IBI Group Architects</td>
                        </tr>
                        <tr>
                            <td class="borderright">Units & Storeys</td>
                            <td>480 units in 32 storeys</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
            <img src="http://nottinghillcondovip.ca/wp-content/uploads/2018/06/mirvish-gehry-podium.jpeg" alt="Mirvish Gehry Condos in Toronto" style="max-width: 85%;">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
        <h2><?php echo cs_get_option('video_title');?></h2>
        <p><?php echo cs_get_option('video_sub_title');?></p>
            <div class="video-wrapper">
            <iframe width="1140" height="480" src="<?php echo cs_get_option('bideo_link');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    
    <section class="map">
        <img src="images/map.png" alt="">
    </section>
    
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="txt-center">Register Here</h2>
            <div class="contactForm">
                <!-- <form action="">
                    <input type="name" class="" id="" aria-describedby="" placeholder="NAME">
                    <input type="email" class="" id="" aria-describedby="" placeholder="EMAIL ADDRESS">
                    <input type="subject" class="" id="" aria-describedby="" placeholder="PHONE NUMBER">
                    <textarea class="" id="" rows="4" placeholder="DESCRIPTION"></textarea>

                    <ul>
                        <li><label for="checkbox_id">ARE YOU A REALTOR?</label></li>
                        <li>
                           <label for="checkbox_id">YES</label>
                           <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                        </li>
                        <li>
                          <label for="checkbox_id">NO</label>
                           <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                        </li>
                    </ul>
                    <a href="#" class="btn btn-default hvr-bounce-to-right">SUBMIT</a>
                </form> -->
                <?php do_shortcode('[contact-form-7 id="16" title="Reagistation"]');?>
            </div>
        </div>
	</section>
    <section class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                <a href="index.html"><img src="<?php echo cs_get_option('log_c');?>" alt=""></a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-sm-4">
                    <h4>CONTACT US</h4>
                    <ul class="footer_contact">
                        <li>311, Toronto Area</li>
                        <li>+1 999 333 2222</li>

                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>STAY IN TOUCH</h4>
                    <ul class="stayInTouch">
                        <li>
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt=""></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'reat-estate-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'reat-estate-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'reat-estate-theme' ), 'reat-estate-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.js"></script>
     <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.min.js"></script>

</body>
</html>
