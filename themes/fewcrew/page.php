<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2022-05-26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-26 15:13:28
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace FewCrew;

the_post();

get_header(); ?>

<main class="site-main">
  <?php
    the_content();
    air_edit_link();
  ?>
</main>

<?php get_footer();
