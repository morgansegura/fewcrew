<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2022-6-16 9:27:42
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-02-08 17:03:18
 *
 * @package fewcrew
 */

namespace Few_Crew;

the_post();

get_header();

// [Page Options]
require get_theme_file_path( '/inc/blocks/layout_options.php' );
?>

<main class="site-main">
    <?php few_edit_link(); ?>

    <section id="home-carouselfullscreen-slider">
        <?php require get_theme_file_path( '/template-parts/blocks/carouselfullscreen.php' ); ?>
    </section>

    <div class="contain-xxl">
        <div class="<?php echo $contain; ?>">
            <div class="spacing-lg text-light contain-xl">
                <h2 class="font-size-md">Training Programs</h2>
            </div>
            <section id="home-contentcardgrid-slider" class="spacing-sm">
                <?php require get_theme_file_path( '/template-parts/blocks/contentcardgrid.php' ); ?>
            </section>

            <div class="layout-container <?php echo $sidebar; ?>">
                <section class="layout-main">
                    <?php the_content(); ?>
                </section>
                <?php get_sidebar( 'sidebar-1' ); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
