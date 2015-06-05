<aside id="sidebar" class="small-12 large-4 columns">

	<?php do_action( 'foundationpress_before_sidebar' ); ?>

	<div class="sl-page">

		<nav id="nav">

			<?php

				wp_nav_menu( array (

					'theme_location' => 'sidebar-menu',
					'container' => 'false',
					'menu_class' => 'side-nav sl-side-nav',
					'depth' => '1'

					)

				);

			?>

		</nav>

		<p class="show-for-small-only text-center"><a href="#top" class="button"><i class="fa fa-arrow-circle-up"></i> Top</a></p>

		<?php dynamic_sidebar( 'sidebar-widgets' ); ?>

		<?php do_action( 'foundationpress_after_sidebar' ); ?>

	</div>

</aside>
