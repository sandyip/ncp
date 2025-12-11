<div class="contact-form p-32 bg-background rounded-16">
  <!-- contact form title -->
  <?php if ($contact_form_title = get_field('contact_form_title')) : ?>
    <p class="text-24 fw-600 leading-150 text-title mb-8"><?php echo esc_html($contact_form_title); ?></p>
  <?php endif; ?>
  <!-- !! contact form title -->

  <!-- contact form subtitle -->
  <?php if ($contact_form_subtitle = get_field('contact_form_subtitle')) : ?>
    <p class="mb-24"><?php echo esc_html($contact_form_subtitle); ?></p>
  <?php endif; ?>
  <!-- !! contact form subtitle -->

  <!-- <div class="row">
    <div class="col-md-6">
      <div class="input-field">
        <input type="text" id="name" name="name" placeholder="Full Name" value="" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-field">
        <input type="email" id="email" name="email" placeholder="Email" value="" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-field">
        <input type="number" id="number" name="number" placeholder="Phone Number" value="" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-field">
        <input type="text" id="address" name="address" placeholder="Address" value="" />
      </div>
    </div>
    <div class="col-md-12">
      <div class="select-wrapper">
        <select name="" id="partner-type">
          <option value="" disabled selected>Contact Topic</option>
          <option value="">Solo Type</option>
          <option value="">Multiple Type</option>
          <option value="">Double Type</option>
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <div class="input-field mb-24">
        <textarea type="text" id="message" name="message" placeholder="Detailed reason to contact" value=""></textarea>
      </div>
    </div>
  </div>
  <div class="submit-btn">
    <input type="submit" value="Submit Message"
      class="py-12 px-48 border-0 rounded-36 leading-150 bg-submit-bg text-white">
  </div> -->
<?php if ( $shortcode = get_field( 'shortcode' ) ) : ?>
    <?php echo do_shortcode( $shortcode ); ?>
<?php endif; ?>

</div>


	
