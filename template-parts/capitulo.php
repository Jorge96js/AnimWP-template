<?php   
    while(have_posts()): the_post();
        the_title('<h3 class="text-white">','</h3>');
        the_category();
        the_content();
    endwhile;
