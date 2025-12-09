<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Casinos_Rate
 */

get_header();
?>

<div class="notfound">
	<div class="container">
		<h1 class="title"><?= pll__('Сторінка не знайдена', '404') ?></h1>
		<div class="text"><?= pll__('Вибачте, але сторінку, яку ви шукаєте, не вдалося знайти. Можливо, вона була видалена або ніколи не існувала.', '404') ?></div>
		<a href="<?php echo esc_url(home_url()); ?>" class="btn"><?= pll__('На головну', '404') ?></a>
	</div>
</div>

<?php
get_footer();
