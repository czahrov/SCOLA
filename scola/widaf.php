<?php
 /* 
 Template Name: widaf
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'widaf' );
	get_template_part( 'template/footer' );
	get_footer();