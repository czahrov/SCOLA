<?php
 /* 
	Template Name: cennik
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'cennik' );
	get_template_part( 'template/footer' );
	get_footer();
	