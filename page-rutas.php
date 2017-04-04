<?php
/*
	Template Name: Rutas
 */
 get_header(); ?>

<main role="main" class="main__generico">

	<h1 class="page__title page__title__rutas"><?php the_title(); ?></h1>

	<div class="rutas__container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php $args = array(
				'post_type' => 'rutas',
				'posts_per_page' => -1,
				'order' => 'DESC',
				'orderby' => 'date',
			); ?>

			<?php $tours = new WP_Query($args); ?>
			<?php $count = 0; ?>
			<?php while($tours->have_posts() ): if ($count>=6) $count=0; $count++; $tours->the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?> " <?php post_class("page__rutas__item item$count"); ?> >
					<div class="imagen-destacada">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('toursDestacado'); ?>
						</a>
					</div> <!--.imagen-destacada-->
					<div class="rutas__item__info">
						<a href="<?php the_permalink(); ?>">
							<h2 class="rutas__item__title"><?php the_title(); ?></h2>
						</a>
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
