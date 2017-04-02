<?php
/*
	Template Name: Rutas
 */
 get_header(); ?>

<main role="main" class="main__generico">

	<h1 class="page__title"><?php the_title(); ?></h1>

	<div class="rutas__container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php $args = array(
				'post_type' => 'rutas',
				'posts_per_page' => 4,
				'order' => 'DESC',
				'orderby' => 'date',

			); ?>

			<?php $tours = new WP_Query($args); ?>
			<?php while($tours->have_posts() ): $tours->the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?> " <?php post_class('page__rutas__item'); ?> >
					<div class="imagen-destacada">
						<?php the_post_thumbnail('toursDestacado'); ?>
					</div> <!--.imagen-destacada-->
					<div class="rutas__item__info">
						<h2 class="rutas__item__title"><?php the_title(); ?></h2>

					</div>
				</article>
				<!-- /article -->
			<?php endwhile; wp_reset_postdata(); ?>
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
	</div>
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
