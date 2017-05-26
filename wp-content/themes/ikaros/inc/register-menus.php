<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init_menu');

function btwp_init_menu() {
    register_nav_menus( 
            array(
               'menu-header' => 'Menu header'
            )       
    );
}

/*--------------------------------------------------------------
	EXIBE OS MENUS
--------------------------------------------------------------*/
function menu_header(){
    wp_nav_menu( 
        array(
            // identificação do menu    
            'menu'              => 'Menu header',
            'theme_location'    => 'menu-header',
            // níveis de hierarquia do menu
            'depth'             => 2,
            // container gerado pelo WordPress            
            'container'         => 'div',
            // bootstrap menu collapse 
            'container_class'   => 'collapse navbar-collapse',
            // id referencia bootstrap javascript  
            'container_id'      => 'bs-collapse-1',
            // aplica estilo desenvolvido para o menu
            'menu_class'        => 'menu-box'
        )
    );    
}