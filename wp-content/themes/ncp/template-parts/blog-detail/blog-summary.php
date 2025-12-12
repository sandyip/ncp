<section class="blog-summary pt-72 pb-lg-56 pb-28 border-b-border">
  <div class="container">
    <div class="section-title pb-lg-48 pb-24">
      <!-- <p class="text-primary-light page-path mb-4 leading-150 text-12 text-uppercase fw-700 text-center">Home / Blog / Mastering Blog Writing: Strategies to Boost Reach and Maximize SEO Impact</p> -->
      <?php ncp_breadcrumb(); ?>
      <h1 class="text-40 leading-120 text-center"><?php the_title(); ?></h1>
    </div>

    <div class="summary bg-background rounded-12">
      <div class="summary-img">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>" class="img-fluid" />
      </div>
      <div class="general-content-box py-24 px-lg-48 px-24">
        <!-- <h2 class="text-18 fw-600 leading-150">Summary of the Blog:</h2> -->
          <?php the_content(); ?>
      </div>
      <p></p>
    </div>
  </div>
</section>