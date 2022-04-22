<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <a href="<?php echo get_home_url() ?>">
            <img style="height: 40px" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png">
        </a>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
    </header>