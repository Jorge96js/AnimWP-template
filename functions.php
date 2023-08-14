<?php

    //includes
    require get_template_directory() . '/include/widgets.php';

    function templete_setup(){
        // Imagenes destacadas
        add_theme_support('post-thumbnails');

        //titulos seo
        add_theme_support( 'title-tag' );
    }
    add_action('after_setup_theme','templete_setup');

    //registro de menus
    
    function animwp_theme_menus(){
        register_nav_menus( array(
            'main-menu' => __('Main menu', 'AniWP Theme')
        ));
    }
    add_action('init','animwp_theme_menus');

    function animwp_script_style(){
        wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(),'10.1.0');
        wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(),'v8.0.1');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');


        //scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',array(), '10.1.0', true );
        wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('swiper-js'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts','animwp_script_style');


    //Registro de widgets

    function animwp_theme_widgets(){
        register_sidebar(array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget'=> '<div class="widget">',
            'afer_widget' => '</div>',
            'before_tite' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ));
    }

    add_action('widgets_init','animwp_theme_widgets');