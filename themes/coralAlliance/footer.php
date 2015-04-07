<?php
/**
 * Footer content common to all pages
 *
 *
 * @package WordPress
 * @subpackage jg_CoralAlliance
 * @since jg_coralAlliance 1.0
 */
?>
<!-- Footer Locations -->
<?php global $cs_layout_type; ?>

    


<!-- Utilities -->
<?php global $cs_layout_type; ?>
<?php if ( has_nav_menu( 'utility-menu' ) ) { ?>
    
    <?php if($cs_layout_type === 'rows') { ?>
        <div class="row utilities">
    <?php } ?>
    
        <div class="container <?php if($cs_layout_type === 'containers') { ?>utilities<?php } ?>">
            <div class="columns large-12">
                <?php wp_nav_menu( array( 'theme_location' => 'utility-menu' ) );  ?>
                <div class="locationDetails">
                    <p><i class="fa fa-map-marker"></i><?php echo cfs_get_option( 'options', 'cs_service_details' ); ?></p>
                </div>
        	    
            </div>    	
        </div>
    <?php if($cs_layout_type === 'rows') { ?>
    </div>
    <?php } ?>
    
<?php } ?>


<!-- Footer -->    

    <div class="row footer">

    	<div class="footerLogo">
    	   <?php if ( cfs_get_option( 'options', 'footer_logo' ) ){ $value = cfs_get_option( 'options', 'footer_logo' ); ?>
                    <img src="<?php echo $value; ?> " alt="<?php cfs_get_option( 'options', 'cs_church_name' ); ?>">
                <?php  } ?>
        </div>

        <div class="footerSocial">
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

            <a href="http://www.jordesign.com" class="credit"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jordesign.png" alt="Website by Jordesign"></a>

        </div>

    	   <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?>. All rights reserved</p>
        </div>
        
    
</div>
<!-- END Footer --> 

<?php global $cs_menu_type;
    if($cs_menu_type === 'slide-in') { ?>
        </div>
    <?php } ?>
<!-- END Global Wrapper --> 		
    
    <?php wp_footer(); ?>

	<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</body>
</html>

