<?php
/**
 * The sidebar containing the credits widget area, displays on welcome page template.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package ITPNYU 
 * @subpackage we2014-theme
 * @since we20140theme 0.1
 */

if ( is_active_sidebar( 'credits' ) ) : ?>
	<div id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'credits' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>
