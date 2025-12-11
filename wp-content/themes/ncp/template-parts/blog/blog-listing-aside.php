<div class="blog-listing-aside">
  <div class="category p-32 rounded-16 bg-background mb-16 ml-16">
    <h2 class="text-20 leading-140 pb-16 mb-16 border-b-primary-light">Categories</h2>

    <?php
    $categories = get_categories();
    $limit = 5;
    $total = count($categories);
    ?>

    <div class="d-flex flex-column gap-12">

      <?php foreach ($categories as $index => $category) : ?>
        <a
          href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
          class="<?php echo $index >= $limit ? 'hidden-category d-none' : ''; ?>">
          <?php echo esc_html($category->name); ?>
          <span class="opacity-20"><?php echo $category->count; ?></span>
        </a>
      <?php endforeach; ?>

      <?php if ($total > $limit) : ?>
        <a href="#" class="text-primary-light show-more-categories">
          +<?php echo $total - $limit; ?> more
        </a>
      <?php endif; ?>

    </div>
  </div>

  <div class="archive p-32 rounded-16 bg-background mb-16 ml-16">
    <h2 class="text-20 leading-140 pb-16 mb-16 border-b-primary-light">Archive</h2>

    <div class="d-flex flex-column gap-12">
        <?php
        global $wpdb;

        // Get current post ID to exclude
        $current_post_id = get_the_ID();

        // Archive years without counting the current post
        $years = $wpdb->get_results("
            SELECT YEAR(post_date) AS year, COUNT(ID) AS count
            FROM $wpdb->posts
            WHERE post_type = 'post'
              AND post_status = 'publish'
              AND ID != $current_post_id   /* Exclude current post */
            GROUP BY YEAR(post_date)
            ORDER BY YEAR(post_date) DESC
        ");

        $limit = 5;
        $total = count($years);

        foreach ($years as $index => $year_item): ?>
            <a
                href="<?php echo esc_url(get_year_link($year_item->year)); ?>"
                class="<?php echo $index >= $limit ? 'hidden-archive d-none' : ''; ?>"
            >
                <?php echo esc_html($year_item->year); ?>
                <span class="opacity-20"><?php echo esc_html($year_item->count); ?></span>
            </a>
        <?php endforeach; ?>

        <?php if ($total > $limit): ?>
            <a href="#" class="text-primary-light show-more-archive">
                +<?php echo $total - $limit; ?> more
            </a>
        <?php endif; ?>
    </div>
</div>


</div>