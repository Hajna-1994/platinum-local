<?php
/**
 * The sidebar containing the main widget area
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" style="font-family: var(--font-secondary); padding: 20px; background-color: var(--color-light-bg); border-radius: 8px;">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
