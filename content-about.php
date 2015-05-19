<?php
/**
 * @package Mosaic_Theme
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
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="about-thumbnail"><?php the_post_thumbnail(); ?></div>
	<?php endif ?>

	<!-- Should I include name too? -->
	<!-- <div class="about-header"><?php bloginfo( 'description' ); ?></div> -->
	<div class="about-content"><?php the_content(); ?></div>

	<footer class="about-footer">
		<?php edit_post_link( __( 'Edit', 'mosaic_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</about>