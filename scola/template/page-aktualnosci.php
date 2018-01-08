<div id='aktualnosci' class=''>
	<div class='top'>
		<div class='box grid'>
			<div class='title bold'>
				Aktualności w centrum Językowym
			</div>
			<div class='subtitle font-green'>
				Scola
			</div>
			
		</div>
		
	</div>
	<div class='nowosci'>
		<div class='bg bg-gray-light'></div>
		<div class='box grid'>
			<div class='title bold'>
				Najnowsze
			</div>
			<div class='kafelki flex flex-wrap'>
				<?php
					foreach( aktualnosci_kafelki_najnowsze() as $item ):
				?>
				<div class='item base1 base2-mm base3-ml'>
					<div class='inner arrow_slide flex flex-column'>
						<div class='share font-green flex flex-items-center'>
							<a class='link pointer'>
								<span class='icon fa fa-share-alt'></span>
								Udostępnij
							</a>
							
						</div>
						<div class='img bgimg full' style='background-image:url(<?php echo $item[ 'img' ]; ?>);'></div>
						<div class='date bold text-center'>
							<?php echo $item[ 'date' ]; ?>
						</div>
						<div class='title text-center bold'>
							<?php echo $item[ 'title' ]; ?>
						</div>
						<div class='buttons flex flex-justify-center'>
							<?php do_action( 'customButton', array(
								'title' => 'czytaj dalej',
								
							) ) ?>
							
						</div>
						<a class='hitbox' href='<?php echo $item[ 'url' ]; ?>'></a>
						
					</div>
					
				</div>
				<?php
					endforeach;
				?>
				
			</div>
			
		</div>
		
	</div>
	<div class='informacje'>
		<div class='box grid'>
			<div class='title bold'>
				Informacje
			</div>
			<div class='kafelki flex flex-wrap flex-items-center'>
				<?php
					foreach( aktualnosci_kafelki_informacje() as $item ):
				?>
				<div class='item base1'>
					<div class='inner arrow_slide flex flex-wrap'>
						<div class='share font-green base1 flex flex-items-center'>
							<a class='link pointer'>
								<span class='icon fa fa-share-alt'></span>
								Udostępnij
							</a>
							
						</div>
						<div class='img bgimg full grow base2' style='background-image:url(<?php echo $item[ 'img' ]; ?>);'></div>
						<div class='info base1 base4-ml flex flex-column flex-justify-center'>
							<div class='date bold text-center'>
								<?php echo $item[ 'date' ]; ?>
							</div>
							<div class='title text-center bold'>
								<?php echo $item[ 'title' ]; ?>
							</div>
							<div class='buttons flex flex-justify-center'>
								<?php do_action( 'customButton', array(
									'title' => 'czytaj dalej',
									
								) ) ?>
								
							</div>
							
						</div>
						<a class='hitbox' href='<?php echo $item[ 'url' ]; ?>'></a>
						
					</div>
					
				</div>
				<?php
					endforeach;
				?>
				
			</div>
			
		</div>
		
		
	</div>
	<div class='starsze'>
		<div class='box grid'>
			<div class='title bold'>
				Starsze
			</div>
			<div class='kafelki flex flex-wrap'>
				<?php
					foreach( aktualnosci_kafelki_starsze() as $item ):
				?>
				<div class='item base1 base2-mm base3-ml'>
					<div class='inner arrow_slide flex flex-column'>
						<div class='share font-green flex flex-items-center'>
							<a class='link pointer'>
								<span class='icon fa fa-share-alt'></span>
								Udostępnij
							</a>
							
						</div>
						<div class='img bgimg full' style='background-image:url(<?php echo $item[ 'img' ]; ?>);'></div>
						<div class='date bold text-center'>
							<?php echo $item[ 'date' ]; ?>
						</div>
						<div class='title text-center bold'>
							<?php echo $item[ 'title' ]; ?>
						</div>
						<div class='buttons flex flex-justify-center'>
							<?php do_action( 'customButton', array(
								'title' => 'czytaj dalej',
								
							) ) ?>
							
						</div>
						<a class='hitbox' href='<?php echo $item[ 'url' ]; ?>'></a>
						
					</div>
					
				</div>
				<?php
					endforeach;
				?>
				
			</div>
			
		</div>
		
	</div>
	
	
</div>