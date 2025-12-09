<?php
$id = $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'plus-minus';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
} ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="plus-minus__col plus-minus__col--plus">
        <div class="plus-minus__top">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
                <circle style="fill:#43B05C;" cx="25" cy="25" r="25" />
                <line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="25" y1="13" x2="25" y2="38" />
                <line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="37.5" y1="25" x2="12.5" y2="25" />
            </svg>
            <?= pll__('Переваги', 'casinos') ?>
        </div>
        <?php if (have_rows('plus')) : ?>
            <div class="plus-minus__main">
                <?php while (have_rows('plus')) : the_row(); ?>
                    <div><?php the_sub_field('text'); ?></div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="plus-minus__col plus-minus__col--minus">
        <div class="plus-minus__top">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
                <circle style="fill:#e24d4d;" cx="25" cy="25" r="25" />
                <line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="37.5" y1="25" x2="12.5" y2="25" />
            </svg>
            <?= pll__('Недоліки', 'casinos') ?>

        </div>
        <?php if (have_rows('minus')) : ?>
            <div class="plus-minus__main">
                <?php while (have_rows('minus')) : the_row(); ?>
                    <div><?php the_sub_field('text'); ?></div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

</section>