<!-- ====== Testimonials Section Start -->
<section class="pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8 text-center tracking-wider">
        Pierwsza wizyta
    </h2>
    <div class="container mx-auto">
        <div
            x-data="
            {
              slides: ['1','2','3'],
              activeSlide: 1,
              activeButton: 'w-[30px] bg-primary',
              button: 'w-[10px] bg-[#E4E4E4]'
            }
          "
        >
            <div class="relative flex justify-center">
                <div class="relative w-full pb-16 md:w-11/12 lg:w-10/12 xl:w-8/12 xl:pb-0">
                    <div class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[368px] sm:max-w-[508px] md:max-w-[630px] lg:max-w-[738px] 2xl:max-w-[850px]" x-ref="carousel">
                        <div class="mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px] ">
                            <div class="w-full items-center md:flex">
                                <div class="w-full">
                                    <div>
                                        <p class="mb-11 text-base font-medium italic text-body-color sm:text-lg">
                                            &emsp; Przed pierwszą wizytą należy przygotować dzienniczek żywieniowy (<a href="http://dietawpraktyce.pl/wp-content/uploads/2020/01/dzienniczek-%C5%BCywieniowy-1.pdf" class="text-lime-500 u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" target="_blank">do pobrania tutaj</a>),
                                            czyli spis potraw, produktów i napojów spożytych w ciągu trzech dni. Dzienniczek ten zabieramy na pierwszą wizytę i posłuży on do oceny dotychczasowych nawyków żywieniowych.
                                            Jeśli posiadasz aktualne (z ostatniego półrocza) wyniki morfologii krwi, profil lipidowy (badanie poziomu cholesterolu), poziom TSH (badanie hormonów tarczycy) czy glikemię również zabierz je na pierwszą wizytę. Jeśli przewlekle chorujesz i jesteś po pobycie w szpitalu możesz zabrać wypis ze szpitala.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px]">
                            <div class="w-full items-center md:flex">
                                <div class="w-full">
                                    <div>
                                        <p class="mb-11 text-base font-medium italic text-body-color sm:text-lg">
                                            &emsp; Jeśli zażywasz leki lub suplementy diety, spisz je na kartce.
                                            Zastanów się jaki jest Twój cel wizyty u dietetyka oraz jakiego efektu stosowanej terapii się spodziewasz.
                                            Pierwsza wizyta trwa ok. 45 minut. Wizyty kontrolne trwają ok. 20-minut. Na pierwszej wizycie przeprowadzany jest wywiad żywieniowy (na temat preferencji żywieniowych, stylu życia) oraz wywiad zdrowotny. Odbywa się analiza składu ciała (ostatni posiłek oraz płyny należy przyjąć max. 2h przed pomiarem) wraz
                                            z omówieniem wyników oraz rozmowa na temat celu terapii dietetycznej, ustalanie planu działania.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px]">
                            <div class="w-full items-center md:flex">
                                <div class="w-full">
                                    <div>
                                        <p class="mb-11 text-base font-medium italic text-body-color sm:text-lg">
                                            &emsp; Wizyty kontrolne odbywają się zawsze dwa tygodnie po rozpoczęciu indywidualnego planu żywieniowego.
                                            Kolejne wizyty kontrolne są ustalane indywidualnie.
                                            Należy pamiętać, że regularne kontrolowanie postępów terapii zwiększa motywację
                                            do stosowania zdrowych nawyków żywieniowych zwiększając efektywność kuracji.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-0 right-0 bottom-0 flex items-center justify-center lg:pl-[120px] 2xl:pl-0">
                        <button
                            class="mx-1 flex h-12 w-12 items-center justify-center rounded-full bg-white text-primary shadow-input transition-all hover:bg-primary hover:text-white"
                            @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
                        >
                            <svg
                                width="15"
                                height="13"
                                viewBox="0 0 15 13"
                                class="fill-current"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M5.24264 11.8033L0.46967 7.03037C0.176777 6.73748 0.176777 6.2626 0.46967 5.96971L5.24264 1.19674C5.53553 0.903845 6.01041 0.903845 6.3033 1.19674C6.59619 1.48963 6.59619 1.96451 6.3033 2.2574L2.81066 5.75004H14C14.4142 5.75004 14.75 6.08583 14.75 6.50004C14.75 6.91425 14.4142 7.25004 14 7.25004H2.81066L6.3033 10.7427C6.59619 11.0356 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033Z"
                                />
                            </svg>
                        </button>
                        <button
                            class="mx-1 flex h-12 w-12 items-center justify-center rounded-full bg-white text-primary shadow-input transition-all hover:bg-primary hover:text-white"
                            @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
                        >
                            <svg
                                width="15"
                                height="13"
                                viewBox="0 0 15 13"
                                class="fill-current"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Testimonials Section End -->
