<?php
 get_header();
 ?>
<body>

<!-- NAWIGACJA -->
<header>
	<?php get_template_part("template/menu"); ?>
	
<!-- INTRO -->
	<div class="intro">
		<div class="grid padding">
			<div class="intro-content">
				<h1>Centrum Językowe SCOLA to przełom na rynku <span>edukacji obcojęzycznej</span></h1>
				<div class="intro-links flex pointer-inner">
					<a href="<?php echo home_url('nasze-centrum'); ?>"><div class="arrow-box arrow-box1 flex">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png"><div class="arrow-text">więcej o scola</div>
					</div></a>
					<a href="<?php echo home_url('kursy'); ?>"><div class="arrow-box flex">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png"><div class="arrow-text">sprawdź ofertę językową</div>
					</div></a>
				</div>
			</div>
			
		</div>
	</div>

<!-- INFORMATION
	<div class="information-bar">
								<div class="grid padding flex flex-justify-end">
									<div class="information-box">
										<h3>Wżne informacje</h3>
										<p>Kursy językowe dofinansowane ze środków UE w Scola</p>
									</div>
								</div>
								<div class="rest-bar"></div>
							</div>

	 -->
	
<!-- SLIDER -->
	<div class="slider">
	
	
			<?php
			// ETAP1: Pobieranie wpisów z danej kategorii
			$posty = get_posts(array(
				'numberposts' => -1,		// parametr określający ile postów pobrać; domyślnie jest 5; -1 oznacza że ma pobrać wszystkie
				'category_name' => 's-g',		// slug nazwy kategorii z której mają być pobierane wpisy
			));
				
				// ETAP2: Tworzenie własnej tablicy z potrzebnymi danymi
			$data_glowny = array();		// nasza tablica z danymi, którą będziemy zapełniać
			foreach( $posty as $post ){		// pętla ktora przechodzi przez całą tablice $posty, przy każdej iteracji zmienna $post wskazuje na aktualnie odczytywany element
				$title = $post->post_title;		// zmienna $post przechowuje obiekt, dlatego aby odczytać jego pole trzeba skorzystać z operatora "->"
				$img = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );		// do pobierania adresu url miniaturki wpisu korzystamy z funkcji wp_get_attachment_image_url(), która pobiera 2 parametry: ID miniaturki oraz rozmiar obrazka; ID miniaturki pobieramy funkcją get_post_thumbnail_id(), która pobiera jako parametr ID wpisu ( z obiektu $post ) i zwraca ID miniaturki; dostępne rozmiary obrazu to: thumbnail, medium, large i full (jak dobrze pamiętam), ale można też podać własne wymiary w postaci tablicy ( szerokość i wysokość )
				$date = date("d M Y", strtotime($post->post_date));
				$link = $post->ID;
				$category = $post->category_name;
			
				
				if( empty( $img ) ) $img = "https://placeimg.com/100/100/tech";		// w przypadku gdy post niema przypisanej miniaturki zwróci pusty ciąg znaków, dlatego w takim przypadku zostanie przypisany adres do generatora losowych obrazków
				
				// forma zapisu $tablica[] oznacza że podana wartość zostanie dopisana na końcu tej tablicy, tak jak w przypadku $data_joanna
				$data_glowny[] = array(
					'TITLE' => $title,
					'IMG' => $img,
					'DATE' => $date,
					'LINK' => $link,
					'CATEGORY' => $category,
				);
			}
			
			
			// ETAP3: generowanie kodu HTML
			// Ten fragment kodu należy umieścić w miejscu gdzie ma być generowany kod HTML
			foreach( $data_glowny as $item ){	// jak poprzednio pętla przechodzi po wszystkich elementach tablicy, przy każdej iteracji generuje kod HTML uzupełniony danymi z tablicy
				echo	"
					<div class='inner-slider grid padding flex flex-column flex-justify-center' style='background-image: url({$item[ 'IMG' ]})'>
							<div class='slider-date'>{$item[ 'DATE' ]}<span>*</span>{$item[ 'CATEGORY' ]}</div>
								<div class='slider-main-content'>
									<div class='slider-title'>{$item[ 'TITLE' ]}</div>
									<a href='".get_permalink()."'>
									<div class='arrow-box flex pointer-inner'>
										<img class='arrow-img'><div class='arrow-text white'>czytaj więcej</div>
									</div></a>
								</div>
							<div class='swipe-text'>swipe</div>
						</div>
						
	
				
				";
				}
			?>
			
			
			
			
			
			<!-- 
			
			"<div class='cert-box base1 base3-mm base4-ml no-shrink'>
								<a>
									<div id='post_name' style='background-image: url({$item[ 'IMG' ]})' class='cert-cover bgimg contain'></div>
					</a>
					<div class='cert-desc'>
						<ul class='box-list'>
							<li>{$item[ 'TITLE' ]}</li>
						</ul>
					</div>
				</div>";
	
			
			-->
			
	
	<!--	<div class="inner-slider grid padding flex flex-column flex-justify-center" style="	background-image: url(<?php echo get_template_directory_uri(); ?>/img/slider_home.jpg);">
			<div class="slider-date">18 stycznia 2017 roku<span>*</span>Ważne informacje</div>
			
			<div class="slider-main-content">
				<div class="slider-title">Kursy językowe dofinansowane ze środków UE w Scola</div>
				<a href="#"><div class="arrow-box flex pointer-inner">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"> <div class="arrow-text white">czytaj więcej</div>
				</div></a>
			</div>
				
			<div class="swipe-text">swipe</div>
	

			<div class="flex slider-position">
				<div class="slide-act base3"></div>
				<div class="base3"></div>
				<div class="base3"></div>
			</div>
		
			<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
		</div>
		-->
	<!--	
		<div class="inner-slider grid padding flex flex-column flex-justify-center" style="background-image: url(https://placeimg.com/500/500);"></div>
		<div class="inner-slider grid padding flex flex-column flex-justify-center" style="background-image: url(https://placeimg.com/500/500);"></div>
		<div class="inner-slider grid padding flex flex-column flex-justify-center" style="background-image: url(https://placeimg.com/500/500);"></div>
		-->
		<div class="slider-arrows flex flex-items-center pointer-inner">
				<div class="arrow-rolate slider-arrow-box slider-arrow-1"><img class="arrow-img arrow-left" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></div>
				<div class="arrow-padding slider-arrow-box slider-arrow-2"><img class="arrow-img arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"></div>
		</div>
		<div class="slider-pager"></div>
		<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
	</div>
