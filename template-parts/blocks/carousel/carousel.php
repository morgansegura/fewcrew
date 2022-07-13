<?php
    $id = 'services-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $title = get_field('title');
    $supertitle = get_field('supertitle');
    $subtitle = get_field('subtitle');
    $copy = get_field('copy');
 ?>

<div id="<?php echo $id; ?>" class=" services">
    <div id="<?php echo esc_attr($id); ?>" class="servicesHeader">
        <?php if ($supertitle) :  ?>
        <div class="servicesSupertitle"><?php echo $supertitle; ?></div>
        <?php endif; ?>
        <?php if ($title) :  ?>
        <h2 class="servicesTitle"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($subtitle) :  ?>
        <h3 class="servicesSubtitle"><?php echo $subtitle; ?></h3>
        <?php endif; ?>
        <?php if ($copy) :  ?>
        <p class="servicesSubtitle"><?php echo $copy; ?></p>
        <?php endif; ?>
    </div>
    <div class="servicesInner">
        <?php
        if( have_rows('slides') ) :
            while ( have_rows('slides')) : the_row();

            $icon = get_subfield('image');
            $serviceTitile = get_subfield('title');
            $serviceCopy = get_subfield('copy');
        ?>
        <div class="servicesItem">
            <div class="servicesItemIcon">
                <?php if ($icon) : ?>
                <img src="<?php echo $icon['sourceUrl']; ?>" alt="<?php echo $icon['altText']; ?>" />
                <?php endif; ?>
            </div>
            <?php if ($serviceTitle) : ?>
            <h4 class="servicesItemTitle"><?php echo $serviceTitle; ?></h4>
            <?php endif; ?>
            <?php if ($serviceCopy) : ?>
            <p class="servicesItemCopy">
                <?php  echo $serviceCopy; ?>
            </p>
            <?php endif; ?>
        </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
