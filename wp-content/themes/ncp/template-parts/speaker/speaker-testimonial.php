<section class="speaker-testimonial py-64 py-lg-96 bg-background">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-60">
      <div class="section-title">
        <!-- speakers title -->
        <?php if ($speakers_title = get_sub_field('speakers_title')) : ?>
          <h2 class="text-40 leading-130 mb-16"><?php echo esc_html($speakers_title); ?></h2>
        <?php endif; ?>
        <!-- !! speakers title -->
        <!-- speakers description -->
        <?php if ($speakers_description = get_sub_field('speakers_description')) : ?>
          <p class="leading-150"><?php echo $speakers_description; ?></p>
        <?php endif; ?>
        <!-- !! speakers description -->
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

    <!-- speaker testimonial -->
    <?php if (have_rows('speakers_testimonial')) : ?>
      <div class="speaker-testimonial-slider">
        <?php while (have_rows('speakers_testimonial')) :
          the_row(); 
          $speaker_name = get_sub_field( 'speaker_name' );
          $speaker_role = get_sub_field( 'speaker_role' );
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

            <!-- speaker name -->
            <?php if ( $speaker_name ) : ?>
            <p class="text-title leading-150 text-16 mb-4 fw-600"><?php echo esc_html( $speaker_name ); ?></p>
            <?php endif; ?>
            <!-- !! speaker name -->

            <!-- speaker role -->
            <?php if ( $speaker_role ) : ?>
            <p class="text-12 leading-150 opacity-80"><?php echo esc_html( $speaker_role ); ?></p>
            <?php endif; ?>
            <!-- !! speaker role -->
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <!-- !! speaker testimonial -->
  </div>
</section>