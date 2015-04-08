<?php
ob_start();


    
/* ========================================================================================================================
    
    Site Scripts - theme scripts, and specific plugin scripts
    
    ======================================================================================================================== */ 

    // Site Functions Scripts
function coralAlliance_load_scripts() {  
        //Theme Scripts
        wp_enqueue_script('themeScripts', get_template_directory_uri().'/js/cs_scripts-ck.js', array('jquery'), NULL, true );

        //Theme Stylesheets
        
            wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

            // This is the stylsheet for the fonts - replace as needed
            wp_enqueue_style( 'jg_fonts', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700');
     
}
add_action('wp_enqueue_scripts', 'coralAlliance_load_scripts'); 
	


    
    
 /* ========================================================================================================================
 	
 	Adding Theme Support, Menus, Image Sizes and Sidebars
 	
 	======================================================================================================================== */   
    
        // Add support - remove comments to add background and header support
        add_theme_support('post-thumbnails');
        //add_theme_support('menus');
        //add_theme_support( 'html5', array( 'search-form' ) );
        
        
        //Disallow edition of files throught WP editor 
        define('DISALLOW_FILE_EDIT', true); 


        // Register Navigation Areas
        /* register_nav_menus( array(
            'primary-menu' => __( 'Main Menu', 'shape' ),
            'utility-menu' => __( 'Top Menu', 'shape' ),
            
        ) ); */
        
        
        // Add Image Sizes
        //add_image_size('large', 700, '', true); // Large Thumbnail
        //add_image_size('medium', 250, '', true); // Medium Thumbnail
        //add_image_size('small', 120, '', true); // Small Thumbnail
	
	    
	