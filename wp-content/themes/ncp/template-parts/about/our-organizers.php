<section class="our-organizers pt-64 pt-lg-96 pb-72 pb-124">
  <div class="container">
    <div class="section-title mb-48">
      <h2 class="text-40 leading-130 mb-16">Meet Our Organizers</h2>
      <p class="text-20 text-title leading-150">Our dedicated team of organizers and Microsoft MVPs drives Nepal Cloud
        Professionals’ mission. They bring expertise, passion, and leadership to our events and workshops, ensuring a
        welcoming environment for all.</p>
    </div>

    <div class="organizer-card-wrapper">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <a href="#" data-modal="teamModal" class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16">
            <div class="organizer-img">
              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/speaker1.png" alt="" class="img-fluid">
            </div>
            <div>
              <p class="text-gray leading-150 mb-8">Lead Organizer</p>
              <p class="text-20 fw-700 text-title speaker-name">Ravi Bhattarai</p>
            </div>
          </a>
        </div>
        <a href="#" data-modal="teamModal" class="col-lg-4 col-sm-6">
          <div class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16">
            <div class="organizer-img">
              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/speaker2.png" alt="" class="img-fluid">
            </div>
            <div>
              <p class="text-gray leading-150 mb-8">Community Manager</p>
              <p class="text-20 fw-700 text-title speaker-name">Suman Gurung</p>
            </div>
          </div>
        </a>
        <div class="col-lg-4 col-sm-6">
          <a href="#" data-modal="teamModal" class="organizer-card d-flex gap-24 bg-accent rounded-16 border-primary-light align-items-center pr-16">
            <div class="organizer-img">
              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/speaker3.png" alt="" class="img-fluid">
            </div>
            <div>
              <p class="text-gray leading-150 mb-8">Event Coordinator</p>
              <p class="text-20 fw-700 text-title speaker-name">Anita Shrestha</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/modals/team-modal', null);

?>