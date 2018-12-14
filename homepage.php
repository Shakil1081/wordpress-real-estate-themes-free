<?php
/*
* Template Name: Home page
*
*/

get_header(); ?>
<?php global $wd_wt; 
 $meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );
    /*var_dump( $meta_data );
    echo $meta_data['section_b_text'];
    echo $meta_data['section_b_textarea'];
    echo $meta_data['section_b_upload'];*/
     ?>
<body <?php body_class(); ?>>
    <div class="wrapper" style="background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.42)), url(<?php if( $meta_data['section_top_bg']){ echo $meta_data['section_top_bg']; }else{ echo esc_url( get_template_directory_uri() ).'/images/home_banner.png'; }?>);">
        <!-- header -->
        <div class="subheader">
            <div class="container-fluid">
               <div class="col-sm-6 col-xs-6">
                    <p class="site-info custom_call"><b><?php echo cs_get_option('phone_number');?></b></p>
                </div>
                    <div class="col-sm-6">
                         <?php if($meta_data['section_a_text']){?>
                         <ul class="stayInTouch text-right">
                        <li>
                            <a href="<?php echo $meta_data['facebook_link']; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt=""></a>
                        </li>
                        <?php } ?>
                        <?php if($meta_data['section_a_text']){?>
                        <li>
                            <a href="<?php echo $meta_data['twitter_link']; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt=""></a>
                        </li>
                        <?php } ?>
                        <?php if($meta_data['section_a_text']){?>
                         <li>
                            <a href="<?php echo $meta_data['twitter_link']; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/linkedin.png" alt=""></a>
                        </li>
                        <?php } ?>
                        <?php if($meta_data['section_a_text']){?>
                         <li>
                            <a href="<?php echo $meta_data['twitter_link']; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pinterest.png" alt=""></a>
                        </li>

                    </ul>
                    <?php } ?>
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
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php if(cs_get_option('log_c')){ echo cs_get_option('log_c'); }else{ echo esc_url( get_template_directory_uri() ).'/images/logo.png'; }?>" alt="logo"></a>
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
    </div>

    <!-- section -->
    <section>
        <div class="container">
            <div class="purchase_service txt-center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
             </div>
        </div>
    </section>
<!--==========================
Tabe section
=============================-->
<?php if(isset($meta_data['section_a_text'])){?>
    <section class="toranto">
        <div class="container">
            <h2 class="txt-center"><?php echo cs_get_option('table_sat_title');?></h2>
            <div class="<?php if(cs_get_option('upload_image_table')){ echo "col-sm-6";}else{ echo "col-sm-12";}?>">
                <div class="table">
                <?php echo cs_get_option('table_descriptio');?>
                </div>
            </div>
            <div class="gallery <?php if(cs_get_option('upload_image_table')){ echo "col-sm-6";}else{ echo "displaynone";};?>">            
            <a href="<?php echo cs_get_option('upload_image_table');?>">
            <img src="<?php echo cs_get_option('upload_image_table');?>" alt="Mirvish Gehry Condos in Toronto" style="max-width: 85%;">
            </a>
         </div>
        </div>
    </section>
<?php } ?>
<!--===========================
Section bellow table
===============================-->
<?php if($meta_data['bello_sat_title']){?>
<section>
        <div class="container">
             <div class="purchase_service txt-center">
                <h2><?php echo $meta_data['bello_sat_title'];?></h2>
                <p>
                <?php echo $meta_data['bello_table_descriptio'];?>
                </p>
                
            </div>
        </div>
    </section>
<?php } ?>
<!--===================
section Maping
==================-->

<?php if(cs_get_option('mping')){?>
<section class="map">
    <?php echo cs_get_option('mping');?>
    </section>
<?php } ?>
<!--=========================
 Section A
=============================-->
<?php if($meta_data['section_a_text']){?>
<section class="builderPage grey_section">
        <div class="container ">
            <div class="<?php if($meta_data['section_a_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
                   <h2><?php echo $meta_data['section_a_text'];?></h2>
                <p><?php echo $meta_data['section_a_textarea']; ?></p>                  
            </div>
            <div class="<?php if($meta_data['section_a_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_a_upload']; ?>">
                  <img src="<?php echo $meta_data['section_a_upload']; ?>" alt="">
                  </a>
                  </div>
            </div>
           </div>
        </div>  
    </section>
<?php  } ?>
<!--===================
section B
==================-->


<?php if($meta_data['section_b_text']){?>
    <section class="builderPage">
        <div class="container aminitie-area">
           <div class="<?php if($meta_data['section_b_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_b_upload']; ?>">
                  <img src="<?php echo $meta_data['section_b_upload']; ?>" alt="">
                  </a>
                 </div>
                    </div>
            <div class="<?php if($meta_data['section_b_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
            <h2 class="text-right"><?php echo $meta_data['section_b_text'];?></h2>
                <p><?php echo $meta_data['section_b_textarea']; ?></p> 
            </div>
        </div>  
    </section>
	<?php  } ?>
<!--===================
section C
==================-->
<?php if($meta_data['section_c_text']){?>
<section class="builderPage grey_section">
        <div class="container ">
            <div class="<?php if($meta_data['section_c_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
                   <h2><?php echo $meta_data['section_c_text'];?></h2>
                <p><?php echo $meta_data['section_c_textarea']; ?></p>                  
            </div>
            <div class="<?php if($meta_data['section_c_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_c_upload']; ?>">
                  <img src="<?php echo $meta_data['section_c_upload']; ?>" alt="">
                  </a>
                  </div>
            </div>
           </div>
        </div>  
    </section>

<?php  } ?>

<!--===================
section D
==================-->
<?php if($meta_data['section_d_text']){?>
    <section class="builderPage">
        <div class="container aminitie-area">
           <div class="<?php if($meta_data['section_d_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_d_upload']; ?>">
                  <img src="<?php echo $meta_data['section_d_upload']; ?>" alt="">
                  </a>
                 </div>
                    </div>
            <div class="<?php if($meta_data['section_d_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
            <h2 class="text-right"><?php echo $meta_data['section_d_text'];?></h2>
                <p><?php echo $meta_data['section_d_textarea']; ?></p> 
            </div>
        </div>  
    </section>
	<?php } ?>


<!--===================
section E
==================-->

<?php if($meta_data['section_e_text']){?>
<section class="builderPage grey_section">
        <div class="container ">
            <div class="<?php if($meta_data['section_e_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
                   <h2><?php echo $meta_data['section_e_text'];?></h2>
                <p><?php echo $meta_data['section_e_textarea']; ?></p>                  
            </div>
            <div class="<?php if($meta_data['section_e_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_e_upload']; ?>">
                  <img src="<?php echo $meta_data['section_e_upload']; ?>" alt="mirvish gehry condos">
                  </a>
                  <!--<img src="<?php echo $meta_data['section_e_upload']; ?>" alt="">-->
                  </div>
            </div>
           </div>
        </div>  
    </section>

<?php  } ?>
<?php if( ! empty( cs_get_option('bideo_link'))){?>
<section>
        <div class="container">
        <h2><?php echo cs_get_option('video_title');?></h2>
        <p><?php echo cs_get_option('video_sub_title');?></p>
            <div class="video-wrapper">
            <iframe width="1140" height="480" src="<?php echo cs_get_option('bideo_link');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
<?php }?>
<?php edit_post_link(); ?>
    <?php get_footer(); ?>