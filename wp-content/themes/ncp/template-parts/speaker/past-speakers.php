<section class="past-speaker bg-linear-bg py-64 py-lg-96">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-40">
      <div class="section-title">
        <!-- Past Speaker Title -->
        <?php if ( $past_speaker_title = get_sub_field( 'past_speaker_title' ) ) : ?>
        <h2 class="text-40 leading-130 mb-16"><?php echo esc_html( $past_speaker_title ); ?></h2>
        <?php endif; ?>

        <!-- !! Past Speaker Title -->

        <!-- Past Speaker Description -->
        <?php if ( $past_speaker_description = get_sub_field( 'past_speaker_description' ) ) : ?>
        <p class="leading-150"><?php echo esc_html( $past_speaker_description ); ?></p>
        <?php endif; ?>

        <!-- !! Past Speaker Description -->
      </div>

      <!-- Past Speaker Slider Buttons -->
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
      <!-- !! Past Speaker Slider Buttons -->
    </div>

    <!-- Past Speaker-->
    <?php if ( have_rows( 'past_speakers' ) ) : ?>
    <div class="past-speaker-slider">
      <?php while ( have_rows( 'past_speakers' ) ) : the_row(); 
      
      $past_speakers_image = get_sub_field( 'past_speakers_image' );
      $past_speakers_name = get_sub_field( 'past_speakers_name' );
      $past_speakers_role = get_sub_field( 'past_speakers_role' );
      ?>
      <div class="past-speaker-card">
        <!-- Past Speaker Image -->
        <?php if ( $past_speakers_image ) : ?>
        <div class="past-speaker-img">
          <img src="<?php echo esc_url( $past_speakers_image['url'] ); ?>" alt="<?php echo esc_attr( $past_speakers_image['alt'] ); ?>" class="img-fluid">
        </div>
        <?php endif; ?>
        <!-- !! Past Speaker Image -->
        <div class="past-speaker-name px-16 pt-16">
          <!-- Past Speaker Name -->
         <?php if ( $past_speakers_name ) : ?>
          <h3 class="text-18 leading-130 mb-4"><?php echo esc_html( $past_speakers_name ); ?></h3>
          <?php endif; ?>
          <!-- !! Past speaker Name -->
          

          <!-- Past Speaker Role -->
           <?php if( $past_speakers_role ) : ?>
          <p class="text-gray"><?php echo esc_html( $past_speakers_role ); ?></p>
          <?php endif; ?>
          <!-- !! Past Speaker Role -->
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <!-- !! Past Speaker-->
  </div>
</section>