<?php
/**
 * // tpl-homepage.php
 * Template name: Home
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main my-1 my-lg-4 py-3" role="main">
            <div class="entry-content">
                <?php get_template_part( 'template-parts/blocks/carouselfullscreen' ); ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();