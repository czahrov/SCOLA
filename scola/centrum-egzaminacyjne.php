<?php
 /* 
 Template Name: centrum-egzaminacyjne
 */
 	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'centrum-egzaminacyjne' );
	get_template_part( 'template/footer' );
	get_footer();