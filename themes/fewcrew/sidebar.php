<?php
/**
 * The sidebar containing the main widget area
 * Implement your custom sidebar to this file.
 *
 * @Date:   2022-05-26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-26 15:13:28
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
namespace FewCrew;

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
} ?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
