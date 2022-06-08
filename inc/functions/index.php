<?php
/**
 * Silence is golden.
 *
 * Nothing to see here.
 *
 * @Author:		Morgan Segura
 * @Date:   		2022-01-03 14:27:00
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-01-03 15:35:25
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

 // Silence is golden.

function add_google_fonts() {
wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,700;1,500&family=Roboto:ital,wght@0,700;1,900&display=swap', false );}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
if( function_exists('acf_hero_full_screen') ):

    acf_hero_full_screen(array(
      'key' => 'group_6297f137e2623',
      'title' => 'Hero Slider',
      'fields' => array(
        array(
          'key' => 'field_6297f140ac759',
          'label' => 'Hero Full Screen',
          'name' => 'hero_full_screen',
          'type' => 'flexible_content',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'layouts' => array(
            'layout_6297f151bbe03' => array(
              'key' => 'layout_6297f151bbe03',
              'name' => 'slide',
              'label' => 'Slide',
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_629ff390bd4cc',
                  'label' => 'Theme Mode',
                  'name' => 'theme_mode',
                  'type' => 'button_group',
                  'instructions' => 'Should the text and contents be light or dark for this slide? (Dark Mode is dark body and light text, Light Mode is Light body and Dark text.)',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'choices' => array(
                    'light: light' => 'light',
                    'dark: dark' => 'dark',
                  ),
                  'allow_null' => 0,
                  'default_value' => 'dark',
                  'layout' => 'horizontal',
                  'return_format' => 'value',
                ),
                array(
                  'key' => 'field_6297f161ac75a',
                  'label' => 'Link',
                  'name' => 'link',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
                array(
                  'key' => 'field_6297f177ac75b',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                  'preview_size' => 'medium',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
                array(
                  'key' => 'field_6297f186ac75c',
                  'label' => 'Mobile Image',
                  'name' => 'mobile_image',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                  'preview_size' => 'medium',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
                array(
                  'key' => 'field_629ff373bd4cb',
                  'label' => 'Super Title',
                  'name' => 'supertitle',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
                array(
                  'key' => 'field_629fd11abd4ca',
                  'label' => 'Title',
                  'name' => 'title',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
                array(
                  'key' => 'field_62a0d02a30c0a',
                  'label' => 'Subtitle',
                  'name' => 'subtitle',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
                array(
                  'key' => 'field_6297f1a1ac75d',
                  'label' => 'Copy',
                  'name' => 'copy',
                  'type' => 'text',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
              ),
              'min' => '',
              'max' => '',
            ),
          ),
          'button_label' => 'Add Row',
          'min' => '',
          'max' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));

endif;