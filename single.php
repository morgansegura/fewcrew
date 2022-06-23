<?php
/**
 * The template for displaying all single posts
 *
 * @Date:   2022-6-16 9:27:42
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-02-08 17:03:18
 *
 * @package fewcrew
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Few_Crew;

the_post();
get_header(); ?>

<div class="contain-xxl">
    <div class="contain-xl">
        <main class="site-main layout-container layout-with-right-sidebar">

            <!-- <section class="block block-single has-light-bg layout-main">
        <article class="article-content">

          <h1><?php // the_title(); ?></h1>

          <?php // the_content();

          // Required by WordPress Theme Check, feel free to remove as it's rarely used in starter themes
          /* wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fewcrew' ), 'after' => '</div>' ) );

          entry_footer();

          if ( get_edit_post_link() ) {
            edit_post_link( sprintf( wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'fewcrew' ), [ 'span' => [ 'class' => [] ] ] ), get_the_title() ), '<p class="edit-link">', '</p>' );
          }

          the_post_navigation();

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }*/ ?>

        </article>
      </section> -->

            <section class="page-layout">
                <div class="page-head page-head-overlay">
                    <div class="singlephp-bg-image" style="background-image:
                        url('https://boonika.org/wp-content/uploads/2020/02/ivan-smirnov-f04-1024x547.jpg');">
                    </div>
                    <div class="page-head-content">
                        <div class="title-tag">
                            Striker go
                        </div>
                        <div class="title">
                            <!-- New steath mission for the strikers mode -->
                            <?php the_title(); ?>
                        </div>
                        <div class="name-and-date">
                            <figure class="author-avatar">
                                <img
                                    src="https://alchemists.dan-fisher.dev/esports/assets/images/esports/samples/avatar-13-sm.jpg">
                            </figure>
                            <div class="author-name">
                                <!-- Nang nuan -->
                                <?php echo get_the_author(); ?>
                            </div>
                            <!-- <date class="date-below-title">June 17th, 2022</date> -->
                            <date class="date-below-title">
                                <?php echo get_the_date(); ?>
                            </date>
                        </div>

                        <div class="contact-icons">
                            <div class="contact-icons-item">
                                <!--facebook icon-->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                                </svg>
                            </div>

                            <div class="contact-icons-item">
                                <!--twitter icon-->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                </svg>
                            </div>

                            <div class="contact-icons-item">
                                <!--instagram icon-->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content">
                    <div class="lead-text-content">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quo distinctio impedit
                        architecto error vero, ex sapiente. Fugit, maxime, dignissimos, consequatur eaque laborum iure
                        magni quia iusto magnam et consequuntur.
                    </div>
                    <p class="text-content">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam ede corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure nderit qui in ea
                        voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.
                    </p>
                    <div class="spacer"></div>
                    <h4>Mecha-Dragon Improvements</h4>
                    <p class="text-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reiciendis officia omnis
                        nemo commodi error alias ab. Voluptatibus incidunt, consectetur recusandae minus illo quaerat
                        doloribus tempora delectus, dolores eaque necessitatibus
                    </p>
                    <div class="spacer"></div>
                    <figure class="content-picture">
                        <img
                            src="https://conceptartworld.com/wp-content/uploads/2015/03/Ivan_Smirnov_Concept_Art_Illustration_what_a_pleasant_meetin-680x383.jpg">
                        <figcaption>
                            Screenshot of the latest mecha-dragon update with all the new weapons
                        </figcaption>
                    </figure>
                    <div class="spacer"></div>
                    <div class="list-rows">
                        <div class="list">
                            <h4>Ordered List</h4>
                            <ol class="ordered-list">
                                <li>"New items at the mecha mission"</li>
                                <li>"Themed skins for 4 characters"</li>
                                <li>"Fixed some bugs in "Strikers" mission"</li>
                                <li>"Halloween themed decorations"</li>
                                <li>"Increased weapon carry capacity"</li>
                            </ol>

                        </div>
                        <div class="list">
                            <h4>Unordered List</h4>
                            <ul class="unordered-list">
                                <li>"New items at the mecha mission"</li>
                                <li>"Themed skins for 4 characters"</li>
                                <li>"Fixed some bugs in "Strikers" mission"</li>
                                <li>"Halloween themed decorations"</li>
                                <li>"Increased weapon carry capacity"</li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-content">
                        Excepteur sint occaecat cupidatat non proident, suat in culpa qui officiare deserunt mollit anim
                        id est laborum. Sed ut perspiciatis unde omnis iste denatus error sit voluptatem ntium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae en dolorem der ipsum laboris.
                    </p>

                </div>
            </section>


            <?php get_sidebar( 'sidebar-post' ); ?>

        </main>
    </div>
</div>

<?php get_footer();
