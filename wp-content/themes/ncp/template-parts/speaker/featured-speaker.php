<section class="featured-speaker pb-64 pb-lg-96">
  <div class="container">
    <div class="d-flex flex-wrap gap-16 justify-content-between align-items-end mb-64">
      <div class="section-title">
        <!-- Featured Speaker Title -->
        <?php if ( $featured_speaker_title = get_sub_field( 'featured_speaker_title' ) ) : ?>
        <h2 class="text-40 leading-130 mb-16"><?php echo esc_html( $featured_speaker_title ); ?></h2>
        <?php endif; ?>
        <!-- !! Featured Speaker Title -->

        <!-- Featured Speaker Description -->
        <?php if ( $featured_speaker_description = get_sub_field( 'featured_speaker_description' ) ) : ?>
        <p><?php echo esc_html( $featured_speaker_description ); ?></p>
        <?php endif; ?>
        <!-- !! Featured Speaker Description -->
      </div>

      <!-- Become a Speaker Button -->
      <?php if ( $become_a_speaker_button = get_sub_field( 'become_a_speaker_button' ) ) : ?>
      <a href="<?php echo esc_url( $become_a_speaker_button['url'] ); ?>" target="<?php echo esc_attr( $become_a_speaker_button['target'] ); ?>" class="leading-150 px-36 py-12 rounded-48 bg-primary-light text-white"><?php echo esc_html( $become_a_speaker_button['title'] ); ?></a>
      <?php endif; ?>
      <!-- !! Become a Speaker Button -->
    </div>

    <div class="speaker-card-wrapper">
      <!-- Featured Speaker Cards -->
      <?php if ( have_rows( 'featured_speakers' ) ) : ?>
      <div class="row">
        <?php while ( have_rows( 'featured_speakers' ) ) : the_row(); 
        
        $featured_speaker_image = get_sub_field( 'featured_speaker_image' );
        $featured_speaker_role = get_sub_field( 'featured_speaker_role' );
        $featured_speaker_name = get_sub_field( 'featured_speaker_name' );
        ?>
        <div class="col-lg-4 col-md-6">
          <div class="speaker-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center">
            <!-- Featured Speaker Image --> 
            <?php if ( $featured_speaker_image ) : ?>
            <div class="speaker-img">
              <img src="<?php echo esc_url( $featured_speaker_image['url'] ); ?>" alt="<?php echo esc_attr( $featured_speaker_image['alt'] ); ?>" class="img-fluid">
            </div>
            <?php endif; ?>
            <!-- !! Featured Speaker Image -->
            <div>

              <!-- Featured Speaker Role -->
              <?php if ( $featured_speaker_role ) : ?>
              <p class="text-gray leading-150 mb-8"><?php echo esc_html( $featured_speaker_role ); ?></p>
              <?php endif; ?>
              <!-- !! Featured Speaker Role -->

              <!-- Featured Speaker Name -->
             <?php if ( $featured_speaker_name ) : ?>
              <p class="text-20 fw-700 text-title speaker-name"><?php echo esc_html( $featured_speaker_name ); ?></p>
              <?php endif; ?>
              <!-- !! Featured Speaker Name -->
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        
      </div>
      <?php endif; ?>
      <!-- !! Featured Speaker Cards -->
    </div>
  </div>
</section>