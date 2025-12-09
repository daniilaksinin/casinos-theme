<?php
$id = $block['id'];
$align = get_field('align');
$var = get_field('var');
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'custom-button';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

if ($align == 'center') {
    $className .= ' custom-button-center';
} else if ($align == 'right') {
    $className .= ' custom-button-right';
}

?>

<?php
$link = get_field('btn');
if ($link):
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    $unique_class = 'btn-href-' . uniqid();

    if ($var == 'var1') {
        $btnclass = 'btn btn-href';
    } else {
        $btnclass = 'btn btn--white btn-href';
    }
?>
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <button class="<?= $btnclass; ?><?php if ($unique_class) echo ' ' . $unique_class; ?>"><?php echo esc_html($link_title); ?></button>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".<?php echo esc_js($unique_class); ?>").forEach(function(btn) {
                btn.addEventListener("click", function(e) {
                    e.preventDefault();
                    let url = '<?= $link_url; ?>';
                    let target = '<?= $link_target; ?>';
                    if (url) {
                        window.open(url, target);
                    }
                });
            });
        });
    </script>
<?php endif; ?>