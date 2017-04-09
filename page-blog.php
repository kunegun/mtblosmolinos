<?php
/*
	Template Name: Blog
 */
 get_header(); ?>

	<main role="main" class="main__noticias">

			<h1 class="page__title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>
			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page' => 5,
				'orderby' => 'date',
				'order' => DESC,
				'paged' => $paged
			); ?>

			<?php $noticias = new WP_Query($args); ?>
			<?php $i = 0; ?>
			<?php while($noticias->have_posts() ): $noticias->the_post(); ?>

			<?php if ($i==0) { ?>

				<article class="noticias__item destacada clear">
					<div class="noticias__item__foto top">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('blogPrincipal'); ?>
						</a>
					</div>

					<div class="grid1-3 noticias__item__info">
						<p class="item__info__line">Escrito el: <span><?php the_date('d/m/Y'); ?></span></p>
						<p class="item__info__line">Publicado por: <span><?php the_author_posts_link(); ?></span></p>
						<p class="item__info__line">Categoría: <span><?php the_category(', '); ?></span></p>
					</div>
					<div class="grid2-3">
						<h2 class="noticias__item__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="noticias__item__text">
							<?php html5wp_excerpt('html5wp_custom_post'); ?>
						</p>
					</div>
				</article>
				<?php } else { ?>
				<!-- FIN ENTRADA DESTACADA -->

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
						<p class="noticias__item__text">
							<?php html5wp_excerpt('html5wp_custom_post'); ?>
						</p>
					</div>
				</article>
				<?php } ?>
				<!-- FIN ENTRADAS -->
			<?php $i++;endwhile; ?>
				<ul class="paginacion clear">
					<li><?php previous_posts_link('&laquo; Anterior', $noticias->max_num_pages); ?></li>
					<li><?php next_posts_link('Siguiente &raquo;', $noticias->max_num_pages); ?></li>
				</ul>
			<?php wp_reset_postdata(); ?>


			<?php edit_post_link(); ?>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
