<?php if (have_rows('content')) : ?>
  <div class="blog-content general-content-box styled-list mb-64 pt-40">
    <?php while (have_rows('content')) :
      the_row();
      $id = get_sub_field('id');
      $heading = get_sub_field('heading');
    ?>
      <?php if ($heading && $id) : ?>
        <h2 id="<?php echo esc_html($id); ?>" data-scroll-to="introduction"><?php echo esc_html($heading); ?></h2>
      <?php endif; ?>
      <?php if ($content = get_sub_field('content')) : ?>
        <?php echo $content; ?>
      <?php endif; ?>

    <?php endwhile; ?>

    <p class="share mb-8">Feels like sharing this blog to your circles?</p>
    <div class="socials d-flex gap-8 align-items-center">
      
        <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
      
      
    </div>
  </div>
<?php endif; ?>