<?php
/**
 * Template part for displaying the responsive menu content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moonbase
 */

?>

<nav id="menu-content">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    <ul class="flex flex-col gap-y-2" role="list">
        <?php
		wp_nav_menu(
			array(
				'theme_location' => 'desktop_menu',
				'depth'          => 1,
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => 'mb_default_menu',
			)
		);
		?>
    </ul>
</nav>