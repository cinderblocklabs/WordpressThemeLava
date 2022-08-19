<!-- FUNCTIONS FILE -->

<?php 

    function lava_theme_support () {
        
        // Adds dynamic title tag support
        add_theme_support('title-tag')
  
    }

    add_action('after_theme_setup','lava_theme_support');

    function lava_register_styles () {

        // Gets version from the Wordpress Comment Header in the style.css file
        $version = wp_get_theme()->get('Version');

        // CUSTOM CSS
        // method('name of function', gtdu() . 'path of css file', array(), 'version','all', '(OPTIONAL)which type of stylesheet');
        wp_enqueue_style('lava-style',get_template_directory_uri() . "/style.css", array('lava-boostrap','lava-fontawesome'), $version, 'all');
        
        // BOOTSTRAP
        wp_enqueue_style('lava-boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), $version, 'all');
        
        // FONTAWESOME
        wp_enqueue_style('lava-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' , array(), $version, 'all');

    }

    add_action('wp_enqueue_scripts','lava_register_styles');
    
    function lava_register_scripts () {

        
        // JQUERY
        // Boolean value at the end indicates that I want this script to load in the dfooter and not the header.
        // (It's also optional)
        wp_enqueue_script('lava-jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1',true);
        
        // POPPER.JS
        wp_enqueue_script('lava-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7',true);
        
        // BOOTSTRAP
        wp_enqueue_script('lava-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true);
        
    }

    add_action('wp_enqueue_scripts','lava_register_scripts');

?>