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
                'render_template'   => 'template-parts/blocks/carousel/carousel.php',
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true
            ));
            // register a services block.
            acf_register_block_type(array(
                'name'              => 'services',
                'title'             => __('FEW Services'),
                'description'       => __('A custom services block.'),
                'render_template'   => 'template-parts/blocks/services/services.php',
                'category'          => 'common',
                'icon'              => 'shield-alt',
                'mode' => 'auto',
                'show_in_graphql'   => true
            ));

        }
    }
