<?php
/*
	Template Name: Formularz kontaktowy AJAX
*/

if( !isAjax() ){
	header( "Location: " .home_url() );
	exit;
	
}

$imie = filter_var( $_POST[ 'imie' ], FILTER_SANITIZE_STRING );
$nazwisko = filter_var( $_POST[ 'nazwisko' ], FILTER_SANITIZE_STRING );
$mail = filter_var( $_POST[ 'mail' ], FILTER_VALIDATE_EMAIL );
$tel = filter_var( $_POST[ 'tel' ], FILTER_VALIDATE_REGEXP, array( "options"=>array( "regexp"=>"/^(\+|00)?(\d+(\-| )?)+$/" ) ) );
$msg = filter_var( $_POST[ 'msg' ], FILTER_SANITIZE_STRING );

$errs = array();

if( strlen( $imie ) === 0 ){
	$errs[] = 'Pole [imię] jest wymagane i nie może być puste';
}

if( strlen( $nazwisko ) === 0 ){
	$errs[] = 'Pole [nazwisko] jest wymagane i nie może być puste';
}

if( strlen( $mail ) === 0 ){
	$errs[] = 'Pole [email] jest wymagane i nie może być puste';
}

if( $tel === false ){
	$errs[] = 'Pole [numer telefonu] jest puste albo zawiera niedozwolone znaki.<br>Dozwolone znaki to: +, -, pojedynczy odstęp ( spacja ) oraz cyfry 0-9';
}

if( count( $errs) ){
	$ret = "<ul>";
	
	foreach( $errs as $item ){
		$ret .= sprintf( "<li>%s</li>", $item );
		
	}
	
	$ret .= "</ul>";
	
	echo json_encode(array(
		'status' => 'fail',
		'title' => 'Formularz kontaktowy',
		'msg' => "Formularz zawiera błędy:{$ret}",
		
	));
	
}
else{
	require get_template_directory() . "/php/PHPMailer/PHPMailerAutoload.php";
	$mailer = new PHPMailer;
	$mailer->CharSet = 'utf-8';
	$mailer->Encoding = 'base64';
	$mailer->setLanguage( 'pl' );
	$mailer->setFrom( "noreply@{$_SERVER[ 'HTTP_HOST' ]}", 'Formularz kontaktowy - SCOLA' );
	// $mailer->addAddress( $mail, 'test' );
	$mailer->addAddress( "info@scola.pl" );
	$mailer->Subject = sprintf( "%s %s przesyła wiadomość", $imie, $nazwisko );
	$mailer->Body = sprintf( "%s %s <%s> (%s) przesyła wiadomość: \r\n%s\r\n\r\n---\r\nWiadomość wygenerowana automatycznie na stronie %s",
	$imie,
	$nazwisko,
	$mail,
	$tel,
	$msg,
	home_url( 'kontakt' )
	);
	
	if( $mailer->send() ){
		echo json_encode(array(
			'status' => 'ok',
			'title' => 'Formularz kontaktowy',
			'msg' => 'E-mail wysłany pomyślnie.<br>Dziękujemy za korzystanie z naszych usług.',
			
		));
		
	}
	else{
		echo json_encode(array(
			'status' => 'fail',
			'title' => 'Formularz kontaktowy',
			'msg' => 'Nie udało się wysłać maila.<br>Powód: ' . $mailer->ErrorInfo,
			
		));
		
	}
	
}
