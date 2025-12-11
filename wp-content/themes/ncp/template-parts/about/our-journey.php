<section class="our-journey py-64 py-lg-96">
  <div class="container">
    <div class="section-title mb-84">
      <!-- our journey title -->
      <?php
      $our_journey_title = get_sub_field('our_journey_title');
      if ($our_journey_title) : ?>
        <h2 class="mb-16 text-40 leading-130"><?php echo esc_html($our_journey_title); ?></h2>
      <?php endif; ?>
      <!-- !! our journey title -->

      <!-- our journey description -->
      <?php
      $our_journey_description = get_sub_field('our_journey_description');
      if ($our_journey_description) : ?>
        <p class="text-20 leading-150 text-title"><?php echo $our_journey_description; ?></p>
      <?php endif; ?>
      <!-- !! our journey description -->

    </div>
  </div>

  <?php if (have_rows('our_journey')) : $i = 1 ?>
    <div class="our-journey-slider">
      <div class="row">
        <div class="col-3 col-md-1">
          <div class="slider-nav d-flex flex-column">
            <?php while (have_rows('our_journey')) : the_row();
              $year = get_sub_field('year');
            ?>
              <!-- year -->
              <?php if ($year) : ?>
                <div class="year-dot <?php echo ($i === 1) ? 'active' : ''; ?>">
                  <div class="year"><?php echo esc_html($year); ?></div>
                </div>
              <?php endif; ?>
              <!-- !! year -->

            <?php $i++;
            endwhile; ?>

          </div>

        </div>
        <div class="col-9 col-md-11">
          <div class="slider-for">
            <?php while (have_rows('our_journey')) : the_row();
              $jouney_title = get_sub_field('jouney_title');
              $journey_image = get_sub_field('journey_image');
              $jouney_description = get_sub_field('jouney_description');
            ?>
              <div class="our-journey-card">
                <div class="row justify-content-md-center">
                  <!-- journey image -->
                  <?php if ($journey_image) : ?>
                    <div class="col-md-6">
                      <div class="our-journey-img mr-md-32 mr-sm-92 mr-40 rounded-12 mb-16 mb-md-0">
                        <img src="<?php echo esc_url($journey_image['url']); ?>" alt="<?php echo esc_attr($journey_image['alt']); ?>"
                          class="img-fluid" />
                      </div>
                    </div>
                  <?php endif; ?>
                  <!-- !! journey image -->
                  <div class="col-lg-4 col-md-5">
                    <div class="our-journey-content general-content-box mr-sm-92 mr-40 mr-md-12">
                      <!-- journey title -->
                      <?php if ($jouney_title) : ?>
                        <h2 class="text-24 leading-130"><?php echo esc_html($jouney_title); ?></h2>
                      <?php endif; ?>
                      <!-- !! journey title -->

                      <!-- jouney description -->
                      <?php if ($jouney_description) : ?>
                        <?php echo $jouney_description; ?>
                      <?php endif; ?>
                      <!-- !! jouney description -->

                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>