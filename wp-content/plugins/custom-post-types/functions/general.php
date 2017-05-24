<?php
/*--------------------------------------------------------------
	MODIFY UPDATE MESSAGES
--------------------------------------------------------------*/
add_filter('post_updated_messages', 'btwp_updated_messages');

function btwp_updated_messages ($messages){
	global $post_ID;

	$messages['servicos'] = array(
		0 => '',
		1 => 'Servico Atualizado. <a href="'. esc_url( get_permalink( $post_ID ) ) .'">Visualizar Servico</a>',
		4 => 'Servico Atualizado.',
		6 => 'Servico Publicado. <a href="'. esc_url( get_permalink( $post_ID ) ) .'">Visualizar Servico</a>',
		7 => 'Servico Salvo.'
	);

	return $messages;
}