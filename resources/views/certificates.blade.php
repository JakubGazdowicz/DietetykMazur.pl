<x-app-layout>
    <!-- ====== Team Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                        <h2
                            class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"
                        >
                            Moje Certyfikaty
                        </h2>
                        <p class="text-body-color text-base">
                            Poznaj mnie i moje wykształcenie
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
              <x-certificate>
                  <img
                      src="{{ url('/img/certificates/cert6.png') }}"
                      alt="image"
                      class="w-full"
                  />
              </x-certificate>
              <x-certificate>
                  <img
                      src="{{ url('/img/certificates/cert4.png') }}"
                      alt="image"
                      class="w-full"
                  />
              </x-certificate>
              <x-certificate>
                  <img
                      src="{{ url('/img/certificates/cert3.png') }}"
                      alt="image"
                      class="w-full"
                  />
              </x-certificate>
              <x-certificate>
                    <img
                        src="{{ url('/img/certificates/cert2.png') }}"
                        alt="image"
                        class="w-full"
                    />
              </x-certificate>
                <x-certificate>
                    <img
                        src="{{ url('/img/certificates/cert5.png') }}"
                        alt="image"
                        class="w-full"
                    />
                </x-certificate>
                <x-certificate>
                    <img
                        src="{{ url('/img/certificates/cert1.png') }}"
                        alt="image"
                        class="w-full"
                    />
                </x-certificate>
                <x-certificate>
                    <img
                        src="{{ url('/img/certificates/cert8.png') }}"
                        alt="image"
                        class="w-full"
                    />
                </x-certificate>
                <x-certificate>
                    <img
                        src="{{ url('/img/certificates/cert7.png') }}"
                        alt="image"
                        class="w-full"
                    />
                </x-certificate>
            </div>
        </div>
    </section>
    <!-- ====== Team Section End -->

</x-app-layout>
