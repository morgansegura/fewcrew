<?php
// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'fcunited_skin_get_css' ) ) {
	add_filter( 'fcunited_filter_get_css', 'fcunited_skin_get_css', 10, 2 );
	function fcunited_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS


.jsmainscroll .jsmatchseason,			
#joomsport-container table.cansorttbl td,
#joomsport-container,
.jsmainscroll .jsmatchdate,
#joomsport-container.jsSliderContainer .jsmainscroll .jsview2 li .jsmatchseason{
    {$fonts['p_font-family']}
}
.jsMatchTeam .jsMatchPartName span,
#joomsport-container .nav-tabs,
.jsmainscroll .jsview2 table .js_div_particName,
.jsmainscroll table .jsScoreDiv,
#joomsport-container .table > thead > tr > th{
    {$fonts['h1_font-family']}
}

CSS;
		}

		if ( isset( $css['vars'] ) && isset( $args['vars'] ) ) {
			$vars         = $args['vars'];
			$css['vars'] .= <<<CSS
			
			

CSS;
		}

		if ( isset( $css['colors'] ) && isset( $args['colors'] ) ) {
			$colors         = $args['colors'];
			$css['colors'] .= <<<CSS
			
			
#joomsport-container .table > thead > tr > th{
    color: {$colors['text_dark']}!important;
    background: {$colors['alter_bg_hover']} !important;
}

#joomsport-container .table-striped > tbody > tr{
    border-color: {$colors['bd_color']};
}
.jsmainscroll .jsmatchdate,
#joomsport-container.jsSliderContainer .jsmainscroll .jsview2 li .jsmatchseason,
#joomsport-container a,
#joomsport-container table.cansorttbl td{
   color: {$colors['text_dark']};
}
#joomsport-container a:hover{
     color: {$colors['text_link']};
}
.jsSliderContainer button[class^="js"]{
     background: {$colors['bg_color']} !important;
}
.jsSliderContainer button[class^="js"]:hover{
     background: {$colors['alter_bd_color']} !important;
}
#jsMatchViewID .jsMatchStatHeader h3,
.matchdtime{
    color: {$colors['text_dark']};
}
#joomsport-container .nav-tabs > li.active a:before,
#joomsport-container .nav-tabs > li a:hover:before{
     background: {$colors['text_link']} !important;
}
#joomsport-container .nav-tabs > li.active a{
    color: {$colors['text_link']};
}
#joomsport-container .select2{
  background: {$colors['bg_color']} !important;
}
#joomsport-container .paginationJS > .active > a,
#joomsport-container .paginationJS > .active > span,
#joomsport-container .paginationJS > .active > a:hover,
#joomsport-container .paginationJS > .active > span:hover,
#joomsport-container .paginationJS > .active > a:focus,
#joomsport-container .paginationJS > .active > span:focus{
     background: {$colors['text_link']}; 
     border-color: {$colors['text_link']}; 
     color: {$colors['extra_link']};
}
.jsmainscroll .jsmatchseason,
#joomsport-container .paginationJS > li > a, #joomsport-container .paginationJS > li > span{
    color: {$colors['text_dark']};
}
#joomsport-container .paginationJS > li > a:hover, #joomsport-container .paginationJS > li > span:hover, #joomsport-container .paginationJS > li > a:focus, #joomsport-container .paginationJS > li > span:focus{
     color: {$colors['extra_link']};
     background: {$colors['text_dark']}; 
     border-color: {$colors['text_dark']}; 
}
#jsFilterMatches .form-group button{
     background: {$colors['text_link']}; 
     border-color: {$colors['text_link']}; 
     color: {$colors['extra_link']};
}
#jsFilterMatches .form-group button:hover{
     background: {$colors['text_dark']}; 
     border-color: {$colors['text_dark']}; 
     color: {$colors['extra_link']};
}
.slider_outer.slider_outer_pagination_pos_bottom_outside .swiper-pagination-bullets .swiper-pagination-bullet{
    border-color: {$colors['text_dark']}; 
    background-color: {$colors['text_dark']}; 
}

.slider_outer.slider_outer_pagination_pos_bottom_outside .slider_pagination_wrap .swiper-pagination-bullet.swiper-pagination-bullet-active{
    border-color: {$colors['alter_link']}; 
    background-color: {$colors['alter_link']};
}
.sc_slider_controls .slider_controls_wrap>a{
    color: {$colors['extra_link']};  
    background-color: {$colors['text_dark']};  
} 


CSS;
		}

		return $css;
	}
}

