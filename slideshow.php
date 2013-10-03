<?php
/**
 * Template Name: Slideshow
 * The template for displaying slideshow pages.
 *
 * @package ITPNYU
 * @subpackage we2014-theme
 * @since we20140theme 0.1
 *
 */

// FIXME: get_header('slideshow');
get_header(); ?>

<script src="//unslider.com/unslider.min.js" type="text/javascript"></script>
<style type="text/css">
  .unsliderBanner { position: relative; overflow: auto; }
  .unsliderBanner li { list-style: none; }
  .unsliderBanner ul li { float: left; }
</style>
<script type="text/javascript">
  jQuery(document).ready(function ($) { // no-conflict mode in use
  // $( document ).ready(function() {
      $('.unsliderBanner').unslider();
  });
</script>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
