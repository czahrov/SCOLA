<?php
/*
	Template Name: NewsLetter
*/

if( isset( $_GET[ 'reg' ] ) ){
	$nl = new NewsLetter();
	$id = $_GET[ 'reg' ];
	$test = $nl->register( $id );

	header( "Refresh:5; " . home_url() );
	if( $test !== false ){
		echo "Rejestracja maila <b>$test</b> zakończona <b>pomyślnie</b>.<br>Za chwilę nastąpi przekierowanie do strony głównej.";
		
		require 'php/PHPMailer/PHPMailerAutoload.php';
				
		$mailer = new PHPMailer;
		$mailer->CharSet = "utf-8";
		$mailer->Encoding = "base64";
		$mailer->setLanguage( 'pl' );
		$mailer->setFrom( "noreply@{$_SERVER[ 'HTTP_HOST' ]}", 'Centrum Językowe SCOLA' );
		$mailer->addAddress( $nl->getMail( $id ) );
		$mailer->Subject = "Potwierdzenie aktywacji usługi newsletter";
		$msg = sprintf( "Witaj ponownie!\r\nZ radością informujemy iż aktywacja usługi newsletter została pomyślnie aktywowana!\r\nOd teraz będziesz na bieżąco ze wszystkimi nowościami i promocjami na naszej stronie.\r\nPamiętaj że w każdej chwili możesz zrezygnować z usługi klkając w poniższy link\r\n%s\r\n\r\n---\r\nMail został wygenerowany automatycznie na stronie %s", $nl->getUnregLink( $id ), home_url() );
		$mailer->Body = $msg;
		
		$mailer->send();
		
	}
	else{
		echo "Rejestracja maila nie powiodła się.<br>Dany mail nie figuruje w bazie danych, albo został już zarejestrowany.<br>Za chwilę nastąpi przekierowanie do strony głównej.";
		
	}
	
}
elseif( isset( $_GET[ 'unreg' ] ) ){
	$id = $_GET[ 'unreg' ];
	$nl = new NewsLetter;
	$test = $nl->unregister( $id );
	header( "Refresh:5; " . home_url() );
	if( $test !== false ){
		echo "Mail <b>$test</b> został <b>pomyślnie wyrejestrowany</b>.<br>Za chwilę nastąpi przekierowanie do strony głównej.";
		
	}
	else{
		echo "Wyrejestrowanie maila nie powiodło się.<br>Dany mail nie figuruje w bazie.<br>Za chwilę nastąpi przekierowanie do strony głównej.";
		
	}
	
}
elseif( isset( $_GET[ 'unregmail' ] ) ){
	
	$nl = new NewsLetter;
	
	$mail = $nl->getMail( $_GET[ 'unregmail' ] );
	
	if( $mail !== false ){
		
		require 'php/PHPMailer/PHPMailerAutoload.php';
		
		$mailer = new PHPMailer;
		$mailer->CharSet = "utf-8";
		$mailer->Encoding = "base64";
		$mailer->setLanguage( 'pl' );
		$mailer->setFrom( "noreply@{$_SERVER[ 'HTTP_HOST' ]}", 'Centrum Językowe SCOLA' );
		$mailer->addAddress( $nl->getMail( $_GET[ 'unregmail' ] ) );
		$mailer->Subject = "Potwierdzenie wyrejestrowania adresu e-mail";
		$msg = sprintf( "Witaj ponownie!\r\nOtrzymujesz tego maila, ponieważ ktoś ( mamy nadzieję, że to Ty ) zgłosił wyrejestrowanie tego adresu z usługi newsletter. Kliknij link poniżej aby ukończyć proces i usunąć ten e-mail z naszej bazy.\r\n%s\r\n\r\n---\r\nMail został wygenerowany automatycznie na stronie %s", $nl->getUnregLink( $_GET[ 'unregmail' ] ), home_url() );
		$mailer->Body = $msg;
		
		if( $mailer->send() ){
			echo json_encode(array(
				'status' => 'ok',
				'msg' => 'Wysłaliśmy maila z deaktywującym linkiem.<br>Proszę sprawdzić swoją skrzynkę i podążać za instrukcjami.',
				
			));
			
		}
		else{
			echo json_encode(array(
				'status' => 'fail',
				'msg' => 'Nie udało się wysłać maila z deaktywującym linkiem. Proszę spróbować ponownie za kilka minut.',
				
			));
			
		}
		
	}
	else{
		echo "Taki email nie istnieje w naszej bazie.";
		
	}
	
}
else{
	if( !isAjax() ){
		header( "Location:" . home_url() );
		
	}

	if( !empty( $_POST ) ){
		$filters = array(
			'mail' => array(
				'filter' => 'FILTER_VALIDATE_EMAIL',
				
			),
			
		);
		$safe = filter_input_array( INPUT_POST, $filters );
		
		if( $safe === false ){
			echo json_encode( array(
				'status' => 'fail',
				'msg' => 'Adres e-mail jest niepoprawny.',
				
			) );
			
		}
		elseif( strlen( $safe[ 'mail' ] ) > 0 ){
			
			$nl = new NewsLetter;
			$test = $nl->mailStatus( $safe[ 'mail' ] );
			
			if( $test === false ){
				require 'php/PHPMailer/PHPMailerAutoload.php';
				
				$mailer = new PHPMailer;
				$mailer->CharSet = "utf-8";
				$mailer->Encoding = "base64";
				$mailer->setLanguage( 'pl' );
				$mailer->setFrom( "noreply@{$_SERVER[ 'HTTP_HOST' ]}", 'Centrum Językowe SCOLA' );
				$mailer->addAddress( $safe[ 'mail' ] );
				$mailer->Subject = "Aktywacja usługi newsletter";
				$msg = sprintf( "Witaj!\r\nOtrzymujesz tego maila ponieważ ktoś ( mamy nadzieję, że to Ty ) dodał ten adres e-mail do naszej bazy. Aby zakończyć proces aktywacji usługi kliknij link poniżej.\r\n\r\n%s\r\n\r\n---\r\nMail został wygenerowany automatycznie na stronie %s", $nl->getRegLink( $safe[ 'mail' ] ), home_url() );
				$mailer->Body = $msg;
				
				// echo $msg;
				
				if( !$mailer->send() ){
					echo json_encode( array(
						'status' => 'fail',
						'msg' => 'Nie udało się wysłać maila z linkiem aktywacyjnym. Proszę spróbować ponownie za chwilę.',
						
					) );
					
				}
				else{
					echo json_encode( array(
						'status' => 'ok',
						'msg' => 'Podany przez Ciebie e-mail został zarejestrowany.<br>Wkrótce na Twojej skrzynce mailowej pojawi się wiadomość z dalszymi instrukcjami.',
						
					) );
					
				}
				
			}
			elseif( $test === '0' ){
				echo json_encode( array(
					'status' => 'info',
					'msg' => 'Podany przez Ciebie e-mail oczekuje na aktywację.<br>Dalsze informacje znajdują się w wysłanym przez nas mailu.',
					
				) );
				
			}
			elseif( $test === '1' ){
				echo json_encode( array(
					'status' => 'info',
					'action' => $nl->getUnregMail( $safe[ 'mail' ] ),
					'msg' => 'Ten e-mail został już aktywowany. Jeśli chcesz go wyrejestrować kliknij ponownie "zapisz się", a na Twoją skrzynkę zostanie wysłany e-mail z dalszymi instrukcjami.',
					
				) );
				
			}
			
		}
		else{
			echo json_encode( array(
				'status' => 'fail',
				'msg' => 'Podany adres e-mail jest pusty.',
				
			) );
			
		}
		
	}
	
}
