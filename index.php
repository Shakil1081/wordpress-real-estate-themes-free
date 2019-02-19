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

?><?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reat_Estate_Theme
 */
get_header(); ?>
<?php global $wd_wt; $meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );?>
<body <?php body_class(); ?>>
    <div class="wrapper h200">
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
                         <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php if(cs_get_option('log_c')){?>
                        <img src="<?php echo cs_get_option('log_c');?>" alt="logo"> 
                        <?php }else{ echo cs_get_option('logo_text_c'); }?>
                        </a>
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
            <div class="bannerContent">
	
                <div class="banner">
                    <div class="bannerContent" style="top: 132px;">
						<h1 class="colo_000"><i class="fa fa-th-list"></i>&nbsp;Blog List</h1>
					   </div>
                </div>
            </div>
        </div>

        <div  id="blog" class="container">
<!-- details card section starts from here -->
<section class="details-card">
    <div class="container">
        <div class="row">
		
		<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="col-md-4">
<div class="card">
<div class="box">
<div class="img">
<?php if ( has_post_thumbnail() ) : ?>
<img src="<?php the_post_thumbnail_url(); ?>"/>
<?php endif; ?>
</div>
<h2><?php the_title(); ?></h2>
<p><?php echo wp_trim_words( get_the_content(), 20, '' ); ?></p>
<a href="<?php the_permalink(); ?>" class="btn-card">              
<button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-info-circle"></i> &nbsp;Read more</button></a> 			   
</div>
</div>
</div>
 <?php endwhile; else : ?>
 	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
	</div>
    </div>
</section>
<!-- details card section starts from here -->
        </div>
        <!-- banner -->

<?php edit_post_link(); ?>
<?php get_footer(); ?>