<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package Minileven
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-1' )&& is_home() ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary .widget-area -->
	<?php endif; ?>