<div class="partner-logo pb-64 pb-lg-96">

  <?php
  $args = array(
    'post_type'      => 'our_partners',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC'
  );

  $partners = new WP_Query($args);

  if ($partners->have_posts()) : ?>
    <div class="partners-slider">
      <?php while ($partners->have_posts()) : $partners->the_post();
      $link_url = get_field('link_url');
      ?>

        <a href="<?php echo esc_html($link_url); ?>" class="companies-card">
          <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>" class="img-fluid">
        </a>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
  <?php endif; ?>
</div>