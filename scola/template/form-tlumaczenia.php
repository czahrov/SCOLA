<?php
/*
	Template Name: Formularz tłumaczenia AJAX
*/

if( !isAjax() ){
	header( "Location: " .home_url() );
	exit;
	
}

// print_r( $_POST );
// print_r( $_FILES );
// echo "AJAX!";

$errs = array();

$imie = filter_var( $_POST[ 'imie' ], FILTER_SANITIZE_STRING );
if( strlen( $imie )  === 0 ) $errs[] = "Pole [imię i nazwisko] jest wymagane i nie może być puste.";

$mail = filter_var( $_POST[ 'mail' ], FILTER_VALIDATE_EMAIL );
if( $mail === false or strlen( $mail ) === 0 ) $errs[] = "Pole [adres e-mail] jest wymagane i nie może być puste";

$tel = filter_var( $_POST[ 'tel' ], FILTER_VALIDATE_REGEXP, array( 'options' => array( 'regexp' => "/^[\+0]?(?:\d+(?: |\-)?)+$/" ) ) );
if( $tel === false or strlen( $tel ) === 0 ) $errs[] = "Pole [numer telefonu] jest puste lub zawiera niepoprawny numer telefonu.";

if( strlen( $_POST[ 'from' ] ) === 0 ) $errs[] = "Pole [język źródłowy] jest wymagane i nie może być puste.";

if( strlen( $_POST[ 'to' ] ) === 0 ) $errs[] = "Pole [język docelowy] jest wymagane i nie może być puste.";

if( count( $errs ) > 0 ){
	$t = "";
	foreach( $errs as $item ){
		$t .= sprintf( "<li>%s</li>", $item );
		
	}
	
	$res = "<ul>{$t}</ul>";
	
	echo json_encode( array(
		'status' => 'fail',
		'title' => 'Błąd walidacji',
		'msg' => "Poniżej znajduje się lista niepoprawnie wypełnionych pól:<br>{$res}",
		
	) );
	
}
else{
	require get_template_directory() . "/php/PHPMailer/PHPMailerAutoload.php";
	$mailer = new PHPMailer;
	$mailer->CharSet = 'utf-8';
	$mailer->Encoding = 'base64';
	$mailer->setLanguage( 'pl' );
	$mailer->setFrom( 'noreply@scepter.pl', 'Wycena tłumaczenie - SCOLA' );
	$mailer->AddAddress( $mail );
	$mailer->Subject = sprintf( "%s prosi o wycenę tłumaczenia", $imie );
	$mailer->Body = sprintf( "%s <%s> (tel: %s) prosi o wycenę tłumaczenia z języka %sego na %s\r\n\r\n---\r\nMail wygenerowany automatycznie na stronie %s", 
		$imie,
		$mail,
		$tel,
		$_POST[ 'from' ],
		$_POST[ 'to' ],
		home_url( 'tlumaczenia' )
	);
	
	if( !empty( $_FILES[ 'plik' ] ) ){
		$mailer->addAttachment( $_FILES[ 'plik' ][ 'tmp_name' ], $_FILES[ 'plik' ][ 'name' ] );
		
	}
	
	if( $mailer->send() ){
		echo json_encode( array(
			'status' => 'ok',
			'title' => 'Wycena tłumaczenia',
			'msg' => 'Mail wysłany pomyślnie. Wkróce skontaktuje się z Tobą jeden z naszych konsultantów',
			
		) );
		
	}
	else{
		echo json_encode( array(
			'status' => 'fail',
			'title' => 'Wycena tłumaczenia',
			'msg' => 'Próba wysłania maila zakończona niepowodzeniem.<br>Powód: ' . $mailer->ErrorInfo,
			
		) );
		
	}
	
}
