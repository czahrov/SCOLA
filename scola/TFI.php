<?php
 /* 
 Template Name: TFI
 */
 	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'tfi' );
	get_template_part( 'template/footer' );
	get_footer();