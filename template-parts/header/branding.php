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

  <div class="contain-xl">
    <p class="header-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
        <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
      </a>
    </p>

    <?php if ( $description || is_customize_preview() ) : ?>
    <p class="header-description screen-reader-text">
      <?php echo esc_html( $description ); ?>
    </p>
    <?php endif; ?>
  </div>

</div>
