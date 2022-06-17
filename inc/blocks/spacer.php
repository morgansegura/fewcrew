<?php

if( have_rows('horizontalrule') ):
  while ( have_rows('horizontalrule') ) : the_row();
    $item = new stdClass();
    $item->color = get_sub_field('color');
    $item->height = get_sub_field('color');
  endwhile;
endif;
