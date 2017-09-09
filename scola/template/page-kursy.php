<?php
	$root = get_page_by_title( 'Języki' );
	$sub = get_pages( array(
		'parent' => $root->ID,
	) );
	
	$slider_data = array();
	foreach( $sub as $item ){
		$t = array(
			'title' => $item->post_title,
			'url' => get_permalink( $item->ID ),
			'img' => wp_get_attachment_image_url( get_post_thumbnail_id( $item->ID ), 'full' ),
			
		);
		
		if( empty( $t[ 'img' ] ) ) $t[ 'img' ] = "https://placeimg.com/300/300/tech";
		
		$slider_data[] = $t;
		
	}
	
?>
<div id='kursy' class=''>
	<div class='top'>
		<div class='slider bg-gray flex'>
			<div class='view base1 flex'>
				<?php
					foreach( $slider_data as $slide ){
						printf( "<div class='slide bgimg full base1 no-shrink' style='background-image:url(%s);' item-title='%s' item-url='%s'></div>", 
						$slide[ 'img' ], 
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
			<div class='info base1 base2-ml'>
				<div class='title bold'>
					Kursy w naszym centrum
				</div>
				<div class='content'>
					Chcąc zapewnić jak najlepsze efekty w nauce, przygotowaliśmy testy sprawdzające stopień znajomości języka obcego. Wynik uzyskany po napisaniu testu kwalifikuje do odpowiedniej grupy z właściwym poziomem zaawansowania. Staramy się tworzyć grupy językowe tak, aby wszyscy uczestnicy posiadali podobną znajomość języka obcego. Dlatego też nie tworzymy dużych grup, gdyż kierujemy się przede wszystkim komfortem i zadowoleniem naszych kursantów.
				</div>
				<div class='pointer arrow_slide flex flex-items-center'>
					<?php do_action( 'tab', array(
						'to' => '#kursy > .bot',
						'title' => 'czytaj więcej',
						
					) ); ?>
					
				</div>
				
			</div>
			<div class='fake base2 hide block-ml'></div>
			
		</div>
		
	</div>
	<div class='bot bg-green font-light'>
		<div class='box grid'>
			<div class='title bold'>
				Gwarantujemy
			</div>
			<ul>
				<li>
					<div class='title'>
						Dodatkowe konsultacje z lektorem prowadzącym kurs:
					</div>
					<div class='content'>
						W razie jakichkolwiek wątpliwości i niejasności wynikających z omówionego na kursie materiału nasi kursanci mogą skorzystać z bezpłatnych konsultacji z lektorem w celu wyjaśnienia materiału. Podobną możliwość stwarzamy osobom, które z przyczyn niezależnych od nich nie mogły wziąć udziału w pojedynczych zajęciach.
					</div>
					
				</li>
				<li>
					<div class='title'>
						Konwersacje:
					</div>
					<div class='content'>
						Nasze zajęcia kładą duży nacisk na konwersacje oraz interakcje pomiędzy kursantami oraz lektorem. Wzbogacając nasze kursy o ciekawe pomoce naukowe jak np. specjalne laboratorium językowe, każdy z naszych kursantów przełamie ewentualne bariery konwersacyjne i nauczy się w sposób swobodny korzystać ze swojej wiedzy i stosować ją w praktyce.
					</div>
					
				</li>
				<li>
					<div class='title'>
						Regularne monitorowanie postępów w nauce:
					</div>
					<div class='content'>
						Nasi kursanci regularnie informowani są o wszelkich postępach, jakie uczynili w nauce języka. Taki monitoring ma na celu przekazanie naszym kursantom ewentualnych sugestii odnośnie tego, nad czym należy szczególnie popracować. Dodatkowo przeprowadzamy wśród kursantów regularne testy sprawdzające, co motywuje do systematycznej nauki języka.

					</div>
					
				</li>
				<li>
					<div class='title'>
						Odpowiednia wielkość grup:
					</div>
					<div class='content'>
						Chcąc stworzyć warunki przyjazne dla każdego z naszych kursantów proponujemy zajęcia w grupach 4-6 osobowych, bądź w grupach 7-12 osobowych. Dzięki temu każdy kursant ma możliwość wyboru mniejszej, bądź większej grupy w zależności od indywidualnych preferencji.

					</div>
					
				</li>
				<li>
					<div class='title'>
						Materiały dydaktyczne:
					</div>
					<div class='content'>
						Rzetelnie wybieramy wszelkie materiały dydaktyczne dla naszych kursantów proponując pomoce naukowe wzbogacone o materiały audio-wizualne. Dodatkowym atutem jest zastosowanie materiałów multimedialnych przy wykorzystaniu tablic interaktywnych. Dzięki temu kursanci poznają nie tylko język, ale i wszelkie aspekty codziennego życia, kultury oraz realia kraju, w którym używany jest dany język.

					</div>
					
				</li>
				<li>
					<div class='title'>
						Kursy online
					</div>
					<div class='content'></div>
					
				</li>
				
			</ul>
			
		</div>
		
	</div>
	
</div>