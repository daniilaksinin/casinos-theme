<?php

$title = get_field('top__title', 'options');
?>


<div class="top-block">
    <div class="top-block__wrap">
        <?php if ($title) echo '<div class="top-block__title">' . $title . '</div>' ?>
        <?php
        $casinos = get_field('top__casinos', 'options');
        if ($casinos) : ?>
            <div class="top-block__list">
                <?php foreach ($casinos as $featured_post) :
                    $permalink = get_permalink($featured_post->ID);
                    $offer = get_field('offer', $featured_post->ID);
                    $logo = get_the_post_thumbnail_url($featured_post->ID);
                    $play = get_field('play-link', $featured_post->ID);
                ?>
                    <div href="<?php echo esc_url($permalink); ?>" class="top-block__i">
                        <a href="<?php echo esc_url($permalink); ?>" class="top-block__i-img">
                            <img src="<?= $logo; ?>" alt="<?= $name; ?>">
                        </a>
                        <div class="top-block__i-info">
                            <?php if ($offer) echo '<a href="' . $permalink . '" class="top-block__i-offer">' . $offer . '</a>' ?>
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
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>