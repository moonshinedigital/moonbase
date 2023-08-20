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

<footer class="mt-auto overflow-clip bg-yellow-300 lg:ml-72">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<div class="p-base mx-auto flex max-w-screen-lg flex-row justify-between border-b border-b-slate-400">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<?php endif; ?>

	<div class="p-base mx-auto max-w-screen-lg">
		<span>&copy; <?php echo date( 'Y' ); ?>
			<?php
			$mb_blog_info = get_bloginfo( 'name' );
			if ( ! empty( $mb_blog_info ) ) :
				?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?></span>
	</div>

</footer>
