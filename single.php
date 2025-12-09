<?php
get_header();
?>

<div class="content">
	<div class="container container-cols">
		<div class="content-block">
			<div class="casinos-top__inner blog-post__top">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<nav class="breadcrumbs">', '</nav>');
				}
				?>
				<div class="blog-post__top-inner">
					<div class="blog-post__top-l">
						<div class="hero-post__date">
							<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
							</svg>
							<span><?php the_date('d.m.Y'); ?></span>
						</div>
						<div class="title"><?php the_title(); ?></div>
					</div>
					<div class="post__author">
						<?php 
						$author_id = get_the_author_meta('ID');
						$avatar = get_field('avatar', 'user_' . $author_id);
						$name = get_field('name_ua', 'user_' . $author_id);
						$role = get_field('role', 'user_' . $author_id);
						$last = get_field('lastname_ua', 'user_' . $author_id);
						$author_url = get_author_posts_url($author_id);
						?>
						<div class="post__author-inner">
							<div class="post__author-label"><?= pll__('Автор', 'dn'); ?></div>
							<a href="<?= $author_url; ?>" class="post__author-name"><?= $name; ?> <?= $last; ?></a>
							<?php if ($role) echo '<div class="post__author-role">' . $role . '</div>' ?>
						</div>
						<a href="<?= $author_url; ?>" class="author-avatar">
							<?php if ($avatar): ?>
								<img src="<?= $avatar['sizes']['thumbnail']; ?>" alt="<?= $avatar['alt']; ?>" width="70" height="70">
							<?php else: ?>
								<?php echo get_avatar($author_id, 128); ?>
							<?php endif; ?>
						</a>
					</div>
				</div>
			</div>
			<?php the_content(''); ?>
			<div class="post-recent">
				<h2 class="post-recent__title"><?= pll__('Читайте також', 'dn'); ?></h2>
				<div class="post-recent__wrap">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'paged'          => $paged,
						'post__not_in'   => array(get_the_ID()),
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();

							$date = get_the_date('d.m.Y');
					?>
							<div class="blog-posts__i">
								<div class="blog-posts__i-l">
									<?php if (has_post_thumbnail()) : ?>
										<a href="<?php the_permalink(); ?>" class="blog-posts__i-img">
											<?php the_post_thumbnail(); ?>
										</a>
									<?php else : ?>
										<?php
										$default_image_url = get_template_directory_uri() . '/assets/img/without-image.jpg';
										?>
										<a href="<?php the_permalink(); ?>" class="blog-posts__i-img">
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
									<div class="blog-posts__i-text"><?php echo wp_trim_words(get_the_excerpt(), 20, ' [...]'); ?></div>
								</div>
							</div>
					<?php
						endwhile;

						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/content', 'top'); ?>
	</div>
</div>

<?php
get_footer();
