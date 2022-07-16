<?php

	// [Carousel]
    $id = 'carousel-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

?>
<div id="<?php echo $id; ?>" class="carousel">
    <?php
		// [Slides]
		$slides = get_field('slides');

		if (have_rows('slides')) : while(have_rows('slides')) : the_row();
			// [Slide Content]
			$slidesContent = get_sub_field('slide_content');
			// [Slide content children]
			$buttonBoolean = $slidesContent['slide_button_boolean'];
			$link = $slidesContent['slide_link'];
			$supertitleBoolean = $slidesContent['slide_supertitle_boolean'];
			$supertitle = $slidesContent['slide_supertitle'];
			$titleBoolean = $slidesContent['slide_title_boolean'];
			$title = $slidesContent['slide_title'];
			$subtitleBoolean = $slidesContent['slide_subtitle_boolean'];
			$subtitle = $slidesContent['slide_subtitle'];
			// [Slide Settings]
			$slideSettings = get_sub_field('slide_settings');
			// [Settings classes]
			$buttonColor = ' button-'.$slideSettings['button_color'];
			$supertitleColor = ' supertitle-'.$slideSettings['slide_supertitle_color'];
			$titleColor = ' title-'.$slideSettings['slide_title_color'];
			$subtitleColor = ' subtitle-'.$slideSettings['slide_subtitle_color'];
			$overlayColor = ' slideContainer-'.$slideSettings['slide_image_overlay_color'];
			$directionX = ' directionX-'.$slideSettings['slide_text_location_x'];
			$directionY = ' directionY-'.$slideSettings['slide_text_location_y'];
			$slideClasses = $overlayColor . $directionX . $directionY;
			// [Image]
			$image = get_sub_field('image');


			$sendData = array(
				'$slidesContent' => get_sub_field('slide_content'),
				'$buttonBoolean' => $slidesContent['slide_button_boolean'],
				'$link' => $slidesContent['slide_link'],
				'$supertitleBoolean' => $slidesContent['slide_supertitle_boolean'],
				'$supertitle' => $slidesContent['slide_supertitle'],
				'$titleBoolean' => $slidesContent['slide_title_boolean'],
				'$title' => $slidesContent['slide_title'],
				'$subtitleBoolean' => $slidesContent['slide_subtitle_boolean'],
				'$subtitle' => $slidesContent['slide_subtitle'],
				'$slideSettings' => get_sub_field('slide_settings'),
				'$buttonColor' => ' button-'.$slideSettings['button_color'],
				'$supertitleColor' => ' supertitle-'.$slideSettings['slide_supertitle_color'],
				'$titleColor' => ' title-'.$slideSettings['slide_title_color'],
				'$subtitleColor' => ' subtitle-'.$slideSettings['slide_subtitle_color'],
				'$overlayColor' => ' slideContainer-'.$slideSettings['slide_image_overlay_color'],
				'$directionX' => ' directionX-'.$slideSettings['slide_text_location_x'],
				'$directionY' => ' directionY-'.$slideSettings['slide_text_location_y'],
				'$slideClasses' => $overlayColor . $directionX . $directionY,
				'$image' => get_sub_field('image'),
			);

			$carouselJSON = json_encode($sendData);

			pretty($carouselJSON);
		?>

    <div class="slide">
        <div class="slideContainer <?php echo $slideClasses; ?>"
            style="background-image: url('<?php echo $image['url']; ?>')" ;>
            <div class="content">

                <?php if ($supertitleBoolean) :  ?>
                <div class="supertitle <?php echo $supertitleColor;?>">
                    <?php echo $supertitle; ?>
                </div>
                <?php endif; ?>

                <div class="contentContainer">
                    <?php if ($titleBoolean) :  ?>
                    <div class="title <?php echo 'title-'.$titleColor;?>">
                        <?php echo $title; ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($subtitleBoolean) :  ?>
                    <div class="subtitle <?php echo 'subtitle-'.$subtitleColor;?>">
                        <?php echo $subtitle; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php  if ($buttonBoolean) : ?>
                <button class="button <?php echo 'button-'.$buttonColor; ?>">
                    <?php echo $link['title']; ?>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
		endwhile;
		endif;
		?>
</div>
