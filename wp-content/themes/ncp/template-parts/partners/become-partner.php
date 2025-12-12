<section class="become-professional pb-64 pb-lg-96">
  <div class="container">
    <div class="row">
      <!-- Become a partner group  -->
      <?php if (have_rows('become_a_partner')) : ?>
        <?php while (have_rows('become_a_partner')) :
          the_row(); ?>
          <div class="col-lg-6">
            <div class="section-title mb-24 mb-lg-48 pt-8">
              <!-- Become a partner title -->
              <?php if ($become_a_partner_title = get_sub_field('become_a_partner_title')) : ?>
                <h2 class="text-40 leading-130 mb-16"><?php echo esc_html($become_a_partner_title); ?></h2>
              <?php endif; ?>
              <!-- !! Become a partner title -->

              <!-- Become a partner description -->
              <?php if ($become_a_partner_description = get_sub_field('become_a_partner_description')) : ?>
                <p class="text-title leading-150"><?php echo $become_a_partner_description; ?></p>
              <?php endif; ?>
              <!-- !! Become a partner description -->
            </div>
            <div class="general-content-box styled-list mb-24 mb-lg-0">
              <!-- Partner submission steps description -->
              <?php if ($partner_submission_steps_description = get_sub_field('partner_submission_steps_description')) : ?>
                <p> <?php echo $partner_submission_steps_description; ?></p>
              <?php endif; ?>
              <!-- !! Partner submission steps description -->

              <!-- Partner submission steps -->
              <?php if (have_rows('partner_submission_steps')) : ?>
                <ol>
                  <!-- steps -->
                  <?php while (have_rows('partner_submission_steps')) :
                    the_row();
                    $steps = get_sub_field('steps');
                    $link = get_sub_field('add_links');

                  ?>
                    <?php if ($link || $steps) : ?>
                      <li><span><?php echo get_row_index(); ?></span>
                        <p><?php echo esc_html($steps); ?>
                          <!-- links -->
                          <?php if ($link) : ?>
                            <a href="<?php echo esc_url($link['url']); ?>"
                              target="<?php echo esc_attr($link['target'] ?: '_self'); ?>"
                              class="d-block">
                              <?php echo esc_html($link['title']); ?>
                            </a>
                          <?php endif; ?>
                          <!-- !! links -->
                        </p>
                      </li>
                    <?php endif; ?>

                  <?php endwhile; ?>
                  <!-- !! steps -->

                </ol>
              <?php endif; ?>
              <!-- !! Partner submission steps -->
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! Become a partner group  -->

      <!-- Partner Inquiry Form -->
      <?php if (have_rows('partner_inquiry_form')) : ?>
        <?php while (have_rows('partner_inquiry_form')) :
          the_row(); ?>
          <div class="col-lg-6">
            <div class="bg-background rounded-16 p-32">
              <!-- Partner Inquiry Form Title -->
              <?php if ($partner_inquiry_form_title = get_sub_field('partner_inquiry_form_title')) : ?>
                <p class="text-title text-24 fw-600 leading-150 mb-8"><?php echo esc_html($partner_inquiry_form_title); ?></p>
              <?php endif; ?>
              <!-- !! Partner Inquiry Form Title -->

              <!-- Partner Inquiry Form Description -->

              <?php if ($partner_inquiry_form_description = get_sub_field('partner_inquiry_form_description')) : ?>
                <p class="leading-150 mb-24"><?php echo esc_html($partner_inquiry_form_description); ?>
                </p>
              <?php endif; ?>
              <!-- !! Partner Inquiry Form Description -->
              <?php
              get_template_part('template-parts/inquiry-form', null);
              ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! Partner Inquiry Form -->
    </div>
  </div>
</section>