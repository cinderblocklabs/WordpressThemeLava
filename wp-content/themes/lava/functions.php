<!-- FUNCTIONS FILE -->

<?php 

    function lava_register_styles () {

        // CUSTOM CSS
        // method('name of function', gtdu() . 'path of css file', array(), 'version','all', '(OPTIONAL)which type of stylesheet');
        wp_enqueue_style('lava-style',get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
        
        // BOOTSTRAP
        // wp_enqueue_style('lava-bootstrap',get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
        
        // FONTAWESOME
        // wp_enqueue_style('lava-fontawesome',get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

    }
    add_action('wp_enqueue_scripts','lava_register_styles')

?>