<?php
/*--------------------------------------------------------------
	INSERE TITLE NO HEAD
--------------------------------------------------------------*/
add_theme_support( 'title-tag' );

/*--------------------------------------------------------------
	HABILITA IMAGENS DESTACADAS
--------------------------------------------------------------*/
add_theme_support('post-thumbnails');

/*--------------------------------------------------------------
	REGISTRA SIDEBAR
--------------------------------------------------------------*/
register_sidebar(
    array(
    'name' 			=> 'Barra contatos',
    'id' 			=> 'barra-contatos',
    'before_widget' => '<div class="sidebar-content">',
    'after_widget' 	=> '</div>',
    'description' 	=> 'Exibe informações de contato'
    )
);

