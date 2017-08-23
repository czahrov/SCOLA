<?php
 /* 
 Template Name: tlumaczenia
 */
 get_header();

 ?>
<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('tlumaczenia'); ?>">Tłumaczenia</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base2-ml">
				<div class="language-title">Centrum Językowe <span class="dark-green">Scola</span> oferuje tłumaczenia z/na język</div>
					<ul class="add-list add-list-green">
						<li>angielski</li>
						<li>niemiecki</li>
						<li>włoski</li>
						<li>rosyjski</li>
						<li>hiszpański</li>
						<li>chiński</li>
					</ul>
				
				<a href="#"><div class="arrow-box arrow-box-certificat flex">
						<img class="arrow-img arrow-certificat" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"> <div class="arrow-text color-dark">czytaj więcej</div>
				</div></a>
				
			
					
		
			</div>
			
			<div class="language-poster" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/poster_tlumaczenia.png);"></div>
		</div>
	</div>
	
	<!-- ADITIONAL INFORMATION -->
	<div class="overflow additional-info">
		<div class="grid padding">
			<div class="add-title certificat-title">Bezpłatna wycena tłumaczenia</div>
			<div class="certificat-text">Zapewniamy darmową wycenę oraz szybkie wykonanie usługi. Chcąc zaoszczędzić czas naszych klientów stworzyliśmy możliwość przesyłania testów do tłumaczenia drogą elektroniczną, bądź faksem.</div>
			
			
				<form>
						<div class="translate-form flex flex-column">
							<div class="translate-wrapper flex flex-wrap">
								
								

					
								<div class="translate-form-row relative">
									<div class="translate-input-dropdown translate-input-dropdown1">Język źródłowy *
									<div class="angle-box">
										<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
									</div>
									</div>
									<div class="choose-lang-container choose-lang-container1">
										<div class="choose-item flex flex-items-center">polski</div>
										<div class="choose-item flex flex-items-center">angielski</div>
										<div class="choose-item flex flex-items-center">niemiecki</div>
										<div class="choose-item flex flex-items-center">włoski</div>
										<div class="choose-item flex flex-items-center">hiszpański</div>
										<div class="choose-item flex flex-items-center">francuski</div>
										<div class="choose-item flex flex-items-center">rosyjski</div>
										<div class="choose-item flex flex-items-center">słowacki</div>
										<div class="choose-item flex flex-items-center">chiński</div>

									</div>
								</div>
								<div class="translate-form-row relative">
									<div class="translate-input-dropdown translate-input-dropdown2">Język docelowy *
									<div class="angle-box">
										<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
									</div>
									
									</div>
									<div class="choose-lang-container choose-lang-container2">
										<div class="choose-item flex flex-items-center">polski</div>
										<div class="choose-item flex flex-items-center">angielski</div>
										<div class="choose-item flex flex-items-center">niemiecki</div>
										<div class="choose-item flex flex-items-center">włoski</div>
										<div class="choose-item flex flex-items-center">hiszpański</div>
										<div class="choose-item flex flex-items-center">francuski</div>
										<div class="choose-item flex flex-items-center">rosyjski</div>
										<div class="choose-item flex flex-items-center">słowacki</div>
										<div class="choose-item flex flex-items-center">chiński</div>

									</div>
								</div>
								
								<div class="translate-form-row translate-form-row3">
									<div class="translate-input-dropdown">Wgraj plik
									<div class="angle-box">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</div>
									</div>
								</div>		
													
													
													
								<div class="translate-form-row">				
								<label for='full-name'>Name</label>
								<input class="translate-space" id='full-name' name='full-name' type='text' placeholder='Imię i Nazwisko *'/>
								</div>
									<div class="translate-form-row">		
								<label for='email'>Email</label>
								<input class="translate-space" id='email'
										   name='email'
										   type='email'
										   placeholder='Adres e-mail *'/>
								</div>
								<div class="translate-form-row translate-form-row3">		
										<label for='phone'>Phone</label>
										<input id='phone'
										   name='phone'
										   type='tel'
										   placeholder='Numer telefonu *'/>
								</div>
								
						
									<label for='translate-text'>translate text</label>
									<textarea id='translate-text' name='abstract' placeholder="Treść wiadomości" class="base1"></textarea>
			
								
						
								
								<div class="translate-btns flex flex-column flex-row-mm base1 flex-justify-end-mm flex-items-center">
									<a href="#" class="confirm-btn form-btn flex">
										<div class="confirm-btn-text">wyczyść</div>
									</a>
									<a href="#" class="confirm-btn flex form-btn">
										<div class="confirm-btn-text">wyślij do wyceny</div>
									</a>
								</div>
							</div>
						</div>
					</form>
			
			
			
			
			
			
			
			
		</div>
	</div>
	
	
<!-- FOOTER -->
<?php get_footer();?>