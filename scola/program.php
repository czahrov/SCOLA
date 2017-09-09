<?php
 /* 
 Template Name: program
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'program' );
	get_template_part( 'template/footer' );
	get_footer();