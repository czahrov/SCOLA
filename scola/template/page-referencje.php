<div id='referencje' class=''>
	<div class='popup flex flex-items-center flex-justify-center'>
		<img class='img pointer'/>
		
	</div>
	<div class='top flex'>
		<div class='box grid'>
			<div class='info bold grow'>
				<div class='title header big'>
					Centrum Językowe <span class='font-green'>Scola</span>
				</div>
				<div class='subtitle header'>
					Nasze referencje
				</div>
				
			</div>
			<div class='fake base3 base2-ml hide block-mm'></div>
			
		</div>
		
	</div>
	<div class='kafelki bg-green font-light'>
		<div class='box grid flex flex-wrap'>
			<?php
				$data = array(
					'1.jpg',
					'2.jpg',
					'3.jpg',
					'4.jpg',
					'5.jpg',
					'6.jpg'
					
				);
				
				foreach( $data as $item ):
			?>
			<div class='item pointer base1 base3-mm base4-ml'>
				<div class='img bgimg contain' style='background-image: url(<?php printf( "%s/img/referencje/%s", get_template_directory_uri(), $item ); ?>);'></div>
				
			</div>
			<?php endforeach; ?>
		</div>
		
	</div>
	
</div>