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
    $options->margin_bottom = get_sub_field('margin_bottom');
    $options->container_width = get_sub_field('container_width');


//   print_pre($options);
?>

<div class="contain-xxl">
    <div class="contain-xl">
        <div class="card-fullimage">
            <div class="card-fullimage-image"
                style="background-image: url('https://alchemists.dan-fisher.dev/esports/assets/images/esports/samples/post-img5-card-md.jpg');">
            </div>
            <div class="card-fullimage-main">
                <div class="card-fullimage-container">

                    <div class="card-fullimage-anchor">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <path
                                d="M 14.970703 2.9726562 A 2.0002 2.0002 0 0 0 13 5 L 13 13 L 5 13 A 2.0002 2.0002 0 1 0 5 17 L 13 17 L 13 25 A 2.0002 2.0002 0 1 0 17 25 L 17 17 L 25 17 A 2.0002 2.0002 0 1 0 25 13 L 17 13 L 17 5 A 2.0002 2.0002 0 0 0 14.970703 2.9726562 z" />
                        </svg>
                    </div>

                    <div class="card-fullimage-content">
                        <div class="card-fullimage-tag">L.o. heros</div>
                        <div class="card-fullimage-title"> A tech class is added to the human's race </div>
                    </div>
                    <div class="card-fullimage-meta-container">
                        <!-- Nang look up html 5 Dates -->
                        <date class="card-fullimage-date">June 15th, 2022</date>
                        <div class="card-fullimage-metadata">
                            <div class="card-fullimage-metadata-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                    <path
                                        d="M 15 3 C 9.41 3 4.7265781 6.827 3.3925781 12 L 5.5390625 12 C 6.6340625 10.771 10.366 7 15 7 C 19.634 7 23.365938 10.771 24.460938 12 L 26.607422 12 C 25.273422 6.827 20.59 3 15 3 z M 15 9 C 10.551 9 6.8162969 13.579953 6.7792969 13.626953 C 6.5892969 13.861953 6.303 14 6 14 L 3 14 C 2.448 14 2 14.448 2 15 C 2 15.552 2.448 16 3 16 L 6 16 C 6.303 16 6.5892969 16.138047 6.7792969 16.373047 C 6.8162969 16.420047 10.551 21 15 21 C 19.449 21 23.183703 16.420047 23.220703 16.373047 C 23.410703 16.138047 23.697 16 24 16 L 27 16 C 27.552 16 28 15.552 28 15 C 28 14.448 27.552 14 27 14 L 24 14 C 23.697 14 23.410703 13.861953 23.220703 13.626953 C 23.183703 13.579953 19.449 9 15 9 z M 15 11 C 17.209 11 19 12.791 19 15 C 19 17.209 17.209 19 15 19 C 12.791 19 11 17.209 11 15 C 11 12.791 12.791 11 15 11 z M 15 13 A 2 2 0 0 0 13 15 A 2 2 0 0 0 15 17 A 2 2 0 0 0 17 15 A 2 2 0 0 0 15 13 z M 3.3925781 18 C 4.7265781 23.173 9.41 27 15 27 C 20.59 27 25.273422 23.173 26.607422 18 L 24.460938 18 C 23.365938 19.229 19.634 23 15 23 C 10.366 23 6.6340625 19.229 5.5390625 18 L 3.3925781 18 z" />
                                </svg>
                                <div>12345</div>
                            </div>
                            <div class="card-fullimage-metadata-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                    <path
                                        d="M 9.5449219 3 C 5.3895807 3 2 6.3895806 2 10.544922 C 2 14.283156 4.9005496 18.084723 7.6601562 21.119141 C 10.419763 24.153558 13.171875 26.369141 13.171875 26.369141 A 1.0001 1.0001 0 0 0 13.197266 26.388672 C 13.642797 26.725148 14.201794 26.943857 14.808594 26.984375 A 1.0001 1.0001 0 0 0 15 27 A 1.0001 1.0001 0 0 0 15.189453 26.984375 A 1.0001 1.0001 0 0 0 15.199219 26.982422 C 15.802918 26.940449 16.359155 26.723674 16.802734 26.388672 A 1.0001 1.0001 0 0 0 16.828125 26.369141 C 16.828125 26.369141 19.580237 24.153558 22.339844 21.119141 C 25.099451 18.084722 28 14.283156 28 10.544922 C 28 6.3895806 24.610419 3 20.455078 3 C 17.841043 3 15.989939 4.4385487 15 5.4570312 C 14.010061 4.4385487 12.158957 3 9.5449219 3 z M 9.5449219 5 C 12.276127 5 13.937826 7.2424468 14.103516 7.4746094 A 1.0001 1.0001 0 0 0 14.994141 8.0136719 A 1.0001 1.0001 0 0 0 15.017578 8.0136719 A 1.0001 1.0001 0 0 0 15.041016 8.0117188 A 1.0001 1.0001 0 0 0 15.117188 8.0058594 A 1.0001 1.0001 0 0 0 15.892578 7.4785156 C 16.049938 7.2575052 17.716133 5 20.455078 5 C 23.529737 5 26 7.4702629 26 10.544922 C 26 13.147688 23.499768 16.870104 20.859375 19.773438 C 18.227966 22.666891 15.607768 24.780451 15.589844 24.794922 C 15.414236 24.925626 15.219097 25 15 25 C 14.780903 25 14.585764 24.92563 14.410156 24.794922 C 14.392236 24.780452 11.772034 22.666891 9.140625 19.773438 C 6.5002316 16.870105 4 13.147688 4 10.544922 C 4 7.4702629 6.470263 5 9.5449219 5 z" />
                                </svg>
                                <div>1234</div>
                            </div>
                            <div class="card-fullimage-metadata-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                    <path
                                        d="M 25 4.0625 C 12.414063 4.0625 2.0625 12.925781 2.0625 24 C 2.0625 30.425781 5.625 36.09375 11 39.71875 C 10.992188 39.933594 11 40.265625 10.71875 41.3125 C 10.371094 42.605469 9.683594 44.4375 8.25 46.46875 L 7.21875 47.90625 L 9 47.9375 C 15.175781 47.964844 18.753906 43.90625 19.3125 43.25 C 21.136719 43.65625 23.035156 43.9375 25 43.9375 C 37.582031 43.9375 47.9375 35.074219 47.9375 24 C 47.9375 12.925781 37.582031 4.0625 25 4.0625 Z M 25 5.9375 C 36.714844 5.9375 46.0625 14.089844 46.0625 24 C 46.0625 33.910156 36.714844 42.0625 25 42.0625 C 22.996094 42.0625 21.050781 41.820313 19.21875 41.375 L 18.65625 41.25 L 18.28125 41.71875 C 18.28125 41.71875 15.390625 44.976563 10.78125 45.75 C 11.613281 44.257813 12.246094 42.871094 12.53125 41.8125 C 12.929688 40.332031 12.9375 39.3125 12.9375 39.3125 L 12.9375 38.8125 L 12.5 38.53125 C 7.273438 35.21875 3.9375 29.941406 3.9375 24 C 3.9375 14.089844 13.28125 5.9375 25 5.9375 Z" />
                                </svg>
                                <div>123</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
