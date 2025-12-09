<?php

// Єдиний масив для всіх налаштувань hreflang
function get_custom_hreflangs_config() {
    return [
        trailingslashit(home_url('/')) => [
            'uk-ua' => 'https://dn.kiev.ua/',
        ],
    ];
}

// Додаємо власні hreflang
add_action('wp_head', 'add_custom_hreflang_tags', 10);
function add_custom_hreflang_tags() {
    $current_url = trailingslashit(get_permalink());
    $hreflangs_config = get_custom_hreflangs_config();

    if (isset($hreflangs_config[$current_url])) {
        foreach ($hreflangs_config[$current_url] as $lang => $href) {
            echo '<link rel="alternate" hreflang="' . esc_attr($lang) . '" href="' . esc_url($href) . '" />' . "\n";
        }
    }
}

// Вимикаємо hreflang від Polylang для тих самих сторінок
add_filter('pll_rel_hreflang_attributes', function($hreflangs) {
    $current_url = trailingslashit(get_permalink());
    $hreflangs_config = get_custom_hreflangs_config();

    if (isset($hreflangs_config[$current_url])) {
        return []; // Вимикаємо hreflang Polylang
    }

    return $hreflangs;
});
