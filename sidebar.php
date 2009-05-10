<div <?php inkblot_sidebar_class(); ?>>
	<ul class="interior">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<p>This is the first sidebar.</p>
		<?php endif; ?>
	</ul>
</div>