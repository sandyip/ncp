<?php
/**
 * Template Name: Speakers
 */

get_header();
get_template_part('template-parts/speaker/speaker-title', null);
get_template_part('template-parts/speaker/featured-speaker', null);
get_template_part('template-parts/speaker/past-speakers', null);
get_template_part('template-parts/speaker/proposal-form', null);
get_template_part('template-parts/speaker/speaker-testimonial', null);

?>

<?php get_footer(); ?>