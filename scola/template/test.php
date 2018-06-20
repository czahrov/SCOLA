<?php
	/* Template Name: Test Online */
	session_start();
	$page = get_post();
	$slug = $page->post_name;
	$title = strtolower( $page->post_title );
	// @include_once get_template_directory() . "/template/test-{$slug}.php";
	if( !isset( $quest ) ){
		$quest = array(
			array(
				'pytanie' => '- Pytanie<br>- ...',
				'odpowiedzi' => array(
					array(
						'text' => 'odpowiedź 1',
						'correct' => false,
					),
					array(
						'text' => 'odpowiedź 2',
						'correct' => false,
					),
					array(
						'text' => 'odpowiedź 3',
						'correct' => false,
					),
					array(
						'text' => 'odpowiedź 4',
						'correct' => true,
					),
					
				),
			),
			
		);
		
	}
	
	get_header();
	get_template_part( "template/top" );	
?>

<body class='regular font-dark'>
	<?php do_action( 'breadcrumb' ); ?>
	<div id='test' class='intro'>
		<?php
		@include_once get_template_directory() . "/template/test-intro.php";
		
		if( empty( $_POST ) && empty( $_SESSION[ 'person' ] ) ):
			@include_once get_template_directory() . "/template/test-form.php";
		else:
		?>
		
		<div class='pytania slider bg-gray-light'>
		
		<?php
			if( !empty( $_POST ) ){
				$_SESSION[ 'person' ] = $_POST;
				$_SESSION[ 'person' ][ 'lang' ] = $title;
			}
			
			@include_once get_template_directory() . "/template/test-{$slug}.php";
			@include_once get_template_directory() . "/template/test-pytania.php";
			
		?>
		
		</div>
		
		<?php
			endif;
		?>
		
		
		<?php @include_once get_template_directory() . "/template/test-wynik.php"; ?>
		
	</div>
	
<?php get_template_part( "template/footer" ); ?>
<?php get_footer(); ?>