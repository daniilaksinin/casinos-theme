<?php
$id = $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'child-pages';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
} ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class='container'>
        <div class="child-pages__list">
            <?php
            $parent_id = get_the_ID();
            $post_type = get_post_type();
            $args = array(
                'post_type'      => $post_type, 
                'post_parent'    => $parent_id,
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC' 
            );

            $child_query = new WP_Query($args);
            if ($child_query->have_posts()) {
                while ($child_query->have_posts()) {
                    $child_query->the_post();
                    echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                }
            } else {
                echo '<p>Немає дочірніх сторінок.</p>';
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>