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

<nav id="nav" class="header-nav">

  <div class="pushy-panel__toggle mobile">
    <span class="pushy-panel__line"></span>
  </div>

  <div class="header-nav-control">
    <div class="pushy-panel__back-btn-block pushy-panel--dark">
      <div class="pushy-panel__back-btn"></div>
    </div>

    <div class="header-menu header-menu-admin"
      aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
      <div class="contain-xxl">
        <div class="contain-xl">
          <div class="header-menu-items">
            <?php wp_nav_menu( array(
                      'theme_location' => 'header_primary',
                      'container'      => false,
                      'depth'          => 4,
                      'menu_class'     => '',
                      'menu_id'        => 'header_primary',
                      'echo'           => true,
                      'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
                      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'has_dropdown'   => true,
                      'walker'         => new Nav_Walker(),
                    ) ); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="header-menu header-menu-ads"
      aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
      <div class="contain-xxl">
        <div class="contain-xl">
          <div class="header-menu-items">
            <?php wp_nav_menu( array(
                      'theme_location' => 'header_secondary',
                      'container'      => false,
                      'depth'          => 4,
                      'menu_class'     => '',
                      'menu_id'        => 'header_secondary',
                      'echo'           => true,
                      'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
                      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'has_dropdown'   => true,
                      'walker'         => new Nav_Walker(),
                    ) ); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="header-menu header-menu-page"
      aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
      <div class="contain-xxl">
        <div class="contain-xl">
          <div class="header-menu-items">
            <?php wp_nav_menu( array(
                      'theme_location' => 'header_tertiary',
                      'container'      => false,
                      'depth'          => 4,
                      'menu_class'     => '',
                      'menu_id'        => 'header_tertiary',
                      'echo'           => true,
                      'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
                      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'has_dropdown'   => true,
                      'walker'         => new Nav_Walker(),
                    ) ); ?>
            <div class="pushy-panel__toggle desktop">
              <span class="pushy-panel__line"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
