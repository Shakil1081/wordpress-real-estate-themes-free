<?php
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
<div class="wrapper" id="h100">
        <!-- header -->
        <div class="subheader">
            <div class="container">
              <!--  <p class="site-info"><b><?php echo cs_get_option('phone_number');?></b></p>-->
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
        <div id="blog" class="container">
            <div class="row">
                <div class="col-sm-8 singalblogcont">
             <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
   </a>
 <?php endif; ?>
 <div class="imageoverlap">
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
         <p class="mrtadata"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<small><?php the_time('F jS, Y'); ?> by&nbsp;&nbsp;<i class="fa fa-user-circle" aria-hidden="true"></i>  <?php the_author_posts_link(); ?></small></p>
</div>
<?php the_content(); ?>
<?php
        endwhile;
        ?>
        </div>
        
        <div class="col-sm-4 bg-color">
        <aside id="secondary" class="widget-area">
	<?php 
$args = array( 'posts_per_page' => '3' );
$recent_posts = new WP_Query($args);
while( $recent_posts->have_posts() ) :  
    $recent_posts->the_post() ?>		
<div class="card">
    <div class="box">
        <div class="img">
       <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('thumbnail') ?>
        <?php endif ?> </div>
        <h2><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a> </h2>
        <p><small><?php echo wp_trim_words( get_the_content(), 20, '' ); ?></small></p>
		
        <span>
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </span>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?>
</aside><!-- #secondary -->
</div>
</div>
</div>
<?php
get_footer();
