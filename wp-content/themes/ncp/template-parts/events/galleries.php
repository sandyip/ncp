<section class="galleries py-64 py-lg-96">
  <div class="container">
    <div class="section-title mb-32">
      <!-- Gallery title -->
      <?php if ($gallery_title = get_sub_field('gallery_title')) : ?>
        <h2 class="text-40 leading-130 mb-16"><?php echo esc_html($gallery_title); ?></h2>
      <?php endif; ?>
      <!-- !! Gallery title -->

      <!-- Gallery description -->
      <?php if ($gallery_description = get_sub_field('gallery_description')) : ?>
        <p class="leading-150 text-title"><?php echo $gallery_description; ?></p>
      <?php endif; ?>
      <!-- !! Gallery description -->
    </div>

    <!-- Gallery -->
    <div class="gallery">
      <?php
      $image_gallery = get_sub_field('image_gallery');
      if ($image_gallery) : ?>
        <?php foreach ($image_gallery as $image) : ?>
          <a href="<?php echo esc_url($image['url']); ?>">
            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <!-- !! Gallery -->
  </div>
</section>