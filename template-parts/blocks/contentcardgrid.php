<?php
/**
 * Block Name: Content Card Grid
 *
 * @package fewcrew
 */

// [Settings]
require get_theme_file_path( '/inc/blocks/block_options.php' );

// [Block Settings]
require get_theme_file_path( '/inc/blocks/contentcardgrid.php' );

?>

<div class="<?php echo $spacing; ?>">
    <div class="content-cardgrid">
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
