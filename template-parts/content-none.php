<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Casinos_Rate
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Нічого не знайдено', 'casinos-rate'); ?></h1>
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<nav class="breadcrumbs">', '</nav>');
		}
		?>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Готові опублікувати свою першу публікацію? <a href="%1$s">Почніть тут</a>.', 'casinos-rate'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>

			<p><?php esc_html_e('Вибачте, але нічого не відповідає вашим умовам пошуку. Спробуйте ще раз із іншими ключовими словами.', 'casinos-rate'); ?></p>
		<?php

		else :
		?>

			<p><?php esc_html_e('Здається, ми не можемо знайти те, що ви шукаєте. Можливо, пошук допоможе.', 'casinos-rate'); ?></p>
		<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->