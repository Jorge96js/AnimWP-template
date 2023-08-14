<footer class="footer">
    <div class="contenedor navegacion">
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
</footer>
<?php wp_footer();?>
</body>
</html>