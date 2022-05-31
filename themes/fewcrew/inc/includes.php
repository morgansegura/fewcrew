<?php
/**
 * Include custom features etc.
 *
 * @Date:   2022-05-26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-26 15:13:28
 *
 * @package fewcrew
 */

namespace FewCrew;

// Theme setup
require get_theme_file_path( '/inc/includes/theme-setup.php' );

// Localized strings
require get_theme_file_path( '/inc/includes/localization.php' );

// Nav Walker
require get_theme_file_path( '/inc/includes/nav-walker.php' );

// Post type and taxonomy base classes
// We check this with if, because this stuff will not go to WP theme directory
if ( file_exists( get_theme_file_path( '/inc/includes/taxonomy.php' ) ) ) {
  require get_theme_file_path( '/inc/includes/taxonomy.php' );
}

if ( file_exists( get_theme_file_path( '/inc/includes/post-type.php' ) ) ) {
  require get_theme_file_path( '/inc/includes/post-type.php' );
}

// Custom functions
