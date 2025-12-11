F
<?php
/**
 * Template Name: Contact
 */

get_header();
?>

<section class="contact pb-64 pb-lg-96">
  <div class="container">
    <div class="contact-banner pb-72">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title mb-40 pt-96">
            <!-- <p class="text-primary-light page-path mb-4 leading-150 text-12 text-uppercase fw-700">Home /
              Partners
            </p> -->
            <?php ncp_breadcrumb(); ?>

            <!-- contact title -->
            <?php if ($contact_title = get_field('contact_title')) : ?>
              <h1 class="mb-16 text-48 leading-120"><?php echo esc_html($contact_title); ?></h1>
            <?php endif; ?>
            <!-- !! contact title -->

            <!-- contact description -->
            <?php if ($contact_description = get_field('contact_description')) : ?>
              <p class="leading-150 text-title"><?php echo $contact_description; ?></p>
            <?php endif; ?>
            <!-- !! contact description -->
          </div>

          <!-- phone -->
          <?php if (have_rows('phone')) : ?>
            <?php while (have_rows('phone')) : the_row(); ?>
              <div class="contact-way d-flex gap-16 pb-20 mb-20">
                <?php
                $phone_icon = get_sub_field('phone_icon');
                if ($phone_icon) : ?>
                  <div class="contact-icon p-8 rounded-6 bg-background">
                    <img src="<?php echo esc_url($phone_icon['url']); ?>" alt="<?php echo esc_attr($phone_icon['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>
                <div>
                  <?php if ($phone_title = get_sub_field('phone_title')) : ?>
                    <p class="text-primary text-20 leading-120 mb-4"><?php echo esc_html($phone_title); ?></p>
                  <?php endif; ?>
                  <?php if ($phone_subtitle = get_sub_field('phone_subtitle')) : ?>
                    <p class="text-title leading-150 mb-4"><?php echo esc_html($phone_subtitle); ?></p>
                  <?php endif; ?>
                  <?php if ($phone_number = get_sub_field('phone_number')) : ?>
                    <a href="tel:<?php echo esc_html($phone_number); ?>" class="text-primary-light fw-600 leading-140"><?php echo esc_html($phone_number); ?></a>
                  <?php endif; ?>
                </div>
              </div>

            <?php endwhile; ?>
          <?php endif; ?>
          <!-- !! phone -->


          <!-- Email -->
          <?php if (have_rows('email')) : ?>
            <?php while (have_rows('email')) : the_row(); ?>
              <div class="contact-way d-flex gap-16 pb-20 mb-20">
                <?php
                $email_icon = get_sub_field('email_icon');
                if ($email_icon) : ?>
                  <div class="contact-icon p-8 rounded-6 bg-background">
                    <img src="<?php echo esc_url($email_icon['url']); ?>" alt="<?php echo esc_attr($email_icon['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>

                <div>
                  <?php if ($email_title = get_sub_field('email_title')) : ?>
                    <p class="text-primary text-20 leading-120 mb-4"><?php echo esc_html($email_title); ?></p>
                  <?php endif; ?>

                  <?php if ($email_subtitle = get_sub_field('email_subtitle')) : ?>
                    <p class="text-title leading-150 mb-4"><?php echo esc_html($email_subtitle); ?></p>
                  <?php endif; ?>

                  <?php if ($email_address = get_sub_field('email_address')) : ?>
                    <a href="mailto:<?php echo $email_address; ?>" class="text-primary-light fw-600 leading-140"><?php echo $email_address; ?></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- !! Email -->

          <!-- Location -->
          <?php if (have_rows('location')) : ?>
            <?php while (have_rows('location')) : the_row(); ?>
              <div class="contact-way d-flex gap-16 pb-20 mb-32">
                <?php
                $location_icon = get_sub_field('location_icon');
                if ($location_icon) : ?>
                  <div class="contact-icon p-8 rounded-6 bg-background">
                    <img src="<?php echo esc_url($location_icon['url']); ?>" alt="<?php echo esc_attr($location_icon['alt']); ?>" class="img-fluid">
                  </div>
                <?php endif; ?>
                <div>
                  <?php if ($location_title = get_sub_field('location_title')) : ?>
                    <p class="text-primary text-20 leading-120 mb-4"><?php echo esc_html($location_title); ?></p>
                  <?php endif; ?>

                  <?php if ($location_subtitle = get_sub_field('location_subtitle')) : ?>
                    <p class="text-title leading-150 mb-4"><?php echo esc_html($location_subtitle); ?></p>
                  <?php endif; ?>

                  <?php if ($address = get_sub_field('address')) : ?>
                    <a href="#" class="text-primary-light fw-600 leading-140"><?php echo esc_html($address); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- !! Location -->

          <!-- Follow us on -->
          <div class="d-flex align-items-center gap-16">
            <p>Follow us on: </p>
            <div class="socials d-flex gap-8">
              <!-- social links loop -->
              <?php if (have_rows('footer_links', 'options')) : ?>
                <?php while (have_rows('footer_links', 'options')) :
                  the_row(); ?>
                  <div class="socials d-flex gap-8">
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
                    <!-- social links -->
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
              <!-- !! social links loop -->
            </div>
          </div>
          <!-- !! Follow us on -->
        </div>
        <!-- contact image -->
        <?php
        $contact_image = get_field('contact_image');
        if ($contact_image) : ?>
          <div class="col-lg-6">
            <div class="contact-img d-none d-lg-block">
              <img src="<?php echo esc_url($contact_image['url']); ?>" alt="<?php echo esc_attr($contact_image['alt']); ?>" class="img-fluid">
            </div>
          </div>
        <?php endif; ?>
        <!-- !! contact image -->
      </div>
    </div>

    <div class="contact-location">
      <div class="row">
        <!-- location map -->
        <?php if ($location_map = get_field('location_map')) : ?>
          <div class="col-lg-6">
            <div class="contact-map mr-lg-40 mr-0 mb-24 mb-lg-0">
              <?php echo $location_map; ?>
            </div>
          </div>
        <?php endif; ?>
        <!-- !! location map -->

        <!-- contact form -->
        <div class="col-lg-6">
          <?php get_template_part('template-parts/contact-form', null);?>
        </div>
        <!-- !! contact form -->
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>