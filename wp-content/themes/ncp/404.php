<?php
get_header();
?>

<section class="error-page">
  <div class="container">
    <div class="section-title mb-24">
      <h1 class="mb-16 text-64 text-center">Page Not Found</h1>
      <p class="text-center text-20">Uh-oh! It looks like the page you're searching for isn't here. Please check the URL
        or return to the homepage.
      </p>
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