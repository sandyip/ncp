<?php
get_header();

$layoutBasePath = get_template_directory() . '/template-parts/homepage/';

if (have_rows('front_page_content')) :
  while (have_rows('front_page_content')) :
    the_row();
    $layout = get_row_layout();
    $file   = $layoutBasePath . str_replace('_', '-', $layout) . '.php';

    if (file_exists($file)) {
      include $file;
    }
  endwhile;
endif;

get_footer();
?>