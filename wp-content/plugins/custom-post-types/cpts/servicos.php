<?php
/*--------------------------------------------------------------
	REGISTER CUSTOM POST TYPE -> SERVIÇOS
--------------------------------------------------------------*/
add_action('init', 'btwp_custom_post_servicos');

function btwp_custom_post_servicos(){
	$labels = array(
		'name' 					=> 'Serviços',
		'singular_name' 		=> 'Serviço',
		'add_new' 				=> 'Adicionar novo',
		'add_new_item' 			=> 'Adicionar novo Serviço',
		'edit_item' 			=> 'Editar Serviço',
		'new_item' 				=> 'Novo Serviço',
		'all_items' 			=> 'Todos os Serviços',
		'view_item' 			=> 'Visualizar Serviço',
		'search_items' 			=> 'Procurar Serviço',
		'not_found' 			=> 'Nenhum Serviço encontrado',
		'not_found_in_trash' 	=> 'Nenhum Serviço encontrado na lixeira',
		'parent_item_colom'		=> '',
		'menu_name'				=> 'Serviços'
	);

	$args = array(
		'labels'			=> $labels,
		'public'			=> true,
		'has_archive' 		=> true,
		'menu_icon' 		=> 'dashicons-hammer', // https://developer.wordpress.org/resource/dashicons/		
		'menu_position'		=> 5,
		'show_in_nav_menus' => true,
		'supports' 			=> array ('title', 'editor', 'thumbnail')
	);

	register_post_type('servicos', $args);
}

/*--------------------------------------------------------------
	REGISTER TAXONOMIES -> PRODUTOS - CATEGORY
--------------------------------------------------------------*/
add_action('init', 'btwp_taxonomies_servicos_category');

function btwp_taxonomies_servicos_category(){

	$labels = array(
		'name' 					=> 'Serviços Categorias',
		'singular_name' 		=> 'Categoria',
		'add_new' 				=> 'Adicionar nova',
		'add_new_item' 			=> 'Adicionar nova Categoria',
		'edit_item' 			=> 'Editar Categoria',
		'new_item' 				=> 'Nova Categoria',
		'all_items' 			=> 'Todas as Categorias',
		'view_item' 			=> 'Visualizar Categoria',
		'search_items' 			=> 'Procurar Categoria',
		'not_found' 			=> 'Nenhuma Categoria encontrada',
		'not_found_in_trash' 	=> 'Nenhuma Categoria encontrada na lixeira',
		'parent_item_colom'		=> '',
		'menu_name'				=> 'Serviços Categorias'
	);

	$args = array(
		'labels'				=> $labels,
		'hierarchical'			=> true,
		'show_admin_column'		=> true
	);

	register_taxonomy('servicos_category', 'servicos', $args);
}