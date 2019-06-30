<?php
/*
* Template Name: Home page
*
*/

get_header(); ?>
<?php global $wd_wt; $meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );
 ?>
<body <?php body_class(); ?>  itemscope itemtype="http://schema.org/WebPage">
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
                        <a itemprop="url" class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php if(cs_get_option('log_c')){?>
                        <img  itemprop="logo" src="<?php echo cs_get_option('log_c');?>" alt="logo"> 
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
        <!-- banner -->
        <div class="container">
            <div class="bannerOuter">
                <div class="banner">
                    <div class="bannerContent">
					
                     <!--<h1><?php echo cs_get_option('heto_title');?></h1>-->
                        <p itemprop="telephone" class="site-info"><?php echo cs_get_option('heto_sub_title');?> <br><i class="fa fa fa-phone-square"></i>&nbsp;<a href="tel:<?php echo cs_get_option('phone_number');?>"><?php echo cs_get_option('phone_number');?></a></p>
						<meta itemprop="contactType" content="sales"/>
						<meta itemprop="contactOption" content="HearingImpairedSupported"/>
						<meta itemprop="areaServed" content="CA"/> 
						<meta itemprop="availableLanguage" content="English"/>						
                        <a href="<?php echo cs_get_option('heto_button_link');?>" class=" top-pdng btn btn-default hvr-bounce-to-right"><i class="fa fa-user-circle-o"></i>&nbsp;<?php echo cs_get_option('heto_button_text');?></a>
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
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                </div>
            </div>
            <?php if(cs_get_option('upload_image_table')){ ?>
            <div class="gallery col-sm-6">            
            <a href="<?php echo cs_get_option('upload_image_table');?>">
            <img src="<?php echo cs_get_option('upload_image_table');?>" alt="Mirvish Gehry Condos in Toronto" style="max-width: 85%;">
            </a>
         </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<!--===========================
Section bellow table
===============================-->
<?php if($meta_data['bello_sat_title']){?>
	

	
	
<section class="grey_section">
        <div class="container">
             <div class="purchase_service txt-center">
                <h2 itemprop="name" ><?php echo $meta_data['bello_sat_title'];?></h2>
                <p>
                <?php echo $meta_data['bello_table_descriptio'];?>
                </p>
                
				 	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo get_site_url(); ?>/article"
  },
  "headline": "<?php bloginfo('name'); ?>",
  "image": [
    "<?php echo $meta_data['section_top_bg'];?>",
    "<?php echo cs_get_option('log_c');?>"
   ],
  "datePublished": "<?php echo date('Y'); ?>-02-05T08:00:00+08:00",
  "dateModified": "
<?php echo date('Y'); ?>-02-05T09:20:00+08:00",
  "author": {
    "@type": "Person",
    "name": "shakil Hossain"
  },
   "publisher": {
    "@type": "Organization ",
    "name": "<?php bloginfo('name'); ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo $meta_data['section_top_bg'];?>"
    }
  },
  "description": "<?php echo $meta_data['bello_table_descriptio'];?>"
}
</script>
            </div>
            <div class="text-center">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="#contact" class="btn btn-default hvr-bounce-to-right"> &nbsp;GET PRICES & PACKAGE</a>
          </div>
          <div class="btn-group mr-2" role="group" aria-label="Second group">
           <a href="tel:+4166608555" class="btn btn-default hvr-bounce-to-right"><i class="fa fa-phone-square" aria-hidden="true"></i>  416-660-8555</a>
          </div>
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
            <?php if($meta_data['section_a_upload']){?>
            <div class="col-sm-3">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_a_upload']; ?>">
                  <img  itemprop="image" src="<?php echo $meta_data['section_a_upload']; ?>" alt="my condo">
                  </a>
                  </div>
            </div>
            <?php  } ?>
           </div>
    </section>
<?php  } ?>
<!--===================
section B
==================-->
<?php if($meta_data['section_b_text']){?>
    <section class="builderPage grey_section">
        <div class="container aminitie-area">
            <?php if($meta_data['section_b_upload']){?>
           <div class="col-sm-3">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_b_upload']; ?>">
                  <img itemprop="image" src="<?php echo $meta_data['section_b_upload']; ?>" alt=" confo for sale">
                  </a>
                 </div>
                    </div>
            <?php } ?>
            <?php if($meta_data['section_b_upload']){ ?>
            <div class="col-sm-9">
            <h2 class="text-right"><?php echo $meta_data['section_b_text'];?></h2>
                <p><?php echo $meta_data['section_b_textarea']; ?></p> 
            </div>
            <?php } ?>
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
            <?php if($meta_data['section_c_upload']){?>
            <div class="col-sm-3">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_c_upload']; ?>">
                  <img itemprop="image" src="<?php echo $meta_data['section_c_upload']; ?>" alt="condo list">
                  </a>
                  </div>
            </div>
            <?php }?>
           </div> 
    </section>

<?php  } ?>

