<div <?php inkblot_sidebar_class( true ); ?>>
	<div class="interior">
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar-2' ) ) : ?>
		<p>This is the second sidebar.</p>
	<?php endif; ?>
	</div>
</div>