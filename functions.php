<?php
/**
 * Gather all bits and pieces together.
 * If you end up having multiple post types, taxonomies,
 * hooks and functions - please split those to their
 * own files under /inc and just require here.
 *
 * @Date: 2019-10-15 12:30:02
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-27 10:37:08
 *
 * @package fewcrew
 */

namespace Few_Crew;

/**
 * The current version of the theme.
 */
define( 'Few_Crew_VERSION', '1.0.0' );

/**
 * Theme settings
 */
// We need to have some defaults as comments or empties so let's allow this:
// phpcs:disable Squiz.Commenting.InlineComment.SpacingBefore, WordPress.Arrays.ArrayDeclarationSpacing.SpaceInEmptyArray
add_action( 'after_setup_theme', function() {
  $theme_settings = [
    /**
     * Theme textdomain
     */
    'textdomain' => 'fewcrew',

    /**
     * Image and content sizes
     */
    'image_sizes' => [
      'small'   => 414,
      'medium'  => 768,
      'large'   => 1024,
      'xlarge'   => 1800,
    ],
    'content_width' => 1800,

    /**
     * Logo and featured image
     */
    'default_featured_image'  => null,
    'logo'                    => '/svg/fewcrew-logo-text.svg',
    'logo_mobile'             => '/svg/fewcrew-logo-text.svg',
    'width'                   => null,

    /**
     * Custom setting group settings when using Air setting groups plugin.
     * On multilingual sites using Polylang, translations are handled automatically.
     */
    'custom_settings' => [
      // 'your-custom-setting' => [
      //   'id' => Your custom setting post id,
      //   'title' => 'Your custom setting',
      //   'block-editor' => true,
      //  ],
    ],

    'social_media_accounts'  => [
      // 'twitter' => [
      //   'title' => 'Twitter',
      //   'url'   => 'https://twitter.com/digitoimistodude',
      // ],
    ],

    /**
     * All links are cheked with JS, if those direct to external site and if,
     * indicator of that is included. Exclude domains from that check in this array.
     */
    'external_link_domains_exclude' => [
      // 'localhost:3000',
      // 'airdev.test',
      // 'airwptheme.com',
    ],

    /**
     * Menu locations
     */
    'menu_locations' => [
      'header_primary' => __( 'Account Menu', 'fewcrew' ),
      'header_secondary' => __( 'Sales Menu', 'fewcrew' ),
      'header_tertiary' => __( 'Navigation Menu', 'fewcrew' ),
      'footer' => __( 'Footer Menu', 'fewcrew' ),
    ],

    /**
     * Taxonomies
     *
     * See the instructions:
     * https://github.com/digitoimistodude/fewcrew#custom-taxonomies
     */
    'taxonomies' => [
      // 'your-taxonomy' => [
      //   'name' => 'Your_Taxonomy',
      //   'post_types' => [ 'post', 'page' ],
      // ],
    ],

    /**
     * Post types
     *
     * See the instructions:
     * https://github.com/digitoimistodude/fewcrew#custom-post-types
     */
    'post_types' => [
      // 'your-post-type' => 'Your_Post_Type',
    ],

    /**
     * Gutenberg -related settings
     */
    // Register custom ACF Blocks
    'acf_blocks' => [
      [
        'name'           => 'contentsectiontitle',
        'title'          => 'Content Section Title',
        'prevent_cache'  => false,
        'icon'  => 'heading',
      ],
      [
        'name'           => 'carouselfullscreen',
        'title'          => 'Carousel Full Screen',
        'prevent_cache'  => false,
        'icon'  => 'slides',
      ],
      [
        'name'           => 'contentcardgrid',
        'title'          => 'Content Card Grid',
        'prevent_cache'  => false,
        'icon'  => 'layout',
      ],
      [
        'name'           => 'cardstatstable',
        'title'          => 'Card Stats Table',
        'prevent_cache'  => false,
        'icon'  => 'layout',
      ],
      [
        'name'           => 'cardfullimage',
        'title'          => 'Card Full Image',
        'prevent_cache'  => false,
        'icon'  => 'layout',
      ],
    ],

    // Custom ACF block default settings
    'acf_block_defaults' => [
      'category'          => 'fewcrew',
      'mode'              => 'auto',
      'align'             => 'full',
      'post_types'        => [
        'page',
      ],
      'supports'  => [
        'align'           => false,
        'anchor'          => true,
        'customClassName' => false,
      ],
      'render_callback'   => __NAMESPACE__ . '\render_acf_block',
    ],

    // Restrict to only selected blocks
    // Set the value to 'all' to allow all blocks everywhere
   'allowed_blocks' => [
      'default' => [],
      'post' => [
        'core/archives',
        'core/audio',
        'core/buttons',
        'core/categories',
        'core/code',
        'core/column',
        'core/columns',
        'core/coverImage',
        'core/embed',
        'core/file',
        'core/freeform',
        'core/gallery',
        'core/heading',
        'core/html',
        'core/image',
        'core/latestComments',
        'core/latestPosts',
        'core/list',
        'core/more',
        'core/nextpage',
        'core/paragraph',
        'core/preformatted',
        'core/pullquote',
        'core/quote',
        'core/block',
        'core/separator',
        'core/shortcode',
        'core/spacer',
        'core/subhead',
        'core/table',
        'core/textColumns',
        'core/verse',
        'core/video',
      ],
    ],

    // If you want to use classic editor somewhere, define it here
    'use_classic_editor' => [],

    // Add your own settings and use them wherever you need, for example THEME_SETTINGS['my_custom_setting']
    'my_custom_setting' => true,
  ];

  $theme_settings = apply_filters( 'Few_Crew_theme_settings', $theme_settings );

  define( 'THEME_SETTINGS', $theme_settings );
} ); // end action after_setup_theme


/**
 * Theme Custom Image Sizes
 */
add_theme_support('post-thumbnails');
add_image_size('post-thumbnail size', 800, 240);
add_image_size('homepage-thumb size', 220, 180);
add_image_size('fullpage-thumb size', 590, 790);


function funny($arr=[], $options='') {
  if ($options == 'dump') {
    return '<pre>' . var_dump($arr) . '</pre>';
  } else {
    return '<pre>' . print_r($arr) . '</pre>';
  }
}

/**
 * Required files
 */
require get_theme_file_path( '/inc/functions/index.php' );
require get_theme_file_path( '/inc/hooks.php' );
require get_theme_file_path( '/inc/includes.php' );
require get_theme_file_path( '/inc/template-tags.php' );

// Run theme setup
add_action( 'init', __NAMESPACE__ . '\theme_setup' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\build_theme_support' );
