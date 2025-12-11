<section class="vision pt-48 pb-32">
  <div class="container">
    <div class="general-content-box mb-32">
      <!-- vision title -->
      <?php
      $vision_title = get_sub_field('vision_title');
      if ($vision_title): ?>
        <h2 class="text-40 leading-130"><?php echo esc_html($vision_title); ?></h2>
      <?php endif; ?>
      <!-- !! vision title -->

      <!-- vision description -->
      <?php
      $vision_description = get_sub_field('vision_description');
      if ($vision_description): ?>
        <?php echo $vision_description; ?>
      <?php endif; ?>
      <!-- !! vision description -->

    </div>

    <!-- vision image -->
    <?php
    $vision_image = get_sub_field('vision_image');
    if ($vision_image) : ?>
      <div class="vision-img rounded-24">
        <img src="<?php echo esc_url($vision_image['url']); ?>" alt="<?php echo esc_attr($vision_image['alt']); ?>" class="img-fluid">
      </div>
    <?php endif; ?>
    <!-- !!Vision image  -->
  </div>
</section>