<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Refuture
 */

get_header();

if (get_locale() == 'ru_RU') {
	$resText = 'Результат поиска: %s';
} else {
	$resText = 'Результат пошуку: %s';
}

?>
<section class="search-res">
	<div class="container">
		<?php if (have_posts()) : ?>

			<div class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__($resText, 'refuture'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>

				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<nav class="breadcrumbs">', '</nav>');
				}
				?>
			</div><!-- .page-header -->
			<div class="search-res__wrap navigation-block__list">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post(); ?>

					<span class="search-res__i navigation-block__item">
						<div class="search-res__i-date"><?php the_date(''); ?></div>
						<a href="<?php the_permalink(''); ?>" class="search-res__i-title"><?php the_title(''); ?></a>
						<a class="search-res__i-link" href="<?php the_permalink(''); ?>"><?= __('Читати більше'); ?>
							<svg width="20" height="20" viewBox="0 0 24 24">
								<path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
							</svg>
						</a>
					</span>

			<?php

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
			</div>
	</div>
</section>



<?php
get_footer();
