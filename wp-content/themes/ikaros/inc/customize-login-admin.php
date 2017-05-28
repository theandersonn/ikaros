<?php

/*--------------------------------------------------------------
	ALTERA LOGO DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_action('login_head',  'btwp_change_admin_logo');

function btwp_change_admin_logo(){
    echo 
    '<style>
	h1 a {
		background-image:url('.get_bloginfo('template_directory').'/assets/images/logotypes/logo-ikaros.png)!important;
		height: 35px !important;
	}
	
	.button-primary {
		background: #556e7f !important;
		border-color: #556e7f !important;
		box-shadow: none !important;
		text-shadow: none !important;
  	}

	body.login {
        background: #3a3d40;
    }   

    .login form{
		background: #282b2d;
		border: 1px solid #222425;
    }  

    .login label {
    	color: #fff;
    }

    .login #nav a,
    .login #backtoblog a {
    	color: #fff;
    }

    #nav a:hover, .login h1 a:hover, .login #backtoblog a:hover {
    	color: #fff !important;
    	text-decoration: underline;
	}	        	
	</style>';
}

/*--------------------------------------------------------------
	ALTERA URL DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_filter('login_headerurl', 'btwp_change_admin_url');

function btwp_change_admin_url(){
	return get_bloginfo('url');
}

/*--------------------------------------------------------------
	ALTERA TÍTULO DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_filter('login_headertitle', 'btwp_change_admin_title');

function btwp_change_admin_title(){
	return get_option('blogname');
}

    add_action('admin_footer','posts_status_color');
      function posts_status_color(){
    ?>
    <style>
      .status-draft{background: #FCE3F2 !important;}
     .status-pending{background: #87C5D6 !important;}
     .status-publish{/* no background keep wp alternating colors */}
      .status-future{background: #C6EBF5 !important;}
     .status-private{background:#F2D46F;}
    </style>
    <?php
    }