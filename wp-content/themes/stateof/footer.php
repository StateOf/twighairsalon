<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twighairsalon
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" style="background-color:black;">
    <div class="row" style="margin-left:0">
      <div class="col-1">
        <div class="site-info" style="margin-left: 42%;">
          <div class="foot-brand">
            <?php the_custom_logo(); ?>
          </div>
          <a href="https://www.facebook.com/TwigHair/">
            <img src="/wp-content/uploads/2018/01/social-media-icons-03-03-e1516491172272.png" alt="" class="alignnone size-medium wp-image-61 fb" />
          </a>
          <a href="https://www.instagram.com/twighairsalon/">
            <img src="/wp-content/uploads/2018/01/social-media-icons-04-e1516491078349.png" alt="" class="alignnone size-medium wp-image-61 ig" />
          </a>
          <a href="https://twitter.com/twighairsalon">
            <img src="/wp-content/uploads/2018/01/social-media-icons-05-e1516491198372.png" alt="" class="alignnone size-medium wp-image-61 tw" />
          </a>
          <!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twighairsalon' ) ); ?>"><?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'twighairsalon' ), 'WordPress' );
          ?></a>
          <span class="sep"> | </span>
          <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %1$s by %2$s.', 'twighairsalon' ), 'twighairsalon', '<a href="http://steve970.github.io">steve970</a>' );
          ?> -->
        </div>
        <!-- .site-info -->
      </div>
    </div>
    <div class="row" style="margin-left:0">
      <div class="footercontent">
        <div class="spacer">
        </div>
        <div class="col-6 contact">
          <p>CONTACT US</p>

          <p>1831 Pearl Street</p>
          <p>Boulder, Colorado 80302</p>
          <p>(303) 447-0880</p>
          <p>twighairsalon@gmail.com</p>
        </div>
        <div class="col-6 hours">
          <p>SALON HOURS</p>

          <p>Monday, 10am - 5pm</p>
          <p>Tuesday, Friday, 9am - 7pm</p>
          <p>Saturday, 9am - 5pm</p>
          <p>Sunday, Closed</p>
        </div>
        <div class="col-6 giftscards">
          <p>GIFT CARDS</p>

          <p>Treat your family and friends with a Twig Hair Salon gift card!</p>
        </div>
        <div class="connect">
          <p>CONNECT WITH TWIG</p>

          <p>Be the first to know about products, events, and exclusive offers</p>
          <?php echo do_shortcode('[ninja_form id=1]'); ?>
        </div>
        <div class="spacer1">
        </div>
      </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
