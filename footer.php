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
	<footer id="colophon" class="site-footer">
		<div class="site-info">        
        <?php echo cs_get_option('copuright');?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php wp_footer(); ?>


    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.custom.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simple-lightbox.js"></script>
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
	
	
	
	function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {
            lat: 44.540,
            lng: -78.546
        },
        zoom: 8
    });
}

$(document).ready(function() {
    initMap();
})

</script>
</body>
</html>