<div class='sticky_menu header flex flex-column'>
	<?php foreach( egzaminyMenu() as $item ): ?>
	<a class='item pointer bg-green font-light flex flex-items-center' href='<?php echo $item[ 'url' ]; ?>'>
		<div class='text'>
			<?php echo $item[ 'title' ]; ?>
		</div>
		<div class='icon bgimg'></div>
		
	</a>
	<?php endforeach; ?>
</div>
