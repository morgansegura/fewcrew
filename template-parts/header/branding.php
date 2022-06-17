<?php
/**
 * Site branding & logo
 *
 * @package fewcrew
 */

namespace Few_Crew;

$description = get_bloginfo( 'description', 'display' );
?>

<div class="header-branding">
    <div class="header-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
            <div class="header-logo header-logo-mobile">
                <?php include get_theme_file_path( THEME_SETTINGS['logo_mobile'] ); ?>
            </div>
            <div class="header-logo header-logo-desktop">
                <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
            </div>
        </a>
    </div>
</div>
