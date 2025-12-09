<?php 

add_filter( 'wpseo_canonical', 'custom_canonical_for_specific_urls' );
function custom_canonical_for_specific_urls( $canonical ) {
    // Масив: ключ — URL сторінки на твоєму сайті, значення — новий canonical
    $custom_canonicals = [
        home_url( '/' ) => 'https://dn.kiev.ua/ua/',
    ];

    if ( is_singular() ) {
        $current_url = get_permalink();

        if ( isset( $custom_canonicals[ $current_url ] ) ) {
            return esc_url( $custom_canonicals[ $current_url ] );
        }
    }

    return $canonical;
}