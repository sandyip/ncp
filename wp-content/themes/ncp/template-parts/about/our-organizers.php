<section class="our-organizers pt-64 pt-lg-96 pb-72 pb-124">
  <div class="container">
    <div class="section-title mb-48">
      <!-- our organizer section title -->
      <?php if ($our_organizer_section_title = get_sub_field('our_organizer_section_title')) : ?>
        <h2 class="text-40 leading-130 mb-16"><?php echo esc_html($our_organizer_section_title); ?></h2>
      <?php endif; ?>
      <!-- !! our organizer section title -->

      <!-- our organizer section description -->
      <?php if ($our_organizer_section_description = get_sub_field('our_organizer_section_description')) : ?>
        <p class="text-20 text-title leading-150"><?php echo $our_organizer_section_description; ?></p>
      <?php endif; ?>
      <!-- !! our organizer section description -->

    </div>


    <div class="organizer-card-wrapper">
      <div class="row">
        <!-- organizer 1 -->
        <?php if (have_rows('organizer_1')) : ?>
          <?php while (have_rows('organizer_1')) :
            the_row();
            $organizer_1_image = get_sub_field('organizer_1-image');
            $organizer_1_role = get_sub_field('organizer_1-role');
            $organizer_1_name = get_sub_field('organizer_1-name');
          ?>
            <div class="col-lg-4 col-sm-6">
              <a href="#" data-modal="teamModal" class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16">
                <!-- organizer 1 image -->
                <?php if ($organizer_1_image) : ?>
                  <div class="organizer-img">
                    <img src="<?php echo esc_url($organizer_1_image['url']); ?>" alt="<?php echo esc_attr($organizer_1_image['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>
                <!-- !! organizer 1 image -->

                <div>
                  <!-- organizer 1 role -->
                  <?php if ($organizer_1_role) : ?>
                    <p class="text-gray leading-150 mb-8"><?php echo esc_html($organizer_1_role); ?></p>
                  <?php endif; ?>
                  <!-- !! organizer 1 role -->

                  <!-- organizer 1 name -->
                  <?php if ($organizer_1_name) : ?>
                    <p class="text-20 fw-700 text-title speaker-name"><?php echo esc_html($organizer_1_name); ?></p>
                  <?php endif; ?>
                  <!-- !!organizer 1 name -->
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- !! organizer 1 -->

        <!-- organizer 2 -->
        <?php if (have_rows('organizer_2')) : ?>
          <?php while (have_rows('organizer_2')) :
            the_row();
            $organizer_2_image = get_sub_field('organizer_2-image');
            $organizer_2_role = get_sub_field('organizer_2-role');
            $organizer_2_name = get_sub_field('organizer_2-name');
          ?>
            <a href="#" data-modal="teamModal" class="col-lg-4 col-sm-6">
              <div class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16">
                <!-- organizer 2 image -->
                <?php if ($organizer_2_image) : ?>
                  <div class="organizer-img">
                    <img src="<?php echo esc_url($organizer_2_image['url']); ?>" alt="<?php echo esc_attr($organizer_2_image['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>
                <!-- !! organizer 2 image -->
                <div>
                  <!-- organizer 2 role -->
                  <?php if ($organizer_2_role) : ?>
                    <p class="text-gray leading-250 mb-8"><?php echo esc_html($organizer_2_role); ?></p>
                  <?php endif; ?>
                  <!-- !! organizer 2 role -->

                  <!-- organizer 2 name -->
                  <?php if ($organizer_2_name) : ?>
                    <p class="text-20 fw-700 text-title speaker-name"><?php echo esc_html($organizer_2_name); ?></p>
                  <?php endif; ?>
                  <!-- !!organizer 2 name -->
                </div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- !! organizer 2 -->

        <!-- organizer 3 -->
        <?php if (have_rows('organizer_3')) : ?>
          <?php while (have_rows('organizer_3')) :
            the_row();
            $organizer_3_image = get_sub_field('organizer_3-image');
            $organizer_3_role = get_sub_field('organizer_3-role');
            $organizer_3_name = get_sub_field('organizer_3-name');
          ?>
            <div class="col-lg-4 col-sm-6">
              <a href="#" data-modal="teamModal" class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16">
                <!-- organizer 3 image -->
                <?php if ($organizer_3_image) : ?>
                  <div class="organizer-img">
                    <img src="<?php echo esc_url($organizer_3_image['url']); ?>" alt="<?php echo esc_attr($organizer_3_image['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>
                <!-- !! organizer 3 image -->
                <div>
                  <!-- organizer 3 role -->
                  <?php if ($organizer_3_role) : ?>
                    <p class="text-gray leading-250 mb-8"><?php echo esc_html($organizer_3_role); ?></p>
                  <?php endif; ?>
                  <!-- !! organizer 3 role -->
                  <!-- organizer 3 name -->
                  <?php if ($organizer_3_name) : ?>
                    <p class="text-20 fw-700 text-title speaker-name"><?php echo esc_html($organizer_3_name); ?></p>
                  <?php endif; ?>
                  <!-- !!organizer 3 name -->
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- !! organizer 3 -->

      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/modals/team-modal', null);

?>