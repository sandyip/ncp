<section class="speaker-title py-lg-96 py-64">
  <div class="container">
    <div class="section-title mb-56 text-center">
      <!-- <p class="text-primary-light page-path mb-4 leading-150 text-12 text-uppercase fw-700">Home / Speakers</p> -->
      <?php ncp_breadcrumb(); ?>
      <!-- banner title -->
      <?php if ( $speaker_title = get_sub_field( 'speaker_title' ) ) : ?>
        <h1 class="mb-24 leading-130 text-64 leading-130"><?php echo esc_html( $speaker_title ); ?></h1>
      <?php endif; ?>
      <!-- !! banner title -->

      <!-- banner description -->
      <?php if ( $speaker_description = get_sub_field( 'speaker_description' ) ) : ?>
      <p class="text-20 text-title leading-150"><?php echo esc_html( $speaker_description ); ?></p>
      <?php endif; ?>
      <!-- !! banner description -->
    </div>

    <div class="row">
      <!-- image 1 -->
      <?php if ( $image_1 = get_sub_field( 'image_1' ) ) : ?>
      <div class="col-lg-6">
        <div class="speaker-title-img1 rounded-16">
          <img src="<?php echo esc_url( $image_1['url'] ); ?>" alt="<?php echo esc_attr( $image_1['alt'] ); ?>" class="img-fluid">
        </div>
      </div>
      <?php endif; ?>
      <!-- !! image 1 -->

      <!-- image 2 -->
      <?php if ( $image_2 = get_sub_field( 'image_2' ) ) : ?>
      <div class="col-lg-3 col-sm-6">
        <div class="speaker-title-img rounded-16">
          <img src="<?php echo esc_url( $image_2['url'] ); ?>" alt="<?php echo esc_attr( $image_2['alt'] ); ?>" class="img-fluid">
        </div>
      </div>
      <?php endif; ?>
      <!-- !! image 2 -->

      <!-- image 3 -->
      <?php if ( $image_3 = get_sub_field( 'image_3' ) ) : ?>
      <div class="col-lg-3 col-sm-6">
        <div class="speaker-title-img rounded-16">
          <img src="<?php echo esc_url( $image_3['url'] ); ?>" alt="<?php echo esc_attr( $image_3['alt'] ); ?>" class="img-fluid">
        </div>
      </div>
      <?php endif; ?>
      <!-- !! image 3 -->
    </div>
  </div>

</section>