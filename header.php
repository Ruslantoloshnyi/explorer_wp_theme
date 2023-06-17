<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package explorer
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>gulp-scss-starter</title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">
    <link rel="stylesheet" href="styles/main.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <!-- header -->
    <div class="background">
        <header>
            <div class="header_wrapper">

                <div class="header-holder">

                    <div class="search-mobile" style="display: block;">
                        <a rel="nofollow">
                            <i class="icon_search"></i>
                        </a>
                    </div>

                    <nav class="header-nav">
                        <div class="header-nav__inner">                            
                                <?php
                                wp_nav_menu([
                                    'theme_location'  => 'menu-3',
                                    'menu'            => '',
                                    'container'       => 'ul',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'header-menu-list',                                   
                                ]);
                                ?>                           
                        </div>
                    </nav>

                    <a href="/" class="logo"></a>

                    <a href="#" class="device-menu">
                        <div class="device-menu__inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>

                </div>
                <div class="header-heading">
                    <div class="header-heading__head">Explorer</div>
                    <p class="header-heading__subhead">Webflow blog template</p>
                </div>

                <?php
                wp_nav_menu([
                    'theme_location'  => 'menu-1',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'header-menu',

                ]);
                ?>

            </div>
        </header> <!-- header end-->