</main>

<footer class="footer">
  <div class="footer-top bg-dark-background pt-32 pt-lg-64 pb--lg-104 pb-56">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4">
          <!-- footer text -->
          <?php if ($footer_text = get_field('footer_text', 'options')) : ?>
            <p class="text-white mb-lg-40 mb-20 leading-150"><?php echo esc_html($footer_text); ?></p>
          <?php endif; ?>
          <!-- !!! footer text -->

          <!-- copyright -->
          <?php if ($copyright = get_field('copyright', 'options')) : ?>
            <p class="text-white text-12 leading-150">© <?php echo date('Y'); ?> <?php echo esc_html($copyright); ?></p>
          <?php endif; ?>
          <!-- !!! copyright -->

          <!-- footer logo -->
          <?php
          $footer_logo = get_field('footer_logo', 'options'); // ACF options field
          if ($footer_logo) :
          ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img
                src="<?php echo esc_url($footer_logo['url']); ?>"
                alt="<?php echo esc_attr($footer_logo['alt'] ? $footer_logo['alt'] : get_bloginfo('name')); ?>"
                class="img-fluid">
            </a>
          <?php endif; ?>
          <!-- !!! footer logo -->
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="footer-link-wrapper d-flex justify-content-lg-between flex-wrap gap-lg-24 gap-32">
            <div class="footer-link">
              <!-- Quick links title -->
              <?php if ($quick_links_title = get_field('quick_links_title', 'options')) : ?>
                <p class="text-white text-18 fw-600 mb-16 leading-150"><?php echo esc_html($quick_links_title); ?></p>
              <?php endif; ?>
              <!-- !!! Quick links title -->

              <!-- Quick links menu -->
              <?php
              wp_nav_menu(
                array(
                  'menu' => 'quick-links',
                  'container' => '',
                  'items_wrap' => '<ul>%3$s</ul>',
                  'add_li_class' => 'mb-4',
                  'add_a_class'  => 'text-white hover-text-primary-light fw-400 leading-150'
                )
              );
              ?>
              <!-- !!! quick links menu -->

            </div>
            <div class="footer-link">
              <!-- contact title -->
              <?php if ($contact_title = get_field('contact_title', 'options')) : ?>
                <p class="text-white text-18 fw-600 mb-16 leading-150"><?php echo esc_html($contact_title); ?></p>
              <?php endif; ?>
              <!-- !!! contact title -->

              <!-- contact details -->
              <?php if (have_rows('contact_details', 'options')) : ?>
                <?php while (have_rows('contact_details', 'options')) : the_row(); ?>

                  <!-- phone -->
                  <?php
                  $phone_label = get_sub_field('phone_label', 'options');
                  $phone_number = get_sub_field('phone_number', 'options');
                  if ($phone_number) : ?>
                    <div class="mb-4">
                      <?php if ($phone_label) : ?>
                        <span class="text-white fw-400 leading-150"><?php echo esc_html($phone_label); ?> </span>
                      <?php endif; ?>
                      <a href="tel:<?php echo esc_attr($phone_number); ?>" class="text-white hover-text-primary-light fw-400 leading-150">
                        <?php echo esc_html($phone_number); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <!-- !!! phone -->

                  <!-- Address -->
                  <?php
                  $address_label = get_sub_field('address_label', 'options');
                  $address = get_sub_field('address', 'options');
                  if ($address) : ?>
                    <div class="mb-4">
                      <?php if ($address_label) : ?>
                        <span class="text-white fw-400 leading-150"><?php echo esc_html($address_label); ?></span>
                      <?php endif; ?>
                      <a href="#" class="text-white hover-text-primary-light fw-400 leading-150"><?php echo esc_html($address); ?></a>
                    </div>
                  <?php endif; ?>
                  <!-- !!! Address -->

                  <!-- Email -->
                  <?php
                  $email_label = get_sub_field('email_label', 'options');
                  $email_address = get_sub_field('email_address', 'options');
                  if ($email_address) : ?>
                    <div>
                      <?php if ($email_label) : ?>
                        <span class="text-white fw-400 leading-150"><?php echo esc_html($email_label); ?></span>
                      <?php endif; ?>
                      <a href="mailto:<?php echo esc_attr($email_address); ?>" class="text-white hover-text-primary-light fw-400 leading-150">
                        <?php echo esc_html($email_address); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <!-- !!! Email -->

                <?php endwhile; ?>
              <?php endif; ?>
              <!-- !!! contact details -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom pt-32">
    <div class="container">
      <!-- footer links -->
      <?php if (have_rows('footer_links', 'options')) : ?>
        <?php while (have_rows('footer_links', 'options')) :
          the_row(); ?>

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-20">
            <!-- Page links -->
            <?php if (have_rows('page_links', 'options')) : ?>
              <div class="d-flex gap-24">
                <?php while (have_rows('page_links', 'options')) :
                  the_row(); ?>

                  <?php
                  $link = get_sub_field('add_page_links', 'options');
                  if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="text-decoration-underline hover-text-primary-light leading-150"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>

                <?php endwhile; ?>
              </div>
            <?php endif; ?>
            <!-- !!! page links -->

            <!-- social links -->
            <?php if (have_rows('social_links', 'options')) : ?>
              <div class="socials d-flex gap-8">
                <?php while (have_rows('social_links', 'options')) :
                  the_row();
                  $social_icon = get_sub_field('social_icon', 'options');
                  $url = get_sub_field('url', 'options')
                ?>

                  <?php if ($social_icon && $url) : ?>
                    <a href="<?php echo esc_url($url); ?>">
                      <?php echo $social_icon; ?>
                    </a>
                  <?php endif; ?>

                <?php endwhile; ?>
              </div>
            <?php endif; ?>
            <!-- !!! social links -->
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !!! footer links -->

      <!-- footer bottom title -->
      <?php if ($footer_bottom_title = get_field('footer_bottom_title', 'options')) : ?>
        <h1 class="footer-bottom-title text-center"><?php echo esc_html($footer_bottom_title); ?></h1>
      <?php endif; ?>
      <!-- !!! footer bottom title -->
    </div>
  </div>
