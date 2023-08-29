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
    <header class="header swiper">
        <ul class="recents-slider swiper-wrapper">
            <?php
                $args = array(
                    'post_type' => 'animwp_capitulos',
                    'posts_per_page' => 5
                );
        
                    $capitulos = new WP_Query($args);
                    while ($capitulos->have_posts()):
                        $capitulos->the_post();
            ?>
                <li class="swiper-slide">
                    <h4 class="text-white"><?php the_title();?></h4>  
                    <img src="<?php echo get_field('cover')?>" alt="">
                </li>
                <?php endwhile;?>
            </ul>
    </header>
    <?php endif;?>