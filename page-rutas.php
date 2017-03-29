<?php
/*
	Template Name: Rutas
 */
 get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

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
					<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-4'); ?>>
						<a href="<?php the_permalink(); ?>">
							<div class="imagen-destacada">
								<?php the_post_thumbnail('toursDestacado'); ?>
								<a class="mas-info"  href="<?php the_permalink(); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png">
								</a>
							</div> <!--.imagen-destacada-->
							<h2><?php the_title(); ?></h2>
						</a>





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

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
