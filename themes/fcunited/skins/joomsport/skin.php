<?php
/**
 * Skins support: Main skin file for the skin 'Default'
 *
 * Setup skin-dependent fonts and colors, load scripts and styles,
 * and other operations that affect the appearance and behavior of the theme
 * when the skin is activated
 *
 * @package WordPress
 * @subpackage FCUNITED
 * @since FCUNITED 1.0.46
 */


// Theme init priorities:
// 3 - add/remove Theme Options elements
if ( ! function_exists( 'fcunited_skin_theme_setup3' ) ) {
	add_action( 'after_setup_theme', 'fcunited_skin_theme_setup3', 3 );
	function fcunited_skin_theme_setup3() {
		// ToDo: Add / Modify theme options, color schemes, required plugins, etc.
	}
}

// Filter to add in the required plugins list
if ( ! function_exists( 'fcunited_skin_tgmpa_required_plugins' ) ) {
	add_filter( 'fcunited_filter_tgmpa_required_plugins', 'fcunited_skin_tgmpa_required_plugins' );
	function fcunited_skin_tgmpa_required_plugins( $list = array() ) {
		// ToDo: Check if plugin is in the 'required_plugins' and add his parameters to the TGMPA-list
		//       Replace 'skin-specific-plugin-slug' to the real slug of the plugin
		if ( fcunited_storage_isset( 'required_plugins', 'joomsport' )  ) {
			$list[] = array(
                'name'     => fcunited_storage_get_array( 'required_plugins', 'joomsport', 'title' ),
                'slug'     => 'joomsport',
                'required' => false,
            );
		}
		return $list;
	}
}

