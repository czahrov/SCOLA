<?php
 /* 
 Template Name: regulamin
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'regulamin' );
	get_template_part( 'template/footer' );
	get_footer();