</footer>

<?php get_template_part("/template-parts/modals/makura-toast", null); ?>
<?php wp_footer(); ?>

<!-- ------------------------------------ -->
<!-- Script to display show more categories and show more archive in the sidebar in blog page -->4
<!-- ------------------------------------ -->

<script>
  document.addEventListener("DOMContentLoaded", function() {

    // Show more categories
    const moreCatBtn = document.querySelector(".show-more-categories");
    if (moreCatBtn) {
      moreCatBtn.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelectorAll(".hidden-category").forEach(item => item.classList.remove("d-none"));
        moreCatBtn.style.display = "none";
      });
    }

    // Show more archive
    const moreArchiveBtn = document.querySelector(".show-more-archive");
    if (moreArchiveBtn) {
      moreArchiveBtn.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelectorAll(".hidden-archive").forEach(item => item.classList.remove("d-none"));
        moreArchiveBtn.style.display = "none";
      });
    }

  });
</script>
<!-- ------------------------------------ -->
<!-- !!!! Script to display show more categories and show more archive in the sidebar in blog page -->4
<!-- ------------------------------------ -->


<!-- ------------------------------------ -->
<!-- Script to fetch data from the ACF repeater field and dynamically populate a popup modal in the ‘Our Organizers’ section on the About Us page.-->4
<!-- ------------------------------------ -->
<script>
  document.querySelectorAll('.organizer-card').forEach(card => {
    card.addEventListener('click', function(e) {
      e.preventDefault();

      const modal = document.getElementById(this.dataset.modal);

      modal.querySelector('.team-name').textContent = this.dataset.name;
      modal.querySelector('.team-role').textContent = this.dataset.role;

      // IMPORTANT: use innerHTML to render <p> tags
      modal.querySelector('.team-member-content').innerHTML = this.dataset.description;

      modal.querySelector('.team-image').src = this.dataset.image;
      modal.querySelector('.team-linkedin').href = this.dataset.linkedin;
      modal.querySelector('.team-linkedin').textContent = this.dataset.linkedin;

      modal.style.display = 'flex'; // assuming flex centering
    });
  });
</script>
<!-- ------------------------------------ -->
<!-- !!!!! Script to fetch data from the ACF repeater field and dynamically populate a popup modal in the ‘Our Organizers’ section on the About Us page.-->4
<!-- ------------------------------------ -->
</body>
</html>