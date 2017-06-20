<?php get_header(); ?>

	</div><!-- cierre wrapper -->
	<main role="main" class="main__container">
		<section class=" home-slider home__slider">
			<?php $args = array(
				'category_name' => 'destacado',
				'order_by' => 'date',
				'order' => 'DESC',
				'post_per_page' => 3
			); ?>

			<?php $slider = new WP_Query($args); ?>
			<ul class="slider home__slider__list">
			<?php while($slider->have_posts()): $slider->the_post(); ?>
				<li class="home__slider__item">
					<a class="home__slider__item__link" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('slider'); ?>
						<div class="home__slider__info">
							<h3 class="home__slider__info__title"><?php the_title(); ?></h3>
							<p class="home__slider__info__text"><?php html5wp_excerpt('html5wp_custom_post'); ?>
							</p>
						</div>
					</a>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</section>

		<section class="quehacemos clear">
			<div class="wrapper">
			<?php $args = array(
				'post_type' => 'destacados',
				'posts_per_page' => 3,
				'order' => 'ASC',
				'orderby' => 'name'
			) ?>

			<?php $destacados = new WP_Query($args); ?>
			<?php while($destacados->have_posts() ):$destacados->the_post(); ?>
				<article id="post-<?php the_ID();?>" <?php post_class('grid1-3'); ?>>
					<div class="destacados__imagen">
						<?php the_post_thumbnail('iconoDestacado'); ?>
					</div>
					<div class="destacados__info">
						<h4 class="destacados__info__title"><?php the_title(); ?></h4>
						<p class="destacados__info__text"><?php the_excerpt(); ?></p>
					</div>
				</article>

			<?php endwhile; wp_reset_query(); ?>
			</div>
		</section>
		<div class="wrapper">
			<section class="rutas">
				<h3 class="section__titular">Rutas</h3>

				<?php $args = array(
					'posts_per_page' => 3,
					'post_type' => 'rutas',
					'order_by' => 'date',
					'order' => 'DESC'
				); ?>

				<?php $tours = new WP_Query($args); ?>
				<?php while($tours->have_posts() ): $tours->the_post(); ?>
					<article id="post-<?php the_ID();?>" <?php post_class('grid1-3 rutas__item'); ?>>
						<a href="<?php the_permalink(); ?>" class="rutas__item__link">
							<div class="rutas__item__img">
								<?php the_post_thumbnail('homeRutaDestacada'); ?>
							</div>
							<div class="rutas__item__info">
								<h3 class="rutas__item__title">
									<span><?php the_title(); ?></span>
								</h3>
							</div>
						</a>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</section>
			<section class="noticias">
				<div class="grid2-3">
					<h3 class="section__titular">Noticias</h3>
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page' => 5,
						'order' => DESC,
						'cat' => 'destacado',
						'orderby' => 'date'
					); ?>

					<?php $ultimas = new WP_Query($args); ?>
					<?php while($ultimas->have_posts() ): $ultimas->the_post(); ?>
						<article class="noticias__item clear">
							<div class="grid1-3">
								<div class="noticias__item__foto">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('mediano'); ?>
									</a>
								</div>
							</div>
							<div class="grid2-3">
								<h2 class="noticias__item__title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="noticias__item__text">
									<?php html5wp_excerpt('html5wp_custom_post') ?>
								</div>
							</div>
						</article>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<div class="grid1-3">
					<?php get_sidebar(); ?>
				</div>
			</section>
		</div>
	</main>
<?php get_footer(); ?>