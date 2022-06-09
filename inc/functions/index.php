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
wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,700;1,500&family=Montserrat:ital,wght@0,700;1,900&display=swap', false );}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
