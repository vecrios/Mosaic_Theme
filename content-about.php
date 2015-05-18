<?php
/**
 * @package Underscores_Theme
 */
/**
 * TODO: 
 * Include a photo
 * A small description under it
 * Make it short and concise. 
 * Use colors to emphasize name
 */

?>

<about id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="about-header">
		<?php bloginfo( 'description' ); ?>
	</header><!-- .about-header -->

	<div class="about-content">
		<?php the_content(); ?>
	</div><!-- .about-content -->

	<footer class="about-footer">
		<?php edit_post_link( __( 'Edit', 'underscores_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .about-footer -->
</about><!-- #post-## -->




<!--  -->