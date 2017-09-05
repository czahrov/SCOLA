<?php
	$post = get_post();
	$title = $post->post_title;
	$img = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );
	$content = $post->post_content;
	$data = get_the_date( "", $post->ID );
	
?>
<div id='single' class=''>
	<div class='top grid'>
		<div class='title bold'>
			<?php echo $title; ?>
		</div>
		
	</div>
	<div class='img bgimg full' style='background-image:url(<?php echo $img; ?>);'>
		<?php do_action( 'tab', array(
			'to' => '',
			
		) ); ?>
		
	</div>
	<div class='bot flex flex-wrap flex-items-start'>
		<div class='text grid flex'>
			<div class='box grow base1 base2-ml'>
				<div class='date'>
					Dodano: <?php echo $data; ?>
				</div>
				<div class='content'>
					<?php echo $content; ?>
					 
				</div>
				<div class='share'>
					<a class='link pointer font-green'>
						<span class='icon fa fa-share-alt'></span>
						Udostępnij
					</a>
					
				</div>
			
			</div>
			<div class='fake hide base3-ml block-ml'></div>
			
		</div>
		<div class='menu font-light base1 base0-ml'>
			<div class='item header flex flex-items-center'>
				<div class='title bold'>
					Zobacz również
				</div>
				
			</div>
			<?php
				$posts = get_posts(array(
					'category_name' => 'blog',
					'numberposts' => -1,
					'order' => 'DESC',
					'orderby' => 'date',
					
				));
				foreach( $posts as $item ):
			?>
			<div class='item flex flex-wrap flex-items-center'>
				<div class='date base1 font-green-light'>
					<?php echo get_the_date( "", $item->ID ); ?>
				</div>
				<div class='title bold base1'>
					<?php echo $item->post_title; ?>
				</div>
				<a class='hitbox' href='<?php echo get_permalink( $item->ID ); ?>'></a>
				
			</div>
			<?php
				endforeach;
			?>
			<div class='item bottom flex flex-items-center'>
				<?php do_action( 'customButton', array(
					'title' => 'zobacz wszystkie',
					'class' => 'light',
					'arrow' => 'white',
					'url' => home_url( 'aktualnosci' ),
					
				) ); ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>