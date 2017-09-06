<?php
 /* 
 Template Name: e-learning
 */
	get_header();
	get_template_part( 'template/top' );
	do_action( 'breadcrumb' );
	get_template_part( 'template/page', 'e-learning' );
	get_template_part( 'template/footer' );
	get_footer();