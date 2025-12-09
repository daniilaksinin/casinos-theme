<?php
$id = $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'casinos-list';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
} ?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class='container'>
        <?php
        $featured_posts = get_field('list');
        $all_count = 0;
        foreach ($featured_posts as $featured_post) {
            $all_count++;
        };

        if ($featured_posts) :
            $i = 0;
        ?>
            <div class="casinos-list__wrap">
                <?php foreach ($featured_posts as $featured_post) :
                    $i++;
                    $permalink = get_permalink($featured_post->ID);
                    $logo = get_the_post_thumbnail_url($featured_post->ID);
                    $title = get_the_title($featured_post->ID);
                    $name = get_field('name', $featured_post->ID);
                    $offer = get_field('offer', $featured_post->ID);
                    $name = get_field('name', $featured_post->ID);
                    $rate = get_field('rate', $featured_post->ID);
                    $play = get_field('play-link', $featured_post->ID);
                    $promo = get_field('promocode', $featured_post->ID);
                ?>
                    <div class="casinos-list__i">
                        <?php if ($all_count > 1) : ?>
                            <div class="casinos-list__i-num"><?= $i; ?></div>
                        <?php endif; ?>
                        <div class="casinos-list__i-col">
                            <a href="<?= $permalink; ?>" target="_blank" class="casinos-list__i-logo">
                                <img src="<?= $logo; ?>" alt="<?= $name; ?>">
                            </a>
                            <div class="casinos-list__i-main">
                                <?php if ($title) echo '<a class="casinos-list__i-name" href="' . $permalink . '" target="_blank">' . $title . '</a>' ?>
                                <?php if ($rate) :
                                    $rate_width = ($rate * 100) / 5;
                                    if (is_int($rate) || (floatval($rate) == intval($rate))) {
                                        $rate = number_format($rate, 1);
                                    }
                                ?>
                                    <div class="casinos-top__rate casinos-list__i-rate">
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
                        </div>
                        <div class="casinos-list__i-col">

                            <div class="casinos-list__i-offer">
                                <?php if ($offer) echo $offer; ?>
                            </div>
                            <div class="casinos-list__i-info">
                                <?php if (have_rows('features', $featured_post->ID)) : ?>
                                    <div class="casinos-list__i-list">
                                        <?php while (have_rows('features', $featured_post->ID)) : the_row();
                                            $text = get_sub_field('text');
                                        ?>
                                            <div>
                                                <svg height="16px" width="16px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310.277 310.277" xml:space="preserve">
                                                    <g>
                                                        <path style="fill:#85D67F;" d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139
                                                                        c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437
                                                                        l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z" />
                                                    </g>
                                                </svg>
                                                <?= $text ?>

                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $images = get_field('payment', $featured_post->ID);
                                if ($images) : ?>
                                    <div class="casinos-top__payment casinos-list__i-payment">
                                        <div class="casinos-top__payment-list">
                                            <?php foreach ($images as $image) : ?>
                                                <img src="<?= $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="casinos-list__i-btns">
                            <?php if ($promo) : ?>
                                <div class="casinos-list__i-promo promocode">
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
                            $link = $play;
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'] ? $link['title'] : pll__('Грати', 'casinos');
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                $unique_class = 'btn-href-' . uniqid();
                            ?>
                                <button class="btn btn-href<?php if ($unique_class) echo ' ' . $unique_class; ?>"><?php echo esc_html($link_title); ?></button>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        document.querySelectorAll(".<?php echo esc_js($unique_class); ?>").forEach(function(btn) {
                                            btn.addEventListener("click", function(e) {
                                                e.preventDefault();
                                                let url = '<?= $link_url; ?>';
                                                let target = '<?= $link_target; ?>';
                                                if (url) {
                                                    if (target === "_self") {
                                                        window.location.replace(url);
                                                    } else {
                                                        window.open(url, target);
                                                        history.replaceState(null, null, window.location.href);
                                                    }
                                                }
                                            });
                                        });
                                    });
                                </script>
                            <?php endif; ?>

                            <a href="<?= $permalink; ?>" class="casinos-list__i-view">
                                <?= pll__('Обзор', 'casinos'); ?>
                                <svg width="12px" height="12px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#02832B" />
                                </svg>
                            </a>
                            <script>
                                let href = "";
                            </script>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>