<div class="inquiry-form">
  <?php if ($partner_inquiry_form_shortcode = get_sub_field('partner_inquiry_form_shortcode')) : ?>
    <?php echo do_shortcode($partner_inquiry_form_shortcode); ?>
  <?php endif; ?>
</div>