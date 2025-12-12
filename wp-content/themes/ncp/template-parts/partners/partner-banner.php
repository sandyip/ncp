<section class="partners-banner pt-64 pt-lg-96">
  <div class="container">
    <div class="section-title mb-40">
      <!-- <p class="text-primary-light page-path mb-4 leading-150 text-12 text-uppercase fw-700 text-center">Home / Partners
      </p> -->
      <?php ncp_breadcrumb(); ?>
      
      <!-- partner banner title  -->
      <?php if ( $partner_banner_title = get_sub_field( 'partner_banner_title' ) ) : ?>
      <h1 class="mb-32 text-64 leading-120 text-center"><?php echo esc_html( $partner_banner_title ); ?></h1>
      <?php endif; ?>
      <!-- !! partner banner title -->

      <!-- partner banner description -->
      <?php if ( $partner_banner_description = get_sub_field( 'partner_banner_description' ) ) : ?>
      <p class="text-center text-20 leading-150"><?php echo $partner_banner_description; ?></p>
      <?php endif; ?>
      <!-- !! partner banner description -->
    </div>

    <?php
    get_template_part('template-parts/partner-logo', null);

    ?>
  </div>
</section>