</header>

<!-- LANGUAGES -->
	<div class="languages">
		<div class="grid flex flex-column flex-row-ml padding">
				<div class="lang-intro lang-intro1 base1 flex flex-items-center"><div>wybierz <div class="lang-text1">którego języka obcego</div><div class="lang-text2">chcesz się nauczyć</div></div></div>
			
			
			<div class="lang-wrapper flex flex-wrap-mm base1" style="
    overflow: hidden;
">
				<div class="lang-intro lang-intro2 base4 flex flex-items-center"><div>wybierz <div class="lang-text1">którego języka obcego</div><div class="lang-text2">chcesz się nauczyć</div></div></div>
				
				
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
					<div class="lang-img"><a href="<?php echo home_url('angielski'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/angielski.png" alt="angielski"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('angielski'); ?>">angielski</a></div>
				</div>
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
						<div class="lang-img"><a href="<?php echo home_url('niemiecki'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/niemiecki.png" alt="niemiecki"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('niemiecki'); ?>">niemiecki</a></div>
				</div>
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
					<div class="lang-img"><a href="<?php echo home_url('hiszpanski'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/hiszpanski.png" alt="hiszpański"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('hiszpanski'); ?>">hiszpański</a></div>
				</div>
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
					<div class="lang-img"><a href="<?php echo home_url('wloski'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/wloski.png" alt="włoski"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('wloski'); ?>">włoski</a></div>
				</div>
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
					<div class="lang-img"><a href="<?php echo home_url('francuski'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/francuski.png" alt="francuski"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('francuski'); ?>">francuski</a></div>
				</div>
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
					<div class="lang-img"><a href="<?php echo home_url('rosyjski'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/rosyjski.png" alt="rosyjski"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('rosyjski'); ?>">rosyjski</a></div>
				</div>
				<div class="lang-box base1 base3-mm base4-ml no-shrink">
					<div class="lang-img"><a href="<?php echo home_url('slowacki'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flagi/slowacki.png" alt="słowacki"></a></div>
					<div class="lang-type"><a href="<?php echo home_url('slowacki'); ?>">słowacki</a></div>
				</div>
			</div>
		
		</div>
		<div class="lang-arrows slider-arrows flex flex-items-center pointer-inner" style="bottom: 48px;">
					<div class="arrow-rolate slider-arrow-1"><img class="arrow-img arrow-left" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"></div>
					<div class="arrow-padding slider-arrow-2"><img class="arrow-img arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"></div>
		</div>
		<div class="lang-pager">1/3</div>
	</div>
