<?php
/*
* Template Name: Home page
*
*/

get_header(); ?>
<?php global $wd_wt; $meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );
 ?>
<body <?php body_class(); ?>>
    <div class="wrapper" style="background-image: url(<?php if( $meta_data['section_top_bg']){ echo $meta_data['section_top_bg']; }else{ echo esc_url( get_template_directory_uri() ).'/images/home_banner.png'; }?>);">
        <!-- header -->
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
            <div class="bannerOuter">
                <div class="banner">
                    <div class="bannerContent">
                     <!--<h1><?php echo cs_get_option('heto_title');?></h1>-->
                        <p class="site-info"><?php echo cs_get_option('heto_sub_title');?> <br><i class="fa fa fa-phone-square"></i>&nbsp;<?php echo cs_get_option('phone_number');?></p>
                        <a href="<?php echo cs_get_option('heto_button_link');?>"><button class=" top-pdng btn btn-default hvr-bounce-to-right"><?php echo cs_get_option('heto_button_text');?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->
    </div>

    <!-- section -->
    <section class="homesection">
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
<section id="twobutton">
 <div class="container">
     <div class="text-center">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="#contact" class="btn btn-default hvr-bounce-to-right">GET PRICES & PACKAGE</a>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
           <a href="tel:+4166608555" class="btn btn-default hvr-bounce-to-right">CALL - 416-660-8555</a>
          </div>
 </div>
 </section>
<!--===========================
Section bellow table
===============================-->
<?php if($meta_data['bello_sat_title']){?>
<section class="grey_section">
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
<section class="builderPage">
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
    <section class="builderPage grey_section">
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
<section class="builderPage">
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
    <section class="builderPage grey_section">
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
<section class="builderPage">
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

    <section class="contact" id="contact">
        <div class="container">
            <h2 class="txt-center"><?php echo cs_get_option('contactform7_title');?></h2>
             <h4 class="color_b"><?php echo cs_get_option('contactform7_sub_title');?></h4>
            <div class="contactForm"> 
                <?php
                 $form = cs_get_option('contactform7'); 
                 echo  do_shortcode("'".$form."'");
                ?>
            </div>
        </div>
    </section>
<!--===================
section Maping
==================-->

<?php if(cs_get_option('mping')){?>
<section class="map">
    <?php echo cs_get_option('mping');?>
    </section>
<?php } ?>

<!--===================
section Video
==================-->
<?php if( ! empty( cs_get_option('bideo_link'))){?>
<section class="grey_section" >
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
    <section class="footer1">
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
                         <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php if(cs_get_option('log_c')){?>
                        <img src="<?php echo cs_get_option('log_c');?>" alt="logo"> 
                        <?php }else{ 
                        echo cs_get_option('logo_text_c');
                        }?>
                        </a>  
                
                         <ul class="stayInTouch text-left">
                          <?php if( ! empty( cs_get_option('facebook_link'))){?>
                        <li>
                           <a href="<?php echo cs_get_option('facebook_link');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt=""></a>
                        </li>
                        <?php }?>
                        <?php if( ! empty( cs_get_option('twitter_link'))){?>
                        <li>
                            <a href="<?php echo cs_get_option('twitter_link');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt=""></a>
                        </li>
                        <?php }?>
                        <?php if( ! empty( cs_get_option('linkedin_link'))){?>
                         <li>
                            <a href="<?php echo cs_get_option('linkedin_link');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/linkedin.png" alt=""></a>
                        </li>
                        <?php }?>
                        <?php if( ! empty( cs_get_option('pinterest_link'))){?>
                         <li>
                            <a href="<?php echo cs_get_option('pinterest_link');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pinterest.png" alt=""></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="col-sm-4">
                <?php echo cs_get_option('footer_contactinfo');?>                    
                </div>
                <div class="col-sm-4">
                <p><?php echo cs_get_option('foorer_descriptio');?></p>
                <!--
                    <h4>STAY IN TOUCH</h4>
                    <ul class="stayInTouch">
                        <li>
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt=""></a>
                        </li>

                    </ul>-->
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">        
        <?php echo cs_get_option('copuright');?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.js"></script>
     <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.min.js"></script>
     <script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();
		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>
<?php echo '<style>.affix,.btn-default,input[type="submit"]{background:'.cs_get_option('main_picker');?>
<?php echo '}body{color:'.cs_get_option('title_color_picker');?>
<?php echo '}.grey_section{background:'.cs_get_option('text_color_picker');?>
<?php echo '}.footer1{background-color:'.cs_get_option('baground_color_sectopm');?>
<?php echo '}h2, h1 a,h1,.color_b{color:'.cs_get_option('text_head');?>
<?php echo '}.site-info,.navbar-nav > li > a,.navbar-brand,.btn-default,input[type="submit"]{color:'.cs_get_option('brand_text_color');?>
<?php echo '}section.toranto{background-color:'.cs_get_option('table_section');?>
<?php echo '}section.toranto .txt-center, section.toranto .table, .footer1, .footer1 a{color:'.cs_get_option('table_section_text');?>
<?php echo '}footer{background-color:'.cs_get_option('Other_color_picker').'}</style>';?>
</body>
</html>