// Enqueue skin-specific styles and scripts
// Priority 1150 - after plugins-specific (1100), but before child theme (1200)
if ( ! function_exists( 'fcunited_skin_frontend_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'fcunited_skin_frontend_scripts', 1150 );
	function fcunited_skin_frontend_scripts() {
		$fcunited_url = fcunited_get_file_url( FCUNITED_SKIN_DIR . 'skin.css' );
		if ( '' != $fcunited_url ) {
			wp_enqueue_style( 'fcunited-skin-' . esc_attr( FCUNITED_SKIN_NAME ), $fcunited_url, array(), null );
		}
		if ( fcunited_is_on( fcunited_get_theme_option( 'debug_mode' ) ) ) {
			$fcunited_url = fcunited_get_file_url( FCUNITED_SKIN_DIR . 'skin.js' );
			if ( '' != $fcunited_url ) {
				wp_enqueue_script( 'fcunited-skin-' . esc_attr( FCUNITED_SKIN_NAME ), $fcunited_url, array( 'jquery' ), null, true );
			}
		}
	}
}

// Enqueue skin-specific responsive styles
// Priority 2050 - after theme responsive 2000
if ( ! function_exists( 'fcunited_skin_styles_responsive' ) ) {
	add_action( 'wp_enqueue_scripts', 'fcunited_skin_styles_responsive', 2050 );
	function fcunited_skin_styles_responsive() {
		$fcunited_url = fcunited_get_file_url( FCUNITED_SKIN_DIR . 'skin-responsive.css' );
		if ( '' != $fcunited_url ) {
			wp_enqueue_style( 'fcunited-skin-' . esc_attr( FCUNITED_SKIN_NAME ) . '-responsive', $fcunited_url, array(), null );
		}
	}
}

// Merge custom scripts
if ( ! function_exists( 'fcunited_skin_merge_scripts' ) ) {
	add_filter( 'fcunited_filter_merge_scripts', 'fcunited_skin_merge_scripts' );
	function fcunited_skin_merge_scripts( $list ) {
		if ( fcunited_get_file_dir( FCUNITED_SKIN_DIR . 'skin.js' ) != '' ) {
			$list[] = FCUNITED_SKIN_DIR . 'skin.js';
		}
		return $list;
	}
}

// Set theme specific importer options
if ( ! function_exists( 'fcunited_skin_importer_set_options' ) ) {
	add_filter('trx_addons_filter_importer_options', 'fcunited_skin_importer_set_options', 9);
	function fcunited_skin_importer_set_options($options = array()) {
		if ( is_array( $options ) ) {
			$rtl_url = is_rtl() ? 'rtl.' : '';
			$options['demo_type'] = 'joomsport';
			$options['files']['joomsport'] = $options['files']['default'];
			$options['files']['joomsport']['title'] = esc_html__('JoomSport', 'fcunited');
			$options['files']['joomsport']['domain_demo'] = esc_url( fcunited_get_protocol() . '://' . $rtl_url . 'joomsport.fc-united.axiomthemes.com' );   // Demo-site domain
            unset($options['files']['default']);
		}
		return $options;
	}
}

if ( ! function_exists( 'fcunited_customizer_theme_setup1' ) ) {
    add_action( 'after_setup_theme', 'fcunited_customizer_theme_setup1', 1 );
    function fcunited_customizer_theme_setup1() {

        fcunited_storage_set(
            'load_fonts', array(
                // Google font
                array(
                    'name'   => 'Poppins',
                    'family' => 'sans-serif',
                    'styles' => '100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800',     // Parameter 'style' used only for the Google fonts
                ),
                // Font-face packed with theme
                array(
                    'name'   => 'BebasNeue',
                    'family' => 'sans-serif',
                ),
            )
        );


        // Characters subset for the Google fonts. Available values are: latin,latin-ext,cyrillic,cyrillic-ext,greek,greek-ext,vietnamese
        fcunited_storage_set( 'load_fonts_subset', 'latin,latin-ext' );


        fcunited_storage_set(
            'theme_fonts', array(
                'p'       => array(
                    'title'           => esc_html__( 'Main text', 'fcunited' ),
                    'description'     => esc_html__( 'Font settings of the main text of the site. Attention! For correct display of the site on mobile devices, use only units "rem", "em" or "ex"', 'fcunited' ),
                    'font-family'     => '"Poppins",sans-serif',
                    'font-size'       => '1rem',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.76em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.26px',
                    'margin-top'      => '0em',
                    'margin-bottom'   => '1.6em',
                ),
                'h1'      => array(
                    'title'           => esc_html__( 'Heading 1', 'fcunited' ),
                    'font-family'     => '"BebasNeue",sans-serif',
                    'font-size'       => '4.286em',
                    'font-weight'     => '700',
                    'font-style'      => 'normal',
                    'line-height'     => '0.93em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '2.1px',
                    'margin-top'      => '1.69em',
                    'margin-bottom'   => '0.63em',
                ),
                'h2'      => array(
                    'title'           => esc_html__( 'Heading 2', 'fcunited' ),
                    'font-family'     => '"BebasNeue",sans-serif',
                    'font-size'       => '3.429em',
                    'font-weight'     => '700',
                    'font-style'      => 'normal',
                    'line-height'     => '0.96em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '1.75px',
                    'margin-top'      => '1.82em',
                    'margin-bottom'   => '0.52em',
                ),
                'h3'      => array(
                    'title'           => esc_html__( 'Heading 3', 'fcunited' ),
                    'font-family'     => '"BebasNeue",sans-serif',
                    'font-size'       => '2.571em',
                    'font-weight'     => '700',
                    'font-style'      => 'normal',
                    'line-height'     => '0.91em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '1.3px',
                    'margin-top'      => '2.2em',
                    'margin-bottom'   => '0.92em',
                ),
                'h4'      => array(
                    'title'           => esc_html__( 'Heading 4', 'fcunited' ),
                    'font-family'     => '"BebasNeue",sans-serif',
                    'font-size'       => '2.143em',
                    'font-weight'     => '700',
                    'font-style'      => 'normal',
                    'line-height'     => '1.06em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '1.1px',
                    'margin-top'      => '2.3em',
                    'margin-bottom'   => '0.6em',
                ),
                'h5'      => array(
                    'title'           => esc_html__( 'Heading 5', 'fcunited' ),
                    'font-family'     => '"BebasNeue",sans-serif',
                    'font-size'       => '1.714em',
                    'font-weight'     => '700',
                    'font-style'      => 'normal',
                    'line-height'     => '1.06em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.85px',
                    'margin-top'      => '2.9em',
                    'margin-bottom'   => '0.7em',
                ),
                'h6'      => array(
                    'title'           => esc_html__( 'Heading 6', 'fcunited' ),
                    'font-family'     => '"Poppins",sans-serif',
                    'font-size'       => '1.286em',
                    'font-weight'     => '500',
                    'font-style'      => 'normal',
                    'line-height'     => '1.23em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '3.25em',
                    'margin-bottom'   => '0.69em',
                ),
                'logo'    => array(
                    'title'           => esc_html__( 'Logo text', 'fcunited' ),
                    'description'     => esc_html__( 'Font settings of the text case of the logo', 'fcunited' ),
                    'font-family'     => '"BebasNeue",sans-serif',
                    'font-size'       => '1.9em',
                    'font-weight'     => '700',
                    'font-style'      => 'normal',
                    'line-height'     => '1.1em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'uppercase',
                    'letter-spacing'  => '1px',
                ),
                'button'  => array(
                    'title'           => esc_html__( 'Buttons', 'fcunited' ),
                    'font-family'     => '"Poppins",sans-serif',
                    'font-size'       => '14px',
                    'font-weight'     => '500',
                    'font-style'      => 'normal',
                    'line-height'     => '18px',
                    'text-decoration' => 'none',
                    'text-transform'  => '',
                    'letter-spacing'  => '0',
                ),
                'input'   => array(
                    'title'           => esc_html__( 'Input fields', 'fcunited' ),
                    'description'     => esc_html__( 'Font settings of the input fields, dropdowns and textareas', 'fcunited' ),
                    'font-family'     => 'inherit',
                    'font-size'       => '1em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.5em', // Attention! Firefox don't allow line-height less then 1.5em in the select
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                ),
                'info'    => array(
                    'title'           => esc_html__( 'Post meta', 'fcunited' ),
                    'description'     => esc_html__( 'Font settings of the post meta: date, counters, share, etc.', 'fcunited' ),
                    'font-family'     => 'inherit',
                    'font-size'       => '13px',  // Old value '13px' don't allow using 'font zoom' in the custom blog items
                    'font-weight'     => '500',
                    'font-style'      => 'normal',
                    'line-height'     => '1.4em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '0.4em',
                    'margin-bottom'   => '',
                ),
                'menu'    => array(
                    'title'           => esc_html__( 'Main menu', 'fcunited' ),
                    'description'     => esc_html__( 'Font settings of the main menu items', 'fcunited' ),
                    'font-family'     => '"Poppins",sans-serif',
                    'font-size'       => '14px',
                    'font-weight'     => '500',
                    'font-style'      => 'normal',
                    'line-height'     => '1.5em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.18px',
                ),
                'submenu' => array(
                    'title'           => esc_html__( 'Dropdown menu', 'fcunited' ),
                    'description'     => esc_html__( 'Font settings of the dropdown menu items', 'fcunited' ),
                    'font-family'     => '"Poppins",sans-serif',
                    'font-size'       => '14px',
                    'font-weight'     => '500',
                    'font-style'      => 'normal',
                    'line-height'     => '1.35em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.18px',
                ),
            )
        );

        // -----------------------------------------------------------------
        // -- Theme colors for customizer
        // -- Attention! Inner scheme must be last in the array below
        // -----------------------------------------------------------------
        fcunited_storage_set(
            'scheme_color_groups', array(
                'main'    => array(
                    'title'       => esc_html__( 'Main', 'fcunited' ),
                    'description' => esc_html__( 'Colors of the main content area', 'fcunited' ),
                ),
                'alter'   => array(
                    'title'       => esc_html__( 'Alter', 'fcunited' ),
                    'description' => esc_html__( 'Colors of the alternative blocks (sidebars, etc.)', 'fcunited' ),
                ),
                'extra'   => array(
                    'title'       => esc_html__( 'Extra', 'fcunited' ),
                    'description' => esc_html__( 'Colors of the extra blocks (dropdowns, price blocks, table headers, etc.)', 'fcunited' ),
                ),
                'inverse' => array(
                    'title'       => esc_html__( 'Inverse', 'fcunited' ),
                    'description' => esc_html__( 'Colors of the inverse blocks - when link color used as background of the block (dropdowns, blockquotes, etc.)', 'fcunited' ),
                ),
                'input'   => array(
                    'title'       => esc_html__( 'Input', 'fcunited' ),
                    'description' => esc_html__( 'Colors of the form fields (text field, textarea, select, etc.)', 'fcunited' ),
                ),
            )
        );
        fcunited_storage_set(
            'scheme_color_names', array(
                'bg_color'    => array(
                    'title'       => esc_html__( 'Background color', 'fcunited' ),
                    'description' => esc_html__( 'Background color of this block in the normal state', 'fcunited' ),
                ),
                'bg_hover'    => array(
                    'title'       => esc_html__( 'Background hover', 'fcunited' ),
                    'description' => esc_html__( 'Background color of this block in the hovered state', 'fcunited' ),
                ),
                'bd_color'    => array(
                    'title'       => esc_html__( 'Border color', 'fcunited' ),
                    'description' => esc_html__( 'Border color of this block in the normal state', 'fcunited' ),
                ),
                'bd_hover'    => array(
                    'title'       => esc_html__( 'Border hover', 'fcunited' ),
                    'description' => esc_html__( 'Border color of this block in the hovered state', 'fcunited' ),
                ),
                'text'        => array(
                    'title'       => esc_html__( 'Text', 'fcunited' ),
                    'description' => esc_html__( 'Color of the plain text inside this block', 'fcunited' ),
                ),
                'text_dark'   => array(
                    'title'       => esc_html__( 'Text dark', 'fcunited' ),
                    'description' => esc_html__( 'Color of the dark text (bold, header, etc.) inside this block', 'fcunited' ),
                ),
                'text_light'  => array(
                    'title'       => esc_html__( 'Text light', 'fcunited' ),
                    'description' => esc_html__( 'Color of the light text (post meta, etc.) inside this block', 'fcunited' ),
                ),
                'text_link'   => array(
                    'title'       => esc_html__( 'Link', 'fcunited' ),
                    'description' => esc_html__( 'Color of the links inside this block', 'fcunited' ),
                ),
                'text_hover'  => array(
                    'title'       => esc_html__( 'Link hover', 'fcunited' ),
                    'description' => esc_html__( 'Color of the hovered state of links inside this block', 'fcunited' ),
                ),
                'text_link2'  => array(
                    'title'       => esc_html__( 'Link 2', 'fcunited' ),
                    'description' => esc_html__( 'Color of the accented texts (areas) inside this block', 'fcunited' ),
                ),
                'text_hover2' => array(
                    'title'       => esc_html__( 'Link 2 hover', 'fcunited' ),
                    'description' => esc_html__( 'Color of the hovered state of accented texts (areas) inside this block', 'fcunited' ),
                ),
                'text_link3'  => array(
                    'title'       => esc_html__( 'Link 3', 'fcunited' ),
                    'description' => esc_html__( 'Color of the other accented texts (buttons) inside this block', 'fcunited' ),
                ),
                'text_hover3' => array(
                    'title'       => esc_html__( 'Link 3 hover', 'fcunited' ),
                    'description' => esc_html__( 'Color of the hovered state of other accented texts (buttons) inside this block', 'fcunited' ),
                ),
            )
        );
        fcunited_storage_set(
            'schemes', array(

                // Color scheme: 'default'
                'default' => array(
                    'title'    => esc_html__( 'Default', 'fcunited' ),
                    'internal' => true,
                    'colors'   => array(

                        // Whole block border and background
                        'bg_color'         => '#ffffff',
                        'bd_color'         => '#e3e3e3',

                        // Text and links colors
                        'text'             => '#797e87',
                        'text_light'       => '#797e87',
                        'text_dark'        => '#262f3e',
                        'text_link'        => '#ff0000',
                        'text_hover'       => '#081324',
                        'text_link2'       => '#80d572',
                        'text_hover2'      => '#8be77c',
                        'text_link3'       => '#ddb837',
                        'text_hover3'      => '#eec432',

                        // Alternative blocks (sidebar, tabs, alternative blocks, etc.)
                        'alter_bg_color'   => '#ffffff',
                        'alter_bg_hover'   => '#f4f4f4',
                        'alter_bd_color'   => '#e3e3e3',
                        'alter_bd_hover'   => '#EBEBEB',
                        'alter_text'       => '#797e87',
                        'alter_light'      => '#b7b7b7',
                        'alter_dark'       => '#1d1d1d',
                        'alter_link'       => '#ff0000',
                        'alter_hover'      => '#ff0000',
                        'alter_link2'      => '#ffffff',
                        'alter_hover2'     => '#80d572',
                        'alter_link3'      => '#eec432',
                        'alter_hover3'     => '#ddb837',

                        // Extra blocks (submenu, tabs, color blocks, etc.)
                        'extra_bg_color'   => '#081224',
                        'extra_bg_hover'   => '#28272e',
                        'extra_bd_color'   => '#262f3e',
                        'extra_bd_hover'   => '#3d3d3d',
                        'extra_text'       => '#9d9ea1',
                        'extra_light'      => '#797e87',
                        'extra_dark'       => '#8c9097',
                        'extra_link'       => '#ffffff',
                        'extra_hover'      => '#ff0000',
                        'extra_link2'      => '#80d572',
                        'extra_hover2'     => '#8be77c',
                        'extra_link3'      => '#ddb837',
                        'extra_hover3'     => '#eec432',

                        // Input fields (form's fields and textarea)
                        'input_bg_color'   => '#f4f4f4',
                        'input_bg_hover'   => '#f4f4f4',
                        'input_bd_color'   => '#e4e4e4',
                        'input_bd_hover'   => '#262f3e',
                        'input_text'       => '#797e87',
                        'input_light'      => '#797e87',
                        'input_dark'       => '#262f3e',

                        // Inverse blocks (text and links on the 'text_link' background)
                        'inverse_bd_color' => '#67bcc1',
                        'inverse_bd_hover' => '#5aa4a9',
                        'inverse_text'     => '#1d1d1d',
                        'inverse_light'    => '#333333',
                        'inverse_dark'     => '#000000',
                        'inverse_link'     => '#ffffff',
                        'inverse_hover'    => '#ffffff',
                    ),
                ),

                // Color scheme: 'alter'
                'alter' => array(
                    'title'    => esc_html__( 'Alter', 'fcunited' ),
                    'internal' => true,
                    'colors'   => array(

                        // Whole block border and background
                        'bg_color'         => '#ffffff',
                        'bd_color'         => '#e3e3e3',

                        // Text and links colors
                        'text'             => '#797e87',
                        'text_light'       => '#797e87',
                        'text_dark'        => '#262f3e',
                        'text_link'        => '#ff0000',
                        'text_hover'       => '#081324',
                        'text_link2'       => '#80d572',
                        'text_hover2'      => '#8be77c',
                        'text_link3'       => '#ddb837',
                        'text_hover3'      => '#eec432',

                        // Alternative blocks (sidebar, tabs, alternative blocks, etc.)
                        'alter_bg_color'   => '#ffffff',
                        'alter_bg_hover'   => '#f4f4f4',
                        'alter_bd_color'   => '#e3e3e3',
                        'alter_bd_hover'   => '#EBEBEB',
                        'alter_text'       => '#797e87',
                        'alter_light'      => '#b7b7b7',
                        'alter_dark'       => '#1d1d1d',
                        'alter_link'       => '#ff0000',
                        'alter_hover'      => '#ff0000',
                        'alter_link2'      => '#ffffff',
                        'alter_hover2'     => '#80d572',
                        'alter_link3'      => '#eec432',
                        'alter_hover3'     => '#ddb837',

                        // Extra blocks (submenu, tabs, color blocks, etc.)
                        'extra_bg_color'   => '#224452',
                        'extra_bg_hover'   => '#28272e',
                        'extra_bd_color'   => '#262f3e',
                        'extra_bd_hover'   => '#3d3d3d',
                        'extra_text'       => '#797e87',
                        'extra_light'      => '#797e87',
                        'extra_dark'       => '#8c9097',
                        'extra_link'       => '#ffffff',
                        'extra_hover'      => '#ff0000',
                        'extra_link2'      => '#80d572',
                        'extra_hover2'     => '#8be77c',
                        'extra_link3'      => '#ddb837',
                        'extra_hover3'     => '#eec432',

                        // Input fields (form's fields and textarea)
                        'input_bg_color'   => '#f4f4f4',
                        'input_bg_hover'   => '#f4f4f4',
                        'input_bd_color'   => '#e4e4e4',
                        'input_bd_hover'   => '#262f3e',
                        'input_text'       => '#797e87',
                        'input_light'      => '#797e87',
                        'input_dark'       => '#262f3e',

                        // Inverse blocks (text and links on the 'text_link' background)
                        'inverse_bd_color' => '#67bcc1',
                        'inverse_bd_hover' => '#5aa4a9',
                        'inverse_text'     => '#1d1d1d',
                        'inverse_light'    => '#333333',
                        'inverse_dark'     => '#000000',
                        'inverse_link'     => '#ffffff',
                        'inverse_hover'    => '#ffffff',
                    ),
                ),

                // Color scheme: 'dark'
                'dark'    => array(
                    'title'    => esc_html__( 'Dark', 'fcunited' ),
                    'internal' => true,
                    'colors'   => array(

                        // Whole block border and background
                        'bg_color'         => '#081224',
                        'bd_color'         => '#262F3E',

                        // Text and links colors
                        'text'             => '#848992',
                        'text_light'       => '#6f6f6f',
                        'text_dark'        => '#ffffff',
                        'text_link'        => '#ff0000',
                        'text_hover'       => '#ffffff',
                        'text_link2'       => '#80d572',
                        'text_hover2'      => '#8be77c',
                        'text_link3'       => '#ddb837',
                        'text_hover3'      => '#eec432',

                        // Alternative blocks (sidebar, tabs, alternative blocks, etc.)
                        'alter_bg_color'   => '#081224',
                        'alter_bg_hover'   => '#333333',
                        'alter_bd_color'   => '#848992',
                        'alter_bd_hover'   => '#262F3E',
                        'alter_text'       => '#a6a6a6',
                        'alter_light'      => '#6f6f6f',
                        'alter_dark'       => '#ffffff',
                        'alter_link'       => '#ff0000',
                        'alter_hover'      => '#262F3E',
                        'alter_link2'      => '#ff0000',
                        'alter_hover2'     => '#80d572',
                        'alter_link3'      => '#eec432',
                        'alter_hover3'     => '#ddb837',

                        // Extra blocks (submenu, tabs, color blocks, etc.)
                        'extra_bg_color'   => '#ffffff',
                        'extra_bg_hover'   => '#224452',
                        'extra_bd_color'   => '#464646',
                        'extra_bd_hover'   => '#4a4a4a',
                        'extra_text'       => '#a6a6a6',
                        'extra_light'      => '#6f6f6f',
                        'extra_dark'       => '#262f3e',
                        'extra_link'       => '#081224',
                        'extra_hover'      => '#ff0000',
                        'extra_link2'      => '#80d572',
                        'extra_hover2'     => '#8be77c',
                        'extra_link3'      => '#ddb837',
                        'extra_hover3'     => '#eec432',

                        // Input fields (form's fields and textarea)
                        'input_bg_color'   => '#262F3E',
                        'input_bg_hover'   => '#262F3E',
                        'input_bd_color'   => '#262F3E',
                        'input_bd_hover'   => '#353535',
                        'input_text'       => '#b7b7b7',
                        'input_light'      => '#6f6f6f',
                        'input_dark'       => '#ffffff',

                        // Inverse blocks (text and links on the 'text_link' background)
                        'inverse_bd_color' => '#e36650',
                        'inverse_bd_hover' => '#cb5b47',
                        'inverse_text'     => '#1d1d1d',
                        'inverse_light'    => '#6f6f6f',
                        'inverse_dark'     => '#000000',
                        'inverse_link'     => '#ffffff',
                        'inverse_hover'    => '#262f3e',
                    ),
                ),

            )
        );




        fcunited_storage_set( 'schemes_original', fcunited_storage_get( 'schemes' ) );




        // Simple scheme editor: lists the colors to edit in the "Simple" mode.
        // For each color you can set the array of 'slave' colors and brightness factors that are used to generate new values,
        // when 'main' color is changed
        // Leave 'slave' arrays empty if your scheme does not have a color dependency
        fcunited_storage_set(
            'schemes_simple', array(
                'text_link'        => array(),
                'text_hover'       => array(),
                'text_link2'       => array(),
                'text_hover2'      => array(),
                'text_link3'       => array(),
                'text_hover3'      => array(),
                'alter_link'       => array(),
                'alter_hover'      => array(),
                'alter_link2'      => array(),
                'alter_hover2'     => array(),
                'alter_link3'      => array(),
                'alter_hover3'     => array(),
                'extra_link'       => array(),
                'extra_hover'      => array(),
                'extra_link2'      => array(),
                'extra_hover2'     => array(),
                'extra_link3'      => array(),
                'extra_hover3'     => array(),
                'inverse_bd_color' => array(),
                'inverse_bd_hover' => array(),
            )
        );

        // Additional colors for each scheme
        // Parameters:	'color' - name of the color from the scheme that should be used as source for the transformation
        //				'alpha' - to make color transparent (0.0 - 1.0)
        //				'hue', 'saturation', 'brightness' - inc/dec value for each color's component
        fcunited_storage_set(
            'scheme_colors_add', array(
                'bg_color_0'        => array(
                    'color' => 'bg_color',
                    'alpha' => 0,
                ),
                'bg_color_02'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.2,
                ),
                'bg_color_07'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.7,
                ),
                'bg_color_08'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.8,
                ),
                'bg_color_09'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.9,
                ),
                'alter_bg_color_07' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0.7,
                ),
                'alter_bg_color_04' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0.4,
                ),
                'alter_bg_color_00' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0,
                ),
                'alter_bg_color_02' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0.2,
                ),
                'alter_bd_color_02' => array(
                    'color' => 'alter_bd_color',
                    'alpha' => 0.2,
                ),
                'alter_link_02'     => array(
                    'color' => 'alter_link',
                    'alpha' => 0.2,
                ),
                'alter_link_07'     => array(
                    'color' => 'alter_link',
                    'alpha' => 0.7,
                ),
                'extra_bg_color_05' => array(
                    'color' => 'extra_bg_color',
                    'alpha' => 0.5,
                ),
                'extra_bg_color_07' => array(
                    'color' => 'extra_bg_color',
                    'alpha' => 0.7,
                ),
                'extra_link_02'     => array(
                    'color' => 'extra_link',
                    'alpha' => 0.2,
                ),
                'extra_link_07'     => array(
                    'color' => 'extra_link',
                    'alpha' => 0.7,
                ),
                'text_dark_07'      => array(
                    'color' => 'text_dark',
                    'alpha' => 0.7,
                ),
                'text_link_02'      => array(
                    'color' => 'text_link',
                    'alpha' => 0.2,
                ),
                'text_link_07'      => array(
                    'color' => 'text_link',
                    'alpha' => 0.7,
                ),
                'text_dark_04'      => array(
                    'color' => 'text_dark',
                    'alpha' => 0.4,
                ),
                'text_link_blend'   => array(
                    'color'      => 'text_link',
                    'hue'        => 2,
                    'saturation' => -5,
                    'brightness' => 5,
                ),
                'alter_link_blend'  => array(
                    'color'      => 'alter_link',
                    'hue'        => 2,
                    'saturation' => -5,
                    'brightness' => 5,
                ),
            )
        );

        // Parameters to set order of schemes in the css
        fcunited_storage_set(
            'schemes_sorted', array(
                'color_scheme',
                'header_scheme',
                'menu_scheme',
                'sidebar_scheme',
                'footer_scheme',
            )
        );

    }
}


