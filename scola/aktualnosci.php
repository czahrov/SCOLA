<?php
 /* 
 Template Name: aktualnosci
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'aktualnosci' );
	get_template_part( 'template/footer' );
	get_footer();