<?php
// Ensure this runs in the loop
$post_id = get_the_ID();

// Get approved comments for the current post
$comments = get_comments(array(
    'post_id' => $post_id,
    'status'  => 'approve',
    'order'   => 'ASC', // oldest first; change to 'DESC' for newest first
));
?>

<section class="blog-comment bg-background p-lg-32 p-16 rounded-16 mb-64 mb-lg-96">
  <div class="section-title d-flex gap-16 justify-content-between align-items-center flex-wrap mb-20">
    <h2 class="text-24 fw-600 leading-150">Comments</h2>
    <a href="#" class="py-12 px-40 text-white leading-150 rounded-48 bg-submit-bg" data-modal="commentModal">Write a Comment</a>
  </div>

  <div class="comment-detail-wrapper">
    <?php if ($comments) : ?>
        <?php foreach ($comments as $index => $comment): ?>
          <div class="comment-detail mb-24 <?php echo ($index >= 2) ? 'faq-hidden' : ''; ?>">
            <div class="comment-name mb-12 d-flex gap-8">
              <span class="py-8 px-12 bg-accent rounded-4 d-flex align-items-center">
                <?php echo strtoupper(substr($comment->comment_author, 0, 2)); ?>
              </span>
              <div>
                <p class="text-16 fw-600 leading-150 text-title">
                  <?php echo esc_html($comment->comment_author); ?>
                </p>
                <p class="text-10 text-gray">
                  <?php echo get_comment_date('d M, Y', $comment); ?>
                </p>
              </div>
            </div>
            <div class="comment-text general-content-box">
              <p>
                <?php echo esc_html($comment->comment_content); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>

        <?php
        $hiddenCount = count($comments) - 2;
        if ($hiddenCount > 0): ?>
          <a href="#" data-load-all="faq" data-label-base="Load More" data-hidden-count="<?php echo $hiddenCount; ?>"
            data-label-hide="Load Less" class="leading-150 hover-text-white mt-16 text-center text-primary-light">
            <span class="btn-label text-decoration-underline link-offset-2 text-primary-light">Load More</span>
          </a>
        <?php endif; ?>
    <?php else: ?>
      <p class="text-gray">No comments yet. Be the first to comment!</p>
    <?php endif; ?>
  </div>
</section>

<?php
// Load comment modal template part (if you have it)
get_template_part('template-parts/modals/comment-modal', null);

// Optional: Uncomment if you want the standard WordPress comment form below the comments
// comment_form(array(
//     'title_reply' => 'Write a Comment',
//     'label_submit' => 'Post Comment',
//     'comment_notes_after' => '',
// ));
?>
