<?php

use Roots\Sage\Setup;
use Roots\Sage\Extras;
use Roots\Sage\Wrapper;

require_once 'lib/Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

$mobileBodyClass = $detect->isMobile() ? 'l-col is-mobile' : 'l-col';

?>

<!doctype html>
<html <?php language_attributes(); ?>>

  <?php

  if (is_front_page()) {
    $stuff = "background-image: url('" . get_template_directory_uri() . "/assets/prod/imgs/bg-stuff-2.png')";
  } else {
    $stuff = '';
  }

  if( is_page('purchase-confirmation') ) {

    $purchaseData = Extras\wps_get_recent_receipt_data();

  ?>

  <script>

    var previousURL = document.referrer,
        neededURL = '/checkout';

    if (previousURL.indexOf(neededURL) !== -1) {

      window.dataLayer = window.dataLayer || [];

      dataLayer.push({
         'transactionId': '<?php echo $purchaseData['transaction']->ID; ?>',
         'transactionAffiliation': '<?php echo $purchaseData['payment']['cart_details'][0]['name']; ?>',
         'transactionTotal': <?php echo $purchaseData['payment']['cart_details'][0]['subtotal']; ?>,
         'transactionTax': 0,
         'transactionShipping': 0,
         'transactionProducts': [{
           'sku': '<?php echo $purchaseData['transaction']->ID; ?>',
           'name': '<?php echo $purchaseData['payment']['cart_details'][0]['name']; ?>',
           'category': 'WP Shopify License',
           'price': <?php echo $purchaseData['payment']['cart_details'][0]['price']; ?>,
           'quantity': 1
         }]
      });

    } else {
      console.log('Did not come from Checkout page');

    }

  </script>

  <?php }

  ?>

  <?php get_template_part('templates/head'); ?>

  <body <?php body_class($mobileBodyClass); ?> style="<?php echo $stuff; ?>">

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <?php

      do_action('get_header');
      get_template_part('templates/header');

    ?>


    <?php if (is_front_page()) { ?>
      <div class="wrap container l-fill l-row <?php echo isRegisteredAndPurchasing() ? 'is-registered-and-purchasing' : ''; ?>" role="document">

    <?php } else { ?>
      <div class="wrap container l-fill l-row <?php echo is_page_template('template-narrow.php') ? 'l-contain-narrow' : 'l-contain'; ?> <?php echo isRegisteredAndPurchasing() ? 'is-registered-and-purchasing' : ''; ?>" role="document">

    <?php } ?>

      <?php if (is_page('docs') || get_post_type( get_the_ID() ) === 'docs' ) : ?>
        <aside class="sidebar">
          <?php get_template_part('templates/sidebar', 'docs'); ?>
        </aside>
      <?php endif; ?>

      <main class="main l-fill">

        <?php include Wrapper\template_path(); ?>

        <?php if(is_page('docs')) {
          get_template_part('templates/docs');
        } ?>

      </main>

    </div>

    <?php get_template_part('templates/components'); ?>

    <?php

      do_action('get_footer');

      if (!is_page('auth')) {
        get_template_part('templates/footer');
      }

      wp_footer();

    ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWRL8QH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-101619037-1', 'auto');
      ga('send', 'pageview');

    </script>

  </body>
</html>
