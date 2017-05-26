<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- Replace with their styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php wp_head(); ?>
    </head>
    
    <body>
        <!-- ### header ### -->
        <header class="header-box">
            <div class="container">
                <div class="logo-box">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo site_url(); ?>"><img class="logo" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/logo-ikarus.png" alt="Ikarus"></a>
                </div><!-- end navbar-header -->

                <!-- Header Navigation -->
                <?php if (function_exists('menu_header')) { menu_header(); } ?>                         
            </div>
        </header>     