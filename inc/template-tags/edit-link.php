<?php
/**
 * Edit link
 *
 * This function shows edit links.
 *
 * @Author:		Morgan Segura
 * @Date:   		2022-02-08 17:18:33
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-02-08 17:26:27
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Few_Crew;

function few_edit_link() {

  if ( ! get_edit_post_link() ) {
    return;
  } ?>

<div class="edit-link-container">
    <a href="<?php echo esc_url( get_edit_post_link() ); ?>" class="edit-link">
        <!-- <?php echo esc_html( get_default_localization( 'Edit' ) ); ?> -->
        Edit Content
        <span class="screen-reader-text"><?php echo esc_html( get_the_title() ); ?></span>
    </a>
</div>
<?php

}
