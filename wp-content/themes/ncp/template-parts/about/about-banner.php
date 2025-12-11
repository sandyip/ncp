<section class="about-banner py-64 py-lg-96">
  <div class="container">
    <div class="section-title mb-32 mb-lg-48">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <?php ncp_breadcrumb(); ?>
          <!-- banner title -->
          <?php
          $banner_title = get_sub_field('banner_title');
          ?>

          <?php if ($banner_title): ?>
            <h1 class="leading-150 text-48 leading-130"><?php echo esc_html($banner_title); ?></h1>
          <?php endif; ?>
          <!-- !! banner title -->
        </div>
        <div class="col-lg-4">
          <!-- banner description -->
          <?php
          $banner_description = get_sub_field('banner_description');
          ?>
          <?php if ($banner_description): ?>
            <p class="leading-150 text-title"><?php echo $banner_description; ?> </p>
          <?php endif; ?>
          <!-- !! banner description -->
        </div>
      </div>
    </div>
  </div>

  <!-- banner image -->
  <?php
  $banner_image = get_sub_field('banner_image');
  if ($banner_image) : ?>
    <div class="about-banner-img rounded-16">
      <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" class="img-fluid">
    </div>
  <?php endif; ?>
  <!-- !! banner image -->
</section>