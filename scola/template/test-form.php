<div class='mid bg-gray'>
	<div class='box grid'>
		<div class='title'>
			Wypełnij formularz, aby rozpocząć test
		</div>
		<form class='flex flex-wrap flex-items-center ' method='post'>
			<input class='input' type='text' name='imie' placeholder='Imię *' required/>
			<input class='input' type='text' name='nazwisko' placeholder='Nazwisko *'required/>
			<input class='input' type='email' name='mail' placeholder='Adres e-mail *'required/>
			<input class='input' type='tel' name='tel' placeholder='Numer telefonu *'required/>
			<input type='hidden' name='lang' value='<?php echo $title; ?>'/>
			<div class=''>
				<input type='checkbox' id='zgoda' name='zgoda' value='tak' required>
				<label for='zgoda'>
					* Wyrażam zgodę na przetwarzanie moich danych osobowych na potrzeby informacyjne i handlowe<br>

					Centrum Językowego SCOLA, 33-300 Nowy Sącz, ul. Jagiellońska 39 , zgodnie z ustawą z dnia 29.08.1997 r. o ochronie danych osobowych (t.j. Dz. U. z 2002 r. Nr 101, poz. 926 ze zm.).<br><br>
				</label>
			</div>
			<input class='submit pointer' type='button' value='rozpocznij test!'/>
			
		</form>
		
	</div>
	
</div>