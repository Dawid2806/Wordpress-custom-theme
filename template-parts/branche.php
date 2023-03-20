<?php


$args  = ['post_type' => 'branchen', 'posts_per_page' => 6, 'order' => 'ASC'];
$query = new WP_Query($args);
if ($query->have_posts()) :
?>
    <div class="container  grid grid-cols-3 gap-6">
        <?
        while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="relative bg-black">
                <div class="bg-black w-full h-full absolute opacity-75	"></div>
                <span class="absolute left-2/4 -translate-x-2/4 -translate-y-2/4 text-2xl text-center text-white font-bold top-2/4 "><?php the_title(); ?></span>
                <?php the_post_thumbnail(); ?>
            </div>

        <?php
        endwhile;
        ?>
    </div>
<?
endif;
