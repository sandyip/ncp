<?php
get_header(); ?>

<?php
$flexibleContentPath = dirname(__FILE__) . '/flexible-content/';
if ( have_rows( 'front_page_content' ) ) :
	while ( have_rows( 'front_page_content' ) ) :
		the_row();
		$layout = get_row_layout();
		$file = ( $flexibleContentPath . str_replace( '_', '-', $layout) . '.php' );
		if ( file_exists( $file ) ) {
			include( $file );
		} 
get_template_part('template-parts/banner', null);
get_template_part('template-parts/homepage/cloud-community', null);
get_template_part('template-parts/homepage/upcoming-events', null);
get_template_part('template-parts/homepage/testimonial', null);
get_template_part('template-parts/homepage/join-conversation', null);
get_template_part('template-parts/homepage/cloud-cta', null);
get_template_part('template-parts/homepage/partners', null);

endwhile;
endif; ?>
<?php
get_footer();
?>