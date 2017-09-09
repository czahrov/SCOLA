<?php
 /* 
 Template Name: toeic
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'toeic' );
	get_template_part( 'template/footer' );
	get_footer();