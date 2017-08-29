<div id='popup' class='flex flex-items-center flex-justify-center'>
	<div class='box'>
		<div class='close pointer flex flex-justify-center'>
			<div class='icon fa fa-times flex flex-items-center'></div>
			
		</div>
		<div class='view'>
			<div class='page flex flex-items-center'>
				<div class='status flex flex-items-center flex-justify-center'>
					<div class='icon ok fa fa-check-circle-o'></div>
					<div class='icon info fa fa-info-circle'></div>
					<div class='icon fail fa fa-times-circle'></div>
					
				</div>
				<div class='text'>
					<div class='title'>
						Newsletter
					</div>
					<div class='content'>
						Mail został pomyślnie zarejestrowany. Proszę sprawdzić swoją skrzynkę e-mail.
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
<div id='home'>
	<div class='top grid'>
		<h1 class='tekst naglowek bold'>
			Centrum językowe SCOLA to przełom na rynku
			<span class='font-green'>
				edukacji obcojęzycznej
			</span>
			
		</h1>
		<div class='linki font-green bold flex flex-wrap flex-items-center'>
			<div class='item arrow_slide'>
				<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_green.png' />
				<a href='<?php home_url(); ?>'>
					więcej o SCOLA
				</a>
				
			</div>
			<div class='item arrow_slide'>
				<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_green.png' />
				<a href='<?php home_url(); ?>'>
					sprawdź ofertę językową
				</a>
				
			</div>
			
		</div>
		
	</div>
	<div class='slider bgimg full'>
		<div class='view flex'>
			<?php
				setlocale( LC_TIME, 'polish' );
				foreach( home_slider_top() as $item ):
			?>
			<div class='slide bgimg full font-light base1 no-shrink flex'>
				<div class='filtr'></div>
				<div class='box grid font-light flex flex-column flex-justify-end'>
					<div class='head hide flex-ml'>
						<div class='data uppercase'>
							<?php echo strftime( "%d %B %Y roku", $item[ 'date' ] ); ?>
						</div>
						*
						<div class='kategoria uppercase bold'>
							<?php echo implode(", ", $item[ 'cats' ] ); ?>
						</div>
						
					</div>
					<div class='title naglowek bold'>
						<?php echo $item[ 'title' ]; ?>
						
					</div>
					<div class='link flex arrow_slide'>
						<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png' />
						<a class='tekst' href='<?php echo $item[ 'url' ]; ?>'>
							czytaj więcej
						</a>
						
					</div>
				
				</div>
				
			</div>
			<?php endforeach; ?>
			
		</div>
		<div class='notify'>
			<div class='box bg-green font-light bold'>
				<div class='title'>
					Ważne informacje
				</div>
				<div class='content'>
					Kursy językowe dofinansowane ze środkó UE w SCOLA
				</div>
			</div>
			
		</div>
		<div class='grid'>
			<div class='numer bold'></div>
			<div class='paginacja hide block-ml'>
				<div class='mark'></div>
				<div class='shadow'></div>
				
			</div>
			<div class='nav flex flex-items-center flex-justify-between'>
				<div class='prev arrow_slide pointer'>
					<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png' />
					
				</div>
				<div class='tekst bold font-light hide-ml'>
					swipe
				</div>
				<div class='next arrow_slide pointer'>
					<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png' />
					
				</div>
				
			</div>
			<div class='tab arrow_slide pointer flex flex-items-center flex-justify-center' slide-to='#home > .jezyk'>
				<img class='icon arrow down' src='<?php echo get_template_directory_uri(); ?>/img/arrow_small.png'/>
				
			</div>
			
		</div>
		
	</div>
	<div class='jezyk bold font-dark grid flex flex-column'>
		<div class='item head base1 flex hide-ml flex-column flex-justify-center'>
			<div class='subtitle'>Wybierz</div>
			<div class='title'>którego języka obcego</div>
			<div class='title font-green'>chcesz się nauczyć</div>
			
		</div>		
		<div class='box'>
			<div class='inner flex flex-wrap-mm flex-items-center'>
				<div class='item head hide base4-ml no-shrink flex-ml flex-column flex-justify-center'>
					<div class='subtitle'>Wybierz</div>
					<div class='title'>którego języka obcego</div>
					<div class='title font-green'>chcesz się nauczyć</div>
					
				</div>
				<?php
					$kafelki = array(
						array(
							'title' => 'angielski',
							'img' => 'angielski_v2.png',
							'url' => home_url(),
						),
						array(
							'title' => 'niemiecki',
							'img' => 'niemiecki.png',
							'url' => home_url(),
						),
						array(
							'title' => 'hiszpański',
							'img' => 'hiszpanski.png',
							'url' => home_url(),
						),
						array(
							'title' => 'włoski',
							'img' => 'wloski.png',
							'url' => home_url(),
						),
						array(
							'title' => 'francuski',
							'img' => 'francuski.png',
							'url' => home_url(),
						),
						array(
							'title' => 'rosyjski',
							'img' => 'rosyjski.png',
							'url' => home_url(),
						),
						array(
							'title' => 'słowacki',
							'img' => 'slowacki.png',
							'url' => home_url(),
						),
						
					);
					
					foreach( $kafelki as $item ):
				?>
				<div class='item flag base1 base3-mm base4-ml no-shrink flex flex-column flex-items-center flex-justify-center'>
					<img class='bgimg contain' src='<?php printf( "%s/img/flagi/%s", get_template_directory_uri(), $item[ 'img' ] );?>' />
					<div class='title uppercase'>
						<?php echo $item[ 'title' ]; ?>
					</div>
					<div class='bar'></div>
					<a class='hitbox' href='<?php echo $item[ 'url' ]; ?>'></a>
					
				</div>
				<?php
					endforeach;
				?>
			</div>
			<div class='nav flex hide-mm'>
				<img class='icon prev pointer' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png'/>
				<img class='icon next pointer' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png'/>
				<div class='number font-dark'></div>
				
			</div>
			
		</div>
		
	</div>
	<div class='tlumaczenia text-center bg-green bold font-light flex flex-column flex-items-center flex-justify-center'>
		<div class='top'>
			Centrum językowe SCOLA oferuje
		</div>
		<div class='mid'>
			tłumaczenia na języki obce
		</div>
		<?php do_action( 'customButton', array(
				'class' => 'light',
				'arrow' => 'white',
				'title' => 'bezpłatna wycena',
				
			) ); ?>
		
	</div>
	<div class='umysly text-center flex flex-column flex-items-center flex-justify-center'>
		<div class='line1 hand'>
			"Niema martwych języków, są tylko uśpione umysły."
		</div>
		<div class='line2 hand'>
			Carlos Ruiz Zafón
		</div>
		<div class='line3 hand'>
			My je obudzimy
		</div>
		<div class='tab bg-light arrow_slide pointer flex flex-items-center flex-justify-center' slide-to='#home > .metody'>
			<img class='icon arrow down' src='<?php echo get_template_directory_uri(); ?>/img/arrow_small.png'/>
			
		</div>
		
	</div>
	<div class='metody bg-gray-light flex flex-column flex-items-center'>
		<div class='content'>
			Na rynku języków obcych stale pojawiają się nowe metody nauczania. Wiele z nich z racji bycia pewnym niuansem postrzegane są jako metody lepsze od pozostałych. Wybierając metodę nauczania dla naszej szkoły przeprowadziliśmy obserwacje wśród różnych szkół, rozmawialiśmy zarówno z kursantami, jak i wykładowcami poszczególnych metod nauczania, a wszystko to po to aby jak najlepiej dopasować naszą ofertę dydaktyczną do różnych prefernecji uczniów
		</div>
		<?php do_action( 'customButton', array(
				'title' => 'metody nauczania',
				'arrow' => 'green',
				
			) ); ?>
		
	</div>
	<div class='centrum flex flex-column flex-row-ml'>
		<div class='box grid flex'>
			<div class='tekst text-center text-left-ml base2-ml flex flex-column flex-items-center flex-items-start-ml'>
				<div class='title bold'>
					<div class='line1'>
						Centrum językowe SCOLA jako
					</div>
					<div class='line2'>
						Centrum egzaminacyjne
					</div>
					
				</div>
				<div class='content'>
					ETS - Educational Testing Service, to największa, niezależna organizacja non-profit, zajmująca się badaniami w dziedzinie edukacji i tworzeniem systemów oceny. Główna siedziba ETS mieści się w Princeton w Stanach Zjednoczonych. Od swojego powstania w 1947 roku, ETS jest liderem w badaniach edukacyjnych i udostępnianiu obiektywnych i rzetelnych systemów oceny dla klientów indywidualnych, instytucjonalnych i korporacyjnych na całym świecie.
				</div>
				<?php do_action( 'customButton', array(
					'title' => 'bezpłatna wycena',
					
				) ); ?>
				
			</div>
			<div class='fake base2 hide block-ml'></div>
			
		</div>
		<div class='menu bold base0-ml grow-ml flex flex-column'>
			<?php
				$arr = array(
					array(
						'title' => 'TOEIC&reg;',
						'url' => home_url(),
					),
					array(
						'title' => 'TOEIC&reg; Bridge',
						'url' => home_url(),
					),
					array(
						'title' => 'TOEFL&reg;',
						'url' => home_url(),
					),
					array(
						'title' => 'TFI&trade;',
						'url' => home_url(),
					),
					array(
						'title' => 'WiDaF',
						'url' => home_url(),
					),
					
				);
				
				foreach( $arr as $item ):
			?>
			<a class='item bg-green font-light flex flex-items-center' href='<?php echo $item[ 'url' ]; ?>'>
				<div class='title'>
					<?php echo $item[ 'title' ]; ?>
				</div>
				<div class='icon bgimg contain'></div>
				<div class='tekst'>
					szczegóły
				</div>
				
			</a>
			<?php
				endforeach;
			?>
			
		</div>
		
	</div>
	<div class='opinie flex flex-column'>
		<div class='grid'>
			<div class='top flex flex-justify-center flex-justify-start-mm'>
				<div class='fake base3 hide block-mm'></div>
				<div class='title bold'>
					<div class='line1'>
						Co mówią o SCOLA
					</div>
					<div class='line2'>
						nasi słuchacze?
					</div>
					<img class='icon hide block-mm' src='<?php echo get_template_directory_uri(); ?>/img/quote.png' />
					
				</div>
				
			</div>
			<div class='slider flex flex-column flex-items-center'>
				<div class='view flex flex-self-stretch'>
					<?php for($i=1; $i<=3; $i++): ?>
					<div class='slide base1 no-shrink flex flex-column flex-row-mm flex-items-center'>
						<div class='img base3 grow no-shrink flex flex-justify-end'>
							<img class='img' src='<?php echo get_template_directory_uri(); ?>/img/person.png' />
							
						</div>
						<div class='content text-center text-left-mm grow-mm flex flex-column flex-justify-around flex-self-stretch'>
							<div class='tekst'>
								Kurs daje mi możliwość poznania języka używanego na codzień. Zdecydowanie dobrym pomysłem jest nacisk na porozumiewanie się tylko w języku angielskim.
							</div>
							<div class='bold font-green'>
								Anna Krztoniewicz - 25 lat
							</div>
						</div>
						
					</div>
					<?php endfor; ?>
					
				</div>
				<?php do_action( 'customButton', array(
					'title' => 'nasze referencje',
					
				) ); ?>
				<div class='nav flex'>
					<div class='icon prev arrow_slide pointer'>
						<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png' />
					</div>
					<div class='icon next arrow_slide pointer'>
						<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png' />
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	<div class='egzaminy bg-green font-light flex flex-column flex-items-center flex-justify-center'>
		<div class='title bold text-center'>
			<div class='line1'>
				Przygotowujemy do egzaminów na
			</div>
			<div class='line2'>
				certyfikaty językowe
			</div>
			
		</div>
		<?php do_action( 'customButton', array(
			'title' => 'dowiedz się więcej',
			'class' => 'light',
			'arrow' => 'white',
			
		) ); ?>
		
	</div>
	<div class='certyfikaty flex flex-items-center flex-justify-center'>
		<img src='<?php echo get_template_directory_uri(); ?>/img/epa.jpg' />
		<img src='<?php echo get_template_directory_uri(); ?>/img/ets.jpg' />
		
	</div>
	<div class='newsletter bgimg full font-light grid flex flex-column flex-items-center flex-justify-end'>
		<div class='title bold'>
			Zapisz się na nasz newsletter
		</div>
		<div class='subtitle'>
			Zapisując się do newslettera będziesz otrzymywać najświeższe informacje
		</div>
		<form class='bg-light font-dark flex flex-wrap flex-column flex-row-ms'>
			<input class='mail grow bold' type='text' name='mail' placeholder='Wpisz swój adres e-mail...' />
			<div class='button bold pointer arrow_slide grow no-grow-ms flex flex-items-center flex-justify-between flex-self-center flex-self-stretch-ms'>
				<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png' />
				<div class='text'>
					zapisz się
				</div>
				
			</div>
			
		</form>
		<div class='info bold'>
			* w każdej chwili możesz się z niego wypisać
		</div>
		
	</div>
	
</div>