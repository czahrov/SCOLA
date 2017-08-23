<?php
 /* 
 Template Name: centrum-egzaminacyjne
 */
 get_header();

 ?>
<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span>Nasze centrum<span>o</span><a href="<?php echo home_url('centrum-egzaminacyjne'); ?>">Centrum Egzaminacyjne</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-100">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base54">
				<div class="language-title center-title title-break-line ">Centrum Egzaminacyjne <span class="dark-green">Scola</span></div>
	
				<div class="under-headear under-headear-ec">ETS – Educational Testing Service, to największa, niezależna organizacja non-profit, zajmująca się badaniami w dziedzinie edukacji i tworzeniem systemów oceny. Główna siedziba ETS mieści się w Princeton w Stanach Zjednoczonych. Od swojego powstania w 1947 roku, ETS jest liderem w badaniach edukacyjnych i udostępnianiu obiektywnych i rzetelnych systemów oceny dla klientów indywidualnych, instytucjonalnych i korporacyjnych na całym świecie.</div>
				<div class="under-headear under-headear-ec">ETS Professional Exam Center to tytuł przyznawany tym ośrodkom egzaminacyjnym, które wyróżniają się na tle innych ilością przeprowadzonych egzaminów, liczebnością grup, profesjonalizmem w działaniu oraz dbałością o wizerunek marki ETS.</div>
				
			</div>
			<div class="avards">
				<img src="<?php echo get_template_directory_uri(); ?>/img/epa.jpg" class="avard-pic avard-pic1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ets.jpg" class="avard-pic">
				<div class="avard-text">Z przyjemnością informujemy, że nasza szkoła została uhonorowana przez Educational Testing Service statuetką oraz wyróżnieniem jako ośrodek egzaminacyjny.</div>
			</div>
		</div>
	</div>
	
	<!-- ADITIONAL INFORMATION -->
	<div class="additional-info">
		<div class="grid padding">
			<div class="add-title title-break-line600 add-exam-title">Czego możesz dokonać w naszym centrum językowym</div>
		
		
		<ul class="add-list add-exam-list">
			<li>zarejestrować się na egzamin TOEIC®, TFI™, TOEIC® Bridge lub WiDaF</li>
			<li>przygotować się do egzaminów ETS, zarówno do TOEIC®, TOEIC® Bridge i  TOEFL® jak i do egzaminów z języka francuskiego (TFI™) oraz niemieckiego (WiDaF)</li>
			<li>zarejestrować się na egzamin TOEFL®, bez konieczności płacenia kartą kredytową, płacąc gotówką lub przelewem z złotych polskich</li>
			<li>zdać egzamin TOEIC® w zamkniętych sesjach egzaminacyjnych organizowanych przez nasz ośrodek lub zdać egzamin w dowolnie wybranym terminie, na żądanie</li>
			<li>zakupić podręczniki przygotowujące do egzaminów TOEIC® i TOEFL®</li>
			<li>przygotować się do egzaminu TOEFL, wykorzystując podręczniki lub egzamin próbny TPO (TOEFL Practice Online) – pełny, autentyczny egzamin TOEFL, dostępny online na każdym komputerze wyposażonym w słuchawki i  mikrofon oraz z dostępem do Internetu.</li>
		</ul>
	</div>
		
	</div>
	
	<!-- PRE-FOOTER -->
	<div class="pre-footer pre-footer2">
		<div class="grid padding pre-footer-content2 flex-column flex-justify-center">
			<div class="add-title white-space-40 add-title-exam">Co to jest TOEIC ?</div>
			<p>TOEIC (Test of English for International Communication)<br>
				Certyfikat TOEIC został stworzony w odpowiedzi na zapotrzebowanie świata biznesu na rzetelny i obiektywny test znajomości języka angielskiego w  kontekście pracy w międzynarodowym środowisku. TOEIC&reg; jest zatem egzaminem skupionym na testowaniu biegłości posługiwania się językiem w  biurze, podczas spotkań, negocjacji czy podróży służbowych. Rocznie, do egzaminu podchodzi ponad 4 500 000 kandydatów na całym świecie.
			</p>
			<p>Uznawany przez ponad 8000 firm, korporacji i organizacji, egzamin TOEIC&reg; jest egzaminem sprawdzającym znajomość języka angielskiego w środowisku biznesowym. Egzamin ten jest przeznaczony dla osób, dla których język angielski nie jest językiem ojczystym, zapewnia precyzyjny pomiar umiejętności językowych, w zakresie rozumienia ze słuchu, czytania oraz gramatyki.
			</p>
			<p>TOEIC&reg; jest obecnie najbardziej popularnym egzaminem na świecie, wybieranym przez menedżerów ds. zarządzania zasobami ludzkimi, specjalistów ds. rekrutacji, uczelnie państwowe oraz prywatne, administrację państwową oraz klientów indywidualnych.
			</p>
		</div>
	</div>
	
	
	<div class="additional-info">
		<div class="grid padding">
			<div class="add-title add-title-small">Oferowane egzaminy i szczegółowe informacje</div>
				<div class="language-buttons flex flex-column flex-row-ml flex-items-start flex-justify-between flex-wrap white-space-0">
				<a href="toeic.html" class="confirm-btn flex margin-bottom-40 background-white">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">TOEIC&reg;</div>
				</a>
				<a href="toeic-bridge.html" class="confirm-btn flex margin-bottom-40 background-white">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">TOEIC&reg; Bridge</div>
				</a>
				<a href="toefl.html" class="confirm-btn flex margin-bottom-40 background-white">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">TOEFL&reg;</div>
				</a>
				<a href="tfi.html" class="confirm-btn flex margin-bottom-40 background-white">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">TFI&trade;</div>
				</a>
				<a href="widaf.html" class="confirm-btn flex margin-bottom-40 background-white">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">WiDaF</div>
				</a>
			</div>
	</div>
		
	</div>
	
	
	<!-- FOOTER -->
<?php get_footer();?>