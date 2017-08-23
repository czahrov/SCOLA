<?php
 /* 
 Template Name: aktualnosci
 */
 get_header();

 ?>
<body>
	<?php get_template_part("template/menu"); ?>
	
	<div class="grid padding">
		<div class="page-position">Obecnie przeglądasz: <a href="<?php echo home_url(''); ?>">Strona główna</a><span>o</span><a href="<?php echo home_url('aktualnosci'); ?>">Aktualności</a></div>
	</div>
	<!-- LANGUAGE HEADEAR -->
	<div class="language-header white-space-50" style="min-height: 200px;">
		<div class="grid padding flex flex-column flex-row-ml">
			<div class="language-wrapper flex flex-column base54">
				<div class="language-title center-title">Aktualności w centrum językowym <span class="dark-green">Scola</span></div>
				
			
			
			</div>
		</div>
	</div>
	
	<div class="newest-posts">
		<div class="newest-bg"></div>
		<div class="newest-container grid padding">
			<div class="white-space-50"></div>
			<div class="certyficat-info-title post-main-title">Najnowsze</div>
			
			
			
			
			
			
			
			<div class="flex flex-column flex-row-ml">
			
			<?php
					$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category' => 1 );
					$myposts = get_posts( $args );

					
					
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			
			
			
				<div class="newest-single base1 base3-mm no-shrink">
					<div class="newest-single-box">
						<a href="#"><div class="newest-share flex flex-items-center">udostępnij</div></a>
						
						<div class="newest-image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>);"></div>
						<div class=" flex flex-column flex-items-center newest-info-box">
							<div class="post-date"><?php echo get_the_date(); ?></div>
							<div id="<?php echo post_name; ?>" class="post-text"><?php the_title(); ?></div>
							<a href="<?php the_permalink ();?>" class="confirm-btn confirm-btn-green flex">
								<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
								<div class="confirm-btn-text dark-green">czytaj dalej</div>
							</a>
							<div class="white-space-40"></div>
						</div>
					
					</div>
				
				</div>

			  <?php endforeach; 
			wp_reset_postdata();?>
			</div>
			
			

			
			
			<div class="white-space-70"></div>
			<div class="certyficat-info-title post-main-title">Informacje</div>
			
			
			
			
					<a href="#"><div class="newest-share flex flex-items-center">udostępnij</div></a>
					<div class="newest-single-box flex flex-column flex-row-ml">
								
				<?php
						$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 2 );
						$myposts = get_posts( $args );

						
						
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			
					
						<div class="newest-image information-post-img" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>);"></div>
					
						<div class=" flex flex-column flex-items-center flex-justify-center-ml newest-info-box newest-info-box-information">
							<div class="post-date"><?php echo get_the_date(); ?></div>
							<div id="<?php echo post_name; ?>" class="post-text"><?php the_title(); ?></div>
							<a href="<?php the_permalink ();?>" class="confirm-btn confirm-btn-green flex">
								<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
								<div class="confirm-btn-text dark-green">czytaj dalej</div>
							</a>
							<div class="white-space-40"></div>
						</div>
					
					  <?php endforeach; 
						wp_reset_postdata();?>
					</div>
			
				<div class="white-space-80"></div>
				
				
				<div class="certyficat-info-title post-main-title">Starsze wpisy</div>
				<!--
					<div class="flex flex-column flex-row-ml flex-wrap">
					
							<?php

							$args = array( 'posts_per_page' => 6, 'offset'=> 3, 'category' => 1 );
							$myposts = get_posts( $args );

							
							
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					
					
					
						<div class="newest-single base1 base3-mm no-shrink">
							<div class="newest-single-box">
								<a href="#"><div class="newest-share flex flex-items-center">udostępnij</div></a>
								
								<div class="newest-image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>);"></div>
								<div class=" flex flex-column flex-items-center newest-info-box">
									<div class="post-date"><?php echo get_the_date(); ?></div>
									<div id="<?php echo post_name; ?>" class="post-text"><?php the_title(); ?></div>
									<a href="<?php the_permalink ();?>" class="confirm-btn confirm-btn-green flex">
										<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
										<div class="confirm-btn-text dark-green">czytaj dalej</div>
									</a>
									<div class="white-space-40"></div>
								</div>
							
							</div>
						
						</div>

						  <?php endforeach; 
						wp_reset_postdata();?>
					

					</div>
			
			
			
			
			
			
			<div class="white-space-60"></div>
			<div class="option-arrows flex flex-items-center flex-justify-center flex-justify-end-ml pointer-inner">
		
				<div class="post-arrow-text disabled" style="padding-right: 24px;">poprzednia strona</div>
				<div class="arrow-rolate slider-arrow-1"><img class="arrow-img arrow-left disabled" src="<?php echo get_template_directory_uri(); ?>/img/arrow_black.png"></div>
				
				<div class="arrow-padding slider-arrow-2"><img class="arrow-img arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png"></div>
				<div class="post-arrow-text" style="padding-left: 24px;">następna strona</div>
			</div>
			
			
			<div class="white-space-60"></div>
			
			-->
			
			<!-- EKSPERYMENT PAGINACYJNY -->

				 	<div class="flex flex-column flex-row-ml flex-wrap">		
			
					<?php
			  // set up or arguments for our custom query
			  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			  $query_args = array(
				'post_type' => 'post',
				'category_name' => 'blog',
				'posts_per_page' => 6,
				'paged' => $paged
			  );
			  // create a new instance of WP_Query
			  $the_query = new WP_Query( $query_args );
			?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			  
			  
			 
					
		
					
					
						<div class="newest-single base1 base3-mm no-shrink">
							<div class="newest-single-box">
								<a href="#"><div class="newest-share flex flex-items-center">udostępnij</div></a>
								
								<div class="newest-image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>);"></div>
								<div class=" flex flex-column flex-items-center newest-info-box">
									<div class="post-date"><?php echo get_the_date(); ?></div>
									<div id="<?php echo post_name; ?>" class="post-text"><?php the_title(); ?></div>
									<a href="<?php the_permalink ();?>" class="confirm-btn confirm-btn-green flex">
										<img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png">
										<div class="confirm-btn-text dark-green">czytaj dalej</div>
									</a>
									<div class="white-space-40"></div>
								</div>
							
							</div>
						
						</div>
	  
				<?php endwhile; ?>
			</div>		
			
			
				<div class="white-space-60"></div>
			


					<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
					  <div class="option-arrows flex flex-items-center flex-justify-center flex-justify-end-ml pointer-inner">
						<div class="post-next post-arrow-text">
						  <?php echo get_next_posts_link( 'następna strona', $the_query->max_num_pages ); // display older posts link ?>
						</div>
						<div class="post-prev post-arrow-text">
						  <?php echo get_previous_posts_link( 'poprzednia strona' ); // display newer posts link ?>
						</div>
					  </div>
					<?php } ?>
										
					


				<?php endif; ?>
				
		
				<div class="white-space-60"></div>		


				
						
			<!-- END OF EXPERIMENT -->
			
			
			
			
		
		</div>
	
	</div>
	

	<!-- footer -->
	<?php get_footer();?>