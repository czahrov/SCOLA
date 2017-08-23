<?php
 /* 
 Template Name: program
 */
 get_header();

 ?>
<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('nasze-centrum'); ?>">Nasze Centrum</a><span>o</span><a href="<?php echo home_url('program'); ?>">Program</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base2-ml">
				<div class="language-title center-title">Program językowy <span class="dark-green">Scola</span></div>
				<div class="under-headear">Do każdego z naszych kursantów podchodzimy w sposób indywidualny</div>
				<div class="under-headear2">Zależy nam na zadowoleniu każdego, kto zdecyduje się do nas dołączyć. Dlatego też zapisy do grup ustalane są na podstawie indywidualnych predyspozycji, wieku oraz stopnia znajomości danego języka przez kursanta. </div>
				<a href="#"><div class="arrow-box arrow-box-certificat flex">
					<img class="arrow-img arrow-certificat" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"> <div class="arrow-text color-dark">czytaj więcej</div>
				</div></a>
				
				
			</div>
		</div>
	</div>
	
	<!-- ADITIONAL INFORMATION -->
	<div class="additional-info">
		<div class="grid padding">
			<div class="add-title certificat-title">Optymalizacja procesu nauczania</div>
			<div class="certificat-text">W celu zoptymalizowania procesu nauczania oraz stworzenia odpowiednich warunków dla każdego, przeprowadzamy test sprawdzający znajomość języka wśród osób, które już uczyły się danego języka. Uzyskany wynik predysponuje kursantów do odpowiednich grup, dla których układany jest odpowiedni program nauczania. U nas każdy kursant może liczyć na fachowe doradztwo oraz na najlepsze dla niego rozwiązanie.</div>
			
			
			<div class="add-list-title add-list-title2">Zajęcia w Centrum Językowym SCOLA organizowane są dla następujących grup wiekowych:</div>
			<div class="white-space-20"></div>
			
				<ul class="add-list">
					<li>dzieci w wieku 5-6 lat,</li>
					<li>dzieci w wieku 7-9 lat,</li>
					<li>dzieci w wieku 10- 12 lat,</li>
					<li>dzieci w wieku 13-15 lat</li>
					<li>uczniowie szkół średnich,</li>
					<li>maturzyści,</li>
					<li>grupy przygotowujące się do egzaminów na certyfikaty językowe,</li>
					<li>dorośli – w tym kursy tematyczne dla dorosłych pracujących w konkretnych branżach,</li>
					<li>kursy dla pracowników firm – z możliwością dojazdu lektora do siedziby firmy,</li>
					<li>przyspieszone kursy dla wyjeżdżających za granicę.</li>
				</ul>
		</div>
	</div>
	
	
		
	<!-- FOOTER -->
<?php get_footer();?>
