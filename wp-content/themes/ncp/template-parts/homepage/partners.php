<section class="partners pb-lg-96 pb-64">
  <div class="container">
    <?php if ($section_title = get_sub_field('section_title')) : ?>
      <div class="section-title mb-16">
        <p class="text-center text-20 leading-150 text-title fw-600"><?php echo esc_html($section_title); ?></p>
      </div>
    <?php endif; ?>

    <!-- <?php //if (have_rows('add_partners')) : 
          ?>
      <div class="partners-slider">
        <?php //while (have_rows('add_partners')) :
        //the_row(); 
        ?>
          <?php
          // $image = get_sub_field('image');
          // $url = get_sub_field('url');
          // if ($image && $url) : 
          ?>

            <a href="<?php //echo esc_url($url); 
                      ?>" class="companies-card">

              <img src="<?php //echo esc_url($image['url']); 
                        ?>" alt="<?php //echo esc_attr($image['alt']); 
                                                                      ?>" class="img-fluid">
            </a>

          <?php //endif; 
          ?>
        <?php //endwhile; 
        ?>
      </div>
    <?php //endif; 
    ?> -->

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
</section>