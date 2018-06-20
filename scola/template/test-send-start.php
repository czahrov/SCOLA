<?php
/*
	Template Name: Testy Online Start
*/

if( !isAjax() ){
	header( "Location: " . home_url() );
	exit;
}

session_start();

// print_r( $_POST );

if( empty( $_POST[ 'imie' ] ) or 
	empty( $_POST[ 'nazwisko' ] ) or 
	empty( $_POST[ 'mail' ] ) or 
	empty( $_POST[ 'tel' ] ) or 
	empty( $_POST[ 'zgoda' ] ) ){
	echo json_encode(array(
		'status' => 'fail',
		'title' => 'Niepoprawne dane',
		'msg' => 'Proszę wypełnić wszystkie wymagane pola ( oznaczone gwiazdką ).',
	));
	
}
else{
	
	$filters = array(
		'imie' => array(
			'filter' => 'FILTER_SANITIZE_STRING',
		),
		'nazwisko' => array(
			'filter' => 'FILTER_SANITIZE_STRING',
		),
		'mail' => array(
			'filter' => 'FILTER_VALIDATE_EMAIL',
		),
		'tel' => array(
			'filter' => 'FILTER_SANITIZE_STRING',
		),
		'lang' => array(
			'filter' => 'FILTER_SANITIZE_STRING',
		),
		
	);

	$safe = filter_input_array( INPUT_POST, $filters );

	if( $safe !== false ){
		require  get_template_directory() . "/php/PHPMailer/PHPMailerAutoload.php";
		$mailer = new PHPMailer;
		$mailer->CharSet = "utf-8";
		$mailer->Encoding = "base64";
		$mailer->setLanguage( 'pl' );
		$mailer->setFrom( 'noreply@poligon.scepter.pl', 'Testy online - SCOLA' );
		if( DMODE ){
			$mailer->addAddress( 'sprytne@scepter.pl' );
		}
		else{
			$mailer->addAddress( 'info@scola.pl' );
		}
			
		$mailer->Subject = sprintf( "%s %s rozpoczyna test z języka %sego!", 
		$safe[ 'imie' ], 
		$safe[ 'nazwisko' ], 
		$safe[ 'lang' ] );
		
		$msg = sprintf( "%s %s rozpoczyna właśnie test z języka %sego.
Dane kontaktowe:
E-mail: %s
Telefon: %s
Wyraża zgodę na przetwarzanie danych osobowych na potrzeby informacyjne i handlowe: %s

---
Mail został wygenerowany automatycznie na stronie %s",
		$safe[ 'imie' ],
		$safe[ 'nazwisko' ],
		$safe[ 'lang' ],
		$safe[ 'mail' ],
		$safe[ 'tel' ],
		$_POST[ 'zgoda' ] === 'tak'?( 'tak' ):( 'nie' ),
		home_url() );
		$mailer->Body = $msg;
		
		// print_r( $safe );
		
		// echo $msg;
		
		if( $mailer->send() ){
			echo json_encode(array(
				'status' => 'ok',
				'title' => 'Formularz wstępny',
				'msg' => 'Formularz został zweryfikowany pomyślnie.<br>Za chwilę nastąpi przekierowanie.',
			));
			
		}
		else{
			echo json_encode(array(
				'status' => 'fail',
				'title' => 'Formularz wstępny',
				'msg' => sprintf( "Błąd wysyłania formularza.<br>Powód: %s" , $mailer->ErrorInfo),
			));
			
			
		}
		
	}
}


