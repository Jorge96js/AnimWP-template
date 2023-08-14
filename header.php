<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php wp_head();?>
</head>
<body>
    
    <div class="contenedor navegacion">
        <div class="logo">
            <a href="<?php echo site_url('/')?>">
                <img class="logos" src="<?php echo get_template_directory_uri( );?>/img/regatear.png" alt="Logo">
            </a>
        </div>

        <div class="enlaces">
            <?php
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </div>
    <?php if(is_front_page()):?>
    <header class="header">
    </header>
    <?php endif;?>