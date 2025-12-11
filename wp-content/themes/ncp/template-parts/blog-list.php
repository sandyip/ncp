<div class="blog-list pb-64">
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
      <div class="col-lg-4 col-sm-6">
        <div class="blog-list-card h-100">
          <div class="blog-list-img mb-16">
            <a href="<?php the_permalink(); ?>" class="blog-list-img mb-16 d-block">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>" class="img-fluid" />
            </a>
          </div>
          <div class="pr-md-24 pr-12">
            <p class="mb-4 leading-140">
              <?php echo get_the_modified_date('d M, Y'); ?>
            </p>
            <a href="<?php the_permalink(); ?>">
            <h2 class="text-18 leading-120"><?php the_title(); ?></h2>
            </a>
          </div>
        </div>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>
</div>