<!-- INFO1 -->
	<div class="info1 text-left">
		<div class="grid padding flex flex-column flex-items-center">
			<div class="info1-text">Centrum językowe Scola oferuje<br><span>tłumaczenia na języki obce</span></div>
			<a href="<?php echo home_url('tlumaczenia'); ?>" class="confirm-btn flex">
				<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png">
				<div class="confirm-btn-text">bezpłatna wycena</div>
			</a>
		</div>
	</div>
<!-- INFO2 -->
	<div class="info2">
		<div class="grid padding flex flex-column flex-items-center">
			<div class="info2-text">"Nie ma martwych języków, są tylko uśpione umysły"</div>
			<div class="info2-author">Carlos Ruiz Zafón</div>
			<div class="info2-text2">My je obudzimy</div>
		</div>
		<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
	</div>
<!-- INFO3 -->
	<div class="info3">
		<div class="grid padding flex flex-column flex-items-center">
			<div class="info3-text">Na rynku języków obcych stale pojawiają się nowe metody nauczania. Wiele z nich z racji bycia pewnym niuansem postrzegane są jako metody lepsze od pozostałych. Wybierając metodę nauczania dla naszej szkoły przeprowadziliśmy obserwacje wśród różnych szkół, rozmawialiśmy zarówno z kursantami, jak i wykładowcami poszczególnych metod nauczania, a wszystko to po to aby jak najlepiej dopasować naszą ofertę dydaktyczną do różnych prefernecji uczniów.</div>
			<a href="<?php echo home_url('tlumaczenia'); ?>" class="confirm-btn confirm-btn-green flex">
				<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
				<div class="confirm-btn-text dark-green">bezpłatna wycena</div>
			</a>
		</div>

	</div>
<!-- INFO4 -->
<div class="info4">
		<div class="grid flex flex-column flex-row-ml">
			<div class="info-box-4 padding flex flex-column flex-items-center flex-items-start-ml base1 base2-ml">
				<div class="info1-text info4-title">Centrum językowe Scola jako<br><span>Centrum egzaminacyjne</span></div>
				<div class="info3-text info4-text">ETS - Educational Testing Service, to największa, niezależna organizacja non-profit, zajmująca się badaniami w dziedzinie edukacji i tworzeniem systemów oceny. Główna siedziba ETS mieści się w Princeton w Stanach Zjednoczonych. Od swojego powstania w 1947 roku, ETS jest liderem w badaniach edukacyjnych i udostępnianiu obiektywnych i rzetelnych systemów oceny dla klientów indywidualnych, instytucjonalnych i korporacyjnych na całym świecie.</div>
				<a href="<?php echo home_url('tlumaczenia'); ?>" class="confirm-btn confirm-btn-green flex small-none">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text dark-green">bezpłatna wycena</div>
				</a>
			</div>
			
			<div class="flex flex-column certyfications">
				<ul>
					<li><a href="<?php echo home_url('toeic'); ?>">TOEIC&reg;<div class="small-arrow-box"></div><span>szczegóły</span></a></li>
					<li><a href="<?php echo home_url('toeic-bridge'); ?>">TOEIC&reg; Bridge<div class="small-arrow-box"></div><span>szczegóły</span></a></li>
					<li><a href="<?php echo home_url('toefl'); ?>">TOEFL&reg;<div class="small-arrow-box"></div><span>szczegóły</span></a></li>
					<li><a href="<?php echo home_url('tfi'); ?>">TFI&trade;<div class="small-arrow-box"></div><span>szczegóły</span></a></li>
					<li><a href="<?php echo home_url('widaf'); ?>">WiDaF<div class="small-arrow-box"></div><span>szczegóły</span></a></li>
				</ul>
			</div>
			
			
		</div>
	</div>
