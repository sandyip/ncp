<section class="join-conversation py-lg-96 py-64">
  <div class="container">
    <div class="row align-items-center">
      <?php if (have_rows('join_conversation')) : ?>
        <?php while (have_rows('join_conversation')) :
          the_row(); ?>
          <div class="col-lg-6">
            <div class="section-title mb-lg-48 mb-24">
              <!-- section title -->
              <?php if ($section_title = get_sub_field('section_title')) : ?>
                <h2 class="text-40 leading-130 mb-16"><?php echo esc_html($section_title); ?></h2>
              <?php endif; ?>
              <!-- !! section title -->

              <!-- section description -->
              <?php if ($section_description = get_sub_field('section_description')) : ?>
                <p><?php echo $section_description; ?></p>
              <?php endif; ?>
              <!-- !! section description -->
            </div>
            <div class="">
              <!-- follow us title -->
              <?php if ($follow_us_title = get_sub_field('follow_us_title')) : ?>
                <p class="mb-16"><?php echo esc_html($follow_us_title); ?></p>
              <?php endif; ?>
              <!-- !! follow us title -->

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
        <?php endwhile; ?>
      <?php endif; ?>

      <!-- join conversation -->
      <?php if (have_rows('join_conversation_content')) : ?>
        <?php while (have_rows('join_conversation_content')) :
          the_row(); ?>
          <div class="col-lg-6">
            <div class="join-conversation-content">
              <div class="row">
                <!-- followers -->
                <?php if (have_rows('followers')) : ?>
                  <?php while (have_rows('followers')) :
                    the_row(); ?>
                    <div class="col-sm-6">
                      <div class="stat-box p-24 bg-accent rounded-8 h-100">
                        <div class="mb-4 d-flex align-items-center gap-12">
                          <!-- follower icon -->
                          <?php
                          $followers_icon = get_sub_field('followers_icon');
                          if ($followers_icon) : ?>
                            <img src="<?php echo esc_url($followers_icon['url']); ?>" alt="<?php echo esc_attr($followers_icon['alt']); ?>"
                              class="img-fluid" />
                          <?php endif; ?>
                          <!-- !! follower icon -->

                          <!-- follower total count -->
                          <?php if ($total_follower_count = get_sub_field('total_follower_count')) : ?>
                            <p class="text-24 fw-600 text-title"><?php echo esc_html($total_follower_count); ?></p>
                          <?php endif; ?>
                          <!-- !! follower total count -->
                        </div>

                        <!-- follower total count label -->
                        <?php if ($total_follower_label = get_sub_field('total_follower_label')) : ?>
                          <p><?php echo esc_html($total_follower_label); ?></p>
                        <?php endif; ?>
                        <!-- !! follower total count label-->
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                <!-- !! followers -->

                <!-- Events -->
                <?php if (have_rows('events')) : ?>
                  <?php while (have_rows('events')) :
                    the_row(); ?>
                    <div class="col-sm-6">
                      <div class="stats-box p-24 bg-accent rounded-8 h-100">
                        <div class="mb-4 d-flex align-items-center gap-12">
                          <!-- Events icon -->
                          <?php
                          $events_icon = get_sub_field('events_icon');
                          if ($events_icon) : ?>
                            <img src="<?php echo esc_url($events_icon['url']); ?>" alt="<?php echo esc_attr($events_icon['alt']); ?>"
                              class="img-fluid" />
                          <?php endif; ?>
                          <!-- !! Events icon -->

                          <!-- Total event count -->
                          <?php if ($total_event_count = get_sub_field('total_event_count')) : ?>
                            <p class="text-24 fw-600 text-title"><?php echo esc_html($total_event_count); ?></p>
                          <?php endif; ?>
                          <!-- !! Total event count -->
                        </div>

                        <!-- total event label -->
                        <?php if ($total_event_label = get_sub_field('total_event_label')) : ?>
                          <p><?php echo esc_html($total_event_label); ?></p>
                        <?php endif; ?>
                        <!-- !! total event label -->

                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                <!-- !! events -->

                <!-- meetups -->
                <?php if (have_rows('meetups')) : ?>
                  <?php while (have_rows('meetups')) :
                    the_row(); ?>
                    <div class="col-lg-12">
                      <div class="p-24 bg-accent rounded-8">
                        <div class="mb-4 ">
                          <!-- meetup icon -->
                          <?php
                          $meetup_icon = get_sub_field('meetup_icon');
                          if ($meetup_icon) : ?>
                            <img src="<?php echo esc_url($meetup_icon['url']); ?>" alt="<?php echo esc_attr($meetup_icon['alt']); ?>"
                              class="img-fluid" />
                          <?php endif; ?>
                          <!-- !! meetup icon -->
                        </div>

                        <!-- meetup headline -->
                        <?php if ($meetup_headline = get_sub_field('meetup_headline')) : ?>
                          <p class="text-24 fw-600 mb-8 text-title leading-150"><?php echo esc_html($meetup_headline); ?></p>
                        <?php endif; ?>
                        <!-- !! meetup headline -->

                        <!-- meetup description -->
                        <?php if ($meetup_description = get_sub_field('meetup_description')) : ?>
                          <p class="mb-24"><?php echo esc_html($meetup_description); ?></p>
                        <?php endif; ?>
                        <!-- !! meetup description -->

                        <!-- meetup button -->
                        <?php
                        $link = get_sub_field('meetup_button');
                        if ($link) :
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="py-12 px-36 bg-primary text-white rounded-48"><?php echo esc_html($link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                              <path
                                d="M15.8333 13C15.8333 12.7661 15.9162 12.5712 16.0818 12.4152C16.2476 12.2495 16.4425 12.1667 16.6667 12.1667C16.9006 12.1667 17.0955 12.2495 17.2515 12.4152C17.4172 12.5712 17.5 12.7661 17.5 13V14.6667C17.5 15.2709 17.3538 15.8314 17.0614 16.3479C16.769 16.8547 16.3645 17.2592 15.8479 17.5614C15.3412 17.8538 14.7807 18 14.1667 18H5.83333C5.22904 18 4.66862 17.8538 4.15205 17.5614C3.64523 17.2592 3.24074 16.8547 2.9386 16.3479C2.6462 15.8314 2.5 15.2709 2.5 14.6667V6.33333C2.5 5.7193 2.6462 5.15887 2.9386 4.65205C3.24074 4.13548 3.64523 3.73099 4.15205 3.4386C4.66862 3.1462 5.22904 3 5.83333 3H7.5C7.73392 3 7.92885 3.08285 8.08479 3.24854C8.25048 3.40448 8.33333 3.59942 8.33333 3.83333C8.33333 4.05751 8.25048 4.25243 8.08479 4.41812C7.92885 4.58382 7.73392 4.66667 7.5 4.66667H5.83333C5.30702 4.66667 4.89766 4.81287 4.60527 5.10527C4.31287 5.39766 4.16667 5.80702 4.16667 6.33333V14.6667C4.16667 15.193 4.31287 15.6023 4.60527 15.8947C4.89766 16.1872 5.30702 16.3333 5.83333 16.3333H14.1667C14.693 16.3333 15.1023 16.1872 15.3947 15.8947C15.6872 15.6023 15.8333 15.193 15.8333 14.6667V13ZM8.91817 12.7515C8.77192 12.9172 8.577 13 8.33333 13C8.10916 13 7.91423 12.9172 7.74854 12.7515C7.58285 12.5857 7.5 12.3908 7.5 12.1667C7.5 11.923 7.58285 11.7281 7.74854 11.5818L16.0818 3.24854C16.2378 3.08285 16.4327 3 16.6667 3C16.9006 3 17.0955 3.08285 17.2515 3.24854C17.4172 3.40448 17.5 3.59942 17.5 3.83333C17.5 4.06725 17.4172 4.26218 17.2515 4.41812L8.91817 12.7515ZM17.5 8.83333C17.5 9.0575 17.4172 9.25242 17.2515 9.41817C17.0955 9.58383 16.9006 9.66667 16.6667 9.66667C16.4425 9.66667 16.2476 9.58383 16.0818 9.41817C15.9162 9.25242 15.8333 9.0575 15.8333 8.83333V3.95029C15.8333 3.90156 15.9016 3.94054 16.038 4.06725C16.1842 4.18421 16.3157 4.31579 16.4327 4.46199C16.5594 4.59844 16.5984 4.66667 16.5497 4.66667H11.6667C11.4425 4.66667 11.2476 4.58382 11.0818 4.41812C10.9162 4.25243 10.8333 4.05751 10.8333 3.83333C10.8333 3.59942 10.9162 3.40448 11.0818 3.24854C11.2476 3.08285 11.4425 3 11.6667 3H16.5497C16.8128 3 17.037 3.09259 17.2222 3.27777C17.4074 3.46297 17.5 3.68713 17.5 3.95029V8.83333Z"
                                fill="white" />
                            </svg>
                          </a>
                        <?php endif; ?>
                        <!-- !! meetup button -->
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                <!-- !! meetups -->
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- !! join conversation -->
    </div>
  </div>
</section>