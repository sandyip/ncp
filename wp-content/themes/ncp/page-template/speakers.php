<?php
/**
 * Template Name: Speakers
 */

get_header();
// get_template_part('template-parts/speaker/speaker-title', null);
// get_template_part('template-parts/speaker/featured-speaker', null);
// get_template_part('template-parts/speaker/past-speakers', null);
// get_template_part('template-parts/speaker/proposal-form', null);
// get_template_part('template-parts/speaker/speaker-testimonial', null);
$layoutBasePath = get_template_directory() . '/template-parts/speaker/';

if (have_rows('speaker_page_content')) :
  while (have_rows('speaker_page_content')) :
    the_row();
    $layout = get_row_layout();
    $file   = $layoutBasePath . str_replace('_', '-', $layout) . '.php';

    if (file_exists($file)) {
      include $file;
    }
  endwhile;
endif;
?>

<?php get_footer(); ?>