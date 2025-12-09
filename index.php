<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home_landing_init.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Refuture
 */

get_header();

if (get_locale() == 'uk') {
	$readMore = 'Читати більше';
}
?>

<div class="content">
	<div class="container container-cols">
		<div class="content-block">
			<div class="casinos-top__inner">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<nav class="breadcrumbs">', '</nav>');
				}
				?>
				<h1 class="title"><?= pll__('Блог', 'casinos') ?></h1>
			</div>
			<div class="blog-posts">
				<div class="container">
					<div class="blog-posts__list">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => 10,
							'paged'          => $paged,
						);

						$query = new WP_Query($args);

						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();

								$date = get_the_date('d.m.Y');
						?>
								<div class="blog-posts__i">
									<div class="blog-posts__i-l">
										<?php if (has_post_thumbnail()) : ?>
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>
										<?php else : ?>
											<?php
											$default_image_url = get_template_directory_uri() . '/assets/img/without-image.jpg';
											?>
											<a href="<?php the_permalink(); ?>">
												<img src="<?php echo esc_url($default_image_url); ?>" alt="Default Image">
											</a>
										<?php endif; ?>
									</div>
									<div class="blog-posts__i-r">
										<?php if ($date): ?>
											<div class="blog-posts__i-date">
												<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
													<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
												</svg>
												<span><?= $date; ?></span>
											</div>
										<?php endif; ?>
										<a href="<?php the_permalink(); ?>" class="blog-posts__i-title"><?php the_title(); ?></a>
										<div class="blog-posts__i-text"><?php the_excerpt(); ?></div>
									</div>
								</div>
						<?php
							endwhile;

							// Вивід пагінації
							echo '<div class="pagination">';
							echo paginate_links(array(
								'total' => $query->max_num_pages,
								'prev_text' => '<svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/></svg>',
								'next_text' => '<svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>',
							));
							echo '</div>';

							wp_reset_postdata();
						else :
							// Вивід, якщо пости відсутні
							echo '<p>' . __('На жаль, статті не знайдено.') . '</p>';
						endif;
						?>

					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/content', 'top'); ?>
	</div>
</div>

<?php
get_footer();
