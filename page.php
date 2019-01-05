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
    <div class="wrapper baner-image register_page" style="background-image: url(<?php echo $meta_data['section_top_bg']; ?>);">
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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="bannerOuter">
                <div class="banner">
                    <div class="bannerContent">
						<h1 class="white"><?php if(isset($meta_data['section_a_text'])){?>
						<?php echo $meta_data['section_tp_title']; ?>
						<?php } else{the_title();} ?></h1>
					   </div>
                </div>
            </div>
        </div>
        <!-- banner -->


    <!-- section -->
    <section>
        <div class="container">
            <div class="purchase_service txt-center">
            <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            <?php 
        if(isset($meta_data['gallery_1'])){
           $gallery   = $meta_data['gallery_1'];
           if ( ! empty( $gallery ) ) {
              $ids = explode( ',', $gallery );   
              foreach ( $ids as $id ) { $attachment = wp_get_attachment_image_src( $id, 'full' ); ?>              
                 <div class="col-sm-3 mrb30">
                 <div class="build_image gallery">
                    <a href="<?php echo $attachment[0]; ?>">
                        <img src="<?php echo $attachment[0]; ?>" class="maxh200" alt="<?php echo $id;?>">
                    </a>
                    </div>
                 </div> 
              <?php }
            
                     }
                   }?>
             </div>
        </div>
    </section>
    
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
    </section>
<?php  } ?>
<!--===================
section B
==================-->
<?php  if($meta_data['section_b_text']){?>
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
<?php  if($meta_data['section_c_text']){?>
<section class="builderPage grey_section">
        <div class="container ">
            <div class="<?php if($meta_data['section_c_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
                   <h2><?php echo $meta_data['section_c_text'];?></h2>
                <p><?php echo $meta_data['section_c_textarea']; ?></p>                  
            </div>
            <div class="<?php if($meta_data['section_c_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery ">
                  <a href="<?php echo $meta_data['section_c_upload']; ?>">
                  <img src="<?php echo $meta_data['section_c_upload']; ?>" alt="">
                  </a>
                  </div>
            </div>
           </div> 
    </section>

<?php  } ?>

<!--===================
section D
==================-->
<?php  if($meta_data['section_d_text']){?>
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
section e
==================-->
<?php  if($meta_data['section_e_text']){?>
<section class="builderPage grey_section">
        <div class="container ">
            <div class="<?php if($meta_data['section_e_upload']){ echo "col-sm-9";}else{ echo "col-sm-12";}; ?>">
                   <h2><?php echo $meta_data['section_e_text'];?></h2>
                <p><?php echo $meta_data['section_e_textarea']; ?></p>                  
            </div>
            <div class="<?php if($meta_data['section_e_upload']){ echo "col-sm-3";}else{ echo "displaynone";}; ?>">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_e_upload']; ?>">
                  <img src="<?php echo $meta_data['section_e_upload']; ?>" alt="">
                  </a>
                  </div>
            </div>
           </div> 
    </section>

<?php  } ?>

<?php edit_post_link(); ?>
<?php get_footer(); ?>