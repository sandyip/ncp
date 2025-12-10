<?php
/**
 * Template Name: Blog Listing
 */

get_header();
?>

<section class="blog-listing pb-lg-96 pb-64">
  <div class="container">
    <div class="section-title mb-md-40 mb-24 text-center">
      <p class="text-primary-light page-path mb-4 leading-150 text-12 text-uppercase fw-700">Home / Blog</p>
      <h1 class="mb-16 leading-150 text-48 leading-130">Blogs & Articles</h1>
      <p class="text-title leading-150">Since 2017, we’ve connected passionate individuals with Microsoft MVPs, industry
        leaders, and cutting-edge technologies like Azure, Power Platform, and Dynamics 365.</p>
    </div>
    <div class="row">
      <div class="col-lg-9">
        <?php
        get_template_part('template-parts/blog-list', null);
        ?>
      </div>

      <div class="col-lg-3">
        <div class="blog-listing-aside d-none d-lg-block">
          <?php
          get_template_part('template-parts/blog/blog-listing-aside', null);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>