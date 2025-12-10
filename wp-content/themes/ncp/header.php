<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Cloud Professionals</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header-top bg-primary-light text-center py-12">
            <p class="text-12 text-white">Register for Nepal Cloud Summit 2025 before September 30</p>
        </div>
        <div class="container">
            <div
                class="header-content d-flex justify-content-between align-items-center py-12 pl-md-24 pl-12 pr-md-16 pr-12">
                <!-- logo -->
                <a href="<?php echo get_home_url(); ?>" class="header-logo">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/header-logo.svg" alt=""
                        class="img-fluid">
                </a>
                <!-- !logo -->
                <nav class="primary-menu">
                    <div class="primary-menu-wrapper p-16 p-md-0">
                        <div
                            class="mobile-menu-header d-lg-none py-32 d-flex justify-content-between align-items-center px-16">
                            <!-- mobile logo -->
                            <a href="/" class="header_logo">
                                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/header-logo.svg"
                                    alt="" class="img-fluid">
                            </a>
                            <!-- !mobile logo -->
                            <button class="close-ham">
                                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/x-mark.svg"
                                    alt="" class="img-fluid">
                            </button>
                        </div>
                        <ul class="d-lg-flex justify-content-end align-items-start gap-lg-32 gap-16 px-16 px-lg-0">
                            <li class="menu-item-has-children">
                                <a href="#about" data-scroll="about">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#speakers" data-scroll="solutions">Speakers</a>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="new">Events</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="new">Partners</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="new">Code of Conduct</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="new">Blog</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="new">Contact</a></li>
                            <li class="d-block d-md-none">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                                    class="bg-primary text-white py-12 px-sm-36 px-24 rounded-48 leading-140 text-center">
                                    Become a Member
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="d-flex gap-12">
                    <a href="#" data-modal="membershipModal"
                        class="bg-primary text-white py-12 px-xl-36 px-24 rounded-48 leading-150 d-none d-md-block text-center">
                        Become a Member
                    </a>
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