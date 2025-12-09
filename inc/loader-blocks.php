<?php

// Add Custom Blocks Panel in Gutenberg
function custom_block_categories($categories, $post)
{
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'custom',
        'title' => __('Custom blocks', 'gutenberg-blocks'),
      ),
    )
  );
}
add_filter('block_categories_all', 'custom_block_categories', 10, 2);

function register_acf_block_types()
{
  acf_register_block_type(array(
    'name'              => 'plus-minus',
    'title'             => __('Plus & Minus'),
    'description'       => __('Plus & Minus'),
    'render_template'   => 'template-parts/blocks/plus-minus.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'casinos-list',
    'title'             => __('Casinos list (Rate)'),
    'description'       => __('Casinos list (Rate)'),
    'render_template'   => 'template-parts/blocks/casinos-list.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));

  acf_register_block_type(array(
    'name'              => 'casinos-list-custom',
    'title'             => __('Casinos list (Custom)'),
    'description'       => __('Casinos list (Custom)'),
    'render_template'   => 'template-parts/blocks/casinos-list-custom.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'custom-editor',
    'title'             => __('Custom Editor'),
    'description'       => __('Custom Editor'),
    'render_template'   => 'template-parts/blocks/custom-editor.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'child-pages-links',
    'title'             => __('Child pages links'),
    'description'       => __('Child pages links'),
    'render_template'   => 'template-parts/blocks/child-pages-links.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'reviews',
    'title'             => __('Reviews'),
    'description'       => __('Reviews'),
    'render_template'   => 'template-parts/blocks/reviews.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'reviews-simple',
    'title'             => __('Reviews Simple'),
    'description'       => __('Reviews Simple'),
    'render_template'   => 'template-parts/blocks/reviews-simple.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'author-block',
    'title'             => __('Author Block'),
    'description'       => __('Author Block'),
    'render_template'   => 'template-parts/blocks/author-block.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'custom-button',
    'title'             => __('Custom Button'),
    'description'       => __('Custom Button'),
    'render_template'   => 'template-parts/blocks/elem/custom-button.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
  acf_register_block_type(array(
    'name'              => 'games-list',
    'title'             => __('Games List'),
    'description'       => __('Games List'),
    'render_template'   => 'template-parts/blocks/games-list.php',
    'category'          => 'custom',
    'icon'              => 'cover-image',
    'align'             => '',
    'supports'          => array(
      'align' => array('wide'),
      'mode' => 'edit',
      'anchor' => true
    ),
  ));
}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}
