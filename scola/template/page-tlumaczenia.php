<div id='tlumaczenia' class=''>
	<div class='top flex flex-wrap'>
		<div class='img bgimg full base1 base0-ml'></div>
		<div class='box grid flex'>
			<div class='info base1 base2-ml'>
				<div class='title bold'>
					Centrum językowe <span class='font-green'>Scola</span> oferuje tłumaczenia z/na języki:
					
				</div>
				<ul class='bold font-green'>
					<li>
						angielski
					</li>
					<li>
						niemiecki
					</li>
					<li>
						włoski
					</li>
					<li>
						rosyjski
					</li>
					<li>
						hiszpański
					</li>
					<li>
						słowacki
					</li>
					
				</ul>
				<div class='bot arrow_slide pointer flex flex-items-center'>
					<?php do_action( 'tab', array(
						'to' => '#tlumaczenia > .bot',
						
					) ); ?>
					<div class=''>
						czytaj więcej
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	<div class='bot bg-green font-light'>
		<div class='box grid bold'>
			<div class='title'>
				Bezpłatna wycena tłumaczenia
			</div>
			<div class='subtitle'>
				Zapewniamy darmową wycenę oraz szybkie wykonanie usługi. Chcąc zaoszczędzić czas naszych klientów stworzyliśmy możliwość przesyłania testów do tłumaczenia drogą elektroniczną, bądź faksem.
			</div>
			<form class='flex flex-wrap flex-items-center'>
				<?php do_action( 'customSelect', array(
					'class' => 'item pointer base1 base2-mm base3-ml ',
					'atts' => array(
						'item-title' => 'Język źródłowy',
						'item-name' => 'from',
						'item-value' => '',
						
					),
					'head' => 'font-dark bg-light',
					'title' => 'Język źródłowy *',
					'options' => 'bg-dark font-dark',
					'option' => 'bg-light',
					'items' => array(
						'Polski',
						'Angielski',
						'Francuski',
						'Włoski',
						'Hiszpański',
						'Rosyjski',
						'Słowacki',
						
					),
					
				) ); ?>
				<?php do_action( 'customSelect', array(
					'class' => 'item pointer base1 base2-mm base3-ml ',
					'atts' => array(
						'item-title' => 'Język docelowy',
						'item-name' => 'to',
						'item-value' => '',
						
					),
					'head' => 'font-dark bg-light',
					'title' => 'Język docelowy *',
					'options' => 'bg-dark font-dark',
					'option' => 'bg-light',
					'items' => array(
						'Polski',
						'Angielski',
						'Francuski',
						'Włoski',
						'Hiszpański',
						'Rosyjski',
						'Słowacki',
						
					),
					
				) ); ?>
				<?php do_action( 'customFile', array(
					'class' => 'item pointer base1 base2-mm base3-ml',
					'head' => 'bg-light font-dark base1',
					'title' => 'Wgraj plik',
					'name' => 'plik',
					
				) ); ?>
				<div class='item base1 base2-mm base3-ml'>
					<input class='' type='text' name='imie' placeholder='Imię i nazwisko *' />
				</div>
				<div class='item base1 base2-mm base3-ml'>
					<input class='' type='text' name='mail' placeholder='Adres e-mail *' />
				</div>
				<div class='item base1 base2-mm base3-ml'>
					<input class='' type='text' name='tel' placeholder='Numer telefonu *' />
				</div>
				<div class='item base1'>
					<textarea class='' name='msg' placeholder='Treść wiadomości'></textarea>
				</div>
				<div class='buttons base1 flex flex-wrap flex-items-center flex-justify-end'>
					<input class='button send pointer' type='button' value='Wyślij do wyceny' />
					<input class='button reset pointer' type='reset' value='Wyczyść formularz' />
					
				</div>
				<div class='loader base1 flex flex-wrap flex-items-center'>
					<div class='progress grow'>
						<div class='bar'></div>
						
					</div>
					<div class='title'>
						100
					</div>
					
				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>
