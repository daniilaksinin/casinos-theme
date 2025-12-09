<?php

get_header();

$logo_url = get_the_post_thumbnail_url();
$name = get_field('name');
$rate = get_field('rate');
$offer = get_field('offer');
$play_link = get_field('play-link');
$promo = get_field('promocode');
$title = get_the_title('');
$disable = get_field('disable');
?>



<div class="content">
    <div class="container container-cols">
        <div class="content-block">
            <?php if (!$disable): ?>
                <section class="casinos-top">
                    <div class="container">
                        <div class="casinos-top__inner">
                            <?php
                            if (function_exists('yoast_breadcrumb')) {
                                yoast_breadcrumb('<nav class="breadcrumbs">', '</nav>');
                            }
                            ?>
                            <?php if ($name) echo '<h1 class="title">' . $name . '</h1>' ?>
                        </div>
                        <div class="casinos-top__info">
                            <?php if ($logo_url) : ?>
                                <div class="casinos-top__logo">
                                    <img src="<?= $logo_url; ?>" width="300" height="300" alt="<?php the_title(''); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="casinos-top__col">
                                <div class="casinos-top__col-top">
                                    <?php if ($title) echo '<div class="casinos-top__name">' . $title . '</div>' ?>
                                    <?php if ($rate) :
                                        $rate_width = ($rate * 100) / 5;
                                        if (is_int($rate) || (floatval($rate) == intval($rate))) {
                                            $rate = number_format($rate, 1);
                                        }
                                    ?>
                                        <div class="casinos-top__rate">
                                            <div class="casinos-top__rate-text"><span><?= $rate; ?></span> / 5.0</div>
                                            <div class="casinos-top__stars">
                                                <div class="casinos-top__stars-full" <?php if ($rate_width) echo ' style="width:' . $rate_width . '%"' ?>>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#ffd32a"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#ffd32a"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#ffd32a"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#ffd32a"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#ffd32a"></path>
                                                    </svg>
                                                </div>
                                                <div class="casinos-top__stars-empty">
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#c0c0c0"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#c0c0c0"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#c0c0c0"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#c0c0c0"></path>
                                                    </svg>
                                                    <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 0.5L7.69282 4.17003L11.7063 4.6459L8.73904 7.38997L9.52671 11.3541L6 9.38L2.47329 11.3541L3.26096 7.38997L0.293661 4.6459L4.30718 4.17003L6 0.5Z" fill="#c0c0c0"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if ($offer) echo '<div class="casinos-top__offer">' . $offer . '</div>' ?>
                                <?php
                                $link = $play_link;
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'] ? $link['title'] : pll__('Грати', 'casinos');
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    $unique_class = 'btn-href-' . uniqid();
                                ?>
                                    <button class="btn casinos-top__play btn-href<?php if ($unique_class) echo ' ' . $unique_class; ?>"><?php echo esc_html($link_title); ?></button>
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
                                <?php if ($promo) : ?>
                                    <div class="casinos-top__promo promocode">
                                        <svg fill="#02832B" height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 442 442" xml:space="preserve">
                                            <g>
                                                <polygon points="291,0 51,0 51,332 121,332 121,80 291,80 	" />
                                                <polygon points="306,125 306,195 376,195 	" />
                                                <polygon points="276,225 276,110 151,110 151,442 391,442 391,225 	" />
                                            </g>
                                        </svg>
                                        <span class="promo-text"><?= $promo; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $images = get_field('payment');
                                if ($images) : ?>
                                    <div class="casinos-top__payment">
                                        <div class="casinos-top__payment-title"><?= pll__('Платежные методы', 'casinos'); ?></div>
                                        <div class="casinos-top__payment-list">
                                            <?php foreach ($images as $image) {
                                                $image_id = $image['ID'];
                                                $image_url = wp_get_attachment_image_url($image_id, 'full');
                                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                                if ($image_url): ?>
                                                    <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($image_alt); ?>" />
                                            <?php endif;
                                            } ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php the_content(''); ?>
        </div>
        <?php get_template_part('template-parts/content', 'top'); ?>
    </div>
</div>

<?
get_footer(); ?>