<?php
/**
 * Template for header
 *
 * <head> section and everything up until <div id="content">
 *
 * @Author: Morgan Segura
 * @Date: 2020-05-11 13:17:32
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-16 16:50:17
 *
 * @package fewcrew
 */

namespace Few_Crew;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class( 'no-js' ); ?>>
        <a class="skip-link screen-reader-text js-trigger"
            href="#content"><?php echo esc_html( get_default_localization( 'Skip to content' ) ); ?></a>

        <?php wp_body_open(); ?>
        <div id="page" class="wrapper">
            <header class="header">
                <div class="header-container contain-xxl">
                    <div class="header-container-inner contain-xl">
                        <?php get_template_part( 'template-parts/header/branding' ); ?>
                        <div class="pushy-panel__toggle">
                            <span class="pushy-panel__line"></span>
                        </div>
                    </div>
                </div>
            </header>
            <?php get_template_part( 'template-parts/header/navigation' ); ?>

            <div class="content-wrapper">
