<?php
/**
 * Template for Header
 *
 * @Date:   2022-05-26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-26 15:13:28
 *
 * @package fewcrew
 */

namespace FewCrew;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'no-js' ); ?>>
  <a class="skip-link screen-reader-text js-trigger" href="#content"><?php echo esc_html( get_default_localization( 'Skip to content' ) ); ?></a>

  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <div class="nav-container">
      <header class="site-header">

        <?php get_template_part( 'template-parts/header/branding' ); ?>
        <?php get_template_part( 'template-parts/header/navigation' ); ?>

      </header>
    </div><!-- .nav-container -->

    <div class="site-content">