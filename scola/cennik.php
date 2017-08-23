<?php
 /* 
 Template Name: cennik
 */
 get_header();

 ?>
<body class="cennik">

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('cennik'); ?>">Cennik</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-50" style="min-height: 200px;">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base54">
				<div class="language-title center-title">Cennik kursów dla osób dorosłych i młodzieży w <span class="dark-green">Scola</span></div>
				
				<div class="language-buttons flex flex-column flex-row-ds flex-items-start flex-justify-between-ds">
					<a href="#" class="confirm-btn confirm-btn-green flex language-button">
						<div class="arrow-img language-arrow-img"></div>
						<div class="confirm-btn-text dark-green">wypełnij test</div>
					</a>
					
				</div>
			
			</div>
		</div>
	</div>
	<!-- ADD INFO -->
	<div class="additional-info relative white-space-100">
		<div class="grid padding">
			<div class="add-title certificat-title break-line-550">Cennik kursów dla dorosłych i uczniów szkół średnich</div>
			<div class="certificat-text white-space-100">całość kursu obejmuje 120 godzin lekcyjnych / więcej informacji:</div>
			
			<div class="full-table flex flex-column flex-row-mm flex-wrap">
				<div class="full-table-box base1 flex flex-column flex-row-mm no-border">
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Poziom <br>zaawansowania</div>
						<div class="table-value-big flex flex-column flex-justify-center base2">
							<div class="table-value table-value2 base3 flex flex-column flex-justify-center">
								<div class="super-table-text">1. Beginner/Elementary</div>
								<div class="super-table-text2">A0-A1</div>
							
							</div>
							<div class="table-value table-value2 base3 flex flex-column flex-justify-center">
								<div class="super-table-text">2. Pre-intermediate</div>
								<div class="super-table-text2">A2</div>
							
							</div>
							<div class="table-value table-value2 base3 flex flex-column flex-justify-center no-border">
								<div class="super-table-text">3. Intermediate</div>
								<div class="super-table-text2">B1</div>
							
							</div>
						
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Cena kursu <br> w grupie 4-8 osobowej</div>
						<div class="table-value-big flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">14 zł / 45min</div>
							<div class="super-table-text-small">całość 1680 zł</div>
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Cena kursu <br> w grupie 9-12 osobowej</div>
						<div class="table-value-big flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">11 zł / 45min</div>
							<div class="super-table-text-small">całość 1320 zł</div>
						</div>
					</div>
				
					
				</div>
				
				
				<div class="full-table-box base1 flex flex-column flex-row-mm no-border">
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Poziom <br>zaawansowania</div>
						<div class="table-value-big flex flex-column flex-justify-center base2">
							<div class="table-value table-value2 base3 flex flex-column flex-justify-center bg-gray">
								<div class="super-table-text">4. Upper-Intermediate</div>
								<div class="super-table-text2">B2</div>
							
							</div>
							<div class="table-value table-value2 base3 flex flex-column flex-justify-center bg-gray">
								<div class="super-table-text">5. Advanced</div>
								<div class="super-table-text2">C1</div>
							
							</div>
							<div class="table-value table-value2 base3 flex flex-column flex-justify-center no-border bg-gray">
								<div class="super-table-text">6. Proficient</div>
								<div class="super-table-text2">C2</div>
							
							</div>
						
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Cena kursu <br> w grupie 4-8 osobowej</div>
						<div class="table-value-big flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">14,5 zł / 45min</div>
							<div class="super-table-text-small">całość 1740 zł</div>
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Cena kursu <br> w grupie 9-12 osobowej</div>
						<div class="table-value-big flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">11,5 zł / 45min</div>
							<div class="super-table-text-small">całość 1380 zł</div>
						</div>
					</div>
				
					
				</div>
			</div>
			
			<div class="white-space-50"></div>
			
			<div class="intro-links flex pointer-inner">
					<a href="<?php echo home_url('nasze-centrum'); ?>"><div class="arrow-box arrow-box1 flex">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"> <div class="arrow-text arrow-text-white">więcej o scola</div>
					</div></a>
				
				</div>
		</div>
		<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
	</div>
	
	
	<div class="white-space-100"></div>
	
	
	<!-- ADD INFO -->
	<div class="additional-info relative white-space-100">
		<div class="grid padding">
			<div class="add-title certificat-title break-line-550">Cennik kursów dla uczniów szkół podstawowych</div>
			<div class="certificat-text white-space-100">całość kursu obejmuje 80 godzin zegarowych</div>
			
			<div class="full-table flex flex-column flex-row-mm flex-wrap">
				<div class="full-table-box base1 flex flex-column flex-row-mm no-border">
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Liczba osób <br>w grupie</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">4-8 osób</div>
							
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Ilość godzin <br> tygodniowo</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">2x60 min</div>
							<div class="super-table-text-small">(1 spotkanie liczy 60 min)</div>
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Cena kursu</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">15 zł / 60min</div>
							<div class="super-table-text-small">Całość kursu 1200 zł</div>
						</div>
					</div>
				
					
				</div>
				
				<div class="full-table-box base1 flex flex-column flex-row-mm no-border">
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Liczba osób <br>w grupie</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">9-12 osób</div>
							
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Ilość godzin <br> tygodniowo</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">2x60 min</div>
							<div class="super-table-text-small">(1 spotkanie liczy 60 min)</div>
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Cena kursu</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">13 zł / 60min</div>
							<div class="super-table-text-small">Całość kursu 1040 zł</div>
						</div>
					</div>
				
					
				</div>
				
			</div>
			
			<div class="white-space-50"></div>
			
			<div class="intro-links flex pointer-inner">
					<a href="<?php echo home_url('nasze-centrum'); ?>"><div class="arrow-box arrow-box1 flex">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"> <div class="arrow-text arrow-text-white">więcej o scola</div>
					</div></a>
				
			</div>
		</div>
		<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
	</div>
	
	<div class="white-space-100"></div>
	
	<!-- ADD INFO -->
	<div class="additional-info relative white-space-100">
		<div class="grid padding">
			<div class="add-title certificat-title break-line-550">Zajęcia indywidualne</div>
			
			<div class="full-table flex flex-column flex-row-mm flex-wrap">
				<div class="full-table-box base1 flex flex-column flex-row-mm no-border">
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Długość jednej lekcji</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">45 minut</div>
							
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2">Cena</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2">
							<div class="super-table-text-big">55 zł</div>
						
						</div>
					</div>
					
				
					
				</div>
				
				<div class="full-table-box base1 flex flex-column flex-row-mm no-border">
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Długość jednej lekcj</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">60 minut</div>
							
						</div>
					</div>
					<div class="full-table-row flex flex-column-mm base3-mm">
						<div class="table-category table-category-super flex flex-items-center base2 no-display-768">Cena</div>
						<div class="table-value-big table-value-medium flex flex-column flex-justify-center base2 bg-gray">
							<div class="super-table-text-big">70 zł</div>
					
						</div>
					</div>
					
					
				</div>
				
			</div>
			
			<div class="white-space-50"></div>
			
			<div class="intro-links flex pointer-inner">
					<a href="<?php echo home_url('nasze-centrum'); ?>"><div class="arrow-box arrow-box1 flex">
						<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png"> <div class="arrow-text arrow-text-white">więcej o scola</div>
					</div></a>
				
			</div>
		</div>
	</div>
	
	
	
	
	
	
	<!-- FOOTER -->
<?php get_footer();?>