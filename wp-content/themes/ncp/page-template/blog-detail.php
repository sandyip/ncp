<?php
/**
 * Template Name: Blog Detail
 */

get_header();
?>

<section class="blog-detail">
  <?php
  get_template_part('template-parts/blog-detail/blog-summary', null);
  ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="blog-detail-aside pb-32 pt-40">
          <div class="blog-detail-info bg-background p-24 rounded-16">
            <ul>
              <li>
                <span class="text-title">Published</span>
                <span class="text-title">:</span>
                <span class="text-12">22 August 2025</span>
              </li>
              <li>
                <span class="text-title">Author</span>
                <span class="text-title">:</span>
                <span class="text-12">John Doe</span>
              </li>
              <li>
                <span class="text-title">Category</span>
                <span class="text-title">:</span>
                <span class="text-12">Writing</span>
              </li>
              <li>
                <span class="text-title">Views</span>
                <span class="text-title">:</span>
                <span class="text-12">593</span>
              </li>
              <li>
                <span class="text-title">Comments</span>
                <span class="text-title">:</span>
                <span class="text-12">3</span>
              </li>
            </ul>
          </div>

          <aside class="toc-wrapper blog-chapters py-16 pl-8 pr-16 d-none d-lg-block">
            <div class="faq-item">
              <ul>
                <li class="">
                  <a href="#introduction" data-scroll="introduction">Understanding the Role of SEO in Blogging</a>
                </li>
                <li>
                  <a href="#crafting-blog-content" data-scroll="crafting-blog-content">Crafting Blog Content That
                    Resonates with Readers</a>
                </li>
                <li>
                  <a href="#optimizing-on-page-elements" data-scroll="optimizing-on-page-elements">Optimizing On-Page
                    Elements for Higher Rankings</a>
                </li>
                <li>
                  <a href="#promoting-and-distributing" data-scroll="promoting-and-distributing">Promoting and
                    Distributing Your Blog for Maximum Reach</a>
                </li>
                <li>
                  <a href="#measuring-success" data-scroll="measuring-success">Measuring Success and Continuously
                    Improving</a>
                </li>
                <li>
                  <a href="#conclusion" data-scroll="conclusion">Conclusion</a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
      <div class="col-lg-9">
        <?php
        get_template_part('template-parts/blog-detail/blog-content', null);
        get_template_part('template-parts/blog-detail/blog-comment', null);
        ?>

      </div>
    </div>



  </div>

  <div class="bg-accent">
    <?php
    get_template_part('template-parts/blog-detail/discover-more-blogs', null);
    ?>
  </div>

</section>

<?php get_footer(); ?>