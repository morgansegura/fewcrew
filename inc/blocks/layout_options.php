<?php

if( have_rows('layout_options') ) :
    while( have_rows('layout_options') ): the_row();
        $option = new stdClass();
        $option->width = get_sub_field('width');
        $option->layout = get_sub_field('layout');
    endwhile;
endif;

$contain = (isset($option->width) && $option->width != 'default' ) ? 'contain-' . $option->width : 'contain-xl';
$sidebar = (isset($option->layout) && $option->layout != 'none') ? 'layout-with-' . $option->layout . '-sidebar' : '';
