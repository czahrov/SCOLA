<?php
	$root = get_page_by_title( 'Języki' );
	$sub = get_pages( array(
		'parent' => $root->ID,
	) );
	
	$slider_data = array();
	foreach( $sub as $item ){
		$slider_data[] = array_merge(
			array(
				'title' => 'Lorem ipsum tytuł',
				'url' => home_url( 'nasze-centrum/kadra' ),
				'img_alt' => 'https://placeimg.com/300/300/tech',
				
			),
			array(
				'title' => $item->post_title,
				'url' => get_permalink( $item->ID ),
				'img' => wp_get_attachment_image_url( get_post_thumbnail_id( $item->ID ), 'full' ),
				
			)
			
		);
		
	}
	
?>
<div id='kadra' class=''>
	<div class='top'>
		<div class='slider bg-gray flex'>
			<div class='view base1 flex'>
				<?php
					foreach( $slider_data as $slide ){
						printf( "<div class='slide bgimg full base1 no-shrink' style='background-image:url(%s);' item-title='%s' item-url='%s'></div>", 
						empty( $slide[ 'img' ] )?( $slide[ 'img_alt' ] ):( $slide[ 'img' ] ), 
						$slide[ 'title' ], 
						$slide[ 'url' ] );
						
					}
					
				?>
				
			</div>
			<div class='info bg-light'>
				<div class='title'>
					<?php echo $slider_data[ 0 ][ 'title' ]; ?>
				</div>
				<a class='link pointer arrow_slide flex' href='<?php echo $slider_data[ 0 ][ 'url' ]; ?>'>
					<img class='icon arrow right'/ src='<?php echo get_template_directory_uri(); ?>/img/arrow_black.png'>
					<div class='text'>
						zobacz szczegóły kursu
					</div>
					
				</a>
				<div class='nav flex'>
					<div class='button prev pointer bg-green arrow_slide flex flex-items-center flex-justify-center'>
						<img class='arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png' />
						
					</div>
					<div class='button next pointer bg-green arrow_slide flex flex-items-center flex-justify-center'>
						<img class='arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_white.png' />
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		<div class='box grid flex'>
			<div class='info bold base1 base2-ml flex flex-column flex-items-start'>
				<div class='title header'>
					Nasza Kadra
				</div>
				<div class='content'>
					Nasza kadra to grupa świetnie przygotowanych lektorów, którzy posiadają doświadczenie w nauczaniu języków obcych zarówno w kraju, jak i za granicą. Naszym atutem jest zaangażowanie, otwartość, zapał oraz entuzjazm, a także pomysłowość, co przekłada się na ciekawy oraz urozmaicony przebieg kursów.
				</div>
				<?php do_action( 'tab', array(
					'title' => 'czytaj więcej',
					'to' => '#kadra > .jezyk:first',
					
				) ); ?>
				
			</div>
			<div class='fake base2 hide block-ml'></div>
			
		</div>
		
	</div>
	<div class='jezyk niemiecki bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Niemiecki
			</div>
			<div class='content'>
				W celu zoptymalizowania procesu naczuania oraz stworzenia odpowiednich warunków dla każdego, przeprowadzamy test sprawdzający znajomość języka wśród osób, które już uczyły się języka. Uzyskany wynki predysponuje kursantów do odpowiednich grup, dla których układany jest odpowiedni program nauczania. U nas każdy kursant może liczyć na fachowe doradztwo oraz na najlepsze dla niego rozwiązanie
			</div>
			<ul>
				<li>
					Jednym z trenerów jest mająca ponad 25-letni staż pracy nauczycielka języka niemieckiego. Przez wiele lat była cenionym lektorem akademickim na jednej z wyższych uczelni, gdzie prowadziła także kursy specjalistyczne. Ukończyła Uniwersytet Śląski oraz Uniwersytet Jagielloński w zakresie germanistyki. Podczas swojej pracy zawodowej odbyła liczne kursy i seminaria z różnych metod nauczania. Prowadzone przez nią kursy językowe charakteryzują się niezwykłą efektywnością oraz otwartością na potrzeby kursantów.
				</li>
				<li>
					Kolejnym wykładowcą jest ceniąca zaangażowanie kursantów, absolwentka Uniwersytetu Jagiellońskiego. Posiada ponad 15 letnie doświadczenie w prowadzeniu zajęć z dziećmi i młodzieżą. Realizowane przez nią kursy cechują się kreatywnością i otwartością na nowe techniki nauczania. Do każdej grupy szkoleniowej podchodzi w sposób indywidualny. Posiada tytuł nauczyciela dyplomowanego. W swojej pracy kładzie duży nacisk na fonetykę, konwersacje i gramatykę praktyczną.
				</li>
				<li>
					Trzecim lektorem jest absolwentka Uniwersytetu Jagiellońskiego z kilkunastoletnim doświadczeniem głównie w nauczaniu osób dorosłych oraz w prowadzeniu kursów in company. Osoba, która potrafi przekazać wiedzę w sposób jasny i precyzyjny, kładzie duży nacisk na swobodną komunikację w języku niemieckim. Stale podnosi swoje kwalifikacje poprzez udział w licznych szkoleniach i konferencjach. Ukończyła metodykę nauczania języka niemieckiego. Prowadzi kursy dla naszych zagranicznych partnerów i jest egzaminatorem międzynarodowych certyfikatów językowych WiDaF.
				</li>
			</ul>
			
		</div>
		
	</div>
	<div class='jezyk angielski bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Angielski
			</div>
			<ul>
				<li>
					Nastawiony na ciągły rozwój, niezwykle zaangażowany w swoją pracę, doceniany i poważany przez każdą grupę szkoleniową. Wykształcenie zdobył w Państwowej Wyższej Szkole Zawodowej oraz w Wyższej Szkole Humanistyczno-Ekonomicznej w zakresie filologii angielskiej. Ukończył także studia podyplomowe w kierunku terapii pedagogicznej. Uczestniczy w wielu szkoleniach i konferencjach na temat doskonalenia umiejętności dydaktycznych oraz współpracy z młodzieżą ze specjalnymi potrzebami. Lektor potrafiący w bardzo łatwy sposób nawiązywać kontakty interpersonalne, uznawany i ceniony przez swoich kursantów.
				</li>
				<li>
					Kolejnym lektorem jest posiadająca ponad 10-letnie doświadczenie w nauczaniu absolwentka Kolegium Języków Obcych w Krakowie. Jest także magistrem pedagogiki Wyższej Szkoły Filozoficzno-Pedagogicznej w Krakowie. Swoje doświadczenie zdobyła poprzez pracę z dziećmi i młodzieżą a także w szkoleniach organizowanych dla osób dorosłych na różnych poziomach zaawansowania. Podczas pobytu w Wielkiej Brytanii pełniła rolę asystenta nauczyciela w Kolegium Greenwich w Londynie. Potrafi współpracować z dziećmi ze specjalnymi potrzebami. W realizowaniu kursów cechuję ją kreatywność i otwartość na nowe możliwości nauczania.
				</li>
				<li>
					Lektorem prowadzącym kurs jest ceniona przez wielu słuchaczy absolwentka Uniwersytetu Jagiellońskiego. Przez wiele lat specjalizowała się w nauczaniu metodą Callana, która opiera się głównie na konwersacji i nauce języka mówionego. Swoje doświadczenie zdobyła poprzez pracę z dziećmi, młodzieżą i osobami dorosłymi. Realizuje także kursy dla firm o różnym profilu działalności. Do kursantów podchodzi w sposób indywidualny, starając się aby każdy kurs był dostosowany i realizowany według potrzeb słuchaczy.
				</li>
			</ul>
			
		</div>
		
	</div>
	<div class='jezyk hiszpanski bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Hiszpański
			</div>
			<ul>
				<li>
					Ceniona przez wielu słuchaczy, niezwykle ambitna i wytrwała w swoim działaniu. Ukończyła studia na Uniwersytecie Jagiellońskim oraz w Wyższej Szkole Studiów Międzynarodowych. Przez wiele lat przebywała w Hiszpanii, co pozwoliło jej rozwinąć się zawodowo i poszerzyć swoją wiedzę na temat kultury i obyczajów tego kraju. Jest lektorem z długoletnim stażem pracy, nieprzerwanie doskonalącym swoje techniki nauczania, pragnącym przekazać kursantom wiedzę w możliwie najefektywniejszy sposób.
				</li>
				<li>
					Native speaker z pochodzenia Wenezuelczyk, bardzo przyjacielski i zawsze uśmiechnięty. Magister filologii angielskiej na Universidad Pedagogica Experimental Libertador. Doświadczenie zawodowe zdobył jako nauczyciel w Maracay a także w Centrum Kształcenia Językowego w Krakowie. Do kursantów podchodzi w sposób indywidualny, starając się aby każdy kurs był dostosowany i realizowany według potrzeb słuchaczy.
				</li>
				
			</ul>
			
		</div>
		
	</div>
	<div class='jezyk francuski bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Francuski
			</div>
			<ul>
				<li>
					Nauczyciel akademicki oraz absolwentka Uniwersytetu Jagiellońskiego. Nagradzana za szczególne osiągnięcia zawodowe przez Starostę Powiatu Nowosądeckiego oraz przez Dyrektora Liceum Ogólnokształcącego w Grybowie. Koordynator międzynarodowego Projektu Socrates Comenius (wymiana młodzieży polskiej z młodzieżą francuską). W bardzo umiejętny i przejrzysty sposób potrafi przekazać wiedzę, zachęcając tym samym kursantów do aktywnego udziały w zajęciach.
				</li>
				
			</ul>
			
		</div>
		
	</div>
	<div class='jezyk wloski bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Włoski
			</div>
			<ul>
				<li>
					Otwarta na nowe techniki nauczania, zorganizowana i zaangażowana w swoją pracę absolwentka Uniwersytetu Jagiellońskiego. Uzyskany certyfikat CELI 3 Università di Perugia. Uczestniczyła w wielu szkoleniach z zakresu doskonalenia pracy nauczyciela. Lektor akademicki, w swojej pracy kładzie duży nacisk na fonetykę, konwersacje i gramatykę praktyczną. W opiniach kursantów - nauczyciel z powołania bardzo ciepła i przyjazna, podchodząca indywidualnie do każdego słuchacza i jego potrzeb językowych.
				</li>
				
			</ul>
			
		</div>
		
	</div>
	<div class='jezyk rosyjski bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Rosyjski
			</div>
			<ul>
				<li>
					Posiadająca wieloletnie doświadczenie w swojej pracy lektorka języka rosyjskiego, współpracowała między innymi z Centrum Edukacji Młodzieży Kana. Prowadzi kursy języka rosyjskiego dla dzieci, młodzieży i dorosłych. Pełni rolę tłumacza podczas wizyt gości zagranicznych. W swoim doświadczeniu realizowała także tłumaczenia stron internetowych oraz katalogów firm. Bardzo zaangażowana w pracę pedagoga potrafiąca w przystępny sposób nauczać języka rosyjskiego.
				</li>
				
			</ul>
			
		</div>
		
	</div>
	<div class='jezyk slowacki bg-green font-light'>
		<div class='box grid'>
			<div class='icon bgimg'></div>
			<div class='title header bold'>
				Język Słowacki
			</div>
			<ul>
				<li>
					Nauczyciel akademicki oraz pracownik Kuratorium Oświaty w Nowym Sączu, posiadający kilkudziesięcioletnie doświadczenie w nauczaniu języka słowackiego. Swoje wykształcenie zdobył na Prešovká univerzita v Prešove oraz w trakcie studiów podyplomowych w Wyższej Szkole Europejskiej w Krakowie, Wydział Stosowanych Nauk Społecznych. Ukończył międzynarodowy projekt szkoleniowy w ramach projektu Comenius Regio organizowanego przez Märkisches Berufskolleg Unna, Hansa Berufskolleg Unna, Technische Universität Dortmund. Swoje doświadczenie zawodowe pogłębił podczas stażu we Franji, Holandii oraz Niemczech. Zaangażowany i skoncentrowany na swojej pracy, kładzie duży nacisk na efektywność prowadzonych przez siebie zajęć. Uczestnik wielu projektów oraz kursów dokształcających w kraju i za granicą. Ukończył m.in. kurs dokształcający „Podniesienie efektywności metod nauczania języka obcego dla nauczycieli i lektorów" organizowany przez Regionálne poradenské a informačné centrum Prešov. Ceniony za swoje zaangażowanie, wiedzę oraz sposób pracy z kursantami.
				</li>
				
			</ul>
			
		</div>
		
	</div>
	
</div>