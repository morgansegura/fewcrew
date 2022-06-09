<?php
/**
 * // tpl-homepage.php
 * Template name: Home
 */
get_header(); ?>
<main id="main" role="main">

  <?php get_template_part( 'template-parts/blocks/carouselfullscreen' ); ?>

  <?php
    while (have_posts()) : the_post();
	    the_content('');
    endwhile;
    ?>

  <div class="content-imagegrid content-dark">
    <div class="contain-xxl">
      <div class="contain-lg">
        <div class="content-imagegrid-heading">
          <h2 class="content-imagegrid-title">Schedule a Session</h2>
        </div>
        <div class="content-imagegrid-container">

          <div class="content-imagegrid-item">
            <div class="card">
              <div class="card-image"
                style="background-image: url('https://images.pexels.com/photos/3651672/pexels-photo-3651672.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
              </div>
              <div class="card-heading">
                <h4 class="card-blocktitle">Ball</h4>
                <h5 class="card-blocksubtitle">Skills</h5>
              </div>
              <div class="card-content"></div>

              <div class="card-footer">
                <div class="card-cta-button">
                  Click Here for More
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                    <path
                      d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="content-imagegrid-item">
            <div class="card">
              <div class="card-image"
                style="background-image: url('https://images.pexels.com/photos/2128220/pexels-photo-2128220.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
              </div>
              <div class="card-heading">
                <h4 class="card-blocktitle">Agility</h4>
                <h5 class="card-blocksubtitle">Training</h5>
              </div>
              <div class="card-content"></div>

              <div class="card-footer">
                <div class="card-cta-button">
                  Click Here for More
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                    <path
                      d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="content-imagegrid-item">
            <div class="card">
              <div class="card-image"
                style="background-image: url('https://images.pexels.com/photos/3148452/pexels-photo-3148452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
              </div>
              <div class="card-heading">
                <h4 class="card-blocktitle">Finishing</h4>
                <h5 class="card-blocksubtitle">Skills</h5>
              </div>
              <div class="card-content"></div>
              <div class="card-footer">
                <div class="card-cta-button">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                    <path
                      d="M 11.414063 3.585938 L 8.585938 6.414063 L 15.171875 13 L 8.585938 19.585938 L 11.414063 22.414063 L 20.828125 13 Z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
