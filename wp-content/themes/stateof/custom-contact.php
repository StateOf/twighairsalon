<?php /**
* Template Name: custom-contact
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
      <div class="floatingdiv">
        <div class="floatingtitle">
          <h2>GET IN TOUCH</h2>
          <p>We would love to hear from you!</p>
          <div class="floatingform">
            <?php echo do_shortcode('[ninja_form id=2]'); ?>
          </div>
          <div class="contactinfo">
            <p>HOW TO GET HERE</p>
            <p>1831 Pearl Street</p>
            <p>Boulder, CO 80302</p>
            </br>
            <p>TALK TO US</p>
            <p>(303)447-0880</p>
          </div>
        </div>
      </div>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
