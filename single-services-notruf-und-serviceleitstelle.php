<?php get_header();

?>

<section class="bg-sky-500 relative ">
    <div class="p-24  ">
        <div class="bg-[#E20D17]  mb-2 px-4 py-1 text-white inline-block">
            <span>Notruf- und Serviceleitstelle</span>
        </div>
        <div class="font-bold mb-8">
            <h1 class="bg-[#D9D9D9] text-2xl sm:text-4xl lg:text-4xl px-2 max-w-fit text-[#E20D17] ">
                Alles im Blick –

            </h1>
            <h2 class="bg-[#D9D9D9] px-2 text-2xl sm:text-4xl lg:text-4xl max-w-fit">
                Überwachung in Echtzeit.

            </h2>
        </div>
        <div class="text-white  sm:w-3/5 md:w-3/6 lg:w-5/12 xl:w-2/6 text-justify">
            <p>
                Unsere Zentrale ist rund um die Uhr mit geschultem Personal
                besetzt und kann im Notfall durch ein computergesteuertes
                Sicherheitssystem kürzeste Reaktionszeiten gewährleisten.
            </p>
        </div>

        <?php
        ?>
    </div>
    </div>
</section>

<section class="flex justify-center items-center p-24">
    <div>
        <div class="">
            <h2 class="text-2xl sm:text-4xl lg:text-4xl text-[#E20D17] ">
                Was geschieht,
            </h2>
            <h3 class="text-2xl sm:text-4xl lg:text-4xl mb-10">
                wenn etwas geschieht?
            </h3>
            <p class="w-2/3 mb-6">Was passiert, wenn der Alarm ausgelöst wird?
                Wer kommt zu Hilfe, falls Sie selbst nicht vor Ort sind?
                Welche Maßnahmen werden im Ernstfall ergriffen?</p>
            <p class="w-2/3  mb-6">Eine Notruf- und Serviceleitstelle bietet Antworten auf all diese Fragen.
                Durch die Aufschaltung Ihrer Alarmanlage können wir direkt reagieren,
                sobald eine Gefahr gemeldet wird.</p>
            <div class="flex  gap-6">
                <div class="bg-black w-[200px] h-[200px] "></div>

                <div class="bg-black w-[200px] h-[200px] "></div>
            </div>
            <div class="flex items-center mt-10  cursor-pointer">
                <div class="bg-[#E20D17] p-2 rounded-full">
                    <img src="<?php echo get_theme_file_uri('/images/arrow.svg')  ?>" alt="" />
                </div>
                <button class="text-[#E20D17] ml-4">
                    Jetzt unverbindlich Sicherheitstechnik anfragen
                </button>
            </div>
        </div>
    </div>
    <div>
        <div class="bg-black w-[600px] h-[500px] "></div>

    </div>

</section>
<?php get_footer() ?>