<?php
/* Template name: Услуги */
?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/header-work' ); ?>

	<section class="services">
		<div class="container">

			<h2>Услуги:</h2>

			<div class="services__wrap tabs">
				<ul class="services__list">
					<li class="click">
						<a href="#one">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/wire.svg" alt="">
							Обслуживание и ремонт слаботочных и противопожарных систем
						</a>
					</li>
					<li class="click">
						<a href="#two">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/pipe.svg" alt="">
							Обслуживание и ремонт сантехнических  и вентиляционных систем
						</a>
					</li>
					<li class="click">
						<a href="#three">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/idea.svg" alt="">
							Обслуживание систем электроснабжения и освещения
						</a>
					</li>
					<li class="click">
						<a href="#four">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/brush.svg" alt="">
							Отделочные и ремонтно- восстановительные работы
						</a>
					</li>
					<li class="click">
						<a href="#five">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/electric-mixer.svg" alt="">
							Обслуживание профессионального  кулинарного оборудования
						</a>
					</li>
					<li class="click">
						<a href="#six">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/attention.svg" alt="">
							Услуги по аварийно диспетчерскому обслуживанию
						</a>
					</li>
					<li class="click">
						<a href="#seven">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/fan.svg" alt="">
							Обслуживание вентиляционных систем
						</a>
					</li>
				</ul>
				<div id="one" class="services__content tabs__wrap">
					<?php the_field('one'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
				<div id="two" class="services__content tabs__wrap">
					<?php the_field('two'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
				<div id="three" class="services__content tabs__wrap">
					<?php the_field('three'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
				<div id="four" class="services__content tabs__wrap">
					<?php the_field('four'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
				<div id="five" class="services__content tabs__wrap">
					<?php the_field('five'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
				<div id="six" class="services__content tabs__wrap">
					<?php the_field('six'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
				<div id="seven" class="services__content tabs__wrap">
					<?php the_field('seven'); ?>
					<div class="services__content_btn">
						<a href="#" class="order_open btn">Заказать рассчет</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
