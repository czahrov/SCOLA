<?php
/* 
	 Template Name: kontakt
*/
	get_header();
?>

<body class='home regular font-dark'>

<?php get_template_part( 'template/top' ); ?>
<?php do_action( 'breadcrumb' ); ?>
<?php get_template_part( 'template/page', 'kontakt' ); ?>
<?php get_template_part( 'template/footer' ); ?>

<?php get_footer();?>