<<<<<<< Updated upstream:wp-content/themes/lava/functions.php
<!-- This is where you can override wordpress functions -->
=======
<!-- This is where you can override wordpress functions -->

<?php 

    function lava_theme_support() {

        // Adds dynamic title tag support 
        add_theme_support('title-tag');
    
    }

    add_action('after_setup_theme','lava_theme_support');

    // Registers the CSS and other Style elements for this theme
    function lava_register_styles() {

        // Dunno how this variable works exactly.
        // Is this a proprietary method for Wordpress?
        $version = wp_get_theme()->('Version');

        // Load CSS
        wp_enqueue_style('lava-style', get_template_directory_uri() . "/style.css", array(''), $version, 'all');

        // Load Bootstrap
        wp_enqueue_style('lava-bootstrap', get_template_directory_uri() . "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(),'1.0', 'all');

        // Load FontAwesome
        wp_enqueue_style('lava-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), '1.0', 'all');

    } 

    // Above method will be executed alonside the vanilla WP script 'wp_enqueue_scripts'
    add_action('wp_enqueue_scripts','lava_register_styles');
    
    // Registers the scripts for this theme
    function lava_register_scripts() {

        // Actually loads a script, last parameter set to true whch will allow script to load around the footer.
        
        // JQuery
        wp_enqueue_script('lava-jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(), true);
        
        // Popper JS
        wp_enqueue_script('lava-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',array(), true);
        
        // Bootstrap JS
        wp_enqueue_script('lava-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array(), true);
        
        // Custom Script
        // Change fields to add custom script.
        wp_enqueue_script('lava-custom-script', get_template_directory_uri() . '/assets/js/script.js',array(), true);

    } 

    // Above method will be executed alonside the vanilla WP script 'wp_enqueue_scripts'
    add_action('wp_enqueue_scripts','lava_register_scripts');

?>
>>>>>>> Stashed changes:wp-content/themes/lava/deprecated/functions.php
