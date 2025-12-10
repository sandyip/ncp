<section class="banner-outer bg-white">
  <div class="banner pb-24">
    <div class="banner-bat-img">
      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/banner-bat.svg" alt="" class="img-fluid" />
    </div>

    <!-- banner left image -->
    <?php if (have_rows('banner_left_image')) : ?>
      <?php while (have_rows('banner_left_image')) :
        the_row(); ?>
        <?php
        $left_image = get_sub_field('left_image');
        if ($left_image) : ?>
          <div class="left-img">
            <img src="<?php echo esc_url($left_image['url']); ?>" alt="<?php echo esc_attr($left_image['alt']); ?>" class="img-fluid" />
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- !! banner left image -->

    <!-- banner right image -->
    <?php if (have_rows('banner_right_image')) : ?>
      <?php while (have_rows('banner_right_image')) :
        the_row(); ?>
        <?php
        $right_image = get_sub_field('right_image');
        if ($right_image) : ?>
          <div class="right-img d-none d-lg-block">
            <img src="<?php echo esc_url($right_image['url']); ?>" alt="<?php echo esc_attr($right_image['alt']); ?>" class="img-fluid" />
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- !! banner right image -->

    <div class="container">

      <?php if (have_rows('banner_content_')) : ?>
        <?php while (have_rows('banner_content_')) :
          the_row(); ?>
          <!-- Banner sub heading -->
          <?php if ($banner_tagline = get_sub_field('banner_tagline')) : ?>
            <span class="banner-tag d-block py-4 px-60 text-uppercase text-white text-12 fw-700 text-center mb-8"><?php echo esc_html($banner_tagline); ?></span>
          <?php endif; ?>
          <!-- !!! Banner sub heading -->

          <!-- Banner heading -->
          <?php if ($banner_heading = get_sub_field('banner_heading')) : ?>
            <h1 class="text-64 mb-24 text-center leading-130"><?php echo esc_html($banner_heading); ?></h1>
          <?php endif; ?>
          <!-- !!! Banner heading -->

          <!-- Banner text -->
          <?php if ($banner_description = get_sub_field('banner_description')) : ?>
            <p class="banner-content text-white mb-24 text-center fw-400 leading-150"><?php echo esc_html($banner_description); ?></p>
          <?php endif; ?>
          <!-- !!! Banner text -->


          <!-- Bnner button -->
          <?php
          $link = get_sub_field('banner_button');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <div class="join-btn d-flex justify-content-center">
              <a href="<?php echo esc_url($link_url); ?>"
                class="bg-primary-light px-36 py-12 text-white rounded-48 mb-32 hover-bg-white hover-text-primary-light" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>
          <?php endif; ?>
          <!-- !!! Bnner button -->

        <?php endwhile; ?>
      <?php endif; ?>

      <!-- Banner ratings and meetup -->
      <?php if (have_rows('rating')) : ?>
        <?php while (have_rows('rating')) :
          the_row();
          $rating_star_image = get_sub_field('rating_star_image');
          $rating_number = get_sub_field('rating_number');
          $rating_count = get_sub_field('rating_count');
          $meetup_image = get_sub_field('meetup_image');
          $link = get_sub_field('meetup_link');
          $link_url = is_array($link) ? $link['url'] : $link;
          $link_target = (is_array($link) && $link['target']) ? $link['target'] : '_self';

        ?>

          <?php if (($rating_star_image && $rating_count && $rating_number) || ($meetup_image && $link && is_array($link))) : ?>

            <div class="rating d-flex align-items-center justify-content-center pb-92 gap-8">
              <!-- rating star image -->
              <img src="<?php echo esc_url($rating_star_image['url']); ?>" alt="<?php echo esc_attr($rating_star_image['alt']); ?>" class="img-fluid" />
              <!-- !!! rating star image -->

              <!-- rating count and rating number -->
              <p class="text-white leading-150"> <?php echo esc_html($rating_number); ?> <span class="text-decoration-underline leading-150"><?php echo esc_html($rating_count); ?></span> </p>
              <!-- !!! rating count and rating number -->

              <!-- meetup -->
              <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <img src="<?php echo esc_url($meetup_image['url']); ?>" alt="<?php echo esc_attr($meetup_image['alt']); ?>" class="img-fluid" />
              </a>
              <!-- !!! meetup -->
            </div>
          <?php endif; ?>

        <?php endwhile; ?>
      <?php endif; ?>
      <!--!!! Banner ratings and meetup -->

      <a href="#" class="d-flex justify-content-center">
        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/go-down.svg" alt="" class="img-fluid" />
      </a>
    </div>

  </div>
</section>