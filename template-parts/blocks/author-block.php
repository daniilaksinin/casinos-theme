<?php
$id = $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'author-block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
$author_id = get_the_author_meta('ID');
$avatar = get_field('avatar', 'user_' . $author_id);
$name = get_field('name_ua', 'user_' . $author_id);
$role = get_field('role', 'user_' . $author_id);
$last = get_field('lastname_ua', 'user_' . $author_id);
$author_url = get_author_posts_url($author_id);
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class='container'>
        <a href="<?= $author_url; ?>" class="author-avatar">
            <?php if ($avatar): ?>
                <img src="<?= $avatar['sizes']['thumbnail']; ?>" alt="<?= $avatar['alt']; ?>" width="70" height="70">
            <?php else: ?>
                <?php echo get_avatar($author_id, 128); ?>
            <?php endif; ?>
        </a>
        <div class="post__author-inner">
            <div class="post__author-label"><?= pll__('Автор', 'dn'); ?></div>
            <a href="<?= $author_url; ?>" class="post__author-name"><?= $name; ?> <?= $last; ?> <?php if($role) echo '<div class="post__author-role"> ' . ' - ' . $role . '</div>' ?></a>
            <span class="post__author-publish"><?= __('Опубліковано','dn') ?> <?php the_date(); ?></span>
        </div>
    </div>
</section>