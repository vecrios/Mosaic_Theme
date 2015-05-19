<?php

/**
 * About me page. Includes Photo and a small backgorund description
 * 
 * Template Name: About Page
 * @package Underscores_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'about' ); ?>
		<?php endwhile; // end of the loop. ?>
	</main>
</div>


<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
