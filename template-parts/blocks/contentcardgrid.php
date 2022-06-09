<?php
/**
 * Block Name: ContentCard Grid
 *
 * @package fewcrew
 */

// namespace Few_Crew;

if( have_rows('carouselfullscreen') ):
    $section1 = array();
    $images_ids = array();
    while ( have_rows('carouselfullscreen') ) : the_row();
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

<div class="content-cardgrid content-dark">
  <div class="contain-xxl">
    <div class="contain-lg">
      <div class="content-cardgrid-heading">
        <?php if ($item->title) : ?>
        <h2 class="content-cardgrid-title"><?php $item->title; ?></h2>
        <?php endif; ?>
      </div>
      <div class="content-cardgrid-container">

        <div class="content-cardgrid-item">
          <div class="card">
            <div class="card-image"
              style="background-image: url('https://images.pexels.com/photos/3651672/pexels-photo-3651672.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            </div>
            <div class="card-heading">
              <h4 class="card-blocktitle">Ball</h4>
              <h5 class="card-blocksubtitle">Skills</h5>
            </div>
            <div class="card-content"></div>

            <div class="card-footer">
              <div class="card-cta-button">
                Click Here for More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                  <path
                    d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="content-cardgrid-item">
          <div class="card">
            <div class="card-image"
              style="background-image: url('https://images.pexels.com/photos/2128220/pexels-photo-2128220.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            </div>
            <div class="card-heading">
              <h4 class="card-blocktitle">Agility</h4>
              <h5 class="card-blocksubtitle">Training</h5>
            </div>
            <div class="card-content"></div>

            <div class="card-footer">
              <div class="card-cta-button">
                Click Here for More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                  <path
                    d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="content-cardgrid-item">
          <div class="card">
            <div class="card-image"
              style="background-image: url('https://images.pexels.com/photos/3148452/pexels-photo-3148452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            </div>
            <div class="card-heading">
              <h4 class="card-blocktitle">Finishing</h4>
              <h5 class="card-blocksubtitle">Skills</h5>
            </div>
            <div class="card-content"></div>
            <div class="card-footer">
              <div class="card-cta-button">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                  <path
                    d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
