<?php /**
* Template Name: custom-roots
* @package twighairsalon
*/

get_header() ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'custom' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>

        <div class="col-1">
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/hh1-e1516692023659-768x768.jpg" alt="" class="alignnone size-medium wp-image-35" />
          </div>
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2 style="margin-bottom: 10%">OUR ROOTS</h2>
              <p style="text-align:left;">Twig is a fresh boutique salon offering outstanding customer service, premium brands, a positive team environment and continued education.</p>
            </div>
          </div>
        </div >
        <div class="col-1">
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2 style="margin-bottom: 5%">THE TEAM</h2>
              <p style="text-align:left;">Our passionate experts are committed to leadership, attitude, and integrity.</p>
            </div>
          </div>
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/everyone-e1516692749763-768x766.jpg" alt="" class="alignnone size-medium wp-image-59" />
          </div>
        </div >
        <div class="col-1">
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/hair-e1516692653588-768x770.jpg" alt="" class="alignnone size-medium wp-image-60" />
          </div>
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2 style="margin-bottom: 10%">EDUCATION</h2>
              <p style="text-align:left;">Dedicated to education and driven by committment, Twig continues to push the boundaries with blended styling techniques to gain perspective and knowledge on the latest trends.</p>
            </div>
          </div>
        </div >
        <div class="col-1">
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2 style="margin-bottom: 10%">COMMUNITY</h2>
              <p style="text-align:left;">We believe in our community and actively seek out opportunities to give back and get involved with local events and fundrais</p>
            </div>
          </div>
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/bouldertheater-e1516692318436-768x753.png" alt="" class="alignnone size-medium wp-image-61" />
          </div>
        </div >

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
