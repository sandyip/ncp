<?php
get_header();
?>

<section class="error-page">
  <div class="container">
    <div class="section-title mb-24">
      <!-- 404 title -->
      <?php if ($title = get_field('404_title', 'options')) : ?>
        <h1 class="mb-16 text-64 text-center"><?php echo esc_html($title); ?></h1>
      <?php endif; ?>
      <!-- !! 404 title -->

      <!-- 404 description -->
      <?php if ($description = get_field('404_description', 'options')) : ?>
        <p class="text-center text-20">
          <?php echo $description; ?>
        </p>
      <?php endif; ?>
      <!-- !! 404 description -->
    </div>
    <div class="d-flex justify-content-center">
      <a href="<?php echo get_home_url(); ?>" class="text-white px-36 py-12 rounded-48 bg-primary leading-150">
        <– GO BACK TO HOMEPAGE</a>
    </div>
  </div>
</section>

<?php
get_footer();
?>