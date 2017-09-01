<div class='mid bg-gray'>
	<div class='box grid'>
		<div class='title'>
			Wypełnij formularz, aby rozpocząć test
		</div>
		<form class='flex flex-wrap flex-items-center ' method='post'>
			<input class='input' type='text' name='imie' placeholder='Imię *'/>
			<input class='input' type='text' name='nazwisko' placeholder='Nazwisko *'/>
			<input class='input' type='mail' name='mail' placeholder='Adres e-mail *'/>
			<input class='input' type='tel' name='tel' placeholder='Numer telefonu *'/>
			<input type='hidden' name='lang' value='<?php echo $title; ?>'/>
			<input class='submit pointer' type='button' value='rozpocznij test!'/>
			
		</form>
		
	</div>
	
</div>