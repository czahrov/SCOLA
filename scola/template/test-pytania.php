<div class='box grid'>
	<script>
		var progi = JSON.parse( '<?php echo json_encode( $progi ); ?>' );
	</script>
	<div class='view bold flex flex-items-start'>
		<?php
			foreach( $quest as $qnum => $qitem ):
		?>
		<div class='item base1 no-shrink flex flex-column flex-items-start'>
			<div class='title'>
				<?php
					printf( "%u. %s", $qnum + 1, str_replace( "...", "<span class='hole'>...</span>", $qitem[ 'pytanie' ] ) );
				?>
			</div>
			<form class='anwser'>
				<?php
					foreach( $qitem[ 'odpowiedzi' ] as $anum => $aitem ):
				?>
				<input id='<?php echo "q{$qnum}a{$anum}"; ?>' class='<?php echo $aitem[ 'correct' ] === true?( ' correct ' ):( '' ) ?>' type='radio' name='<?php echo "q{$qnum}"; ?>' />
				<label for='<?php echo "q{$qnum}a{$anum}" ?>' class='pointer flex flex-items-center'>
					<div class='icon'></div>
					<div class='text'>
						<?php echo $aitem[ 'text' ]; ?>
					</div>
					<?php
						if( $aitem[ 'correct' ] === true ):
					?>
					<div class='note font-green fa fa-check'></div>
					<?php else: ?>
					<div class='note font-red fa fa-times'></div>
					<?php endif; ?>
					
				</label>
				<?php
					endforeach;
				?>
			</form>
			
		</div>
		<?php
			endforeach;
		?>
	</div>
	<div class='pagin flex flex-items-center flex-justify-center'>
		<div class='prev nav arrow_slide pointer flex flex-items-center'>
			<div class='text'>
				poprzednie
			</div>
			<div class='inner'>
				<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_green.png' />
			</div>
			
		</div>
		<div class='current bg-green font-light flex flex-items-center flex-justify-center'>
			<div class='number'>
				1
			</div>
			<div class=''>
				/
			</div>
			<div class='all'>
				<?php echo count( $quest ); ?>
			</div>
			
		</div>
		<div class='next nav arrow_slide pointer flex flex-items-center'>
			<img class='icon arrow right' src='<?php echo get_template_directory_uri(); ?>/img/arrow_green.png' />
			<div class='text'>następne</div>
			
		</div>
		
	</div>
	
</div>
