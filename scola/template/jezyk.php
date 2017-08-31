<?php
/*
	Template Name: Języki info
*/
	$page = get_post();
	$slug = $page->post_name;
	$title = strtolower( $page->post_title );
	@include_once get_template_directory() . "/template/jezyk-{$slug}.php";
	if( !isset( $language ) ){
		$language = array();
		
	}
	
	$language = array_merge(
		array(
			'poziomy' => 0,
			'kursy' => array(
				'Lorem ipsum',
				'Lorem ipsum',
				'Lorem ipsum',
				'Lorem ipsum',
				
			),
		),
		$language
	);
	
	get_header();
	get_template_part( "template/top" );
?>
<body class='regular font-dark'>
	<?php do_action( 'breadcrumb' ); ?>
	<div id='jezyk' class='<?php echo $slug; ?>'>
		<div class='top'>
			<div class='img bgimg full hide block-ml'></div>
			<div class='box grid flex flex-wrap'>
				<div class='img bgimg full base1 hide-ml'></div>
				<div class='text bold base1 base2-ml'>
					<div class='title bold'>
						Centrum języka <?php echo $title; ?>ego <span class='font-green'>Scola</span>
					</div>
					<div class='buttons flex flex-wrap flex-items-center'>
						<?php do_action( 'customButtonFill', array(
							'title' => 'wypełnij test',
							'url' => home_url( "testy/$slug" ),
							
						) ); ?>
						<?php do_action( 'customButton', array(
							'title' => 'pobierz test w pdf',
							'class' => 'noborder',
							'url' => sprintf( "%s/files/scola_test_%s.pdf", get_template_directory_uri(), $slug ),
							'newWindow' => true,
							
						) ); ?>
						
					</div>
					<div class='poziomy'>
						<div class='title'>
							Ilość poziomów zaawansowania:
						</div>
						<div class='value bold font-green'>
							<?php echo $language[ 'poziomy' ]; ?>
						</div>
						
					</div>
					<div class='zdolnosci'>
						<div class='title'>
							Kurs dalej 4 zdolności językowe
						</div>
						<div class='value bold font-green'>
							pisanie, czytanie, mówienie, rozumienie ze słuchu
						</div>
						
					</div>
					
				</div>
				<div class='fake base2 hide block-ml'></div>
			</div>
			
		</div>
		<div class='info bg-green font-light'>
			<div class='box bold grid'>
				<div class='title '>
					Dodatkowe informacje:
				</div>
				<div class='line flex flex-items-center'>
					<img class='icon' src='<?php echo get_template_directory_uri(); ?>/img/ikony/graduation_hat.png'/>
					<div class='text'>
						<div class='top'>
							W SCOLA istnieje możliwość zapisania się na kurs z języka angielskiego do grup liczących:
						</div>
						<div class='bot'>
							3-5 osób, 6-12 osób
						</div>
						
					</div>
					
				</div>
				<div class='title'>
					Naszym kursantom oferujemy następujące kursy:
				</div>
				<ul class=''>
					<?php
						foreach( $language[ 'kursy' ] as $item ):
					?>
					<li>
						<?php echo $item; ?>
					</li>
					<?php endforeach; ?>
					
				</ul>
				<div class='line bold'>
					Każdy z kursantów otrzymuje w cenie kursu materiały dydaktyczne niezbędne do nauki języka <?php echo $title; ?>ego.
				</div>
				
			</div>
			
		</div>
		<div class='opis grid bold text-center'>
			<div class=''>
				Jesteśmy Centrum Egzaminacyjnym TELC (The European Language Certificates)
			</div>
			<div class=''>
				Zapewniamy kompleksowe przygotowanie do tego egzaminu oraz zapewniamy możliwość jego zdawania w naszej siedzibie, bądź w każdym dowolnym dla naszych kursantów miejscu. Wychodząc naprzeciw oczekiwaniom naszych klientów jesteśmy w stanie przeprowadzić taki egzamin np. dla pracowników firm w siedzibie danej firmy.
			</div>			
			
		</div>
	
	</div>
<?php get_template_part( "template/footer" ); ?>
<?php get_footer(); ?>
