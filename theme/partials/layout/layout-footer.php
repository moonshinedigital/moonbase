<?php
/**
 * Template part for the global footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moonbase
 */

?>

</main>

<footer>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<div>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<?php endif; ?>

	<div>
		<span>&copy; <?php echo gmdate( 'Y' ); ?>
			<?php
			$mb_blog_info = get_bloginfo( 'name' );
			if ( ! empty( $mb_blog_info ) ) :
				?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?></span>
	</div>

</footer>
