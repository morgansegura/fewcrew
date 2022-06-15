<?php
/**
 * Block Name: Carousel Full Screen
 *
 * @package fewcrew
 */

// namespace Few_Crew;

if( have_rows('cardstatstable') ):
    $section1 = array();
    $images_ids = array();
    while ( have_rows('cardstatstable') ) : the_row();
        if( get_row_layout() == 'slide' ):
            $item = new stdClass();
            $item->theme_mode = get_sub_field('theme_mode');
            $item->link = get_sub_field('link');
            $item->title = get_sub_field('title');
            $item->supertitle = get_sub_field('supertitle');
            $item->subtitle = get_sub_field('subtitle');
            $item->copy = get_sub_field('copy');
            $item->image_id = get_sub_field('image');
            $item->mobile_image_id = get_sub_field('mobile_image');
            $item->button_group = get_sub_field('button_group');
            $images_ids[] = $item->image_id['ID'];
            $images_ids[] = $item->mobile_image_id['ID'];
            $section1[] = $item;
        endif;
		// print_r($item);
    endwhile;
    global $wpdb;
    $qstr =
        "SELECT post_id, meta_value
        FROM $wpdb->postmeta
        WHERE post_id IN  (" . implode(',', $images_ids) . ")". ' AND meta_key = "_wp_attached_file"';

    $images_src = $wpdb->get_results( $qstr, 'OBJECT_K' );
endif;
?>

<div class="card-statstable">
  <div class="card-statstable-moreblock">
    <h4 class="card-statstable-moreblock-title">Playoff Standings</h4>
    <a href="" title="" class="card-statstable-moreblock-button">
      See All Stats
    </a>
  </div>
  <div class="card-statstable-table">
    <div class="card-statstable-tablehead">
      <div class="card-statstable-tablehead-col">Team Positions</div>
      <div class="card-statstable-tablehead-col">W</div>
      <div class="card-statstable-tablehead-col">L</div>
      <div class="card-statstable-tablehead-col">GB</div>
    </div>
    <div class="card-statstable-gribody">
      <!-- Column 01 -->
      <div class="card-statstable-tablebody-col">
        <div class="card-statstable-table-number">01</div>
        <figure class="card-statstable-table-icon">
          <img src="https://alchemists.dan-fisher.dev/basketball/assets/images/samples/logos/pirates_shield.png"
            alt="L.A Pirates" />
        </figure>
        <div class="card-statstable-tablebody-col-heading">
          <div class="card-statstable-table-title">LA Prates</div>
          <div class="card-statstable-table-subtitle">Beebop Institute</div>
        </div>
      </div>


    </div>
  </div>
</div>
