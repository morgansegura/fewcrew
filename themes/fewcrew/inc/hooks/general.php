<?php
/**
 * General hooks.
 *
 * @Author: Morgan Segura
 * @Date:   2022-05-26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-26 15:13:28
 *
 * @package fewcrew
 */

namespace FewCrew;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'fewcrew' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'fewcrew' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
} // end widgets_init
