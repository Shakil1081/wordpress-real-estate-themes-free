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
                           <a href="<?php echo cs_get_option('facebook_link');?>"> <span class="fa-stack fa-lg"><i class="fa fa-facebook"></i></span></a>
                          
                        </li>
                        <?php }?>
                        <?php if( ! empty( cs_get_option('twitter_link'))){?>
                        <li>
                            <a href="<?php echo cs_get_option('twitter_link');?>"><span class="fa-stack fa-lg"><i class="fa fa-twitter"></i></span></a>
                        </li>
                        <?php }?>
                        <?php if( ! empty( cs_get_option('linkedin_link'))){?>
                         <li>
                            <a href="<?php echo cs_get_option('linkedin_link');?>"><span class="fa-stack fa-lg"><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        <?php }?>
                        <?php if( ! empty( cs_get_option('pinterest_link'))){?>
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


    <!-- script -->
    <!--<script src="https://code.jquery.com/jquery-2.2.4.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>-->
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>-->
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.custom.js"></script>-->
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
	
</script>
</body>
</html>