<?php
if ( post_password_required() ) {
  return;
}
?>

<div class="makura-modal" id="commentModal">
  <div class="makura-modal-content">
    <div class="makura-modal-header">
      <button close-modal="makura-modal" class="d-flex gap-8">✕</button>
    </div>

    <div class="makura-modal-body p-sm-48 p-24">

      <div class="section-title mb-24">
        <h3 class="text-24 fw-600 leading-150 mb-8">Write a comment</h3>
        <p class="leading-150">Once submitted, we will review and post shortly.</p>
      </div>

      <?php if ( comments_open() ) : ?>

      <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" class="comment-form">

        <div class="row">

          <!-- ALWAYS VISIBLE -->
          <div class="col-sm-6">
            <div class="input-field">
              <input type="text" name="author" placeholder="First Name" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="input-field">
              <input type="email" name="email" placeholder="Email Address" required>
            </div>
          </div>

          <div class="col-md-12">
            <div class="input-field mb-16">
              <textarea name="comment" placeholder="Your message to us" required></textarea>
            </div>
          </div>

        </div>

        <?php
          comment_id_fields( get_the_ID() );
          do_action( 'comment_form', get_the_ID() );
        ?>

        <div class="text-center rounded-48 py-12 px-36 bg-submit-bg">
          <button type="submit" class="text-16 leading-149 text-white bg-transparent border-0">
            Submit Comment
          </button>
        </div>

      </form>

      <?php else : ?>
        <p class="text-gray">Comments are closed.</p>
      <?php endif; ?>

    </div>
  </div>
</div>
