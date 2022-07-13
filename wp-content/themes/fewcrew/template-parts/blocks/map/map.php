<?php
    $apiKey = 'AIzaSyC3j836VjUAVooLy7Py099a7rv70ZTy9XY';

      // Method 1: Filter.
    function my_acf_google_map_api( $api ){
        $api['key'] = $apiKey;
        return $api;
    }
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

    // Method 2: Setting.
    function my_acf_init() {
        acf_update_setting('google_api_key', $apiKey);
    }
    add_action('acf/init', 'my_acf_init');
