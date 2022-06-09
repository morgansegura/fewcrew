<?php
/**
 * Block Name: CarouselFullScreen
 *
 * This is the template that displays the testimonial block.
 */
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

<div class="carousel-fullscreen">

  <div class="swiper-container carousel-fullscreen-slides" data-role="carousel" id="carouselFullScreen">
    <div class="swiper-wrapper">
      <?php
						$uploads = wp_upload_dir();
						foreach($section1 as $item) : ?>
      <div class="swiper-slide carousel-fullscreen-slide <?php echo 'swiper-slide-' . $item->theme_mode; ?>"
        style="background-image: url('<?php echo $uploads['baseurl'] . '/' . $images_src[$item->image_id['ID']]->meta_value; ?>');">

        <?php if ($item->link) : ?>
        <a href="<?php echo $item->link; ?>" class="carousel-fullscreen-container">
          <?php else : ?>
          <div class="carousel-fullscreen-container">
            <?php endif; ?>

            <picture class="carousel-fullscreen-slide-picture">
              <source
                data-srcset="<?php echo $uploads['baseurl'] . '/' . $images_src[$item->mobile_image_id['ID']]->meta_value; ?>"
                media="(max-width: 767px)" type="image/jpeg" />

              <img class="carousel-fullscreen-slide-img swiper-lazy img-fluid"
                data-src="<?php echo $uploads['baseurl'] . '/' . $images_src[$item->image_id['ID']]->meta_value; ?>"
                alt="<?php echo $item->description; ?>" />

            </picture>

            <div class="carousel-fullscreen-description">
              <?php if ($item->supertitle) : ?>
              <div class="carousel-fullscreen-description-supertitle"><?php echo $item->supertitle; ?></div>
              <?php endif; ?>
              <?php if ($item->title) : ?>
              <h2 class="carousel-fullscreen-description-title"><?php echo $item->title; ?></h2>
              <?php endif; ?>
              <?php if ($item->subtitle) : ?>
              <div class="carousel-fullscreen-description-subtitle"><?php echo $item->subtitle; ?></div>
              <?php endif; ?>
              <?php if ($item->copy) : ?>
              <div class="carousel-fullscreen-description-copy"><?php echo $item->copy; ?></div>
              <?php endif; ?>

              <?php if ($item->button_group) : ?>
              <div class="carousel-fullscreen-buttonblock">
                <?php if ($item->button_group) : ?>
                <button class="carousel-fullscreen-button-primary">Button 2</button>
                <?php endif; ?>
                <?php if ($item->button_group) : ?>
                <button class="carousel-fullscreen-button-primary">Button 2</button>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>

            <?php if ($item->link) : ?>
        </a>
        <?php else : ?>
      </div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination-container">
    <div class="swiper-pagination"></div>
    <div data-slide-book-list-arrow="left" class="swiper-button-prev"></div>
    <div data-slide-book-list-arrow="right" class="swiper-button-next"></div>
  </div>
</div>
<div class="colorbar-after"></div>
</div>
