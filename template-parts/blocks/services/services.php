<?php
	// [Carousel]
    $id = 'services-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

?>
<div id="<?php echo $id; ?>" class="services">
    <?php
		// [Services]
		$services = get_field('services');


        // [Services Header]
        $servicesHeader = $services['services_header'];
        // [Services Header Content]
        $supertitleBoolean = $servicesHeader['services_supertitle_boolean'];
        $supertitle = $servicesHeader['services_supertitle'];
        $titleBoolean = $servicesHeader['services_title_boolean'];
        $title = $servicesHeader['services_title'];
        $subtitleBoolean = $servicesHeader['services_subtitle_boolean'];
        $subtitle = $servicesHeader['services_subtitle'];
        $copyBoolean = $servicesHeader['services_copy_boolean'];
        $copy = $servicesHeader['services_copy'];
        // [Services Settings]
        $servicesSettings = $services['services_settings'];
        // [Services classes]
        $servicesColor = ' theme-'.$servicesSettings['services_color'];
        $service = $services['service'];

        ?>


    <div class="servicesContainer center <?php echo $servicesColor; ?>">

        <div class="section-title">
            <header class="header">
                <?php if ($supertitleBoolean) : ?>
                <div class="section-supertitle">
                    <?php echo $supertitle; ?>
                </div>
                <?php endif; ?>
                <?php if ($titleBoolean) : ?>
                <div class="section-title">
                    <?php echo $title; ?>
                </div>
                <?php endif; ?>
                <?php if ($subtitleBoolean) : ?>
                <div class="section-subtitle">
                    <?php echo $subtitle; ?>
                </div>
                <?php endif; ?>
                <?php if ($copyBoolean) : ?>
                <div class="section-copy">
                    <?php echo $copy; ?>
                </div>
                <?php endif; ?>
            </header>
        </div>

        <div class="servicesInner">
            <?php
                    if (have_rows('services')) : while(have_rows('services')) : the_row();
                        if (have_rows('service')) : while(have_rows('service')) : the_row();
                            // [Image]
                            $image = get_sub_field('icon');
                            $serviceTitle = get_sub_field('title');
                            $serviceCopy = get_sub_field('copy');

                        ?>
            <div class="servicesItem">
                <?php if ($image) : ?>
                <div class="servicesItemIcon">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
                <?php endif; ?>
                <?php if ($serviceTitle) : ?>
                <div class="servicesItemTitle">
                    <?php echo $serviceTitle; ?>
                </div>
                <?php endif; ?>
                <?php if ($serviceCopy) : ?>
                <div class="servicesItemCopy">
                    <?php echo $serviceCopy; ?>
                </div>
                <?php endif; ?>
            </div>


            <?php
                endwhile;
                endif;
            endwhile;
            endif;
            ?>
        </div>
    </div>


</div>
