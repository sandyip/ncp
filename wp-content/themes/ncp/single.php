<?php
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
                                <span class="text-12"> <?php echo get_the_date('d F Y'); ?></span>
                            </li>
                            <li>
                                <span class="text-title">Author</span>
                                <span class="text-title">:</span>
                                <span class="text-12"><?php echo get_the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></span>
                            </li>
                            <li>
                                <span class="text-title">Category</span>
                                <span class="text-title">:</span>
                                <span class="text-12">
                                    <?php
                                    $category = get_the_category();
                                    if ($category) {
                                        echo esc_html($category[0]->name);
                                    }
                                    ?>
                                </span>
                            </li>
                            <li>
                                <span class="text-title">Views</span>
                                <span class="text-title">:</span>
                                <span class="text-12">593</span>
                            </li>
                            <li>
                                <span class="text-title">Comments</span>
                                <span class="text-title">:</span>
                                <span class="text-12"><?php echo get_comments_number(); ?></span>
                            </li>
                        </ul>
                    </div>

                    <aside class="toc-wrapper blog-chapters py-16 pl-8 pr-16 d-none d-lg-block">
                        <div class="faq-item">
                            <?php if (have_rows('content')) : ?>
                                <ul>
                                    <?php while (have_rows('content')) :
                                        the_row(); 
                                        $id = get_sub_field('id');
                                        $heading = get_sub_field('heading');
                                        ?>
                                        <?php if ($heading && $id) : ?>
                                        <li class="">
                                            <a href="#<?php echo esc_html($id); ?>" data-scroll="<?php echo esc_html($id); ?>"><?php echo esc_html($heading); ?></a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>

                            <?php endif; ?>
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

<?php
get_footer();
?>