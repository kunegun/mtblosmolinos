<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="clear">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1><span><?php the_title(); ?></span></h1>
			<!-- /post title -->

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="foto">
					<?php the_post_thumbnail('blogPrincipal'); // Fullsize image for the single post ?>
				</div>
			<?php endif; ?>
			<!-- /post thumbnail -->



			<div class="grid1-3 info-single-post">
				<!-- post details -->
				<span class="date">Escrito el: <?php the_time('F j, Y'); ?></span><br>
				<span class="author"><?php _e( 'Publicado por', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span><br>
				<span><?php _e( 'Categoría: ', 'html5blank' ); the_category(', '); // Separated by commas ?></span>
				<!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
				<!-- /post details -->
				<ul class="social">
				  <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" onClick="ga('send', 'event', 'social', 'shareFB', '<?php the_permalink(); ?>');" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/social/fb.svg" width="23" height="23" alt="Facebook" title="Facebook" /></a></li>
				  <!--li><a href="https://twitter.com/home?status=<?php the_title();?> - <?php the_permalink();?>" onClick="ga('send', 'event', 'social', 'shareTW', '<?php the_permalink(); ?>');" target="_blank"><img src="<?php bloginfo('template_url') ?>/_img/_social/tw.svg" width="23" height="23" alt="Twitter" title="Twitter" /></a></li-->
				  <li><a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode(the_title('','',false));?> - <?php the_permalink();?>" onClick="ga('send', 'event', 'social', 'shareTW', '<?php the_permalink(); ?>');" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/social/tw.svg" width="23" height="23" alt="Twitter" title="Twitter" /></a></li>
				  <li class="whatsapp"><a target="_blank" href="whatsapp://send?text=<?php echo rawurlencode(the_title('','',false));?> - <?php the_permalink();?>"><img src="<?php bloginfo('template_url') ?>/img/social/wh.svg" width="23" height="23" alt="Whatsapp" title="Whatsapp" /></a></li>
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

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
