<?php


    $apiKey = 'AIzaSyC3j836VjUAVooLy7Py099a7rv70ZTy9XY';

      // Method 1: Filter.
    function my_acf_google_map_api( $api ){
        $api['key'] = $apiKey;
        return $api;
    }
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



    add_action('enqueue_block_editor_assets', 'gutenberg_editor_css');

    function gutenberg_editor_css() {
        $css = '/editor-styles.css';
        $version = filemtime(get_stylesheet_directory().$css);
        wp_enqueue_style('editor-css', get_stylesheet_directory_uri().$css, [], $version);
        // [Slick]
		wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '20210327' , true );
		wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '20210327' , true );
		wp_enqueue_style('slick-css-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '20210327' , true );
    }


    add_action('acf/init', 'fewcrew_acf_init_block_types');

    function fewcrew_acf_init_block_types() {
        // Check function exists.
        if( function_exists('acf_register_block_type') ) {
            // register a carousel block.
            acf_register_block_type(array(
                'name'              => 'carousel',
                'title'             => __('FEW Carousel'),
                'description'       => __('A custom carousel block.'),
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true,
                'render_template'   => get_template_directory() . '/template-parts/blocks/carousel/carousel.php',
                'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/carousel/carousel.js',
                // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/carousel/carousel.css',
            ));
            acf_register_block_type(array(
                'name'              => 'contact',
                'title'             => __('FEW Contact'),
                'description'       => __('A custom contact block.'),
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true,
                'render_template'   => get_template_directory() . '/template-parts/blocks/contact/contact.php',
                'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/contact/contact.js',
                // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/carousel/carousel.css',
            ));
            acf_register_block_type(array(
                'name'              => 'event-list',
                'title'             => __('FEW Event List'),
                'description'       => __('A custom event list block.'),
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true,
                'render_template'   => get_template_directory() . '/template-parts/blocks/event-list/event-list.php',
                'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/event-list/event-list.js',
                // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/carousel/carousel.css',
            ));
            acf_register_block_type(array(
                'name'              => 'social-media',
                'title'             => __('FEW Social Media'),
                'description'       => __('A custom social media block.'),
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true,
                'render_template'   => get_template_directory() . '/template-parts/blocks/social-media/social-media.php',
                'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/social-media/social-media.js',
                // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/carousel/carousel.css',
            ));
            // register a services block.
            acf_register_block_type(array(
                'name'              => 'services',
                'title'             => __('FEW Services'),
                'description'       => __('A custom social media block.'),
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true,
                'render_template'   => get_template_directory() . '/template-parts/blocks/services/services.php',
                'enqueue_script'    => get_template_directory_uri() . '/template-parts/blocks/services/services.js',
            ));

        }
    }
