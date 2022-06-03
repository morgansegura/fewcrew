<?php
/**
 * Navigation layout.
 *
 * @Author: Morgan Segura
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-25 19:39:43
 *
 * @package fewcrew
 */

namespace Few_Crew;

?>

<div class="mainnav">

  <!-- NB! Accessibility: Add/remove has-visible-label class for button if you want to enable/disable visible "Show menu/Hide menu" label for seeing users -->
  <!-- <button aria-controls="nav" id="nav-toggle" class="nav-toggle hamburger has-visible-label" type="button"
    aria-label="<?php echo esc_html( get_default_localization( 'Open main menu' ) ); ?>">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
    <span id="nav-toggle-label"
      class="nav-toggle-label"><?php echo esc_html( get_default_localization( 'Open main menu' ) ); ?></span>
  </button> -->

  <nav id="nav" class="header-nav">
    <div class="header-menu header-menu-admin"
      aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
      <div class="contain-xxl">
        <div class="contain-xl">
          <?php wp_nav_menu( array(
                'theme_location' => 'header_primary',
                'container'      => false,
                'depth'          => 4,
                'menu_class'     => 'header-menu-items',
                'menu_id'        => 'header_primary',
                'echo'           => true,
                'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
                'items_wrap'     => '<div class="header-menu-admin"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
                'has_dropdown'   => true,
                'walker'         => new Nav_Walker(),
              ) ); ?>
        </div>
      </div>
    </div>

    <div class="header-menu header-menu-ads"
      aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
      <div class="contain-xxl">
        <div class="contain-xl">
          <?php wp_nav_menu( array(
                'theme_location' => 'header_secondary',
                'container'      => false,
                'depth'          => 4,
                'menu_class'     => 'header-menu-items',
                'menu_id'        => 'header_secondary',
                'echo'           => true,
                'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
                'items_wrap'     => '<div class="header-menu-ads"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
                'has_dropdown'   => true,
                'walker'         => new Nav_Walker(),
              ) ); ?>
        </div>
      </div>
    </div>
    <div class="header-menu header-menu-pages"
      aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
      <div class="contain-xxl">
        <div class="contain-xl">
          <?php wp_nav_menu( array(
                'theme_location' => 'header_tertiary',
                'container'      => false,
                'depth'          => 4,
                'menu_class'     => 'headernav-pagemenu menu-items',
                'menu_id'        => 'header_tertiary',
                'echo'           => true,
                'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
                'items_wrap'     => '<div class="header-menu-page"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
                'has_dropdown'   => true,
                'walker'         => new Nav_Walker(),
              ) ); ?>
        </div>
      </div>
    </div>

  </nav><!-- #nav -->
</div>
