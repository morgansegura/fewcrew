<?php
/**
 * The template for displaying all single posts
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-02-08 17:03:18
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Few_Crew;

the_post();
get_header(); ?>

<main class="site-main">

  <section class="block block-single has-light-bg">
    <article class="article-content">

      <h1><?php the_title(); ?></h1>

      <?php the_content();

      // Required by WordPress Theme Check, feel free to remove as it's rarely used in starter themes
      wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fewcrew' ), 'after' => '</div>' ) );

      entry_footer();

      if ( get_edit_post_link() ) {
        edit_post_link( sprintf( wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'fewcrew' ), [ 'span' => [ 'class' => [] ] ] ), get_the_title() ), '<p class="edit-link">', '</p>' );
      }

      the_post_navigation();

  		// If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      } ?>

    </article>
  </section>

</main>

<?php get_footer();
