
	<header class="header">
		<div class="header__container">

			<a href="/" class="header__logo header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
			</a>

			<button class="header__hamburger hamburger" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<nav class="header__nav nav">
				<?php 
					wp_nav_menu( array(
					'menu'=>'menu',
					'menu_class'=>'list',
					'theme_location'=>'menu',
					) );
				?>
				<a href="#" class="order_open header__btn btn">Оставить заявку</a>
			</nav>

			<div class="header__phone">
				<p><a href="tel:<?php the_field('tel1_url', 'option'); ?>"><?php the_field('tel1', 'option'); ?></a> - Москва</p>
				<p><a href="tel:<?php the_field('tel2_url', 'option'); ?>"><?php the_field('tel2', 'option'); ?></a> - Санкт-Петербург</p>
			</div>

			<a href="#" class="order_open header__btn btn">Оставить заявку</a>

		</div>
	</header>

