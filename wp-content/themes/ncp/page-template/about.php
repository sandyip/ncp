<?php
/**
 * Template Name: About
 */

get_header();

get_template_part("/template-parts/about/about-banner", null);
get_template_part("/template-parts/about/who-we-are", null);
get_template_part("/template-parts/about/mission", null);
get_template_part("/template-parts/about/vision", null);
get_template_part("/template-parts/about/our-journey", null);
get_template_part("/template-parts/about/our-organizers", null);

?>

<?php get_footer(); ?>