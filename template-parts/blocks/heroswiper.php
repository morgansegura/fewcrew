<?php

add_action( 'wp_enqueue_scripts', 'ct_slider_scripts', 10 );
function ct_slider_scripts() {
    $assets_version = '3';
    if (is_page_template('tpl-homepage.php')) {
        wp_enqueue_script( 'ct-hero-swiper-js', get_template_directory_uri() . '/js/src/hero-swiper.js', array(), $assets_version, true );
    }
}


// functions.php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6297f137e2623',
	'title' => 'Hero Slider',
	'fields' => array(
		array(
			'key' => 'field_6297f140ac759',
			'label' => 'swiper',
			'name' => 'swiper',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_6297f151bbe03' => array(
					'key' => 'layout_6297f151bbe03',
					'name' => 'slide',
					'label' => 'Slide',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6297f161ac75a',
							'label' => 'link',
							'name' => 'link',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_6297f177ac75b',
							'label' => 'image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_6297f186ac75c',
							'label' => 'mobile image',
							'name' => 'mobile_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_6297f1a1ac75d',
							'label' => 'description',
							'name' => 'description',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;

/**
 * /template-parts/home/main-slider.php
 */
if( have_rows('swiper') ):
    $section1 = array();
    $images_ids = array();
    while ( have_rows('swiper') ) : the_row();
        if( get_row_layout() == 'slide' ):
            $item = new stdClass();
            $item->link = get_sub_field('link');
            $item->image_id = get_sub_field('image');
            $item->mobile_image_id = get_sub_field('mobile_image');
            $images_ids[] = $item->image_id['ID'];
            $images_ids[] = $item->mobile_image_id['ID'];
            $item->description = get_sub_field('description');
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
<div class="slider-main">
    <div class="swiper-container slider-main__slides gallery-top" data-role="carousel" id="js-main-slider">
        <div class="swiper-wrapper">
            <?php
            $uploads = wp_upload_dir();
            foreach($section1 as $item) :
						?>
                <div class="swiper-slide slider-main__slide"><a href="<?php echo $item->link; ?>">
                        <picture class="slider-main__picture">
                            <source data-srcset="<?php echo $uploads['baseurl'] . '/' . $images_src[$item->mobile_image_id['ID']]->meta_value; ?>"
                                    media="(max-width: 767px)" type="image/jpeg">
                            <img class="slider-main__img swiper-lazy img-fluid"
                                 data-src="<?php echo $uploads['baseurl'] . '/' . $images_src[$item->image_id['ID']]->meta_value; ?>"
                                 alt="<?php echo $item->description; ?>" /></picture>
                        <div class="swiper-lazy-preloader"></div>
                    </a></div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
		<div class="contain-xxl">
			<div class="contain-xl">
					<div class="swiper-container slider-main__nav gallery-thumbs" data-role="carousel-nav" id="js-main-slider-thumbs">
							<div class="swiper-wrapper slider-main__thumbs-wrapper">
									<?php foreach($section1 as $item) : ?>
											<div class="swiper-slide slider-main__nav-button"><?php echo $item->description; ?></div>
									<?php endforeach; ?>
							</div>
					</div>
			</div>
		</div>
</div>
