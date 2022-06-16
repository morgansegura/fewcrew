<?php
/**
 * Block Name: Content Card Grid
 *
 * @package fewcrew
 */

// namespace Few_Crew;

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
    $card->subtitle_color_change = get_sub_field('subtitle_color_change');
    $card->subtitle_color = get_sub_field('subtitle_color');
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

    $options = new stdClass();
    $options->theme_mode = get_sub_field('theme_mode');
    $options->margin_top = get_sub_field('margin_top');
    $options->spacing = get_sub_field('spacing');
    $options->container_width = get_sub_field('container_width');


  // print_pre($options);
?>

<div class="contain-xxl">
    <div class="contain-xl">
        <div
            class="content-cardgrid <?php if (isset($options->spacing)): echo 'spacing-' . $options->spacing; endif; ?>">
            <div class="content-cardgrid-container">
                <?php $uploads = wp_upload_dir(); foreach($section1 as $card) : ?>
                <div class="content-cardgrid-item">
                    <?php if(isset($card->link['url'])) : ?><a href="<?php echo $card->link['url']; ?>"><?php endif; ?>
                        <div class="content-cardgrid-card">
                            <div class="card-image"
                                style="background-image: url('<?php if (isset($images_src)) : echo $uploads['baseurl'] . '/' . $images_src[$card->image_id['ID']]->meta_value; endif; ?>');">
                            </div>

                            <div class="card-heading">
                                <?php if ($card->title) : ?>
                                <h4
                                    class="card-blocktitle <?php if ($card->title_color_change) : echo 'theme-color-' . $card->title_color; endif; ?>">
                                    <?php echo $card->title; ?>
                                </h4>
                                <?php endif; ?>
                                <?php if ($card->subtitle) : ?>
                                <h5
                                    class="card-blocksubtitle  <?php if ($card->subtitle_color_change) : echo 'theme-color-' . $card->subtitle_color; endif; ?>">
                                    <?php echo $card->subtitle; ?>
                                </h5>
                                <?php endif; ?>
                            </div>

                            <div class="card-content"></div>

                            <div class="card-footer">
                                <div
                                    class="button-block<?php if ($card->button_icon == 'left') : echo ' button-left'; elseif ($card->button_icon == 'right') : echo ' button-right'; elseif ($card->button_icon == 'full') : echo ' button-stretch'; endif; ?>">
                                    <div class="card-cta-button">
                                        <?php echo $card->button_label; ?>
                                        <?php  if ($card->button_icon != 'none') :  ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                            <path
                                                d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                                        </svg>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($card->link['url'])) : ?>
                    </a><?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
