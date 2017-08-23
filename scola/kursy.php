<?php
 /* 
 Template Name: kursy
 */
 get_header();

 ?>

<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('nasze-centrum'); ?>">Nasze centrum</a><span>o</span><a href="<?php echo home_url('kursy'); ?>">Kursy</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-100">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base54">
				<div class="language-title center-title">Kursy w naszym centrum</div>
	
				<div class="under-headear under-headear-ec line-height3">Chcąc zapewnić jak najlepsze efekty w nauce, przygotowaliśmy testy sprawdzające stopień znajomości języka obcego. Wynik uzyskany po napisaniu testu kwalifikuje do odpowiedniej grupy  z właściwym poziomem zaawansowania. Staramy się tworzyć grupy językowe tak, aby wszyscy uczestnicy posiadali podobną znajomość języka obcego. Dlatego też nie tworzymy dużych grup, gdyż kierujemy się przede wszystkim komfortem i zadowoleniem naszych kursantów.</div>
				<a href="#"><div class="arrow-box arrow-box-certificat flex">
						<img class="arrow-img arrow-certificat" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"> <div class="arrow-text color-dark">czytaj więcej</div>
					</div></a>
			</div>
			<div class="language-poster course-poster" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/kursy/kurs_hiszpanski.jpg);">
				<div class="course-box">
					<div class="course-arrows flex flex-items-center pointer-inner">
						<div class="arrow-rolate slider-arrow-1 course-arrow course-arrow1"><img class="arrow-img arrow-left" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></div>
						<div class="arrow-padding slider-arrow-2 course-arrow course-arrow2"><img class="arrow-img arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></div>
					</div>
					<div class="language-course-container">
					<div class="language-title center-title in-course-title">Hiszpański</div>
					<a href="#"><div class="arrow-box flex">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"> <div class="arrow-text color-dark">zobacz szczegóły kursu</div>
					</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ADITIONAL INFORMATION -->
	<div class="additional-info">
		<div class="grid padding">
			<div class="add-title title-break-line600 add-exam-title">Gwarantujemy</div>
		
		
			<ul class="add-list add-exam-list">
				<li>Dodatkowe konsultacje z lektorem prowadzącym kurs: 
					<div class="certificat-text course-text">W razie jakichkolwiek wątpliwości i niejasności wynikających z omówionego na kursie materiału nasi kursanci mogą skorzystać z bezpłatnych konsultacji z lektorem w celu wyjaśnienia materiału. Podobną możliwość stwarzamy osobom, które z przyczyn niezależnych od nich nie mogły wziąć udziału w pojedynczych zajęciach.</div>
		
				</li>
				<li>Konwersacje:
					<div class="certificat-text course-text">Nasze zajęcia kładą duży nacisk na konwersacje oraz interakcje pomiędzy kursantami oraz lektorem. Wzbogacając nasze kursy o ciekawe pomoce naukowe jak np. specjalne laboratorium językowe, każdy z naszych kursantów przełamie ewentualne bariery konwersacyjne i nauczy się w  sposób swobodny korzystać ze swojej wiedzy i stosować ją w praktyce.</div>
				</li>
				<li>Regularne monitorowanie postępów w nauce:
					<div class="certificat-text course-text">Nasi kursanci regularnie informowani są o wszelkich postępach, jakie uczynili w nauce języka. Taki monitoring ma na celu przekazanie naszym kursantom ewentualnych sugestii odnośnie tego, nad czym należy szczególnie popracować.
					Dodatkowo przeprowadzamy wśród kursantów regularne testy sprawdzające, co motywuje do systematycznej nauki języka.
					</div>
				</li>
				<li>Odpowiednia wielkość grup:
					<div class="certificat-text course-text">Chcąc stworzyć warunki przyjazne dla każdego z naszych kursantów proponujemy zajęcia w grupach 4-6 osobowych, bądź w grupach 7-12 osobowych. Dzięki temu każdy kursant ma możliwość wyboru mniejszej, bądź większej grupy w zależności od indywidualnych preferencji.</div>
				</li>
				<li>Materiały dydaktyczne:
					<div class="certificat-text course-text">Rzetelnie wybieramy wszelkie materiały dydaktyczne dla naszych kursantów proponując pomoce naukowe wzbogacone o materiały audio-wizualne. Dodatkowym atutem jest zastosowanie materiałów multimedialnych przy wykorzystaniu tablic interaktywnych. Dzięki temu kursanci poznają nie tylko język, ale i wszelkie aspekty codziennego życia, kultury oraz realia kraju, w którym używany jest dany język.</div>
				</li>
				<li>Kursy online
					<div class="certificat-text course-text"></div>
				</li>
			</ul>
		</div>
	</div>

	
	<!-- FOOTER -->
<?php get_footer();?>
