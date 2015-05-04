<?php
/**
*	Contains the site's navigational menu
*
*/?>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="site-branding">
		<div class="site-description"><?php bloginfo( 'description' ); ?></div>
		<div class="site-sub"><?php echo get_theme_mod( 'sidebar_subtitle', 'Welcome!' ); ?></div>
	</div>

	<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'underscores_theme' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

	<!-- footer -->
	<div class="site-info">
		<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'underscores_theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'underscores_theme' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'underscores_theme' ), 'Underscores_Theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		<div class="copyright">Copyright &copy; <?php echo date("Y"); ?> Torky Almohaisen. All rights reserved.</div>
	</div><!-- .site-info -->
</nav><!-- #site-navigation -->

	