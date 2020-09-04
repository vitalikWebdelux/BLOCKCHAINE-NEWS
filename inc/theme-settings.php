<?php
/**
 * Check and setup theme's default settings
 *
 * @package BN
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Перейменувати post type з Записів на Новини
 */
add_filter('post_type_labels_post', 'bn_rename_posts_labels');
function bn_rename_posts_labels( $labels ){

	$new = array(
		'name'                  => 'Новини',
		'singular_name'         => 'Новина',
		'add_new'               => 'Добавити новину',
		'add_new_item'          => 'Добавити новину',
		'edit_item'             => 'Редагувати новину',
		'new_item'              => 'Нова новина',
		'view_item'             => 'Подивитись новину',
		'search_items'          => 'Пошук новин',
		'not_found'             => 'Новин не знайдено.',
		'not_found_in_trash'    => 'Новин в корзині не знайдено.',
		'parent_item_colon'     => '',
		'all_items'             => 'Всі новини',
		'archives'              => 'Архіви новин',
		'insert_into_item'      => 'Вставити новину',
		'uploaded_to_this_item' => 'Загружені для цієї новини',
		'featured_image'        => 'Мініатюра новини',
		'filter_items_list'     => 'Фільтрувати список новин',
		'items_list_navigation' => 'Навігація по списку новин',
		'items_list'            => 'Список новин',
		'menu_name'             => 'Новини',
		'name_admin_bar'        => 'Новину', // пункте "добавить"
	);

	return (object) array_merge( (array) $labels, $new );
}