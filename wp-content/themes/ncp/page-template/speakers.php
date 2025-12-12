<?php
/**
 * Template Name: Speakers
 */

get_header();
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