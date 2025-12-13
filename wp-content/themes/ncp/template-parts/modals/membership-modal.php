<div class="makura-modal" id="membershipModal">
  <div class="makura-modal-content">
    <div class="makura-modal-header">
      <button close-modal="makura-modal" class="d-flex gap-8">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path
            d="M5.68372 18.9999C5.5485 18.9999 5.41631 18.9598 5.30387 18.8847C5.19143 18.8096 5.10379 18.7028 5.05204 18.5779C5.00029 18.453 4.98676 18.3155 5.01314 18.1829C5.03953 18.0503 5.10466 17.9284 5.20028 17.8328L17.833 5.20011C17.9612 5.07189 18.1351 4.99986 18.3164 4.99986C18.4978 4.99986 18.6717 5.07189 18.7999 5.20011C18.9281 5.32832 19.0001 5.50222 19.0001 5.68354C19.0001 5.86487 18.9281 6.03876 18.7999 6.16698L6.16715 18.7997C6.10372 18.8633 6.02837 18.9137 5.9454 18.948C5.86244 18.9824 5.77351 19 5.68372 18.9999Z"
            fill="black" />
          <path
            d="M18.3164 18.9999C18.2266 19 18.1377 18.9824 18.0547 18.948C17.9718 18.9137 17.8964 18.8633 17.833 18.7997L5.20025 6.16698C5.07203 6.03876 5 5.86487 5 5.68354C5 5.50222 5.07203 5.32832 5.20025 5.20011C5.32846 5.07189 5.50236 4.99986 5.68368 4.99986C5.865 4.99986 6.0389 5.07189 6.16711 5.20011L18.7998 17.8328C18.8955 17.9284 18.9606 18.0503 18.987 18.1829C19.0134 18.3155 18.9998 18.453 18.9481 18.5779C18.8963 18.7028 18.8087 18.8096 18.6963 18.8847C18.5838 18.9598 18.4516 18.9999 18.3164 18.9999Z"
            fill="black" />
        </svg>
      </button>
    </div>
    <div class="makura-modal-body p-sm-48 p-24">

      <div class="section-title mb-24">
        <!-- memebership title -->
        <?php if ($become_a_membership_title = get_field('become_a_membership_title', 'options')) : ?>
          <h3 class="text-24 fw-600 leading-150 mb-8"><?php echo esc_html($become_a_membership_title); ?></h3>
        <?php endif; ?>
        <!-- !! memebership title -->

        <!-- memebreship description -->
        <?php if ($become_a_membership_description = get_field('become_a_membership_description', 'options')) : ?>
          <p class="leading-150"><?php echo $become_a_membership_description; ?></p>
        <?php endif; ?>
        <!-- !! memebership description -->
      </div>

      <div class="membership-form">

        <?php if ($form_shortcode = get_field('form_shortcode', 'options')) : ?>
          <?php echo do_shortcode($form_shortcode); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>