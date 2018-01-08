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
				<?php foreach( menuOf( 'Nasze Centrum', true ) as $item ): ?>
				<li>
					<a href="<?php echo get_permalink( $item->ID ); ?>"><?php echo $item->post_title; ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
		</li>
		<li>
			<a>Języki</a>
			<span class='icon fa fa-angle-down'></span>
			<ul>
				<?php foreach( menuOf( 'Języki' ) as $item ): ?>
				<li>
					<a href="<?php echo get_permalink( $item->ID ); ?>"><?php echo $item->post_title; ?></a>
				</li>
				<?php endforeach; ?>
				
			</ul>
		</li>
		<li>
			<a href="<?php echo home_url( 'aktualnosci' ); ?>">Aktualności</a>
		</li>
		<li>
			<a href="<?php echo home_url( 'msues' ); ?>">Znak jakości MSUES</a>
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