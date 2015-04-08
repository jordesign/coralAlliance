<!DOCTYPE html>
<?php
/**
 * The Header for our theme
 *
 *
 * @package WordPress
 * @subpackage jg_CoralAlliance
 * @since jg_coralAlliance 1.0
 */
?>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>

    <!-- Meta Tags & Browser Stuff -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>images/favicon.ico" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <!-- The mountain of stuff WP puts in -->
    <?php wp_head(); ?>
    <!--[if lt IE 9 ]>  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.min-ck.js"></script> <![endif]-->
</head>
<body <?php body_class(); ?>>
<script language="javascript" type="text/javascript">
    <!--
    function popitup(url) {
        newwindow=window.open(url,'name','height=300,width=500');
        if (window.focus) {newwindow.focus()}
        return false;
    }

// -->
</script> 
<!-- HEADER SECTION contains only the logo -->
<div class="header">
    <div class="logo">
        <h1><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="The Coral Alliance: Protecting our Reef Together">
         </h1>
    </div>
</div>