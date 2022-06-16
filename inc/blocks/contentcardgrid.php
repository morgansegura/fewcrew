<?php


if( have_rows('card') ):
  $section1 = array();
  $images_ids = array();
  while ( have_rows('card') ) : the_row();

    $card = new stdClass();
    $card->link = get_sub_field('link');
    $card->title = get_sub_field('title');
    $card->title_color_change = get_sub_field('title_color_change');
    $card->title_color = get_sub_field('title_color');
    $card->supertitle = get_sub_field('supertitle');
    $card->subtitle = get_sub_field('subtitle');
    $card->copy = get_sub_field('copy');
    $card->image_id = get_sub_field('image');

    // Button Group
    $card->button_group = get_sub_field('button_group');
    $card->button_color = $card->button_group['color'];
    $card->button_label = $card->button_group['label'];
    $card->button_icon = $card->button_group['icon'];
    $card->button_icon_type = $card->button_group['icon_type'];
    $card->btton_location = $card->button_group['button_style'];

    $images_ids[] = $card->image_id['ID'];

    $section1[] = $card;

  endwhile;

  if (count($images_ids) > 0) :
    global $wpdb;
    $qstr =
        "SELECT post_id, meta_value
        FROM $wpdb->postmeta
        WHERE post_id IN  (" . implode(',', $images_ids) . ")". ' AND meta_key = "_wp_attached_file"';

    $images_src = $wpdb->get_results( $qstr, 'OBJECT_K' );
  endif;
endif;
