<section class="testimonial bg-background py-lg-96 py-64">
  <div class="container">
    <?php if (have_rows('testimonials')) : ?>
      <div class="testimonial-slider">

        <!-- Slider main -->
        <div class="slider-for mb-48">
          <?php while (have_rows('testimonials')) :
            the_row();
            $quote_text = get_sub_field('quote_text');
            $author = get_sub_field('author_details');
          ?>

            <div class="testimonial-card h-100">
              <div class="quote-icon mb-16">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/quote.svg" alt="" class="img-fluid" />
              </div>
              <?php if ($quote_text): ?>
                <p class="mb-64 text-28 leading-140 fw-700"><?php echo $quote_text; ?></p>
              <?php endif; ?>

              <?php if (!empty($author['name']) || !empty($author['company_name'])): ?>
                <p class="text-center"><?php echo esc_html($author['name']); ?>,<span class="text-gray"> <?php echo esc_html($author['company_name']); ?></span></p>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>

        <!-- Slider thumb -->
        <div class="slider-nav">
          <?php while (have_rows('testimonials')) :
            the_row(); ?>
            <?php
            $author = get_sub_field('author_details');
            $image = $author['image'];
            ?>
            <?php if (!empty($image)): ?>
              <div class="testimonial-img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                  class="img-fluid" />
              </div>
            <?php endif; ?>
          <?php endwhile; ?>

        </div>

      </div>
    <?php endif; ?>
  </div>
</section>