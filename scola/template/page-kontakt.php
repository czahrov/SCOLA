<div id='kontakt' class='flex flex-wrap'>
	<div class='box grid base1 flex'>
		<div class='info bold base1 base2-ml flex flex-column flex-items-start'>
			<div class='title'>
				Skontaktuj się z nami
			</div>
			<div class='line'>
				CENTRUM JĘZYKOWE SCOLA
			</div>
			<div class='line'>
Aleje Wolności 6, 33-300 Nowy Sącz			</div>
			<div class='line'>
				33-300 Nowy Sącz
			</div>
			<div class='line'>
			</div>
			<div class='line'>
				<a href='tel:+48185477017'>Tel. +48 18 547 70 17</a>
			</div>
			<div class='line'>
				<a href='tel:+48886400573'>Tel. +48 886 400 573</a>
			</div>
			<div class='line'>
		
			</div>
			<div class='line'>
				<a href='mailto:info@scola.pl'>info@scola.pl</a>
			</div>
			<?php do_action( 'customButton', array(
				'title' => 'nasze kompetencje',
				'url' => home_url( 'referencje' ),
			) ); ?>
			
		</div>
		
	</div>
	<div class='form bold bg-green font-light base1 base0-ml'>
		<div class='box grid'>
			<div class='title base1'>
				Uzupełnij dane i wyślij e-mail
			</div>
			<form class='flex flex-wrap'>
				<div class='input base1 base2-mm flex'>
					<input class='grow' type='text' name='imie' placeholder='Imię *'/>
				</div>
				<div class='input base1 base2-mm flex'>
					<input class='grow' type='text' name='nazwisko' placeholder='Nazwisko *'/>
				</div>
				<div class='input base1 base2-mm flex'>
					<input class='grow' type='email' name='mail' placeholder='Adres e-mail *'/>
				</div>
				<div class='input base1 base2-mm flex'>
					<input class='grow' type='tel' name='tel' placeholder='Numer telefonu *'/>
				</div>
				<div class='input base1 flex'>
					<textarea class='grow' name='msg' placeholder='Treść wiadomości'></textarea>
				</div>
				<input class='button send' type='button' value='wyślij e-mail'/>
				<input class='button' type='reset' value='wyczyść formularz'/>
				
			</form>
			
		</div>
		
	</div>
	<div class='mapa bg-gray base1 base0-ml'>
		<div class='kontener'></div>
		
	</div>
	
	
</div>