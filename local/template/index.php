<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<section class="hero">
		<div class="container">

			<div class="hero__content">
				<div class="hero__content_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__car.png" alt="">
				</div>
				<div class="hero__list">
					<div class="hero__item">
						<div class="hero__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/wrench.svg" alt="">
						</div>
						<p>Выездное обслуживание и <br>ремонт инженерных систем</p>
					</div>
					<div class="hero__item"> 
						<div class="hero__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/manufacturing.svg" alt="">
						</div>
						<p>Услуги электриков,<br> сантехников, отделочников</p>
					</div>
					<div class="hero__item">
						<div class="hero__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/error.svg" alt="">
						</div>
						<p>Аварийный сервис <br>24 часа</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="work">
		<div class="work__container container">

			<div class="work__text">
				<p>
					Вы Собственник, Арендатор здания, помещения, офиса? 
					<br>Вы уверены, что Ваши затраты на содержание  инженерных систем  адекватны?
					<br>Может быть, Вас не устраивает уровень сервиса?
				</p>
				<p><b>ОБРАЩАЙТЕСЬ К НАМ!</b></p>
				<p>
					Мы поможем Вам найти оптимальный вариант обслуживания,  который позволит не <br>
					переплачивать за содержание штата на объекте. <br>
					Все работы  будут выполнены качественно и в срок.
				</p>
				<p>
					Для каждого из этих объектов мы можем разработать индивидуальный план- график выездного 
					обслуживания инженерных систем, спланировать исполнение заявок и осуществить аварийную поддержку
				</p>
			</div>

			<div class="work__acardion">
				<h2>Для кого мы работаем?</h2>
				<ul>
					<li><span></span>Бизнес центры, офисы, коворкинги</li>
					<li><span></span>Апарт отели, гостиницы</li>
					<li><span></span>Жилые комплексы</li>
					<li><span></span>Торговые центры, магазины</li>
					<li><span></span>Производство</li>
					<li><span></span>Кафе и рестораны</li>
				</ul>
			</div>

		</div>
	</section>

	<section class="expert">
		<div class="container">

			<h2>Наши специалисты:</h2>

			<div class="expert__list">

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/pipe.svg" alt="">
						</div>
						<p class="expert__item_title">Сантехники</p>
						<p class="expert__item_text">
							Ремонт и <br>обслуживание <br>сантехнических систем
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/idea.svg" alt="">
						</div>
						<p class="expert__item_title">Электрики</p>
						<p class="expert__item_text">
							Ремонт и обслуживание <br>Электроустановок и систем <br> освещения
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/brush.svg" alt="">
						</div>
						<p class="expert__item_title">Отделочники</p>
						<p class="expert__item_text">
							Ремонт <br>элементов отделки
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/electric-mixer.svg" alt="">
						</div>
						<p class="expert__item_title">Специалисты по <br>пищевому <br>оборудованию</p>
						<p class="expert__item_text">
							Ремонт и обслуживание <br>кулинарного оборудования
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/alarm.svg" alt="">
						</div>
						<p class="expert__item_title">Специалисты по <br>пожарным<br> системам</p>
						<p class="expert__item_text">
							Ремонт и обслуживание <br>противопожарных систем
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/attention.svg" alt="">
						</div>
						<p class="expert__item_title">Аварийная бригада <br>24/7</p>
						<p class="expert__item_text">
							Выезд на аварию в <br>течение 2 часов. <br>Круглосуточная <br>испетчерская
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/fan.svg" alt="">
						</div>
						<p class="expert__item_title">Специалисты <br>по вентиляции</p>
						<p class="expert__item_text">
							Ремонт и обслуживание <br>вентиляционных систем
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

				<div class="expert__item">
					<div>
						<div class="expert__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/wire.svg" alt="">
						</div>
						<p class="expert__item_title">Слаботочники</p>
						<p class="expert__item_text">
							Ремонт и обслуживание <br>видеонаблюдения и систем <br>контроля доступа
						</p>
					</div>
					<a href="<?php the_field('services', 'option'); ?>" class="expert__btn btn">Подробнее</a>
				</div>

		</div>
	</section>

	<section class="object" id="object">
		<div class="container">

			<h2>Наши объекты</h2>
			
			<div id="photo-gallery">
				<div class="row object__list">
					<?php
					if( have_rows('object') ): 
						$total = count(get_field('object'));
						$count = 0;
						$number = 5;
						while ( have_rows('object') ) : the_row(); 
							$img = get_sub_field('img');
							$text = get_sub_field('text');
						?>
							<a href="<?php echo $img; ?>" class="object__item" data-fancybox="gallery">
								<img src="<?php echo $img; ?>" alt="">
								<div class="object__item_content">
									<p><?php echo $text; ?></p>
									<div class="object__item_img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/search.svg" alt="">
									</div>
								</div>
							</a>
							<?php
							if ($count == $number) {
								// we've shown the number, break out of loop
								break;
							} ?>
						<?php $count++; endwhile;
					else : endif;
					?>
				</div>
				<div class="object__btn">
					<a id="gallery-load-more" class="btn" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>
						<b>Все объекты</b>
					</a>
				</div>
			</div>

			<script type="text/javascript">
				var my_repeater_field_post_id = <?php echo $post->ID; ?>;
				var my_repeater_field_offset = <?php echo $number + 1; ?>;
				var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
				var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
				var my_repeater_more = true;
				
				function my_repeater_show_more() {
					
					// make ajax request
					jQuery.post(
						my_repeater_ajax_url, {
							// this is the AJAX action we set up in PHP
							'action': 'my_repeater_show_more',
							'post_id': my_repeater_field_post_id,
							'offset': my_repeater_field_offset,
							'nonce': my_repeater_field_nonce
						},
						function (json) {
							// add content to container
							// this ID must match the containter 
							// you want to append content to
							jQuery('#photo-gallery .row').append(json['content']);
							// update offset
							my_repeater_field_offset = json['offset'];
							// see if there is more, if not then hide the more link
							if (!json['more']) {
								// this ID must match the id of the show more link
								jQuery('#gallery-load-more').css('display', 'none');
							}
						},
						'json'
					);
				}
				
			</script>
		</div>
	</section>

	<section class="client">
		<div class="container">

			<div class="client__header">
				<h2>Нашим клиентам нравится наш сервис:</h2>
				<div class="client__header_arrow">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>

			<div class="client__slider swiper-container">
				<?php if( have_rows('reviews') ): ?>
					<div class="swiper-wrapper">
						<?php while( have_rows('reviews') ): the_row(); 
							$text = get_sub_field('text');
							$name = get_sub_field('name');
							$position = get_sub_field('position');
							$date = get_sub_field('date');
						?>

							<div class="swiper-slide client__slider_item">
								<p class="client__slider_text">
									<?php echo $text; ?>
								</p>
								<div class="client__slider_info">
									<p class="client__slider_name"><b><?php echo $name; ?></b></p>
									<p><?php echo $position; ?></p>
								</div>
								<div class="client__slider_info">
									<time><?php echo $date; ?></time>
								</div>
							</div>

						<?php endwhile; ?>
				<?php endif; ?>
				</div>
				<div class="client__pagination swiper-pagination"></div>
			</div>


		</div>
	</section>

	<section class="contacts" id="contacts">
		<div class="container">

			<h2>Контакты</h2>

			<div class="contacts__form contacts__wrap">
				<div class="contacts__wrap_info">
					<div>
						<p><b>Телефоны:</b></p>
						<p>
							<span><a href="tel:<?php the_field('tel1_url', 'option'); ?>"><?php the_field('tel1', 'option'); ?></a> - Москва</span>
							<span><a href="tel:<?php the_field('tel2_url', 'option'); ?>"><?php the_field('tel2', 'option'); ?></a> - Санкт-Петербург</span>
						</p>
					</div>
					<div>
						<p><b>Email:</b></p>
						<p><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></p>
					</div>
				</div>
				<h2>Напишите нам!</h2>
				<div class="contacts__form">

					<?php echo do_shortcode( '[caldera_form id="CF5ee023534c7b6"]' ); ?>

				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>