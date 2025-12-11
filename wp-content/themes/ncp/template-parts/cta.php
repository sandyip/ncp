<div class="cloud-cta-inner px-xl-96 py-xl-80 px-sm-52 px-40 py-40 rounded-32">
  <div class="row justify-content-between">
    <div class="col-lg-5">
      <!-- cta title -->
      <?php if ($cta_title = get_field('cta_title')) : ?>
        <div class="section-title mb-28">
          <h2 class="text-32"><?php echo esc_html($cta_title); ?></h2>
        </div>
      <?php endif; ?>
      <!-- !! cta title -->

      <div class="d-flex gap-16 flex-wrap">
        <!-- cta button 1 -->
        <?php
        $link = get_field('cta_button_1');
        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
            class="py-12 px-36 bg-primary-light text-white hover-bg-white hover-text-primary-light rounded-48 text-center"><?php echo esc_html($link_title); ?>
          </a>
        <?php endif; ?>
        <!-- !! cta button 1 -->

        <!-- cta button 1 -->
        <?php
        $link = get_field('cta_button_2');
        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>

          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
            class="border-white hover-border-primary-light text-white py-12 px-36 rounded-48 text-center"><?php echo esc_html($link_title); ?>
          </a>
        <?php endif; ?>
        <!-- cta button 1 -->

      </div>
    </div>
    <!-- cta description -->
    <?php if ($cta_description = get_field('cta_description')) : ?>
      <div class="col-lg-6">
        <div class="general-content-box text-white">
          <p><?php echo $cta_description; ?></p>
        </div>
      </div>
    <?php endif; ?>
    <!-- !! cta description -->

  </div>

</div>