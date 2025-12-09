<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casinos_Rate
 */

$logo = get_field('logo', 'options');

$code = get_field('code_head', 'options');
$code_body = get_field('code_body', 'options');

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<?= $code; ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RRCQLXH2LS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RRCQLXH2LS');
</script>
</head>

<body <?php body_class(); ?>>
	<?= $code_body; ?>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="container">
			<div class="header__l">
				<?php if ($logo) : ?>
					<a href="<?php echo esc_url(home_url()); ?>" class="header__logo" title="logo">
						<img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
					</a>
				<?php endif; ?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'menu_class' => 'header-menu__list',
					'container' => 'nav',
					'container_class' => 'header-menu'
				)
			);
			?>
			<div class="header__r">

				<div class="header__search">
					<svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
						<path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#1C212E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<ul class="header__lang">
					<?php pll_the_languages();  ?>
				</ul>
				<?php
				$link = get_field('btn', 'options');
				if ($link):
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				?>
					<a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
				<?php endif; ?>
				<div class="header__burger">
					<svg width="28px" height="28px" viewBox="0 0 12 12" enable-background="new 0 0 12 12" id="Слой_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g>
							<rect fill="#1C212E" height="1" width="11" x="0.5" y="5.5" />
							<rect fill="#1C212E" height="1" width="11" x="0.5" y="2.5" />
							<rect fill="#1C212E" height="1" width="11" x="0.5" y="8.5" />
						</g>
					</svg>
				</div>

			</div>
		</div>
	</header>
	<div class="sidemenu">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'menu_class' => 'header-menu__list',
				'container' => 'nav',
				'container_class' => 'header-menu'
			)
		);
		?>
		<?php get_search_form(); ?>
		<?php
		$link = get_field('btn', 'options');
		if ($link):
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
		?>
			<a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
		<?php endif; ?>
		<ul class="header__lang">
			<?php pll_the_languages(); ?>
		</ul>

		<div class="sidemenu__close">
			<svg width="20px" height="20px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="#1C212E" fill-rule="evenodd">
					<g id="Dribbble-Light-Preview" transform="translate(-419.000000, -240.000000)" fill="#1C212E">
						<g id="icons" transform="translate(56.000000, 160.000000)">
							<polygon id="close-[#1511]" points="375.0183 90 384 98.554 382.48065 100 373.5 91.446 364.5183 100 363 98.554 371.98065 90 363 81.446 364.5183 80 373.5 88.554 382.48065 80 384 81.446">
							</polygon>
						</g>
					</g>
				</g>
			</svg>
		</div>
	</div>
	<div class="search-modal">
		<?php get_search_form(); ?>
		<div class="search-modal__close">
			<svg width="30px" height="30px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd">
					<g id="Dribbble-Light-Preview" transform="translate(-419.000000, -240.000000)" fill="#000">
						<g id="icons" transform="translate(56.000000, 160.000000)">
							<polygon id="close-[#1511]" points="375.0183 90 384 98.554 382.48065 100 373.5 91.446 364.5183 100 363 98.554 371.98065 90 363 81.446 364.5183 80 373.5 88.554 382.48065 80 384 81.446">
							</polygon>
						</g>
					</g>
				</g>
			</svg>
		</div>
	</div>
	<main class="main">