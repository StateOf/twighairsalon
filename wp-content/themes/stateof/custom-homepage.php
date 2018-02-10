<?php /**
* Template Name: custom-homepage
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
            <img src="/wp-content/uploads/2018/01/older_woman-e1516327236542-768x822.png" alt="" class="alignnone size-medium wp-image-35" />
          </div>
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2>WHAT WE DO</h2>
              <p>Whether you're looking to get a trim or a beauty overhaul, we've got you covered.</p>
              <button>
                <p>OUR SERVICES</p>
              </button>
            </div>
          </div>
        </div >
        <div class="col-1">
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2>WAX</h2>
              <p>Let our professional waxing technicians help you show off those legs and raise eyebrows. Book now!</p>
              <button>
                <p>GET WAXED<p>
              </button>
            </div>
          </div>
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/eyebrows-e1516326039404-768x768.png" alt="" class="alignnone size-medium wp-image-59" />
          </div>
        </div >
        <div class="col-1">
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/wedding-e1516327127753-768x770.png" alt="" class="alignnone size-medium wp-image-60" />
          </div>
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2>INSTA STORIES</h2>
              <p>Get inspired by our twig stylists for your visit</p>
              <button>
                <p>FOLLOW US
                </p>
              </button>
            </div>
          </div>
        </div >
        <div class="col-1">
          <div class="col-2">
            <div style="padding: 30% 15%;">
              <h2>PRODUCTS</h2>
              <p>UNITE  |  WELLA  |  R+Co</p>
              <button style="margin-bottom: .625em;">
                <p>AVAILABLE IN SALON</p>
              </button>
              <p>(303) 447-0880</p>
            </div>
          </div>
          <div class="col-2">
            <img src="/wp-content/uploads/2018/01/product_1-e1516326952332-768x768.png" alt="" class="alignnone size-medium wp-image-61" />
          </div>
        </div >

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
