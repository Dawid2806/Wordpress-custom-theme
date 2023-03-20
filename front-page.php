<?php get_header() ?>


<section class="bg-[#261D24] relative ">
    <div class="p-24  ">
        <div class="bg-[#E20D17] mt-20 mb-2 px-4 py-1 text-white inline-block">
            <span>Sicherheitstechnik</span>
        </div>
        <div class="font-bold mb-14">
            <h1 class="bg-[#D9D9D9] text-2xl sm:text-4xl lg:text-6xl px-2 max-w-fit text-[#E20D17] ">
                Unser Mann für Härtefälle
            </h1>
            <h2 class="bg-[#D9D9D9] px-2 text-2xl sm:text-4xl lg:text-6xl max-w-fit">
                bei Installationen.
            </h2>
        </div>
        <div class="text-white  sm:w-3/5 md:w-3/6 lg:w-5/12 xl:w-2/6 text-justify">
            <p>
                Marco erstellt seit über 10 Jahren ausgeklügelte
                <span class="font-bold">

                    Konzepte für die Sicherheitstechnik
                </span>
                in großen und kleinen Unternehmen. Bei der Auswahl unserer
                Mitarbeiter setzen wir auf Kompetenz, nicht auf Äußerlichkeiten.
            </p>
        </div>
        <div class="flex items-center mt-10  cursor-pointer">
            <div class="bg-[#E20D17] p-2 rounded-full">
                <img src="<?php echo get_theme_file_uri('/images/arrow.svg')  ?>" alt="" />
            </div>
            <button class="text-[#E20D17] ml-4">
                Jetzt unverbindlich Sicherheitstechnik anfragen
            </button>
        </div>
        <?php
        include('template-parts/boxes.php')
        ?>
    </div>
    </div>
</section>
<section class=" p-24 mt-20 xl:mt-60 mb-10">

    <p class="inline bg-[#E20D17] text-white px-4">
        Security – Alles für Ihre Sicherheit.
    </p>
    <div>
        <h2 class="text-[#E20D17] font-[400] text-4xl lg:text-6xl">
            Zuverlässigkeit und Qualität
        </h2>
        <h3 class="text-4xl lg:text-6xl">AF Security – an Ihrer Seite.</h3>
    </div>
    <div class="flex   mt-6">
        <?php include("template-parts/SecurityContent.php") ?>

        <div class=" hidden xl:block w-[380px] h-[380px] flex-none basis-0 grow-0 mr-6">
            <div class="">
                <div class=" bg-[#CFCFCF] w-[380px] h-[380px]  "></div>
                <div class="mt-4 px-2">
                    <p class="font-bold">
                        "Wir schützen Sie und Ihr Gut mit modernster Technik und einem
                        absolut zuverlässigem Team.“
                    </p>
                    <span class="text-xs">Arben Fetoshi, Geschäftsführer</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="px-24 py-4 bg-[#D9D9D9]">
    <p class="inline bg-[#E20D17] text-white px-4">
        Branchen und Einsatzbereiche
    <div class="  text-2xl  lg:text-4xl">
        <h1 class="bg-white max-w-fit text-[#E20D17] ">
            Sicherheit und Schutz
        </h1>
        <h2 class="bg-white max-w-fit">
            in jeder Situation.
        </h2>
    </div>
    </p>
    <div class="mt-10">
        <?php include("template-parts/branche.php") ?>
    </div>

</section>

<section class="overflow-hidden flex flex-col">
    <?php include("template-parts/services.php") ?>


</section>


<?php get_footer() ?>