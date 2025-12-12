<section class="speaker-testimonial py-64 py-lg-96 bg-background">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-60">
      <div class="section-title">
        <!-- partners title -->
        <?php if ($partners_title = get_sub_field('partners_title')) : ?>
          <h2 class="text-40 leading-130 mb-16"><?php echo esc_html($partners_title); ?></h2>
        <?php endif; ?>
        <!-- !! partners title -->
        <!-- partners description -->
        <?php if ($partners_description = get_sub_field('partners_description')) : ?>
          <p class="leading-150"><?php echo $partners_description; ?></p>
        <?php endif; ?>
        <!-- !! partners description -->
      </div>

      <div class="slider-btn d-none d-lg-flex gap-8">
        <button class="prev bg-primary-light rounded-48 px-12 py-8 d-flex justify-content-center align-items-center">
          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/right-arrow.svg" alt=""
            class="img-fluid">
        </button>
        <button class="next bg-primary-light rounded-48 px-12 py-8">
          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/right-arrow.svg" alt=""
            class="img-fluid">
        </button>
      </div>
    </div>

    <!-- partner testimonial -->
    <?php if (have_rows('partners_testimonial')) : ?>
      <div class="speaker-testimonial-slider">
        <?php while (have_rows('partners_testimonial')) :
          the_row(); 
          $partner_name = get_sub_field( 'partner_name' );
          $partner_role = get_sub_field( 'partner_role' );
          $testimonial = get_sub_field( 'testimonial' );
          ?>
          <div class="speaker-testimonial-card p-24 bg-accent rounded-16">
            <!-- testimonial -->
            <?php if ( $testimonial ) : ?>
            <div class="general-content-box fst-italic mb-24">
              <p><?php echo $testimonial; ?></p>
            </div>
            <?php endif; ?>
            <!-- !! testimonial -->

            <!-- partner name -->
            <?php if ( $partner_name ) : ?>
            <p class="text-title leading-150 text-16 mb-4 fw-600"><?php echo esc_html( $partner_name ); ?></p>
            <?php endif; ?>
            <!-- !! partner name -->

            <!-- partner role -->
            <?php if ( $partner_role ) : ?>
            <p class="text-12 leading-150 opacity-80"><?php echo esc_html( $partner_role ); ?></p>
            <?php endif; ?>
            <!-- !! partner role -->
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <!-- !! partner testimonial -->
  </div>
</section>