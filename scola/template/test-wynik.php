<div class='summary bold'>
	<div class='box grid'>
		<div class='title'>
			<?php printf( "Gratulacje %s z okazji ukończenia testu!", $_SESSION[ 'person' ][ 'imie' ] ); ?>
		</div>
		<ul class='stat'>
			<li>
				Ilość pytań: <span class='all'><?php echo count( $quest ); ?></span>
			</li>
			<li>
				Poprawnych odpowiedzi: <span class='correct font-green'>...</span>
			</li>
			<li>
				Twój procent to: <span class='percent font-red'>...</span>
			</li>
			
		</ul>
		<!--
		<div class='note'>
			Wynik sugeruje, że Twój poziom to: <span class='value font-green'>...</span>
		</div>
		-->
		<div class='buttons flex flex-items-center'>
			<?php do_action( 'customButton', array(
				'title' => 'wyślij wynik z testu',
				'class' => 'send',
			) ); ?>
			<?php do_action( 'customButton', array(
				'title' => 'zobacz poprawne odpowiedzi',
				'class' => 'noborder show',
			) ); ?>
		</div>
		
	</div>
	
</div>