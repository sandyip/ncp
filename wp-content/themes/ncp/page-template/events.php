<?php
/**
 * Template Name: Events
 */

get_header();
get_template_part('template-parts/events/events-banner', null);
get_template_part('template-parts/events/events-upcoming', null);
get_template_part('template-parts/events/past-events', null);
get_template_part('template-parts/events/galleries', null);

?>

<?php get_footer(); ?>