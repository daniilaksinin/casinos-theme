<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casinos_Rate
 */

$logo = get_field('logo', 'options');

$text = get_field('footer_text', 'options');
$footer_title_1 = get_field('footer_title_1', 'options');
$footer_title_2 = get_field('footer_title_2', 'options');
$footer_title_3 = get_field('footer_title_3', 'options');

$footer_copy = get_field('footer_copy', 'options');
?>
</main>

<footer class="footer">
	<div class="footer__top">
		<div class="container">
			<div class="footer__col">
				<?php if ($logo) : ?>
					<a href="<?php echo esc_url(home_url()); ?>" class="header__logo" title="logo">
						<img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
					</a>
				<?php endif; ?>
				<?php if (have_rows('footer_contacts', 'options')): ?>
					<div class="footer__contacts">
						<?php while (have_rows('footer_contacts', 'options')): the_row();
							$icon = get_sub_field('icon');
							$link = get_sub_field('link');
							if ($link):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
						?>
								<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
									<?php if ($icon): ?>
										<img src="<?= $icon['url']; ?>" alt="<?= $icon['alt']; ?>">
									<?php endif; ?>
									<?php echo esc_html($link_title); ?>
								</a>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if ($text) echo '<div class="footer__text">' . $text . '</div>'; ?>

			</div>
			<div class="footer__col">
				<?php if ($footer_title_1) echo '<div class="footer__title">' . $footer_title_1 . '</div>';
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-1',
						'menu_class' => 'footer-menu__list',
						'container' => 'nav',
						'container_class' => 'footer-menu'
					)
				);
				?>
			</div>
			<div class="footer__col">
				<?php if ($footer_title_2) echo '<div class="footer__title">' . $footer_title_2 . '</div>';
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-2',
						'menu_class' => 'footer-menu__list',
						'container' => 'nav',
						'container_class' => 'footer-menu'
					)
				);
				?>
			</div>
			<div class="footer__col">
				<?php if ($footer_title_3) echo '<div class="footer__title">' . $footer_title_3 . '</div>';
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu-3',
						'menu_class' => 'footer-menu__list',
						'container' => 'nav',
						'container_class' => 'footer-menu'
					)
				);
				?>
			</div>
		</div>
	</div>
	<?php if (have_rows('f_logos', 'options')) : ?>
		<div class="footer__mid">
			<div class="container">
				<div class="footer__logos">
					<?php while (have_rows('f_logos', 'options')) : the_row();
						$img = get_sub_field('img');
						$link = get_sub_field('link');
						if ($link) : ?>
							<a href="<?= $link; ?>">
								<img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>">
							</a>
						<?php else : ?>
							<span>
								<img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>">
							</span>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($footer_copy) : ?>
		<div class="footer__bot">
			<div class="container">
				<?= $footer_copy; ?>
			</div>
		</div>
	<?php endif; ?>
</footer>

<div class="top-button">
	<svg xmlns="http://www.w3.org/2000/svg" width="18.828" height="26.414" viewBox="0 0 18.828 26.414">
		<g id="Group_12307" data-name="Group 12307" transform="translate(-24.586 -16.586)">
			<line data-name="Line 1976" y2="24" transform="translate(34 18)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
			<line data-name="Line 1977" x2="8" y2="8" transform="translate(34 18)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
			<line data-name="Line 1978" x1="8" y2="8" transform="translate(26 18)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
		</g>
	</svg>
</div>

<?php wp_footer(); ?>

</body>

</html>