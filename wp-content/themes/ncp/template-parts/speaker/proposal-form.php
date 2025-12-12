<section class="proposal-form py-64 py-lg-96">
  <div class="container">
    <div class="row align-items-center">
      <!--  Become a speaker -->
      <?php if (have_rows('become_a_speaker')) : ?>
        <?php while (have_rows('become_a_speaker')) :
          the_row(); ?>
          <div class="col-lg-6">
            <div class="section-title mb-24 mb-lg-48">
              <div class="d-flex gap-16 align-items-center">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/mike.svg" alt="" class="img-fluid">
                <!-- Become a speaker title -->
                <?php if ($become_a_speaker_title = get_sub_field('become_a_speaker_title')) : ?>
                  <h2 class="text-40 leading-130"><?php echo esc_html($become_a_speaker_title); ?></h2>
                <?php endif; ?>
                <!-- !! Become a speaker title -->
              </div>

              <!-- Become a speaker description -->
              <?php if ($become_a_speaker_description = get_sub_field('become_a_speaker_description')) : ?>
                <p class="text-title leading-150"><?php echo $become_a_speaker_description; ?></p>
              <?php endif; ?>
              <!-- !! Become a speaker description -->
            </div>
            <div class="general-content-box styled-list">
              <!-- Speaker submission steps description -->
              <?php if ($speaker_submission_steps_description = get_sub_field('speaker_submission_steps_description')) : ?>
                <p><?php echo $speaker_submission_steps_description; ?></p>
              <?php endif; ?>
              <!-- !! Speaker submission steps description -->

              <!-- Speaker submission steps -->
              <?php if (have_rows('speaker_submission_steps')) : ?>
                <ol>
                  <?php while (have_rows('speaker_submission_steps')) :
                    the_row();
                    $steps = get_sub_field('steps')
                  ?>
                    <!-- steps -->
                    <?php if ($steps) : ?>
                      <li><span><?php echo get_row_index(); ?></span>
                        <p><?php echo esc_html($steps); ?></p>
                      </li>
                    <?php endif; ?>
                    <!-- !! steps -->
                  <?php endwhile; ?>
                </ol>
              <?php endif; ?>
              <!-- !! Speaker submission steps -->

            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! Become a speaker -->

      <!-- Speaker proposal form -->
      <?php if (have_rows('speaker_proposal_form')) : ?>
        <?php while (have_rows('speaker_proposal_form')) :
          the_row(); ?>
          <div class="col-lg-6">
            <div class="speaker-proposal-form bg-background p-32 rounded-16">
              <!-- speaker_proposal_form_title -->
              <?php if ($speaker_proposal_form_title = get_sub_field('speaker_proposal_form_title')) : ?>
                <h3 class="mb-8 text-24 fw-600 leading-150"><?php echo esc_html($speaker_proposal_form_title); ?></h3>
              <?php endif; ?>
              <!-- !! speaker_proposal_form_title -->

              <!-- speaker_proposal_form_description -->
              <?php if ($speaker_proposal_form_description = get_sub_field('speaker_proposal_form_description')) : ?>
                <p class="leading-150 mb-24"><?php echo esc_html($speaker_proposal_form_description); ?>
                </p>
              <?php endif; ?>
              <!-- !! speaker_proposal_form_description -->

              <div class="form">
                <!-- speaker proposal form shortcode -->
                <?php if ($speaker_proposal_form_shortcode = get_sub_field('speaker_proposal_form_shortcode')) : ?>
                  <?php echo do_shortcode($speaker_proposal_form_shortcode); ?>
                <?php endif; ?>
                <!-- speaker proposal form shortcode -->
              </div>

            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! speaker proposal form -->
    </div>
  </div>
</section>