<!--===================
section D
==================-->
<?php if($meta_data['section_d_text']){?>
    <section class="builderPage grey_section">
        <div class="container aminitie-area">
            <?php if($meta_data['section_d_upload']){?>
           <div class="col-sm-3">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_d_upload']; ?>">
                  <img itemprop="image" src="<?php echo $meta_data['section_d_upload']; ?>" alt="condo image">
                  </a>
                 </div>
                    </div>
            <?php }?>
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
            <?php if($meta_data['section_e_upload']){?>
            <div class=" col-sm-3">
              	<div class="build_image gallery">
                  <a href="<?php echo $meta_data['section_e_upload']; ?>">
                  <img itemprop="image" src="<?php echo $meta_data['section_e_upload']; ?>" alt="mirvish gehry condos">
                  </a>
                  <!--<img src="<?php echo $meta_data['section_e_upload']; ?>" alt="">-->
                  </div>
            </div>
            <?php } ?>
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

<section class="grey_section" >
        <div class="container">
		
        <h2><?php echo cs_get_option('video_title');?></h2>
        <p><?php echo cs_get_option('video_sub_title');?></p>
		 <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
		   <meta itemprop="duration" content="10">
		   <link itemprop="url" href="<?php echo cs_get_option('bideo_link');?>" rel="author"/>
            <div class="video-wrapper">
            <iframe width="1140" height="480" src="<?php echo cs_get_option('bideo_link');?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
		</div>
        </div>
    </section>

<?php edit_post_link(); ?>
    <section class="footer1">
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
                         <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php if(cs_get_option('log_c')){?>
                        <img itemprop="image" src="<?php echo cs_get_option('log_c');?>" alt="logo"> 
                        <?php }else{ 
                        echo cs_get_option('logo_text_c');
                        }?>
                        </a>  
                
                        <ul class="stayInTouch text-left">
                          <?php if( !cs_get_option('facebook_link')){?>
                        <li>
                           <a href="<?php echo cs_get_option('facebook_link');?>"> <span class="fa-stack fa-lg"><i class="fa fa-facebook"></i></span></a>
                          
                        </li>
                        <?php }?>
                        <?php if( !cs_get_option('twitter_link')){?>
                        <li>
                            <a href="<?php echo cs_get_option('twitter_link');?>"><span class="fa-stack fa-lg"><i class="fa fa-twitter"></i></span></a>
                        </li>
                        <?php }?>
                        <?php if( !cs_get_option('linkedin_link')){?>
                         <li>
                            <a href="<?php echo cs_get_option('linkedin_link');?>"><span class="fa-stack fa-lg"><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        <?php }?>
                        <?php if( !cs_get_option('pinterest_link')){?>
                         <li>
                            <a href="<?php echo cs_get_option('pinterest_link');?>"><span class="fa-stack fa-lg"><i class="fa fa-pinterest"></i></span></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="col-sm-4">
                <?php echo cs_get_option('footer_contactinfo');?>                    
                </div>
                <div class="col-sm-4">
                <p><?php echo cs_get_option('foorer_descriptio');?></p>
               
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">        
        <?php echo cs_get_option('copuright');?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

	
		
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "<?php echo cs_get_option('lname');?>",
  "image": "<?php echo cs_get_option('lImageURL');?>",
  "@id": "<?php echo cs_get_option('lidURL');?>",
  "url": "<?php echo cs_get_option('lURL');?>",
  "telephone": "+<?php echo cs_get_option('lPhone');?>",
  "priceRange": "<?php echo cs_get_option('lPricerange');?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo cs_get_option('lStreet');?>",
    "addressLocality": "<?php echo cs_get_option('lCity');?>",
    "addressRegion": "<?php echo cs_get_option('lZipcode');?>",
    "postalCode": "<?php echo cs_get_option('laddressRegion');?>",
    "addressCountry": "<?php echo cs_get_option('lcountry');?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?php echo cs_get_option('lLatitude');?>,
    "longitude": <?php echo cs_get_option('lLongitude');?>
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "<?php echo cs_get_option('lfacebookurl');?>",
    "<?php echo cs_get_option('ltwitterurl');?>"
  ]
}
</script>
	

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
     <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.min.js"></script>
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
	});
</script>
</body>
</html>