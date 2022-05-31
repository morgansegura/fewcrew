<?php
/**
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:05:35
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2021-05-04 11:13:17
 *
 * @package fewcrew
 */

namespace FewCrew;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Your_Taxonomy extends Taxonomy {


  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Your Taxonomies', 'Taxonomy plural name', 'fewcrew' ),
      'singular_name'         => _x( 'Your Taxonomy', 'Taxonomy singular name', 'fewcrew' ),
      'search_items'          => __( 'Search Your Taxonomies', 'fewcrew' ),
      'popular_items'         => __( 'Popular Your Taxonomies', 'fewcrew' ),
      'all_items'             => __( 'All Your Taxonomies', 'fewcrew' ),
      'parent_item'           => __( 'Parent Your Taxonomy', 'fewcrew' ),
      'parent_item_colon'     => __( 'Parent Your Taxonomy', 'fewcrew' ),
      'edit_item'             => __( 'Edit Your Taxonomy', 'fewcrew' ),
      'update_item'           => __( 'Update Your Taxonomy', 'fewcrew' ),
      'add_new_item'          => __( 'Add New Your Taxonomy', 'fewcrew' ),
      'new_item_name'         => __( 'New Your Taxonomy', 'fewcrew' ),
      'add_or_remove_items'   => __( 'Add or remove Your Taxonomies', 'fewcrew' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'fewcrew' ),
      'menu_name'             => __( 'Your Taxonomy', 'fewcrew' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'show_ui'           => true,
      'query_var'         => false,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
