

<?php
 /* 
 Template Name: nasze-centrum
 */
 get_header();

 ?>
<body>
	<?php get_template_part("template/menu"); ?>
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('nasze-centrum'); ?>">Nasze Centrum</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base2-ml">
				<div class="language-title center-title">Centrum językowe <span class="dark-green">Scola</span></div>
				<div class="under-headear">to gwarancja podniesienia twoich kompetencji językowych</div>
				<div class="under-headear2">Centrum językowe Scola specjalizuje się w dwóch zakresach:</div>
				<ol class="language-headear-list">
					<li>
						Prowadzenie kursów językowych
							<a <?php echo home_url('kursy'); ?>" class="confirm-btn flex">
								<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png">
								<div class="confirm-btn-text-dark">sprawdź ofertę językową</div>
							</a>
					</li>
					<li>
						Tłumaczeniach
						<a <?php echo home_url('tlumaczenia'); ?>" class="confirm-btn flex">
							<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png">
							<div class="confirm-btn-text-dark">sprawdź ofertę tłumaczenia</div>
						</a>
					</li>
				</ol>
				
				
			</div>
			<div class="language-poster" style="background-image: url(img/scola_budynek.jpg);"></div>
		</div>
	</div>
	
	<!-- ADITIONAL INFORMATION -->
	<div class="additional-info">
		<div class="grid padding">
			<div class="add-title">Naszym kursantom oferujemy nauke języka:</div>
			
			<div class="add-list-title add-list-title2">Naszym kursantom oferujemy naukę języka:</div>
			<ul class="add-list">
				<li>angielskieg</li>
				<li>niemieckiego</li>
				<li>hiszpańskiego</li>
				<li>włoskiego</li>
				<li>francuskiego</li>
				<li>rosyjskiego</li>
				<li>słowackiego</li>
				<li>a także naukę języka polskiego dla każdego, <br> kto mówi jednym z powyższych języków i chciałby zacząć mówić po polsku</li>
			</ul>
			
			<div class="add-list-title add-list-title2">Dla kogo prowadzimy kursy?</div>
			<ul class="add-list">
				<li>dla dzieci w wieku szkolnym</li>
				<li>dla młodzieży</li>
				<li>dla maturzystów</li>
				<li>dla dorosłych</li>
				<li>dla firm (w tym język branżowy)</li>
			</ul>
			
			
			<div class="add-end add-end2">Jeśli potrzebujesz tłumaczenia pisemnego, pomożemy Ci w tym</div>
			<div class="add-end add-end2 white-space-40">Prowadzisz rozmowy z partnerami biznesowymi, podczas rozpraw sądowych, czy potrzebujesz przeprowadzić rozmowę telefoniczną w języku obcym.</div>
			
		</div>
	</div>
	
	<!-- PRE-FOOTER -->
	<div class="pre-footer pre-footer2">
		<div class="grid padding pre-footer-content2 flex-column flex-justify-center">
			<p><span class="big-test">Centrum Językowe <span class="fat">SCOLA</span></span> to przełom na rynku edukacji obcojęzycznej w Twoim mieście. Stawiamy na dynamiczny oraz prężny rozwój
				Twoich kompetencji językowych. Naszą pasją jest nauczanie, a największą satysfakcję sprawia nam świadomość, że możemy pomóc Tobie
				w nauce wybranego przez Ciebie języka.
			</p>
			<p>Dzisiaj każdy z nas podejmuje naukę języków obcych, które są naszym oknem na świat. To dzięki nim poszerzamy nasze horyzonty, uczymy się
				poznawać naszych sąsiadów, podnosimy nasze kwalifikacje zawodowe oraz dbamy o nasz wewnętrzny rozwój. Kto z nas nie chciałby swobodnie podróżować po świecie oraz zapewnić sobie lepszą pozycje na rynku pracy?
				Tutaj niezbędna jest znajomość języków obcych.
			</p>
			<p>Nauka języków obcych kojarzy ci się ze żmudną pracą i powtarzaniem tych samych schematów? My to zmienimy! Uczestnicząc w naszych kursach spojrzysz na język obcy oraz na jego naukę z innej perspektywy. U nas zajęcia językowe to swego rodzaju przygodą, która przynosi jednocześnie zamierzone efekty.
				Dokładamy wszelkich starań aby zajęcia prowadzone były w sposób ciekawy, komunikatywny oraz przystępny dla każdego.
			</p>
		</div>
	</div>
	
	<!-- footer -->
	<?php get_footer();?>