<?php //get_template_part("template/menu"); ?>
<?php get_template_part( 'template/top' ); ?>
<?php do_action( 'breadcrumb' ); ?>
<div id='nasze_centrum'>
	<div class='centrum'>
		<div class='img bgimg full hide block-ml'></div>
		<div class='box grid flex flex-wrap'>
			<div class='img bgimg full base1 hide-ml'></div>
			<div class='text bold base1 base2-ml'>
				<div class='title'>
					Centrum Językowe <span class='font-green'>Scola</span>
				</div>
				<div class='subtitle'>
					to gwarancja podniesienia twoich kompetencji językowych
				</div>
				<div class='mid'>
					Centrum Językowe Scola specjalizuje się w dwóch zakresach:
				</div>
				<ol class='zakres'>
					<li class='font-green'>
						Prowadzenie kursów językowych
						<a class='button pointer font-dark arrow_slide flex flex-items-center flex-justify-start' href='<?php echo home_url( 'kursy' ); ?>'>
							<img class='img arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png'/>
							<div class='title'>
								sprawdź ofertę językową
							</div>
							
						</a>
						
					</li>
					<li class='font-green'>
						Tłumaczeniach
						<a class='button pointer font-dark arrow_slide flex flex-items-center flex-justify-start' href='<?php echo home_url( 'tlumaczenia' ); ?>'>
							<img class='img arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png'/>
							<div class='title'>
								sprawdź ofertę tłumaczenia
							</div>
							
						</a>
						
					</li>
					
				</ol>
				
			</div>
			<div class='fake base2 hide block-ml'></div>
		</div>
		
	</div>
	<div class='oferujemy bg-green font-light'>
		<div class='box grid'>
			<div class='title bold'>
				Naszym kursantom oferujemy naukę języka:
			</div>
			<ul class=''>
				<?php
					$arr = array(
						'angielskiego',
						'niemieckiego',
						'hiszpańskiego',
						'włoskiego',
						'francuskiego',
						'rosyjskiego',
						'słowackiego',
						'a także naukę języka polskiego dla każdego, 
						kto mówi jednym z powyższych języków i chciałby zacząć mówić po polsku'
						
					);
					foreach( $arr as $item ):
				?>
				<li>
					<?php echo $item; ?>
				</li>
				<?php endforeach; ?>
				
			</ul>
			<div class='title bold'>
				Prowadzimy kursy dla:
			</div>
			<ul class=''>
				<?php
					$arr = array(
						'dla dzieci w wieku szkolnym',
						'dla młodzieży',
						'dla maturzystów',
						'dla dorosłych',
						'dla firm (w tym język branżowy)'
						
					);
					foreach( $arr as $item ):
				?>
				<li>
					<?php echo $item; ?>
				</li>
				<?php endforeach; ?>
				
			</ul>
			<div class='line bold'>
				Jeśli potrzebujesz tłumaczenia pisemnego, pomożemy Ci w tym.
			</div>
			<div class='line bold'>
				Prowadzisz rozmowy z partnerami biznesowymi, podczas rozpraw sądowych, czy potrzebujesz przeprowadzić rozmowę telefoniczną w języku obcym.
			</div>
			
		</div>
		
	</div>
	<div class='opis grid bold'>
		<div class='line'>
			<span class='bolder'>
				Centrum Językowe SCOLA
			</span>
			to przełom na rynku edukacji obcojęzycznej w Twoim mieście. Stawiamy na dynamiczny oraz prężny rozwój Twoich kompetencji językowych. Naszą pasją jest nauczanie, a największą satysfakcję sprawia nam świadomość, że możemy pomóc Tobie w nauce wybranego przez Ciebie języka.
		</div>
		<div class='line'>
			Dzisiaj każdy z nas podejmuje naukę języków obcych, które są naszym oknem na świat. To dzięki nim poszerzamy nasze horyzonty, uczymy się poznawać naszych sąsiadów, podnosimy nasze kwalifikacje zawodowe oraz dbamy o nasz wewnętrzny rozwój. Kto z nas nie chciałby swobodnie podróżować po świecie oraz zapewnić sobie lepszą pozycje na rynku pracy? Tutaj niezbędna jest znajomość języków obcych.
		</div>
		<div class='line'>
			Nauka języków obcych kojarzy ci się ze żmudną pracą i powtarzaniem tych samych schematów? My to zmienimy! Uczestnicząc w naszych kursach spojrzysz na język obcy oraz na jego naukę z innej perspektywy. U nas zajęcia językowe to swego rodzaju przygodą, która przynosi jednocześnie zamierzone efekty. Dokładamy wszelkich starań aby zajęcia prowadzone były w sposób ciekawy, komunikatywny oraz przystępny dla każdego.
		</div>
		
	</div>

</div>
