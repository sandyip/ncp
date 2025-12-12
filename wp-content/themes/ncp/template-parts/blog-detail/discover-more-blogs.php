<section class="discover-more py-64 py-lg-96">
  <div class="container">

    <div class="section-title mb-24">
      <h2 class="text-40 leading-130">Discover More</h2>
    </div>

    <?php
    $discover_posts = new WP_Query(array(
      'post_type'      => 'post',
      'posts_per_page' => 4,
      'post_status'    => 'publish',
    ));

    if ($discover_posts->have_posts()) : ?>
      <div class="row">

        <?php while ($discover_posts->have_posts()) : $discover_posts->the_post(); ?>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="blog-list-card h-100">
              <div class="blog-list-img mb-16">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>"
                  class="img-fluid" />
                </a>
              </div>
              <div class="pr-lg-24 pr-12">
                <p class="mb-4 leading-140"><?php echo get_the_date('d M, Y'); ?></p>
                <h2 class="text-18 leading-120">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

      </div>
    <?php endif; ?>
  </div>
</section>