<?php
$t = get_field('title');
$choose = get_field('choose');
$id = $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'games-list';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
} ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class='container'>
        <?php if ($t) echo '<h2>' . $t . '</h2>' ?>

        <?php if ($choose == 'auto'): ?>
            <?php
            $args = array(
                'post_type'      => 'games',
                'posts_per_page' => 8,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="games-list__grid">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="game-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="game-item__top">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php endif; ?>
                                    <div class="game-item__play">
                                        <svg width="3 5px" height="35px" viewBox="-0.5 0 7 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>play [#1003]</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview" transform="translate(-347.000000, -3766.000000)" fill="#fff">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M296.494737,3608.57322 L292.500752,3606.14219 C291.83208,3605.73542 291,3606.25002 291,3607.06891 L291,3611.93095 C291,3612.7509 291.83208,3613.26444 292.500752,3612.85767 L296.494737,3610.42771 C297.168421,3610.01774 297.168421,3608.98319 296.494737,3608.57322" id="play-[#1003]">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="game-item__name"><?php the_title(); ?></div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>Ігор не знайдено.</p>
            <?php endif; ?>
        <?php else : ?>
            <?php
            $featured_posts = get_field('games_list');

            if ($featured_posts && is_array($featured_posts)): ?>
                <div class="games-list__grid">
                    <?php foreach ($featured_posts as $post_id):
                        $post = get_post($post_id); // Отримуємо об'єкт поста
                        setup_postdata($post); ?>
                        <div class="game-item">
                            <a href="<?php the_permalink($post_id); ?>">
                                <div class="game-item__top">
                                    <?php if (has_post_thumbnail($post_id)) : ?>
                                        <?php echo get_the_post_thumbnail($post_id, 'medium'); ?>
                                    <?php endif; ?>
                                    <div class="game-item__play">
                                        <svg width="35px" height="35px" viewBox="-0.5 0 7 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>play [#1003]</title>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview" transform="translate(-347.000000, -3766.000000)" fill="#fff">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M296.494737,3608.57322 L292.500752,3606.14219 C291.83208,3605.73542 291,3606.25002 291,3607.06891 L291,3611.93095 C291,3612.7509 291.83208,3613.26444 292.500752,3612.85767 L296.494737,3610.42771 C297.168421,3610.01774 297.168421,3608.98319 296.494737,3608.57322"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="game-item__name"><?php echo get_the_title($post_id); ?></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</section>