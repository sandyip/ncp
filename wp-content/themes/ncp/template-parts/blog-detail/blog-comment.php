<?php
$comments = [
  [
    'image' => 'DJ',
    'name' => 'Don Joe',
    'date' => '22 Aug 2025',
    'comment' => 'Writing a blog that reaches wide audiences and impacts SEO isn’t about tricks — it’s about a balance between strategy, quality, and consistency. From understanding SEO fundamentals, creating engaging content, and optimizing technical elements, to promoting effectively and measuring results, each step builds a foundation for long-term blogging success.',
  ],
  [
    'image' => 'AK',
    'name' => 'Anisha Koirala',
    'date' => '30 June, 2025',
    'comment' => 'This was super helpful! I’ve been stuck between ABC and EBC for weeks — this breakdown made it much clearer. Thinking I’ll go with Annapurna for my first trek. Thanks for the insights!',
  ],
  [
    'image' => 'PS',
    'name' => 'Pratik Sharma',
    'date' => '30 June, 2025',
    'comment' => 'This was super helpful! I’ve been stuck between ABC and EBC for weeks — this breakdown made it much clearer. Thinking I’ll go with Annapurna for my first trek. Thanks for the insights!',
  ],
];
?>

<section class="blog-comment bg-background p-lg-32 p-16 rounded-16 mb-64 mb-lg-96">
  <div class="section-title d-flex gap-16 justify-content-between align-items-center flex-wrap mb-20">
    <h2 class="text-24 fw-600 leading-150">Comments</h2>
    <a href="#" class="py-12 px-40 text-white leading-150 rounded-48 bg-submit-bg" data-modal="commentModal">Write a Comment</a>
  </div>

  <div class="comment-detail-wrapper">
    <?php foreach ($comments as $index => $comment): ?>
      <div class="comment-detail mb-24 <?php echo ($index >= 2) ? 'faq-hidden' : ''; ?>">
        <div class="comment-name mb-12 d-flex gap-8">
          <span class="py-8 px-12 bg-accent rounded-4 d-flex align-items-center"><?php echo $comment['image']; ?></span>
          <div>
            <p class="text-16 fw-600 leading-150 text-title"><?php echo $comment['name']; ?></p>
            <p class="text-10 text-gray">
              <?php echo $comment['date']; ?>
            </p>
          </div>
        </div>
        <div class="comment-text general-content-box">
          <p class="">
            <?php echo $comment['comment']; ?>
          </p>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- button -->
    <?php
    $hiddenCount = count($comments) - 2;
    ?>
    <?php if ($hiddenCount > 0): ?>
      <a href="#" data-load-all="faq" data-label-base="Load More" data-hidden-count="<?php echo $hiddenCount; ?>"
        data-label-hide="Load Less" class="leading-150 hover-text-white mt-16 text-center text-primary-light">
        <span class="btn-label text-decoration-underline link-offset-2 text-primary-light">Load More</span>
      </a>
    <?php endif; ?>
  </div>

</section>

<?php
get_template_part('template-parts/modals/comment-modal', null);

?>