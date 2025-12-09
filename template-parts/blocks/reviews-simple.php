<?php
$id = $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'reviews-simple';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
} ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class='container'>
        <?php if (have_rows('list')): ?>
            <div class="reviews-simple__list">
                <?php while (have_rows('list')): the_row();
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $date = get_sub_field('date');
                    $text = get_sub_field('text');
                ?>
                    <div class="reviews-simple__item">
                        <div class="reviews__slide-img">
                            <?php if ($image): ?>
                                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                            <?php else: ?>
                                <img src="/wp-content/uploads/2024/11/default-avatar-profile-icon-social-media-user-image-gray-avatar-icon-blank-profile-silhouette-illustration-vector.jpg" alt="avatar">
                            <?php endif; ?>
                        </div>
                        <div class="reviews-simple__item-inner">
                            <?php if ($name) echo '<div class="reviews__slide-name">' . $name . '</div>' ?>
                            <?php if ($date) echo '<div class="reviews__slide-date">' . $date . '</div>' ?>
                            <?php if ($text) echo '<div class="reviews__slide-text">' . $text . '</div>' ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>