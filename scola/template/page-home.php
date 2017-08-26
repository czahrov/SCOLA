<a id='fb' class='font-light bg-fb pointer flex flex-items-center flex-justify-end' href='https://www.facebook.com/scola.nowysacz/' target='_blank'>
	<span class='icon fa fa-facebook fa-3x'></span>
	
</a>
<div id='home'>
	<div class='top grid'>
		<h1 class='tekst naglowek bold'>
			Centrum językowe SCOLA do przełom na rynku
			<span class='font-green'>
				edukacji obcojęzycznej
			</span>
			
		</h1>
		<div class='linki font-green bold flex flex-items-center'>
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
	<div class='tlumaczenia bg-green bold font-light flex flex-column flex-items-center flex-justify-center'>
		<div class='top'>
			Centrum językowe SCOLA oferuje
		</div>
		<div class='mid'>
			tłumaczenia na języki obce
		</div>
		<div class='button arrow_slide flex flex-items-center flex-justify-center'>
			<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png' />
			<div class='content'>
				bezpłatna wycena
			</div>
			<a class='hitbox' href='<?php home_url(); ?>'></a>
			
		</div>
		
	</div>
	<div class='umysly flex flex-column flex-items-center flex-justify-center'>
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
		<div class='button bold pointer arrow_slide font-green flex flex-items-center flex-justify-center'>
			<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_green.png' />
			<div class='content'>
				metody nauczania
			</div>
			<a class='hitbox' href='<?php home_url(); ?>'></a>
			
		</div>
		
	</div>
	
</div>