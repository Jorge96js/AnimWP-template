<?php get_header();?>

    <section class="carrusel ">
        <ul class="lista-carrusel swiper-wrapper">
        <?php
            $args = array(
                'post_type' => 'animwp_capitulos',
                'posts_per_page' => 5
            );

            $capitulos = new WP_Query($args);

            while ($capitulos->have_posts()):
                   $capitulos->the_post();
        ?>
            <!--//card que contiene las entradas-->
            <li class="card_carrusel">
                <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail();?>
                </a>
            </li>
        <?php 
            endwhile;
            wp_reset_postdata();
        ?>
        </ul>
    </section>


    <main class="contenedor con-sidebar">

        <section class="seccion">
            <h3 class="text-white"><?php the_field('pagina_principal');?></h3>
            <?php 
                get_template_part('template-parts/listado-entradas');
            ?> 
        </section>

        <?php get_sidebar()?>
    </main>

<?php get_footer();?>