<div class='top'>
	<div class='box bold grid'>
		<div class='title'>
			Interaktywny test z języka <?php echo $title; ?>ego
		</div>
		<ul>
			<li>
				Niema limitu czasowego na wypełnienie testu
			</li>
			<li>
				Test rozwiązuj samodzielnie (wynik świadczy o Twoim stopniu zaawansowania)
			</li>
			<li>
				Po wypełnieniu, pokażemy poprawne odpowiedzi oraz wynik testu
			</li>
			
		</ul>
		<div class='bot font-green'>
			<?php
				printf( "Powodzenia %s!", $_SESSION[ 'person' ][ 'imie' ] );
				/* echo "<!--";
				print_r( $_SESSION );
				echo "-->"; */
			?>
		</div>
		
	</div>
	
</div>
