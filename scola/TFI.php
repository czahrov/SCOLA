<?php
 /* 
 Template Name: tfi
 */
 get_header();

 ?>

<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('nasze-centrum'); ?>">Nasze centrum</a><span>o</span><a href="<?php echo home_url('centrum-egzaminacyjne'); ?>">Centrum Egzaminacyjne</a><span>o</span><a href="<?php echo home_url('tfi'); ?>">TFI&trade;</a></div>
		
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-100">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base54">
				<div class="language-title center-title title-break-line "><span class="dark-green">TFI&trade; </span>Test de francais International </div>
	
				<div class="under-headear under-headear-ec white-space-10"> Test de franęais International to odpowiednik egzaminu ToEIc w języku francuskim, oparty
					na tej samej skali punktowej oceny kompetencji językowych i o bardzo zbliżonej strukturze ETS
					do egzaminu z języka angielskiego. <br>  Egzamin TFI trwa 1 h 50 minut i składa się ze 180 pytań, podzielonych na dwie części:
				</div>
				<ul class="add-list market-list">
				<li>Listening Comprehension (rozumienie ze słuchu) 5 – 495 punktów</li>
				<li>Reading Comprehension (czytanie) 5 – 495 punktów</li>
				<li>Cała sesja egzaminacyjna trwa około 2,5 godziny.</li>
				</ul>
				<div class="under-headear under-headear-ec white-space-0">Test przykładowy do pobrania:</div>
				
				<a href="http://www.plets global.org/poland/tests/tfi-test/pzykladowy-test-tfi/" class="confirm-btn confirm-btn-green flex no-border flex-items-center tfi-link overflow">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">www.plets global.org/poland/tests/tfi-test/pzykladowy-test-tfi/</div>
				</a>
				<div class="under-headear under-headear-ec white-space-0">Test przykładowy online:</div>
				<a href="http://www.test-my-french.com" class="confirm-btn confirm-btn-green flex no-border flex-items-center tfi-link white-space-40">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">www.test-my-french.com</div>
				</a>
			</div>
			<div class="avards">
				<img src="<?php echo get_template_directory_uri(); ?>/img/epa.jpg" class="avard-pic avard-pic1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ets.jpg" class="avard-pic">
				<div class="avard-text">Z przyjemnością informujemy, że nasza szkoła została uhonorowana przez Educational Testing Service statuetką oraz wyróżnieniem jako ośrodek egzaminacyjny.</div>
			</div>
		</div>
	</div>
	<!-- ADD INFO -->
	<div class="additional-info relative white-space-100">
		<div class="grid padding">
			<div class="add-title certificat-title">Format egzaminu</div>
			<div class="certificat-text">Egzamin jest testem wyboru i składa się ze 100 pytań testowych, podzielonych na dwie części: Listening Comprehension (rozumienie ze słuchu) oraz Reading Comprehension (czytanie). Egazmin trwa 1 godzinę zegarową.</div>
			
			<div class="exam-table flex flex-column white-space-30">
				<div class="exam-table-row flex flex-items-center exam-header-row">
					<div class="exam-table-long exam-table-header">
					Listening Comprehension (czas trwania: ok. 42 minuty) - 90 pytań / zadań testowych
					</div>
					<div class="exam-table-short bg-dark height100 fake-div">
					</div>
				</div>
				<div class="exam-table-row flex flex-column flex-row-mm flex-items-stretch ">
					<div class="exam-table-long left-table-content flex flex-items-center">
				  Sekcja I – krótkie dialogi sytuacyjne (pytanie-odpowiedź)
					</div>
					<div class="exam-table-short right-table-content flex flex-items-center">
					40 pytań
					</div>
				</div>
				<div class="exam-table-row flex flex-column flex-row-mm flex-items-stretch ">
					<div class="exam-table-long left-table-content flex flex-items-center">
				 Sekcja II - dłuższe dialogi z pytaniami
					</div>
					<div class="exam-table-short right-table-content flex flex-items-center">
					30 pytań
					</div>
				</div>
				
				<div class="exam-table-row flex flex-column flex-row-mm flex-items-stretch ">
					<div class="exam-table-long left-table-content flex flex-items-center">
				Sekcja III - dłuższe wypowiedzi i konwersacje
					</div>
					<div class="exam-table-short right-table-content flex flex-items-center">
					20 pytań
					</div>
				</div>
			</div>
			
			<div class="exam-table flex flex-column">
				<div class="exam-table-row flex flex-items-center exam-header-row">
					<div class="exam-table-long exam-table-header">
					Reading Comprehension (czas trwania 68 minut) -
				90 pytań / zadań testowych
					</div>
					<div class="exam-table-short bg-dark height100 fake-div">
					</div>
				</div>
				<div class="exam-table-row flex flex-column flex-row-mm flex-items-stretch ">
					<div class="exam-table-long left-table-content flex flex-items-center">
				 Sekcja IV – identyfikacja błędów w zdaniu
					</div>
					<div class="exam-table-short right-table-content flex flex-items-center">
					25 pytań
					</div>
				</div>
				<div class="exam-table-row flex flex-column flex-row-mm flex-items-stretch ">
					<div class="exam-table-long left-table-content flex flex-items-center">
				Sekcja V – uzupełnianie zdań fragmentami pasującymi do kontekstu
					</div>
					<div class="exam-table-short right-table-content flex flex-items-center">
					25 pytań
					</div>
				</div>
				
				<div class="exam-table-row flex flex-column flex-row-mm flex-items-stretch ">
					<div class="exam-table-long left-table-content flex flex-items-center">
				Sekcja VI - autentyczne teksty biznesowe i pytania do tekstu
					</div>
					<div class="exam-table-short right-table-content flex flex-items-center">
					40 pytań
					</div>
				</div>
			</div>
			
			
		</div>
		<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
	</div>
	
	<!-- CERTYFICAT INFO -->
	
		<div class="certyficat-info">
			<div class="grid padding">
			
			<div class="certyficat-info-title">Poziom trudności egzaminu</div>
			<div class="certyficat-info-text">Egzamin został przygotowany z myślą o mierzeniu poziomu wiedzy z języka francuskiego w biznesie. Ocena jest wyrażona w punktach na skali od 10 do 990. Dlatego też, stopień trudności pytań jest zróżnicowany aby precyzyjnie określić na jakim poziomie znajduje się zdający. Zaletą egzaminu jest to, że kandydat nie deklaruje poziomu znajomości języka francuskiego przed przystąpieniem do egzaminu. To egzamin określa poziom zawansowania zdającego, zależnie od ilości punktów, którą otrzymał. </div>
			<div class="white-space-60"></div>
			<div class="certyficat-info-title">Terminy egzaminów</div>
			<div class="certyficat-info-text">Egzamin TFI jest organizowany w sesjach otwartych oraz może zostać przeprowadzony na żądanie, w dowolnie wybranym terminie. Szczegółowych informacji udzieli nasz ośrodek.</div>
			<div class="white-space-50"></div>
			<div class="flex flex-column flex-items-start">
			<a href="#" class="confirm-btn confirm-btn-green flex">
				<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
				<div class="confirm-btn-text dark-green">skontaktuj się</div>
			</a>
			</div>
			<div class="white-space-60"></div>
			<div class="certyficat-info-title">Czas oczekiwania na egzaminy</div>
			<div class="certyficat-info-text">Egzamin TFI gwarantuje najkrótszy czas oczekiwania na wyniki ze wszystkich egzaminów z języka francuskiego w Polsce. Standardowo, wyniki są znane w maksymalnie 10 dni roboczych.
			</div>
			<div class="white-space-60"></div>
			<div class="certyficat-info-title">Certyfikaty TFI</div>
			<div class="certyficat-info-text">Zdający otrzymują certyfikaty w 5 kolorach, w zależności od wyniku punktowego 10-990 punktów</div>
			<ul class="certyficat-info-list">
				<li><span class="dark-green">pomarańczowy: </span>10 – 215 punktów</li>
				<li><span class="dark-green">brązowy: </span>220 – 465 punktów</li>
				<li><span class="dark-green">zielony: </span>470 – 725 punktów</li>
				<li><span class="dark-green">niebieski: </span> 730 – 855 punktów</li>
				<li><span class="dark-green">złoty: </span>860 – 990 punktów</li>
			</ul>
			<div class="under-headear under-headear-ec white-space-0 font-bold">Test przykładowy online:</div>
				<a href="http://www.pl.tfi-europe.com" class="confirm-btn confirm-btn-green flex no-border flex-items-center tfi-link white-space-40">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">www.pl.tfi-europe.com</div>
				</a>
			
			
			
			<div class="flex flex-column certyfications info-certyfications">
				<ul>
					<li><a href="<?php echo home_url('toeic'); ?>">TOEIC&reg;<div class="small-arrow-box"></div></a></li>
					<li><a href="<?php echo home_url('toeic-bridge'); ?>">TOEIC&reg; Bridge<div class="small-arrow-box"></div></a></li>
					<li><a href="<?php echo home_url('toefl'); ?>"">TOEFL&reg;<div class="small-arrow-box"></div></a></li>
					<li><a href="<?php echo home_url('tfi'); ?>" class="active-certificat">TFI&trade;<div class="small-arrow-box"></div></a></li>
					<li><a href="<?php echo home_url('widaf'); ?>">WiDaF<div class="small-arrow-box"></div></a></li>
				</ul>
			</div>
			
			</div>
		</div>
	
<!-- FOOTER -->
<?php get_footer();?>