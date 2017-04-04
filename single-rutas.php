<?php get_header(); ?>

	<main role="main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<h1 class="single__title"><?php the_title(); ?></h1>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php the_post_thumbnail('rutassPrincipal'); // Fullsize image for the single post ?>
				<?php endif; ?>
				<!-- /post thumbnail -->
				<div class="single__ruta__desc">
					<h2 class="itinerario">Descripcion de la ruta</h2>
					<h3 class="single__ruta__entradilla">
						<?php the_field('entradilla'); ?>
					</h3>
					<?php the_content(); ?>
				</div>
			</article>
			<!-- /article -->
			<div class="grid1-3">
				<div class="single__ruta__info">
					<p class="item__info__line">Distancia: <span><?php the_field('kms'); ?>kms</span></p>
					<p class="item__info__line">Tiempo: <span><?php the_field('tiempo'); ?>horas</span></p>
					<p class="item__info__line">Desnivel:  <span><?php the_field('desnivel'); ?>mts</span></p>
					<p class="item__info__line">Inicio:  <span><?php the_field('inicio'); ?></span></p>
					<?php $circular = get_field('circular');if (!$circular) : ?>
						<p class="item__info__line">Final:  <span><?php the_field('final'); ?></span></p>
					<?php endif; ?>
					<?php $enlace = get_field('enlace');if ($enlace) : ?>
						<p class="item__info__line">Track:  <span><a href="<?php the_field('enlace'); ?>" onclick="ga('send', 'event', 'interaccion', 'link track');">Track GPS</a></span></p>
					<?php endif; ?>
				</div>
				<h3>Galería de Imagenes</h3>
				<?php the_gallery(); ?>
			</div> <!--./grid1-3 galeria -->
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->
		<?php endif; ?>
	</main>
<?php get_footer(); ?>
