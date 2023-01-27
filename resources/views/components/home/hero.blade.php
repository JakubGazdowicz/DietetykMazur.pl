<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] bg-white dark:bg-slate-800">
{{--    <div class="bg-[url('/img/omnietlo_test.jpg')]"></div>--}}
    <div class="container">
        <div class="flex flex-wrap max-w-screen-xl ml-20">
            <div class="w-full lg:w-6/12 px-4">
                <div class="hero-content mt-4">
                    <h1 class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6">
                        <span class="rounded-md text-lime-600">Dietetyk Kliniczny <br> Agnieszka Mazur</span>
                    </h1>
                    <p class="text-base mb-8 max-w-[520px]">
                        Indywidualna pomoc dietetyczna w zależności od potrzeb.<br>
                        Diety odchudzające, diety w jednostkach c.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#contact" variant="outline-lime" class="rounded-lg">
                                Kontakt
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-8">
                        <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
                           Moje social media
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img
                            src="{{ url('/img/aga_ladne.png') }}"
                            alt="hero"
                            class="max-w-full lg:ml-auto"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
