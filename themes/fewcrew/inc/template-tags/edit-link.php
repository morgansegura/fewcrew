<?php
/**
 * This function shows edit links.
 *
 * @Date:   2022-05-26
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-26 15:13:28
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
namespace FewCrew;

function fewcrew_edit_link() {

  if ( ! get_edit_post_link() ) {
    return;
  } ?>

    <p class="edit-link">
      <a href="<?php echo esc_url( get_edit_post_link() ); ?>">
        <?php echo esc_html( get_default_localization( 'Edit' ) ); ?>
        <span class="screen-reader-text"><?php echo esc_html( get_the_title() ); ?></span>
      </a>
    </p>
  <?php

}
