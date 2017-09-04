<?php
/*
	Template Name: Formularz tłumaczenia AJAX
*/

if( !isAjax() ){
	header( "Location: " .home_url() );
	exit;
	
}

session_start();

// print_r( $_POST );
// print_r( $_FILES );
// echo "AJAX!";

$errs = array();

if( !isset( $_GET[ 'load' ] ) ){
	$imie = filter_var( $_POST[ 'imie' ], FILTER_SANITIZE_STRING );
	if( strlen( $imie )  === 0 ) $errs[] = "Pole [imię i nazwisko] jest wymagane i nie może być puste.";

	$mail = filter_var( $_POST[ 'mail' ], FILTER_VALIDATE_EMAIL );
	if( $mail === false or strlen( $mail ) === 0 ) $errs[] = "Pole [adres e-mail] jest puste albo zawiera niepoprawny adres e-mail";

	$tel = filter_var( $_POST[ 'tel' ], FILTER_VALIDATE_REGEXP, array( 'options' => array( 'regexp' => "/^[\+0]?(?:\d+(?: |\-)?)+$/" ) ) );
	if( $tel === false or strlen( $tel ) === 0 ) $errs[] = "Pole [numer telefonu] jest puste lub zawiera niepoprawny numer telefonu.";

	$msg = filter_var( $_POST[ 'msg' ], FILTER_SANITIZE_STRING );

	$from = $_POST[ 'from' ];
	if( strlen( $from ) === 0 ) $errs[] = "Pole [język źródłowy] jest wymagane i nie może być puste.";

	$to = $_POST[ 'to' ];
	if( strlen( $to ) === 0 ) $errs[] = "Pole [język docelowy] jest wymagane i nie może być puste.";
	
}

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
	
	// zapisać czy wysłać?
	if( isset( $_GET[ 'save' ] ) ){
		$tid = $_POST[ 'token' ];
		$_SESSION[ $tid ] = array(
			'imie' => $imie,
			'mail' => $mail,
			'tel' => $tel,
			'from' => $from,
			'to' => $to,
			'msg' => $msg,
			
		);
		
		echo json_encode(array(
			'status' => 'ok',
			
		));
		
	}
	else{
		require get_template_directory() . "/php/PHPMailer/PHPMailerAutoload.php";
		$mailer = new PHPMailer;
		$mailer->CharSet = 'utf-8';
		$mailer->Encoding = 'base64';
		$mailer->setLanguage( 'pl' );
		$mailer->setFrom( 'noreply@scepter.pl', 'Wycena tłumaczenie - SCOLA' );
		
		$text = "%s <%s> (tel: %s) prosi o wycenę tłumaczenia z języka %sego na %s\r\nWiadomość:\r\n%s\r\n\r\n---\r\nMail wygenerowany automatycznie na stronie %s";
		
		// czy wczytać formularz z sesji
		if( isset( $_GET[ 'load' ] ) ){
			$data = $_SESSION[ $_POST[ 'token'] ];
			
			$imie = $data[ 'imie' ];
			$mail = $data[ 'mail' ];
			$tel = $data[ 'tel' ];
			$from = $data[ 'from' ];
			$to = $data[ 'to' ];
			$msg = $data[ 'msg' ];
			
		}
		
		$msg = sprintf( $text, 
			$imie,
			$mail,
			$tel,
			$from,
			$to,
			$msg,
			home_url( 'tlumaczenia' )
		);
		
		$mailer->AddAddress( $mail );
		$mailer->Subject = sprintf( "%s prosi o wycenę tłumaczenia", $imie );
		$mailer->Body = $msg;
		
		if( !empty( $_FILES[ 'plik' ] ) ){
			$mailer->addAttachment( $_FILES[ 'plik' ][ 'tmp_name' ], $_FILES[ 'plik' ][ 'name' ] );
			
		}
		
		if( $mailer->send() ){
			echo json_encode( array(
				'status' => 'ok',
				'title' => 'Wycena tłumaczenia',
				'msg' => 'Mail wysłany pomyślnie.<br>Wkróce skontaktuje się z Tobą jeden z naszych konsultantów',
				
			) );
			
			if( !empty( $_POST[ 'token'] ) ){
				unset( $_SESSION[ $_POST[ 'token' ] ] );
				
			}
			
		}
		else{
			echo json_encode( array(
				'status' => 'fail',
				'title' => 'Wycena tłumaczenia',
				'msg' => 'Próba wysłania maila zakończona niepowodzeniem.<br>Powód: ' . $mailer->ErrorInfo,
				
			) );
			
		}
		
		
	}
	
}
