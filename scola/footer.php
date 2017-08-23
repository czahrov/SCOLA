<footer>
		<div class="upper-footer">
			<div class="upper-footer-content grid padding flex flex-column flex-items-center">
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_scola_black.png">
				</div>
				<div class="footer-address">ul. Jagiellońska 39, 33-300 Nowy Sącz (wejście naprzeciwko Urzędu Wojewódzkiego)<br> Tel. +48 18 53 11 007, Fax +48 18 53 11 007, info@scola.pl</div>
				<div class="footer-nav">
					<ul class="flex flex-column flex-row-ml">
						<li><a href="<?php echo home_url('nasze-centrum'); ?>">Nasze Centrum</a></li>
						<li><a href="<?php echo home_url('kursy'); ?>">Języki</a></li>
						<li><a href="<?php echo home_url('aktualnosci'); ?>">Aktualności</a></li>
						<li><a href="#">E-learning</a></li>
						<li><a href="<?php echo home_url('kadra'); ?>">Kadra</a></li>
						<li><a href="<?php echo home_url('kontakt'); ?>">Kontakt</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	
			<div class="bottom-footer">
					<div class="bottom-footer-content grid padding flex flex-column flex-items-center flex-row-ml flex-justify-between-ml">
						<div class="execution flex flex-column flex-items-center flex-row-ml">
							<div class="project">Projekt i wykonanie: </div>
							<div class="agency"><a href="http://www.scepter.pl" target="_blank" class="scepter-footer">Scepter Agencja interaktywna</a></div>
						</div>
						<div class="copyright">©Scola Centrum językowe, 2017</div>
						
					</div>
			</div>
	</footer>
	
	<a href="#"class="scrollToTop">
		<div class="top-arrow-box"><img class="top-arrow" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small_white.png"></div>
	</a>
	<a href="https://www.facebook.com/scola.nowysacz/" target="_blank" class="facebook">

	<i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
	</a>

<?php wp_footer();?>
</body>
</html>