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
 */

namespace Few_Crew;

the_post();

get_header(); ?>

<main class="site-main">
  <section>
    <?php require get_theme_file_path( '/template-parts/blocks/carouselfullscreen.php' ); ?>
  </section>
  <section>
    <?php require get_theme_file_path( '/template-parts/blocks/contentcardgrid.php' ); ?>
  </section>
  <div class="layout-container layout-with-right-sidebar">
      <section class="layout-main">
        <?php
        the_content();
        few_edit_link();
      ?>
      </section>
      <?php get_sidebar( 'sidebar-1' ); ?>
  </div>
</main>

<?php get_footer();
