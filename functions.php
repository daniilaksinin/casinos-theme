<?php

/**
 * Casinos Rate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Casinos_Rate
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

// Gutenberg Blocks Loader
require get_template_directory() . '/inc/loader-blocks.php';

// Admin assets
function custom_editor_styles()
{
	add_theme_support('editor-styles');
	add_editor_style('assets/css/style.css');
	add_editor_style('assets/css/admin-styles.css');
}
add_action('after_setup_theme', 'custom_editor_styles');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function casinos_rate_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Casinos Rate, use a find and replace
		* to change 'casinos-rate' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('casinos-rate', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__('Header menu', 'casinos-rate'),
			'footer-menu-1' => esc_html__('Footer menu 1', 'casinos-rate'),
			'footer-menu-2' => esc_html__('Footer menu 2', 'casinos-rate'),
			'footer-menu-3' => esc_html__('Footer menu 3', 'casinos-rate'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'casinos_rate_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'casinos_rate_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casinos_rate_content_width()
{
	$GLOBALS['content_width'] = apply_filters('casinos_rate_content_width', 640);
}
add_action('after_setup_theme', 'casinos_rate_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function casinos_rate_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'casinos-rate'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'casinos-rate'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'casinos_rate_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function casinos_rate_scripts()
{

	wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), time());
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), time());

	wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), time(), true);
	wp_enqueue_script('all-script', get_template_directory_uri() . '/assets/js/script.js', array(), time(), true);
	wp_enqueue_script('casinos-rate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'casinos_rate_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Options page 
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Налаштування теми',
		'menu_slug' 	=> 'theme-general-settings'
	));
}

/**
 * Strings for Polylang
 */
require get_template_directory() . '/inc/pll-list.php';


// add_action('template_redirect', function () {
// 	ob_start(function ($output) {
// 		// Видаляємо всі теги <link rel="alternate">
// 		return preg_replace('/<link rel="alternate"[^>]+>/', '', $output);
// 	});
// });


add_filter('wpseo_breadcrumb_links', function ($links) {
	// Перевіряємо, чи поточна сторінка є сторінкою кастомного типу 'casinos'
	if (is_singular('casinos')) {
		foreach ($links as &$link) {
			// Знаходимо посилання на /casinos та замінюємо його на головну сторінку
			if (strpos($link['url'], '/casinos') !== false) {
				$link['url'] = home_url('/');
				break;
			}
		}
	}
	return $links;
});

function my_remove_comment_fields($fields)
{
	// Видаляємо поле "сайт"
	if (isset($fields['url'])) {
		unset($fields['url']);
	}

	return $fields;
}
add_filter('comment_form_default_fields', 'my_remove_comment_fields');


function my_disable_email_validation($commentdata)
{
	// Встановлюємо email як необов'язкове
	$commentdata['comment_author_email'] = '';
	return $commentdata;
}
add_filter('preprocess_comment', 'my_disable_email_validation');


// Додаємо час коментаря в REST API
function my_add_comment_time_to_rest($response, $comment, $request)
{
	$comment_time = get_comment_time('H:i', $comment);
	$response->data['comment_time'] = $comment_time;
	return $response;
}
add_filter('rest_prepare_comment', 'my_add_comment_time_to_rest', 10, 3);


function remove_default_profile_fields()
{
?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// Приховуємо поля "Ім'я" та "Прізвище"
			$('tr.user-first-name-wrap').hide();
			$('tr.user-last-name-wrap').hide();
		});
	</script>
<?php
}
add_action('admin_footer', 'remove_default_profile_fields');

function custom_post_type_games()
{
	$args = array(
		'label'  => 'Ігри',
		'public' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => '', 'with_front' => false),
		'has_archive' => false, // Вимикає архівну сторінку, щоб уникнути конфліктів
		'publicly_queryable' => true, // Щоб можна було відкривати окремі записи
		'query_var' => true, // Дозволяє використовувати WP_Query для запитів
		'show_in_rest' => true,
	);

	register_post_type('games', $args);
}
add_action('init', 'custom_post_type_games');

// Очищення кешу після реєстрації нового типу запису
function flush_rewrite_rules_on_init()
{
	flush_rewrite_rules();
}
add_action('init', 'flush_rewrite_rules_on_init', 20);

// require_once get_template_directory() . '/inc/canonicals.php';
// require_once get_template_directory() . '/inc/hreflangs.php';

add_action('template_redirect', function() {
    ob_start(function($buffer) {
        // Видаляємо тег повністю з HTML-коду
        return preg_replace('/<meta property="og:locale:alternate" content="ru_RU"\s?\/?>/i', '', $buffer);
    });
});


add_filter( 'pll_the_languages', 'remove_hreflang_and_lang_from_switcher', 10, 2 );

function remove_hreflang_and_lang_from_switcher( $output, $args ) {
    // Видаляємо атрибути hreflang та lang
    $output = preg_replace( '/\s*(hreflang|lang)="[^"]*"/i', '', $output );
    return $output;
}

add_action( 'wp_head', 'add_xdefault_hreflang', 1 );

function add_xdefault_hreflang() {
    // Отримати URL мови за замовчуванням у Polylang
    if ( function_exists( 'pll_default_language' ) && function_exists( 'pll_home_url' ) ) {
        $default_lang = pll_default_language();
        $default_url = pll_home_url( $default_lang );

        echo '<link rel="alternate" hreflang="x-default" href="' . esc_url( $default_url ) . '" />' . "\n";
    }
}