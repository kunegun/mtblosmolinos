<?php get_header(); ?>

</div>
	<main role="main">
		<section class="home-slider">
			<?php $args = array(
				'category_name' => 'destacado',
				'order_by' => 'date',
				'order' => 'DESC',
				'post_per_page' => 3
			); ?>

			<?php $slider = new WP_Query($args); ?>
			<ul class="slider">
			<?php while($slider->have_posts()): $slider->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('slider'); ?>
						<div class="info-slider">
							<h3><?php the_title(); ?></h3>
							<?php html5wp_excerpt('html5wp_custom_post'); ?>
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
				'post_per_page' => 3,
				'order' => 'ASC',
				'orderby' => 'name'
			) ?>

			<?php $destacados = new WP_Query($args); ?>
			<?php while($destacados->have_posts() ):$destacados->the_post(); ?>
				<article id="post-<?php the_ID();?>" <?php post_class('grid1-3'); ?>>
					<div class="imagen">
						<?php the_post_thumbnail('iconoDestacado'); ?>
					</div>
					<div class="info-destacado">
						<h5><?php the_title(); ?></h5>
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="clear"></div>
				</article>

			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</section>
		<div class="wrapper">

			<section class="rutas-destacadas clear">
				<h3 class="titular"><span>Rutas</span></h3>

				<?php $args = array(
					'post_type' => 'rutas',
					'post_per_page' => 3,
					'order' => 'DESC',
					'orderby' => 'name'
				); ?>

				<?php $tours = new WP_Query($args); ?>
				<?php while($tours->have_posts() ): $tours->the_post(); ?>
					<article id="post-<?php the_ID();?>" <?php post_class('grid1-3'); ?>>
						<div class="imagen-destacada">
							<?php the_post_thumbnail('rutaDestacada'); ?>
							<a href="<?php the_permalink(); ?>" class="mas-info">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png" alt="">
							</a>
						</div>
						<div class="info-ruta">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</div>
						<div class="clear"></div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>



			</section>
			<section class="ultimas-noticias clear">
				<div class="grid2-3">
					<?php $args = array(
						'post_type' => 'post',
						'post_per_page' => 3,
						'order' => DESC,
						'orderby' => 'date'
					); ?>

					<?php $ultimas = new WP_Query($args); ?>
					<?php while($ultimas->have_posts() ): $ultimas->the_post(); ?>
						<article class="entrada clear">
							<div class="grid1-3">
								<div class="foto">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('mediano'); ?>
									</a>
								</div>
							</div>
							<div class="grid2-3">
								<h2>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
							</div>
							<div class="texto-ruta">
								<?php html5wp_excerpt('html5wp_custom_post') ?>
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