<?php

// Como linkear todos los estilos

    function wpt_theme_styles(){
        wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

        wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

        

    }

    add_action('wp_enqueue_scripts', 'wpt_theme_styles');

// Como linkear todos los scripts

    function wpt_theme_js(){
        wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js','', '', false);
        wp_enqueue_script('browser_js', get_template_directory_uri() . '/assets/js/browser.min.js','', '', false);
        wp_enqueue_script('breakpoints_js', get_template_directory_uri() . '/assets/js/breakpoints.min.js','', '', false);
        wp_enqueue_script('util_js', get_template_directory_uri() . '/assets/js/util.js','', '', false);
        wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js',array('jquery'), '', false);

        

        // wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);

    }

    add_action('wp_enqueue_scripts', 'wpt_theme_js');

    
?>