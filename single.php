<?php get_header(); ?>

	<main role="main" class="single__main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1 class="single__title"><?php the_title(); ?></h1>
			<!-- /post title -->

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="single__foto">
					<?php the_post_thumbnail('blogPrincipal'); // Fullsize image for the single post ?>
				</div>
			<?php endif; ?>
			<!-- /post thumbnail -->



			<div class="grid1-3 noticias__info__post">
				<!-- post details -->
				<p class="item__info__line">Escrito el: <span><?php the_date('d/m/Y'); ?></span></p>
				<p class="item__info__line">Publicado por: <span><?php the_author_posts_link(); ?></span></p>
				<p class="item__info__line">Categoría: <span><?php the_category(', '); ?></span></p>

				<!-- /post details -->
				<ul class="social__links share">
				  <li class="link__share__facebook"><a class="icon-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" onClick="ga('send', 'event', 'social', 'shareFB', '<?php the_permalink(); ?>');" target="_blank"></a></li>
				  <li class="link__share__twitter"><a class="icon-share-twitter" href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode(the_title('','',false));?> - <?php the_permalink();?>" onClick="ga('send', 'event', 'social', 'shareTW', '<?php the_permalink(); ?>');" target="_blank"></a></li>
				  <li class="link__share__whatsapp"><a class="icon-share-whatsapp" target="_blank" href="whatsapp://send?text=<?php echo rawurlencode(the_title('','',false));?> - <?php the_permalink();?>"></a></li>
				</ul>
			</div>
			<div class="grid2-3">
				<?php the_content(); // Dynamic Content ?>
				<!--?php comments_template(); ?-->
				<!--?php edit_post_link(); // Always handy to have Edit Post Links available ?-->
			</div>




		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
