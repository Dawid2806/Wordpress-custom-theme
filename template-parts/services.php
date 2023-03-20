<?php


$args  = ['post_type' => 'services', 'posts_per_page' => 6, 'order' => 'ASC',];
$query = new WP_Query($args);
if ($query->have_posts()) :
?>
    <div class="container w-srceen ">

        <?
        while ($query->have_posts()) : $query->the_post();
            $direction = get_field('content_direction');
            $justify_class = $direction == 'left' ? 'justify-start px-12' : 'justify-end px-12';
        ?>
            <div style="background-image: url('<?php the_field('image'); ?>');" class="relative  w-screen h-[580px] bg-no-repeat bg-cover bg-center  flex justify-start items-center overflow-hidden <?php echo $justify_class;  ?>
    ">
                <div class="bg-black absolute w-full h-full opacity-75 top-0 left-0 z-10"></div>
                <div class=" w-2/4 col-span-1	 text-white z-20">
                    <div>
                        <p class="inline text-xl py-1 px-4  bg-[#E20D17] "><?php the_field("branch"); ?></p>
                        <div class="  text-2xl mt-4  lg:text-4xl">
                            <h6 class="bg-white max-w-fit text-[#E20D17] px-2 ">
                                <?php the_field("first_title"); ?>
                            </h6>
                            <h6 class="bg-white max-w-fit text-black px-2">
                                <?php the_field("second_title"); ?>
                            </h6>
                        </div>
                        <div class="w-3/4 mt-10 "><?php the_field("content"); ?></div>
                        <div class="flex items-center mt-10  cursor-pointer">
                            <div class="bg-[#E20D17] p-2 rounded-full">
                                <img src="<?php echo get_theme_file_uri('/images/arrow.svg')  ?>" alt="" />
                            </div>
                            <a href="<?php echo get_permalink(); ?> " class=" text-[#E20D17] ml-4 font-bold ">
                                <?php the_field("link_title"); ?> </a>
                        </div>
                    </div>

                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
<?
endif;
