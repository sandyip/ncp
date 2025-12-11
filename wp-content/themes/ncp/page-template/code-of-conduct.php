<?php

/**
 * Template Name: Code of Conduct
 */

get_header();
?>

<section class="code-of-conduct py-lg-96 py-64">
  <div class="container">
    <div class="section-title text-center mb-48">
      <!-- <p class="page-name mb-4 text-primary-light">Home / Code of Conduct</p>  -->
      <?php ncp_breadcrumb(); ?>

      <!-- banner title -->
      <?php if ($banner_title = get_field('banner_title')) : ?>
        <h1 class="text-64 mb-24 leading-120"><?php echo esc_html($banner_title); ?></h1>
      <?php endif; ?>
      <!-- !! banner title -->

      <!-- banner description -->
      <?php if ($banner_description = get_field('banner_description')) : ?>
        <p><?php echo $banner_description; ?></p>
      <?php endif; ?>
      <!-- !! banner description -->
    </div>

    <!-- code of conduct content -->
    <?php if ($code_of_conduct_content = get_field('code_of_conduct_content')) : ?>
      <div class="bg-background p-lg-64 p-32 general-content-box styled-list mb-32 rounded-16">
        <?php echo $code_of_conduct_content; ?>
      </div>
    <?php endif; ?>
    <!-- !! code of conduct content -->

    <!-- company details. -->
    <div class="pb-64 pb-lg-96">

      <?php if ( $company_name = get_field( 'company_name' ) ) : ?>
      <p class="mb-4"><?php echo esc_html( $company_name ); ?></p>
      <?php endif; ?>

      <?php if ( $company_address = get_field( 'company_address' ) ) : ?>
      <p class="mb-4"><?php echo esc_html( $company_address ); ?></p>
      <?php endif; ?>

      <?php if ( $company_phone_number = get_field( 'company_phone_number' ) ) : ?>
      <p class="mb-4"><?php echo esc_html( $company_phone_number ); ?></p>
      <?php endif; ?>

      <?php if ( $company_email_address = get_field( 'company_email_address' ) ) : ?>
      <p class="mb-24"><?php echo $company_email_address; ?></p>
      <?php endif; ?>

      <p>Last Revised: <?php echo get_the_modified_date('j F, Y'); ?></p>
    </div>
    <!-- !! company details -->

    <?php
    get_template_part('template-parts/cta', null);

    ?>
  </div>

  <?php get_template_part("/template-parts/modals/membership-modal", null); ?>


</section>


<?php get_footer(); ?>