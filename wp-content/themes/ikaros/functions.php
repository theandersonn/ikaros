<?php 

// Habilita funcionalidades suportadas
require get_template_directory() . '/inc/add-theme-suport.php';

// Limit number of characters
require get_template_directory() . '/inc/change-text-size.php';

// Custom Post Thumbnail
require get_template_directory() . '/inc/custom-post-thumbnail.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/inc/insert-scripts-style.php';

// Odin Thumbnail Resizer
require get_template_directory() . '/classes/odin-thumbnail-resizer.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/inc/register-menus.php';

// Remove lixo do head
require get_template_directory() . '/inc/remove-junk-header.php';