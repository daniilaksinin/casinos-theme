<?php
$id = $block['id'];
$text = get_field('editor');
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'editor';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
} ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class='container'>
        <?= $text; ?>
    </div>
</section>