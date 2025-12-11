<?php
/**
 * Template Name: About
 */

get_header();

$layoutBasePath = get_template_directory() . '/template-parts/about/';

if (have_rows('about_page_content')) :
  while (have_rows('about_page_content')) :
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