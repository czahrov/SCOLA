	<nav>
		<div class="navigation-bar grid flex flex-items-center flex-justify-between padding flex-wrap flex-nowrap-ml">
			
				<a href="<?php echo home_url(''); ?>"><picture class="pointer-inner">
				  <source media="(max-width: 1023px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo_scola_white.png">
				  <source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo_scola_black.png">
				  <img class="logo src="<?php echo get_template_directory_uri(); ?>/img/logo_scola_black" alt="logo">
				</picture></a>
			
			
		
			<div class="hamburger hide-ml">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<?php
			$post = get_post();
			$slug = $post->post_name;
			$cat_blog = get_category_by_slug('blog');
			$cats = wp_get_post_categories( $post->ID );
			echo "<!--";
			echo "-->";
			?>
			<ul class="main-list flex base1 base0-ml flex-column flex-row-ml closed">
				<li class="drop-element drop-element1 flex flex-items-center flex-justify-center flex-wrap"><a href="#"
				class="<?php if( $slug === 'nasze-centrum' || $slug === 'metody-nauczania' || $slug === 'centrum-egzaminacyjne' || $slug === 'certyfikaty-jezykowe' || $slug === 'kursy' || $slug === 'tlumaczenia' || $slug === 'program' || $slug === 'kadra') echo "active"; ?>"
				>Nasze Centrum <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<ul class="dropdown-menu dropdown-menu1 base1">
						<li><a href="<?php echo home_url('nasze-centrum'); ?>">Nasze Centrum</a></li>
						<li><a href="<?php echo home_url('metody-nauczania'); ?>">Metody Nauczania</a></li>
						<li><a href="<?php echo home_url('centrum-egzaminacyjne'); ?>">Centrum Egzaminacyjne</a></li>
						<li><a href="<?php echo home_url('certyfikaty-jezykowe'); ?>">Certyfikaty Językowe</a></li>
						<li><a href="<?php echo home_url('kursy'); ?>">Kursy</a></li>
						<li><a href="<?php echo home_url('tlumaczenia'); ?>">Tłumaczenia</a></li>
						<li><a href="<?php echo home_url('program'); ?>">Program</a></li>
						<li><a href="<?php echo home_url('kadra'); ?>">Kadra</a></li>
					
					</ul>
				</li>
				<li class="drop-element drop-element2 flex flex-items-center flex-justify-center flex-wrap"><a href="#"
				class="<?php if( $slug === 'angielski' || $slug === 'niemiecki' || $slug === 'hiszpanski' || $slug === 'wloski' || $slug === 'francuski' || $slug === 'rosyjski' || $slug === 'slowacki') echo "active"; ?>"
				>Języki <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<ul class="dropdown-lang dropdown-menu dropdown-menu2 flex base1">
						<li><a href="<?php echo home_url('angielski'); ?>">Angielski</a></li>
						<li><a href="<?php echo home_url('niemiecki'); ?>">Niemiecki</a></li>
						<li><a href="<?php echo home_url('hiszpanski'); ?>">Hiszpański</a></li>
						<li><a href="<?php echo home_url('wloski'); ?>">Włoski</a></li>
						<li><a href="<?php echo home_url('francuski'); ?>">Francuski</a></li>
						<li><a href="<?php echo home_url('rosyjski'); ?>">Rosyjski</a></li>
						<li><a href="<?php echo home_url('slowacki'); ?>">Słowacki</a></li>
					</ul>
				</li>
				<li class="flex flex-items-center flex-justify-center"><a href="<?php echo home_url('aktualnosci'); ?>" class="<?php if( $slug === 'aktualnosci' || in_array( $cat_blog->cat_ID, $cats )) echo "active"; ?>">Aktualności</a></li>
				<li class="flex flex-items-center flex-justify-center"><a href="#">E-learning</a></li>
				<li class="flex flex-items-center flex-justify-center"><a href="<?php echo home_url('cennik'); ?>" class="<?php if( $slug === 'cennik' ) echo "active"; ?>">Cennik</a></li>
				<li class="flex flex-items-center flex-justify-center"><a href="<?php echo home_url('kontakt'); ?>" class="<?php if( $slug === 'kontakt' ) echo "active"; ?>">Kontakt</a></li>
			</ul>
		</div>
	</nav>