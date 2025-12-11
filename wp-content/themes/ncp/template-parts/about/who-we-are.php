<section class="who-we-are">
  <div class="container">
    <div class="who-we-are-content mb-48">
      <!-- who we are title -->
      <?php if ($who_we_are_title = get_sub_field('who_we_are_title')) : ?>
        <h2 class="text-40 text-center leading-130 mb-16"><?php echo esc_html($who_we_are_title); ?></h2>
      <?php endif; ?>
      <!-- !! who we are title -->

      <!-- who we are desc -->
      <?php if ($who_we_are_desc = get_sub_field('who_we_are_desc')) : ?>
        <div class="general-content-box px-32">
          <?php echo $who_we_are_desc; ?>
        </div>
      <?php endif; ?>
      <!-- !! who we are desc -->
    </div>

    <!-- about stats -->
    <?php if (have_rows('about_stats')) : ?>
      <div class="about-stats d-flex flex-wrap gap-4 py-32 justify-content-center mb-32">
        <?php while (have_rows('about_stats')) :
          the_row();
          $stats_number = get_sub_field('stats_number');
          $stats_text = get_sub_field('stats_text');
        ?>

          <?php if ($stats_number && $stats_text): ?>
            <div class="px-32 about-stats-card">
              <!-- stats number -->
              <h2 class="text-24 leading-130 text-primary-light text-center mb-8">
                <span
                  class="text-primary-light"><?php echo esc_html($stats_number); ?>
                </span>
              </h2>
              <!-- !! stats number -->

              <!-- stats text -->
              <p class="text-center"><?php echo esc_html($stats_text); ?></p>
              <!-- !! stats text -->

            </div>
          <?php endif; ?>
        <?php endwhile; ?>

      </div>
    <?php endif; ?>
    <!-- !! about stats -->

    <div class="about-img">

      <div class="row">
        <!-- about image 1 -->
        <?php
        $about_image_1 = get_sub_field('about_image_1');
        if ($about_image_1) : ?>
          <div class="col-md-3 col-6">
            <div class="about-img-box1">
              <img src="<?php echo esc_url($about_image_1['url']); ?>" alt="<?php echo esc_attr($about_image_1['alt']); ?>" class="img-fluid">
            </div>
          </div>
        <?php endif; ?>

        <!-- about image 2 -->
        <?php
        $about_image_2 = get_sub_field('about_image_2');
        if ($about_image_2) : ?>
          <div class="col-md-3 col-6">
            <div class="about-img-box1">
              <img src="<?php echo esc_url($about_image_2['url']); ?>" alt="<?php echo esc_attr($about_image_2['alt']); ?>" class="img-fluid">
            </div>
          </div>
        <?php endif; ?>
        <!-- !! about image 2 -->

        <!-- about image 3 -->
        <?php
        $about_image_3 = get_sub_field('about_image_3');
        if ($about_image_3) : ?>
          <div class="col-md-6">
            <div class="about-img-box1">
              <img src="<?php echo esc_url($about_image_3['url']); ?>" alt="<?php echo esc_attr($about_image_3['alt']); ?>" class="img-fluid">
            </div>
          </div>
        <?php endif; ?>
        <!-- !!about image 3 -->

      </div>
    </div>
  </div>
</section>