<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moonbase
 */

get_header();
?>

<section>

	<?php if ( have_posts() ) : ?>

	<div class="page-header">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	</div>

		<?php
		// Start the Loop.
		while ( have_posts() ) :
			the_post();
			get_template_part( 'partials/content/content', 'excerpt' );

			// End the loop.
		endwhile;

		// Previous/next page navigation.
		mb_the_posts_navigation();

	else :

		// If no content, include the "No posts found" template.
		get_template_part( 'partials/content/content', 'none' );

	endif;
	?>

</section>
<?php
get_footer();
