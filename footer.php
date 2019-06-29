<section class="contact" id="contact">
        <div class="container">
            <h2 class="txt-center"><?php echo cs_get_option('contactform7_title');?></h2>
            <p><?php echo cs_get_option('contactform7_sub_title');?></p>
            <div class="contactForm"> 
                <?php
                 $form = cs_get_option('contactform7'); 
                 echo  do_shortcode("'".$form."'");
                ?>
            </div>
        </div>
    </section>
	
		
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
	

    <section class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                         <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php if(cs_get_option('log_c')){?>
                        <img src="<?php echo cs_get_option('log_c');?>" alt="logo"> 
                        <?php }else{ echo cs_get_option('logo_text_c'); }?>
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
                <div class="col-sm-4 text-center">
			<?php echo cs_get_option('footer_contactinfo');?>                    
                </div>
                <div class="col-sm-4">
                <p><?php echo cs_get_option('foorer_descriptio');?></p>
                </div>
            </div>
        </div>
    </section>
	<footer id="colophon" class="site-footer">
		<div class="site-info">        
        <?php echo cs_get_option('copuright');?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<div id="dddiv">
	
</div>
<?php wp_footer(); ?>

  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.js"></script>
     <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
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

<script>
$(document).ready(function(){
  $("#requistapi").click(function(){
alert( $("form").serialize());
  });
});
</script>
</body>
</html>