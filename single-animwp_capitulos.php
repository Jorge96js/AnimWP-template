<?php get_header();?>

    <main class="contenedor con-sidebar">

        <section class="seccion">
            <?php get_template_part('template-parts/capitulo');
                $servers = get_fields();
                $default = $servers['servidores']['servidor_1']; 
            ?>
            <nav class="server-nav">
            <?php
                    foreach($servers['servidores'] as $nombre => $link):?>
                        <a class="btn btn-server" data-enlace="<?php echo $link?>">
                            <?php echo $nombre?>
                        </a>
                        <?php
                endforeach;
                ?>
            </nav>
                <iframe id="iframe" class="iframe"  src="<?php echo $default?>" frameborder="0" allowfullscreen></iframe>
        </section>
        <?php // get_sidebar()?>
    </main>

<?php get_footer();?>
