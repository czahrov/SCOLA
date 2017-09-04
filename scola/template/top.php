<div id='top' class='grid flex flex-column flex-row flex-items-center flex-justify-between'>
	<a class='logo pointer flex flex-self-stretch' href='<?php echo home_url(); ?>'>
		<div class='img bgimg contain grow'></div>
	</a>
	<div class='toggle flex hide-ml'>
		<div class='box pointer flex flex-column flex-justify-between'>
			<div class='line bg-light'></div>
			<div class='line bg-light'></div>
			<div class='line bg-light'></div>
			
		</div>
		
	</div>
	<ul class='menu bold bg-light base0 grow flex flex-column flex-row-ml flex-items-center-ml flex-justify-end'>
		<li>
			<a> Nasze Centrum </a>
			<span class='icon fa fa-angle-down'></span>
			<ul>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum' ); ?>">Nasze Centrum</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/metody-nauczania' ); ?>">Metody nauczania</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/centrum-egzaminacyjne' ); ?>">Centrum egzaminacyjne</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/certyfikaty-jezykowe' ); ?>">Certyfikaty językowe</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/kursy' ); ?>">Kursy</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/tlumaczenia' ); ?>">Tłumaczenia</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/program' ); ?>">Program</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/kadra' ); ?>">Kadra</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/regulamin' ); ?>">Regulamin</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'nasze-centrum/referencje' ); ?>">Referencje</a>
				</li>
				
			</ul>
		</li>
		<li>
			<a>Języki</a>
			<span class='icon fa fa-angle-down'></span>
			<ul>
				<li>
					<a href="<?php echo home_url( 'jezyki/angielski' ); ?>">Angielski</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'jezyki/niemiecki' ); ?>">Niemiecki</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'jezyki/hiszpanski' ); ?>">Hiszpański</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'jezyki/wloski' ); ?>">Włoski</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'jezyki/francuski' ); ?>">Francuski</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'jezyki/rosyjski' ); ?>">Rosyjski</a>
				</li>
				<li>
					<a href="<?php echo home_url( 'jezyki/slowacki' ); ?>">Słowacki</a>
				</li>
				
			</ul>
		</li>
		<li>
			<a href="<?php echo home_url( 'aktualnosci' ); ?>">Aktualności</a>
		</li>
		<li>
			<a href="<?php echo home_url( 'e-learning' ); ?>">E-learning</a>
		</li>
		<li>
			<a href="<?php echo home_url( 'cennik' ); ?>">Cennik</a>
		</li>
		<li class='kontakt'>
			<a href="<?php echo home_url( 'kontakt' ); ?>">Kontakt</a>
		</li>
		
	</ul>
	
</div>
<?php get_template_part( "template/fb" ); ?>
<?php get_template_part( "template/popup" ); ?>