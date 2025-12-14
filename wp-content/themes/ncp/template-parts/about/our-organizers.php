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
        <!-- organizer -->
        <?php if (have_rows('organizers')) : ?>
          <?php while (have_rows('organizers')) :
            the_row();
            $organizer_image = get_sub_field('organizer_image');
            $organizer_role = get_sub_field('organizer_role');
            $organizer_name = get_sub_field('organizer_name');
            $organizer_description = get_sub_field('description');
            $linkedin = get_sub_field('linkedin_link');
          ?>
            <div class="col-lg-4 col-sm-6">
              <a href="#"
                data-modal="teamModal"
                class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16"
                data-name="<?php echo esc_attr($organizer_name); ?>"
                data-role="<?php echo esc_attr($organizer_role); ?>"
                data-description="<?php echo esc_attr($organizer_description); ?>"
                data-image="<?php echo esc_url($organizer_image['url']); ?>"
                data-linkedin="<?php echo esc_attr($linkedin); ?>">
                <!-- organizer image -->
                <?php if ($organizer_image) : ?>
                  <div class="organizer-img">
                    <img src="<?php echo esc_url($organizer_image['url']); ?>" alt="<?php echo esc_attr($organizer_image['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>
                <!-- !! organizer image -->

                <div>
                  <!-- organizer role -->
                  <?php if ($organizer_role) : ?>
                    <p class="text-gray leading-150 mb-8"><?php echo esc_html($organizer_role); ?></p>
                  <?php endif; ?>
                  <!-- !! organizer role -->

                  <!-- organizer name -->
                  <?php if ($organizer_name) : ?>
                    <p class="text-20 fw-700 text-title speaker-name"><?php echo esc_html($organizer_name); ?></p>
                  <?php endif; ?>
                  <!-- !!organizer name -->
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- !! organizer -->
      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/modals/team-modal', null);

?>