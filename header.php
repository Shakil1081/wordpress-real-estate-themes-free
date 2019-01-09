
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
    <link href='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/simplelightbox.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
  	<link rel="icon" href="<?php echo cs_get_option('favicon');?>" sizes="16x16" type="image/png">
	<?php echo '<style>.affix,.btn-default,input[type="submit"]{background:'.cs_get_option('main_picker');?>
<?php echo '}body{color:'.cs_get_option('title_color_picker');?>
<?php echo '}.grey_section{background:'.cs_get_option('text_color_picker');?>
<?php echo '}.footer1{background-color:'.cs_get_option('baground_color_sectopm');?>
<?php echo '}h2, h1 a,h1,.color_b{color:'.cs_get_option('text_head');?>
<?php echo '}.site-info,.navbar-nav > li > a,.navbar-brand,.btn-default,input[type="submit"]{color:'.cs_get_option('brand_text_color');?>
<?php echo '}section.toranto{background-color:'.cs_get_option('table_section');?>
<?php echo '}section.toranto .txt-center, section.toranto .table, .footer1, .footer1 a{color:'.cs_get_option('table_section_text');?>
<?php echo '}footer{background-color:'.cs_get_option('Other_color_picker').'}</style>';?>
</head>
