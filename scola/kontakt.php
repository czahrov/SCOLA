<?php
 /* 
 Template Name: kontakt
 */
 get_header();

 ?>
<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('kontakt'); ?>">Kontakt</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-50" style="min-height: 200px;">
		<div class="grid padding flex flex-column flex-row-ml relative">
			<div class="language-wrapper flex flex-column base2">
				<div class="language-title center-title">Skontaktuj się z nami</span></div>
				<div class="contact-info">CENTRUM JĘZYKOWE SCOLA</div>
				<div class="contact-info">ul. Jagiellońska 39</div>
				<div class="contact-info">33-300 Nowy Sącz</div>
				<div class="contact-info">(wejście naprzeciwko Urzędu Wojewódzkiego)</div>
				<div class="contact-info">Tel. +48 18 53 11 07</div>
				<div class="contact-info">Fax +48 18 53 11 07</div>
				<a><div class="contact-info">info@scola.pl</div><a/>
				<div class="white-space-40"></div>
				<div class="grid flex flex-column flex-items-start">
				<a href="#" class="confirm-btn confirm-btn-green confirm-small-btn flex">
					<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
					<div class="confirm-btn-text confirm-btn-small-text dark-green">nasze kompetencje</div>
				</a>
				<div class="white-space-40"></div>
				
				</div>
				
				
			</div>
			<div class="cotact-form-container flex flex-column base2">
				<div class="contact-form-intro">uzupełnij dane i wyślij e-mail</div>
				
				
					<form id='contact'>
						<div class="translate-form flex flex-column">
							<div class="translate-wrapper flex flex-wrap">
												
												<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="white-space-50"></div>

													 <?php the_content(); ?>

								
<?php endwhile; ?>
				<?php endif; ?>


						
								<!--
								<div class="translate-form-row contact-form-row">				
									<label for='name'>Imię</label>
									<input class="imie translate-space" id='name' name='full-name' type='text' placeholder='Imię *'/>
								</div>
								<div class="translate-form-row contact-form-row contact-form-row2">				
									<label for='sur_name'>Nazwisko</label>
									<input class="nazwisko translate-space" id='sur_name' name='sur_name' type='text' placeholder='Nazwisko *'/>
								</div>
								
								<div class="translate-form-row contact-form-row">		
									<label for='e-mai'>Email</label>
									<input class="email translate-space" id='e-mail' name='email' type='email' placeholder='Adres e-mail *'/>
								</div>
								<div class="translate-form-row contact-form-row contact-form-row2">		
										<label for='tel'>Phone</label>
										<input id='tel' class='tel' name='phone' type='tel' placeholder='Numer telefonu *'/>
								</div>
								
								<label for='contact-text'>translate text</label>
								<textarea id='contact-text' name='contact-message' placeholder="Treść wiadomości:" class="base1 msg"></textarea>
			
								<div class="translate-btns flex flex-column flex-row-mm base1 flex-justify-start-mm flex-items-center">
									<a class="send confirm-btn form-btn flex" style="margin-left: 0;">
										<div class="confirm-btn-text confirm-btn-contact">
											wyślij e-mail
										</div>
									</a>
									<a class="reset confirm-btn flex form-btn">
										<div class="confirm-btn-text">
											wyczyść formularz
										</div>
									</a>
								</div>
								-->
								
							</div>
						</div>
					</form>
				

			</div>
		</div>
		
		<div class="contact-bg-cover"></div>
		
	</div>
	
	<!-- MAP -->
	<div class="map">
		<div class="grid padding">
		<div class="map-container">
		
			<div id="my_map">
				<div id="test" class="gmap3 top"></div>
			</div>
		
		</div>
		
		</div>
	
		
	</div>

	
	
	<!-- FOOTER -->
<?php get_footer();?>