<ul class="cap_list_grid">
                <?php
                    $args = array(
                        'post_type' => 'animwp_capitulos',
                        'posts_per_page' => 16,
                    );

                    $capitulos = new WP_Query($args);

                    while($capitulos->have_posts()):
                        $capitulos->the_post();
                    ?>
                    <!--//card que contiene las entradas-->
                    <li >
                        <a class="card" href="<?php the_permalink();?>">
                        <?php the_post_thumbnail();?>
                            <div class="contenido">
                                <?php the_title('<p class="card_title">','</p>');?>
                            </div>
                        </a>
                    </li>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>