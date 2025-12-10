<section class="cloud-community py-lg-96 py-64">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title">
          <!-- Section title -->
          <?php if ($section_title = get_sub_field('section_title')) : ?>
            <h2 class="text-40 mb-32 leading-130"><?php echo esc_html($section_title); ?></h2>
          <?php endif; ?>
          <!-- !! section title -->

          <!-- section description -->
          <?php if ($section_description = get_sub_field('section_description')) : ?>
            <p class="text-20 text-title leading-150"><?php echo $section_description; ?></p>
          <?php endif; ?>
          <!-- !! section description -->
        </div>
      </div>

      <!-- cloud community card 1 -->
      <?php if (have_rows('cloud_community_card1')) : ?>
        <?php while (have_rows('cloud_community_card1')) :
          the_row();
          $card1_icon = get_sub_field('card1_icon');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $card1_image = get_sub_field('card1_image');
        ?>
          <div class="col-lg-5 col-sm-6">
            <div class="cloud-community-card px-24 pb-24 pt-32 bg-accent rounded-16">
              <div class="d-flex gap-16 mb-16 align-items-center">
                <!-- icon -->
                <?php if ($card1_icon) : ?>
                  <div class="cloud-community-icon">
                    <img src="<?php echo esc_url($card1_icon['url']); ?>" alt="<?php echo esc_attr($card1_icon['alt']); ?>" class="img-fluid" />
                  </div>
                <?php endif; ?>
                <!-- !!icon -->

                <!-- title -->
                <?php if ($title): ?>
                  <h3 class="text-24 fw-600 text-title leading-150"><?php echo esc_html($title); ?></h3>
                <?php endif; ?>
                <!-- !!title -->
              </div>

              <!-- description -->
              <?php if ($description) : ?>
                <p class="mb-32 text-title leading-150"><?php echo $description; ?></p>
              <?php endif; ?>
              <!-- !! description -->

              <!-- image -->
              <?php if ($card1_image) : ?>
                <div class="cloud-community-img rounded-4">
                  <img src="<?php echo esc_url($card1_image['url']); ?>" alt="<?php echo esc_attr($card1_image['alt']); ?>"
                    class="img-fluid" />
                </div>

              <?php endif; ?>
              <!-- !image -->
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! cloud community card 1 -->

      <!-- cloud community card 2 -->
      <?php if (have_rows('cloud_community_card2')) : ?>
        <?php while (have_rows('cloud_community_card2')) :
          the_row();
          $card2_icon = get_sub_field('card2_icon');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $card2_image = get_sub_field('card2_image');
        ?>
          <div class="col-lg-5 col-sm-6">
            <div class="cloud-community-card px-24 pb-24 pt-32 bg-accent rounded-16">
              <div class="d-flex gap-16 mb-16 align-items-center">
                <!-- icon -->
                <?php if ($card2_icon) : ?>
                  <div class="cloud-community-icon">
                    <img src="<?php echo esc_url($card2_icon['url']); ?>" alt="<?php echo esc_attr($card2_icon['alt']); ?>"
                      class="img-fluid" />
                  </div>
                <?php endif; ?>
                <!-- !!icon -->
                <!-- title -->
                <?php if ($title): ?>
                  <h3 class="text-24 fw-600 text-title leading-150"><?php echo esc_html($title); ?></h3>
                <?php endif; ?>
                <!-- !!title -->
              </div>
              <!-- description -->
              <?php if ($description) : ?>
                <p class="mb-32 text-title leading-150"><?php echo $description; ?></p>
              <?php endif; ?>
              <!-- !! description -->

              <!-- image -->
              <?php if ($card2_image) : ?>
                <div class="cloud-community-img rounded-4">
                  <img src="<?php echo esc_url($card2_image['url']); ?>" alt="<?php echo esc_attr($card2_image['alt']); ?>"
                    class="img-fluid" />
                </div>
              <?php endif; ?>
              <!-- !image -->
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! cloud community card 2 -->

      <!-- button -->

      <?php
      $link = get_sub_field('button');
      if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <div class="col-lg-10">
          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="py-12 px-36 text-white bg-primary rounded-48"><?php echo esc_html($link_title); ?></a>
        </div>
      <?php endif; ?>
      <!-- !!button -->
    </div>
  </div>
</section>