unset ($GLOBALS['FCUNITED_STORAGE']['required_plugins']['woocommerce']);
unset ($GLOBALS['FCUNITED_STORAGE']['required_plugins']['sportspress']);
unset ($GLOBALS['FCUNITED_STORAGE']['required_plugins']['elegro-payment']);
unset ($GLOBALS['FCUNITED_STORAGE']['required_plugins']['the-events-calendar']);



/* Deactivate  for default skin */
if ( ! function_exists( 'true_plugin_off_in_theme' ) ) {
	add_action( 'admin_init', 'true_plugin_off_in_theme' );

	function true_plugin_off_in_theme() {
		deactivate_plugins( 'sportspress-for-basketball/sportspress-for-basketball.php' );
        deactivate_plugins( 'sportspress-for-golf/sportspress-for-golf.php' );
        deactivate_plugins( 'sportspress/sportspress.php' );
        deactivate_plugins( 'woocommerce/woocommerce.php' );
        deactivate_plugins( 'elegro-payment/elegro-payment.php' );
        deactivate_plugins( 'the-events-calendar/the-events-calendar.php' );
	}
}

// Add WP Recipe Maker plugin
require_once FCUNITED_THEME_DIR  . 'plugins/joomsport-sports-league-results-management/joomsport-sports-league-results-management.php';

// Add slin-specific colors and fonts to the custom CSS
require_once FCUNITED_THEME_DIR . FCUNITED_SKIN_DIR . 'skin-styles.php';
