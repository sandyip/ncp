<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <!-- Header top bar -->
        <?php if ($header_top_bar = get_field('header_top_bar', 'options')) : ?>
            <div class="header-top bg-primary-light text-center py-12">
                <p class="text-12 text-white"> <?php echo esc_html($header_top_bar); ?></p>
            </div>
        <?php endif; ?>
        <!-- !!! Header top bar -->
        <div class="container">
            <div
                class="header-content d-flex justify-content-between align-items-center py-12 pl-md-24 pl-12 pr-md-16 pr-12">
                <!-- logo -->
                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
                    <?php
                    if ($custom_logo_id) {
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (! empty($image[0])) {
                    ?>
                            <img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="img-fluid">
                    <?php
                        } else {
                            echo esc_html(get_bloginfo('name'));
                        }
                    } else {
                        echo esc_html(get_bloginfo('name'));
                    }
                    ?>
                </a>
                <!-- !!! logo -->
                <nav class="primary-menu">
                    <div class="primary-menu-wrapper p-16 p-md-0">
                        <div
                            class="mobile-menu-header d-lg-none py-32 d-flex justify-content-between align-items-center px-16">
                            <!-- mobile logo -->
                            <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                            <a href="/" class="header_logo">
                                <?php
                                if ($custom_logo_id) {
                                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                    if (! empty($image[0])) {
                                ?>
                                        <img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="img-fluid">
                                <?php
                                    } else {
                                        echo esc_html(get_bloginfo('name'));
                                    }
                                } else {
                                    echo esc_html(get_bloginfo('name'));
                                }
                                ?>
                            </a>
                            <!-- !!! mobile logo -->
                            <button class="close-ham">
                                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/x-mark.svg"
                                    alt="" class="img-fluid">
                            </button>
                        </div>
                        <!-- primary menu -->
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary-menu',
                                'container' => '',
                                'items_wrap' => '<ul class="d-lg-flex justify-content-end align-items-start gap-lg-32 gap-16 px-16 px-lg-0">%3$s</ul>',
                            )
                        );
                        ?>
                        <!-- !!! primary menu -->
                    </div>
                </nav>
                <div class="d-flex gap-12">
                    <!-- member button -->
                    <?php
                    $link = get_field('member_button', 'options');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="#" data-modal="membershipModal"
                            class="bg-primary text-white py-12 px-xl-36 px-24 rounded-48 leading-150 d-none d-md-block text-center">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                    <!-- !!! menber button -->
                    <button type="button" class="ham d-block d-lg-none">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/ham.svg" alt=""
                            class="img-fluid" />
                    </button>
                </div>
            </div>
        </div>
    </header>

    <?php
    get_template_part('template-parts/modals/membership-modal', null);

    ?>

    <main>