<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('noticias__item clear'); ?>>

		<!-- post thumbnail -->
		<div class="grid1-3">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="noticias__item__foto">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('mediano'); // Declare pixel size you need inside the array ?>
					</a>
				</div>
			<?php endif; ?>
		</div>
		<!-- /post thumbnail -->
		<!-- /post thumbnail -->

		<div class="grid2-3">
			<!-- post title -->
			<h2 class="noticias__item__title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /Post title -->

			<!-- post details -->
			<div class="noticias__item__detalles">
				<span class="date"><?php the_date('d/m/Y'); ?> </span>
				<!--span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span-->
				<!--span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span-->
			</div>
			<!-- /post details -->
			<p class="noticias__item__text">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</p>
		</div>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
