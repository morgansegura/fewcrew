<?php
/**
 * The sidebar containing the main widget area
 * Implement your custom sidebar to this file.
 *
 * @Date:   2022-6-16 9:27:42
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-6-16 9:27:42
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Few_Crew;

if ( ! is_active_sidebar( 'sidebar--page' ) ) {
  return;
} ?>

<aside id="sidebar-page" class="widget-area layout-column">
  <?php dynamic_sidebar( 'sidebar-page' ); ?>
</aside><!-- #secondary -->
