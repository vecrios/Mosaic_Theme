<?php
/**
*	Contains the site's navigational menu
*
*/?>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="site-branding">
		<div class="site-description"><?php bloginfo( 'description' ); ?></div>
	</div>


	<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'underscores_theme' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav><!-- #site-navigation -->

	