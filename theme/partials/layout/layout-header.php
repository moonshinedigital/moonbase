<?php
/**
 * Template part for the global header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moonbase
 */

?>

<header class="bg-red-200">
	<!-- Desktop Menu Wrapper -->

	<div id="desktop-menu-wrapper">
		<!-- Desktop Menu -->
		<nav id="desktop-menu">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<ul class="flex flex-col gap-y-2" role="list">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'desktop_menu',
						'depth'          => 1,
						'container'      => false,
						'items_wrap'     => '%3$s',
						'fallback_cb'    => 'mb_menu_mising',
					)
				);
				?>
			</ul>
		</nav>
	</div>

	<!-- Mobile Menu Overlay -->

	<div id="mobile-menu" style="display:none" data-menu="inactive" role="dialog" aria-modal="true">
		<!-- Backdrop -->

		<div id="mobile-menu-backdrop"></div>
		<!-- Mobile Menu Wrapper -->

		<div id="mobile-menu-wrapper">
			<!-- Negative Area -->

			<div id="mobile-menu-external">
				<!-- Close Button -->

				<div id="btn-close-wrapper">
					<button id="btn-close" type="button">
						<span class="sr-only">Close menu</span>
						<svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>

				<!-- Mobile Menu -->
				<nav id="mobile-menu-content">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<ul class="flex flex-col gap-y-2" role="list">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'mobile_menu',
								'depth'          => 1,
								'container'      => false,
								'items_wrap'     => '%3$s',
								'fallback_cb'    => 'mb_menu_mising',
							)
						);
						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Mobile Header -->

	<div id="mobile-header">
		<button id="btn-open" type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
			<span class="sr-only">Open menu</span>
			<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
			</svg>
		</button>

		<div class="flex-1 text-sm font-semibold leading-6 text-gray-900">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
	</div>
</header>

<main class="p-base bg-blue-200 lg:ml-72">
