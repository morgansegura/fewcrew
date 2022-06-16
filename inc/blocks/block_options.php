<?php

if( have_rows('options') ) :
    while( have_rows('options') ): the_row();
        $option = new stdClass();
        $option->spacing = get_sub_field('spacing');
        $option->width = get_sub_field('width');
    endwhile;
endif;

$contain = (isset($option->width) && $option->width != 'default' ) ? 'contain-' . $option->width : 'contain-xl';
$wrapper = ($contain == 'contain-full') ? 'contain-full' : 'contain-xxl';
$container = ($contain != 'contain-full') ? 'contain-' . $option->width : '';
$spacing = (isset($option->spacing) && $option->spacing != 'default') ? 'spacing-' . $option->spacing : '';