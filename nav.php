<?php
/**
*	Contains the site's navigational menu
*
*/?>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="site-branding">
		<div class="site-description"><?php echo get_theme_mod( 'sidebar_title', 'Welcome!' ); ?></div>
		<div class="site-sub"><?php echo get_theme_mod( 'sidebar_subtitle', 'To my humble abode.' ); ?></div>
	</div>

	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

	<!-- footer -->
	<div class="site-info">
		<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'mosaic_theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'mosaic_theme' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'mosaic_theme' ), 'Mosaic_Theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
		<div class="copyright">Copyright &copy; <?php echo date("Y"); ?> Torky Almohaisen. All rights reserved.</div>
	</div><!-- .site-info -->
</nav><!-- #site-navigation -->

	