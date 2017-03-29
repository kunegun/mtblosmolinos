<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="clear">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<!-- post title -->
		<h1><span><?php the_title(); ?></span></h1>
		<!-- /post title -->

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail('rutassPrincipal'); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<div class="clear"></div>

			<div class="informacion-viaje">

					<p>Track de referencia: <a href="<?php the_field('track'); ?>" target="_blank"><span>Enlace de wikiloc</span></a></p>
					<p>Lugar de salida: <span><?php the_field('lugar_de_salida'); ?></span></p>
					<p class="fecha">Duración: <span><?php the_field('duracion'); ?> horas</span></p>

			</div>

			<h2 class="itinerario">Descripcion de la ruta</h2>

			<?php the_field('descripcion_de_la_ruta'); ?>



		</article>
		<!-- /article -->




		<div class="grid1-3">
			<h3>Galería de Imagenes</h3>
			<?php the_content(); // galeria ?>


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

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
