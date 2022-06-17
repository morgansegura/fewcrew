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

<nav id="nav" class="header-nav-drawer">

    <div class="header-nav-control">

        <div class="header-menu" aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">
            <div class="pushy-panel__back-btn-block pushy-panel--dark">
                <div class="pushy-panel__back-btn"></div>
            </div>

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
            </div>
        </div>
    </div>
</nav>
