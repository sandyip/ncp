<section class="event-banner py-lg-96 py-64">
  <div class="container">
    <div class="section-title mb-md-48 mb-24 text-center">
      <!-- <p class="text-primary-light page-path mb-4 leading-150 text-12 text-uppercase fw-700">Home / Events</p> -->
      <?php ncp_breadcrumb(); ?>

      <!-- Events banner title -->
      <?php if ($event_banner_title = get_sub_field('event_banner_title')) : ?>
        <h1 class="mb-24 leading-150 text-64 leading-130"><?php echo esc_html($event_banner_title); ?></h1>
      <?php endif; ?>
      <!-- !! Events banner title -->

      <!-- Events banner description -->
      <?php if ($event_banner_description = get_sub_field('event_banner_description')) : ?>
        <p class="text-20 text-title leading-150"><?php echo $event_banner_description; ?></p>
      <?php endif; ?>
      <!-- !! Events banner description -->
    </div>

    <!-- Events banner image -->
    <?php
    $event_banner__image = get_sub_field('event_banner__image');
    if ($event_banner__image) : ?>
      <div class="event-banner-img rounded-16">
        <img src="<?php echo esc_url($event_banner__image['url']); ?>" alt="<?php echo esc_attr($event_banner__image['alt']); ?>" class="img-fluid">
      </div>
    <?php endif; ?>
    <!-- !! Events banner image -->
  </div>
</section>