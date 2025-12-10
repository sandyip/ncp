<section class="cloud-cta pb-64 pb-lg-96">
  <div class="container">
    <div class="cloud-cta-inner py-lg-60 py-28 px-lg-96 px-24 rounded-32">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-6 order-md-1 order-2">
          <div class="section-title">
            <?php if ($section_heading = get_sub_field('section_heading')) : ?>
              <h2 class="mb-28 text-32 leading-130"><?php echo esc_html($section_heading); ?></h2>
            <?php endif; ?>

            <?php if ($section_description = get_sub_field('section_description')) : ?>
              <p class="mb-28 text-white leading-150"><?php echo $section_description; ?></p>
            <?php endif; ?>

          </div>
          <div class="d-flex gap-lg-16 gap-8 flex-wrap">
            <?php
            $link = get_sub_field('button_1');
            if ($link) :
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                class="py-12 px-36 bg-primary-light text-white hover-bg-white hover-text-primary-light rounded-48 text-center"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>


            <?php
            $link = get_sub_field('button_2');
            if ($link) :
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                class="border-white hover-border-primary-light text-white py-12 px-36 rounded-48 text-center leading-150"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>

          </div>
        </div>

        <?php
        $image = get_sub_field('image');
        if ($image) : ?>
          <div class="col-md-6 order-md-2 order-1">
            <div class="professional-img">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                class="img-fluid" />
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>