<?php get_header();?>

    <main class="contenedor con-sidebar">

        <section class="seccion">
            <?php get_template_part('template-parts/capitulo')?>
            <iframe src="<?php the_field('servidor2');?>" frameborder="0"></iframe>
        </section>
    </main>

<?php get_footer();?>
