<?php
 /* 
 Template Name: single
 */
 get_header();

 ?>
<body>

	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('aktualnosci'); ?>">Aktualności</a><span>o</span> <a href=""><?php the_title(); ?></a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-50" style="min-height: 200px;">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base77">
				<div class="language-title center-title"><?php the_title(); ?></div>
				
			
			
			</div>
		</div>
	</div>
	<!-- SINGLE POST -->
	<div class="single-poster relative" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>);">
		<div class="roll-down flex flex-items-center flex-justify-center pointer-inner arrow-box-down"><img class="arrow-img-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow_small.png"></div>
	</div>
	
	
	<div class="single-container">
		<div class="grid flex flex-column flex-row-ml">
			<div class="single-content padding">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="white-space-50"></div>
				
					
	
				<div class="single-date">Dodano: <?php echo get_the_date(); ?></div>
				<div class="single-text">
					 <?php the_content(); ?>
				</div>

				<div class="white-space-30"></div>
				<a href="#"><div class="newest-share flex flex-items-center">udostępnij</div></a>
		
				<div class="white-space-80"></div>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
				
		
		
		
			<div class="flex flex-column certyfications single-nav">
				<ul>
					<li>
						
						<div class="single-aside-title">Zobacz również</div>
					
					</li>
	
							<?php
						$args = array( 'posts_per_page' => 8, 'offset'=> 0, 'category' => 1 );
						$myposts = get_posts( $args );

						
						
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			
					
			
					
					<li>
						<a href="<?php the_permalink ();?>">
							<div class="single-aside-date">Dodano: <?php echo get_the_date(); ?><span>o</span>blog</div>
							<div class="single-aside-text"><?php the_title(); ?></div>
						</a>
					</li>
					
					
					
					
					  <?php endforeach; 
						wp_reset_postdata();?>
	
	

					<li>
						<div class="flex flex-justify-start">
						<a href="<?php echo home_url('aktualnosci'); ?>" class="confirm-btn flex">
							<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white.png">
							<div class="confirm-btn-text">zobacz wszystkie</div>
						</a>
						</div>
					</li>
					
				</ul>
			</div>
		
		</div>
	
	
		
	</div>

	
	<!-- footer -->
	<?php get_footer();?>