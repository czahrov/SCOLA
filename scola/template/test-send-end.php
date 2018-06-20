<?php
/*
	Template Name: Testy Online Koniec
*/

if( !isAjax() ){
	header( "Location: " . home_url() );
	exit;
}

session_start();

// print_r( $_SESSION[ 'person' ] );
// print_r( $_POST );

$_SESSION[ 'person' ] = array_merge(
	$_SESSION[ 'person' ],
	$_POST
);

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
	'good' => array(
		'filter' => 'FILTER_SANITIZE_STRING',
	),
	'all' => array(
		'filter' => 'FILTER_SANITIZE_STRING',
	),
	/* 'level' => array(
		'filter' => 'FILTER_SANITIZE_STRING',
	), */
	
);

$safe = filter_var_array( $_SESSION[ 'person' ], $filters );

if( $safe !== false ){
	require  get_template_directory() . "/php/PHPMailer/PHPMailerAutoload.php";
	$mailer = new PHPMailer;
	$mailer->CharSet = "utf-8";
	$mailer->Encoding = "base64";
	$mailer->setLanguage( 'pl' );
	$mailer->setFrom( "noreply@{$_SERVER['SERVER_NAME']}", 'Testy online - SCOLA' );
	// $mailer->addAddress( $safe[ 'mail' ] );
	if( DMODE ){
		$mailer->addAddress( 'sprytne@scepter.pl' );
	}
	else{
		$mailer->addAddress( 'info@scola.pl' );
	}
		
	$mailer->Subject = sprintf( "%s %s uzyskał/a wynik %u%% poprawnych odpowiedzi z języka %sego!", 
	$safe[ 'imie' ], 
	$safe[ 'nazwisko' ], 
	100 * (int)$safe[ 'good' ] / (int)$safe[ 'all' ], 
	$safe[ 'lang' ] );
	$msg = sprintf( "%s %s ukończył/a właśnie test z języka %sego uzyskując wynik %s/%s poprawnych odpowiedzi.\r\nDane kontaktowe:\r\nE-mail: %s\r\nTelefon: %s\r\n\r\n---\r\nMail został wygenerowany automatycznie na stronie %s",
	$safe[ 'imie' ],
	$safe[ 'nazwisko' ],
	$safe[ 'lang' ],
	$safe[ 'good' ],
	$safe[ 'all' ],
	// $safe[ 'level' ],
	$safe[ 'mail' ],
	$safe[ 'tel' ],
	home_url() );
	$mailer->Body = $msg;
	
	// print_r( $safe );
	
	// echo $msg;
	
	
	if( $mailer->send() ){
		unset( $_SESSION[ 'person' ] );
		echo json_encode(array(
			'status' => 'ok',
			'title' => 'Formularz końcowy',
			'msg' => 'Formularz został pomyślnie wysłany. Wkrótce skontaktuje się z Tobą konsultant.<br>Dziękujemy za korzystanie z naszych usług.',
		));
		
	}
	else{
		echo json_encode(array(
			'status' => 'fail',
			'title' => 'Formularz końcowy',
			'msg' => sprintf( "Wysyłka formularza nie powiodła się.<br>Powód: %s", $mailer->ErrorInfo ),
		));
		
		
	}
	
}

