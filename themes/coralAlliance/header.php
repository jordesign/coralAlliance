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

<!-- global wrapper for slide-in menu -->
<?php global $cs_menu_type;
    if($cs_menu_type === 'slide-in') { ?>
        <div id="wrapper">
    <?php } ?>

<!-- Header -->    

    <div class="row header">

    <div class="container role="banner">
        <?php if(is_front_page()) { ?>
            <h1 class="columns large-4 small-8"><a class="logo" href="<?php bloginfo('url'); ?>/">
                <?php if ( cfs_get_option( 'options', 'cs_church_logo' ) ){ $value = cfs_get_option( 'options', 'cs_church_logo' ); ?>
                    <img src="<?php echo $value; ?> " alt="<?php cfs_get_option( 'options', 'cs_church_name' ); ?>">
                <?php  }else{ cfs_get_option( 'options', 'cs_church_name' );  } ?>
            </a></h1>
        <?php }else{ ?>
            <h5 class="columns large-4 small-8"><a class="logo" href="<?php bloginfo('url'); ?>/">
                <?php if ( cfs_get_option( 'options', 'cs_church_logo' ) ){ $value = cfs_get_option( 'options', 'cs_church_logo' ); ?>
                    <img src="<?php echo $value; ?> " alt="<?php cfs_get_option( 'options', 'cs_church_name' ); ?>">
                <?php  }else{ cfs_get_option( 'options', 'cs_church_name' );  } ?>
            </a></h5>
        <?php } ?>

        <div class="nav columns large-8 <?php  if($cs_menu_type === 'slide-in') { ?>slide-in<?php }else{ ?>slide-down<?php } ?>" id="mainNav" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
            
            <a href="#" id="close-menu">close</a>
            <div class="social">
            <?php if (cfs_get_option( 'options', 'twitter_url') ){ ?>
                <a href="<?php echo cfs_get_option( 'options', 'twitter_url' ); ?>" class="twitter"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
            <?php } ?>

            <?php if (cfs_get_option( 'options', 'facebook_url') ){ ?>
                <a href="<?php echo cfs_get_option( 'options', 'facebook_url' ); ?>" class="facebook"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
            <?php } ?>

            <?php if (cfs_get_option( 'options', 'instagram_url') ){ ?>
                <a href="<?php echo cfs_get_option( 'options', 'instagram_url' ); ?>" class="instagram"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
            <?php } ?>

            <?php if (cfs_get_option( 'options', 'youtube_url') ){ ?>
                <a href="<?php echo cfs_get_option( 'options', 'youtube_url' ); ?>" class="youtube"><i class="fa fa-youtube-play"></i> <span>YouTube</span></a>
            <?php } ?>

        </div>
        </div>
        <a href="#mainNav" class="menu-link <?php  if($cs_menu_type === 'slide-in') { ?>slide-in<?php }else{ ?>slide-down<?php } ?>"><i class="fa fa-bars"></i>Menu</a>

    </div>

    </div>
<!-- END header -->

