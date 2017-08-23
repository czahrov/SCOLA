<?php
 /* 
 Template Name: slowacki
 */
 get_header();

 ?>
<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('kursy'); ?>">Języki</a><span>o</span><a href="<?php echo home_url('slowacki'); ?>">Język Słowacki</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base2-ml">
				<div class="language-title">Kurs języka słowackiego w <span class="dark-green">Scola</span></div>
				
				
				<div class="language-buttons flex flex-column flex-row-ds flex-items-start flex-justify-between-ds">
					<a href="#" class="confirm-btn confirm-btn-green flex language-button">
						<div class="arrow-img language-arrow-img"></div>
						<div class="confirm-btn-text dark-green">wypełnij test</div>
					</a>
					<a href="http://www.scola.pl/media/File/scola_test_slowackii.pdf"" class="confirm-btn confirm-btn-green flex no-border">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
						<div class="confirm-btn-text dark-green">pobierz test w pdf</div>
					</a>
				</div>
				<div class="levels">Ilość poziomów zaawansowania:<div class="level-count">4</div></div>
				<div class="skils-cont">kurs rozwija 4 zdolności językowe:<div class="skils">pisanie, czytanie, mówienie, rozumienie ze słuchu</div></div>
				
				
				
			</div>
			<div class="language-poster" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/poster_slo.jpg);"></div>
		</div>
	</div>
	
	<!-- ADITIONAL INFORMATION -->
	<div class="additional-info">
		<div class="grid padding">
			<div class="add-title">Dodatkowe informacje:</div>
			<div class="add-text-box flex flex-items-center">
				<div class="add-text-icon no-shrink"></div>
				<div class="add-text-bar">
					<div class="add-text-line1">W SCOLA istnieje możliwość zapisania się na kurs z języka słowackiego do grup liczących:</div>
					<div class="add-text-line2">3-5 osób, 6-12 osób, 9-12 osób</div>
				</div>
			</div>
			<div class="add-list-title">Naszym kursantom oferujemy następujące kursy:</div>
			<ul class="add-list">
				<li>kurs standardowy - dla osób początkujących,</li>
				<li>kurs dla dzieci,</li>
				<li>kurs dla gimnazjalistów,</li>
				<li>kurs dla dorosłych - w zależności od stopnia zaawansowania,</li>
				<li>kurs dla pracowników firm (także w siedzibie danej firmy),</li>
				<li>nauka języka słowackiego w biznesie</li>
				<li>szybki kurs dla osób wyjeżdzających za granicę.</li>
			</ul>
			<div class="add-end">Każdy z kursantów otrzymuje w cenie kursu materiały dydaktyczne niezbędne do nauki języka słowackiego</div>
		</div>
	</div>
	
	<!-- PRE-FOOTER -->
	<div class="pre-footer">
		<div class="grid padding pre-footer-content flex-column flex-justify-center">
			<p>Jesteśmy Centrum Egzaminacyjnym TELC (The European Language Certificates)</p>
			<p>Zapewniamy kompleksowe przygotowanie do tego egzaminu oraz zapewniamy możliwość jego zdawania w naszej siedzibie, bądź w każdym dowolnym dla naszych kursantów miejscu. Wychodząc naprzeciw oczekiwaniom naszych klientów jesteśmy w stanie przeprowadzić taki egzamin np. dla pracowników firm w siedzibie danej firmy.</p>
		</div>
	</div>
	
	<!-- FOOTER -->
<?php get_footer();?>
