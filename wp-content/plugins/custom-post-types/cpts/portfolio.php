<?php
/*--------------------------------------------------------------
	REGISTER CUSTOM POST TYPE -> PORTFOLIO
--------------------------------------------------------------*/
add_action('init', 'btwp_custom_post_portfolio');

function btwp_custom_post_portfolio(){
	$labels = array(
		'name' 					=> 'Portfolio',
		'singular_name' 		=> 'Item',
		'add_new' 				=> 'Adicionar novo',
		'add_new_item' 			=> 'Adicionar novo Item',
		'edit_item' 			=> 'Editar Item',
		'new_item' 				=> 'Novo Item',
		'all_items' 			=> 'Todos os Itens',
		'view_item' 			=> 'Visualizar Item',
		'search_items' 			=> 'Procurar Item',
		'not_found' 			=> 'Nenhum Item encontrado',
		'not_found_in_trash' 	=> 'Nenhum Item encontrado na lixeira',
		'parent_item_colom'		=> '',
		'menu_name'				=> 'Portfolio'
	);

	$args = array(
		'labels'			=> $labels,
		'public'			=> true,
		'has_archive' 		=> true,
		'menu_icon' 		=> 'dashicons-images-alt2', // https://developer.wordpress.org/resource/dashicons/		
		'menu_position'		=> 5,
		'show_in_nav_menus' => true,
		'supports' 			=> array ('title', 'editor', 'thumbnail')
	);

	register_post_type('portfolio', $args);
}

/*--------------------------------------------------------------
	REGISTER TAXONOMIES -> PORTFOLIO - CATEGORY
--------------------------------------------------------------*/
add_action('init', 'btwp_taxonomies_portfolio_category');

function btwp_taxonomies_portfolio_category(){

	$labels = array(
		'name' 					=> 'Portfolio Categorias',
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
		'menu_name'				=> 'Portfolio Categorias'
	);

	$args = array(
		'labels'				=> $labels,
		'hierarchical'			=> true,
		'show_admin_column'		=> true
	);

	register_taxonomy('portfolio_category', 'portfolio', $args);
}