<!-- OPINIONS -->

<div class="opinions">
		<div class="circle-bg">
			<div class="circle-sm-bg"></div>
		</div>
		
		
		
		<div class="grid padding flex flex-column flex-items-center flex-items-stretch-ml">
			<div class="option-title-bar flex base1 flex-items-stretch-ml">
			<div class="base3-ml"></div>
				<div class="opinion-title">Co mówią o Scoli nasi słuchacze?</div>
			</div>
			<div class="opinion-main flex flex-column flex-items-center flex-row-ml">
				<div class="opinion-avatar base3-ml flex flex-justify-end-ml">
					<img src="<?php echo get_template_directory_uri(); ?>/img/testymonial.png" alt="avatar" class="opinion-avatar-img">
				</div>
				<div class="opinion-content">
					<div class="quote-img"><img src="<?php echo get_template_directory_uri(); ?>/img/quote.png" alt="quote"></div>
					<div class="info3-text opinion-text">Kurs daje mi możliwość poznania języka używanego na codzień. Zdecydowanie dobrym pomysłem jest nacisk na porozumiewanie się tylko w języku angielskim.</div>
					<div class="opinion-wrapper flex flex-column flex-items-center flex-row-ml flex-justify-between">
						<div class="opinion-author">Anna Krztoniewicz - 25 lat</div>
						<div class="option-arrows flex flex-items-center pointer-inner">
							<div class="arrow-rolate slider-arrow-1"><img class="arrow-img arrow-left" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"></div>
							<div class="arrow-padding slider-arrow-2"><img class="arrow-img arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"></div>
						</div>
					</div>
					<a href="#" class="confirm-btn confirm-btn-green flex confirm-opinion-btn">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
						<div class="confirm-btn-text dark-green">nasze referencje</div>
					</a>
				</div>
			</div>
		</div>
		
	</div>
<!-- INFO1 -->
	<div class="info1">
		<div class="grid padding flex flex-column flex-items-center">
			<div class="info1-text">Przygotowujemy do egzaminów na<br><span>certyfikaty językowe</span></div>
			<a href="<?php echo home_url('certyfikaty-jezykowe'); ?>" class="confirm-btn flex">
				<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png">
				<div class="confirm-btn-text">dowiedz się więcej</div>
			</a>
		</div>
	</div>
<!-- Newsletter -->
	<div class="newsletter" style="position: relative;">
		<div class="grid">
			<div class="partners padding flex flex-justify-around flex-justify-center-ml">
				<img src="<?php echo get_template_directory_uri(); ?>/img/epa.jpg" class="partner-box partner-box1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ets.jpg" class="partner-box">
			</div>

			<div class="newsletter-poster flex flex-column flex-items-center padding">
				<div class="newsletter-title">Zapisz się na nasz newsletter</div>
				<div class="newsletter-text">zapisując się na newsletter będziesz otrzymywać najświeższe informacje</div>
				<div class="newsletter-type flex flex-items-center">
					<form class="flex flex-items-center base1">
						<input type="text" name="e-mail" class="newsletter-input flex flex-items-center" placeholder="Wpisz swój adres e-mail...">
						<a href="#" class="flex flex-items-center newsletter-btn">
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png">
							zapisz się
						</a>
					</form>
				</div>
				<div class="newsletter-info">* w każdej chwili możesz się z niego wypisać</div>
			</div>
		</div>
		
		
		<div class="newsletter-bot-bg"></div>
	</div>
	

	<!-- footer -->
	<?php get_footer();?>