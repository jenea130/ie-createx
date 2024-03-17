<?php
if (!defined('ABSPATH')) {
    exit;
}
// хук для регистрации
add_action('init', 'create_taxonomy');
function create_taxonomy()
{
    $field = "Category Case Studies";
    $field1 = "Tag Case Studies";

    register_taxonomy('category-case-studies', ['case-studio'], [
        'label' => '',
        'labels' => [
            'name' => $field,
            'singular_name' => $field,
            'search_items' => 'Search ' . $field,
            'all_items' => 'All ' . $field,
            'view_item ' => 'View ' . $field,
            'parent_item' => 'Parent ' . $field,
            'parent_item_colon' => 'Parent :.$field',
            'edit_item' => 'Edit ' . $field,
            'update_item' => 'Update ' . $field,
            'add_new_item' => 'Add New ' . $field,
            'new_item_name' => 'New',
            'menu_name' => $field,
        ],
        'description' => '',
        'public' => true,
        'hierarchical' => true,
        'rewrite' => true,
        'capabilities' => array(),
        'meta_box_cb' => null,
        'show_admin_column' => true,
        'show_in_rest' => null,
        'rest_base' => null,
    ]);
    register_taxonomy('tag-case-studies', ['case-studio'], [
        'label' => '',
        'labels' => [
            'name' => $field1,
            'singular_name' => $field1,
            'search_items' => 'Search ' . $field1,
            'all_items' => 'All ' . $field1,
            'view_item ' => 'View ' . $field1,
            'parent_item' => 'Parent ' . $field1,
            'parent_item_colon' => 'Parent :.$field1',
            'edit_item' => 'Edit ' . $field1,
            'update_item' => 'Update ' . $field1,
            'add_new_item' => 'Add New ' . $field1,
            'new_item_name' => 'New',
            'menu_name' => $field1,
        ],
        'description' => '',
        'public' => true,
        'hierarchical' => true,
        'rewrite' => true,
        'capabilities' => array(),
        'meta_box_cb' => null,
        'show_admin_column' => true,
        'show_in_rest' => null,
        'rest_base' => null,
    ]);
}
