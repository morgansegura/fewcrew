<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2022-6-16 9:27:42
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-02-08 17:03:18
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Few_Crew;

the_post();

get_header(); ?>

<main class="site-main layout-container layout-with-right-sidebar">
  <section class="layout-main">
  <?php
    the_content();
    few_edit_link();
  ?>
  </section>

  <?php get_sidebar( 'sidebar-page' ); ?>
</main>

<?php get_footer();
