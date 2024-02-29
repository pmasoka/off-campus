<x-guest-layout>
    <!-- Main Hero Content -->


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/front-end/index/carousel/carousel-1.jpeg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/front-end/index/carousel/carousel-2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/front-end/index/carousel/carousel-3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/front-end/index/carousel/carousel-4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/front-end/index/carousel/carousel-5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <!-- End Main Hero Content -->
        <section class="px-2 py-32 bg-white md:px-0">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2 md:px-3">
                        <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                            <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->

                            <h2 class="text-4xl text-green-600">Welcome</h2>
                            <!-- </h1> -->
                            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                                Embark on a journey to find your perfect haven amidst academia. Uncover spaces that resonate with comfort and
                                convenience. Your ideal retreat, where the essence of belonging intertwines with every academic adventure.
                            </p>

                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <form action="/search">
                            <label class="mx-auto mt-8 relative bg-white min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300" for="search-bar">

                                <input id="search-bar" placeholder="Enter School name..." name="q" class="px-6 py-2 w-full rounded-md flex-1 outline-none bg-white" required="">
                                <button type="submit" class="w-full md:w-auto px-6 py-3 bg-green-600 border-green text-white hover:bg-green-700  fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all">
                                    <div class="flex items-center transition-all opacity-1">
                                        <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                                            Search
                                        </span>
                                    </div>
                                </button>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-2 pb-8 bg-green-600">
            <div class="my-16 text-start ml-36">
                <h2 class="text-6xl font-bold text-white">
                    Students </h2>
            </div>

            <div class="flex row space-x-16 justify-center ml-10">
                <div class="flex items-center justify-center">
                    <a href="" class="inline-flex items-center px-4 py-2 text-3xl font-normal leading-6 text-white transition duration-150 ease-in-out border-4 border-white rounded-md shadow hover:bg-white hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-3">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                        </svg>
                        Login
                    </a>
                </div>

                <div class="flex items-center justify-center">
                    <button type="button" class="inline-flex items-center px-4 py-2 text-3xl font-normal leading-6 text-white transition duration-150 ease-in-out border-4 border-white rounded-md shadow hover:bg-white hover:text-black" disabled="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-3">
                            <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                            <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                        </svg>
                        Register
                    </button>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50">
            <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
                <div class="flex flex-wrap items-center -mx-3">
                    <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                        <div class="w-full lg:max-w-md">
                            <h2 class="mb-4 text-3xl font-bold">Student Account</h2>
                            <h2 class="mb-4 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                                BENEFITS OF USING THIS RESERVATION HOUSING SYSTEM</h2>

                            <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                                Don't have an account yet? <br>

                                Explore the advantages of registering with this sytem
                                Looking for a place to live?

                            </p>
                            <ul>
                                <li class="flex items-center py-2 space-x-4 xl:py-3">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                    <span class="font-medium text-gray-500">Post a 'Student Profile'
                                        Save your 'Search' preferences</span>
                                </li>
                                <li class="flex items-center py-2 space-x-4 xl:py-3">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                    <span class="font-medium text-gray-500">Save your 'Favorite' listings for reference and follow-up</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                        <img class="mx-auto sm:max-w-sm lg:max-w-full" src="{{ asset('images/front-end/index/student.jpg') }}" alt="feature image">
                    </div>
                </div>
        </section>

        <section class="pt-2 pb-8 bg-blue-950">
            <div class="my-16 text-start ml-36">
                <h2 class="text-6xl font-bold text-white">
                    Landload/Advertisers </h2>
            </div>

            <div class="flex row space-x-16 justify-center ml-10">
                <div class="flex items-center justify-center">
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-3xl font-normal leading-6 text-white transition duration-150 ease-in-out border-4 border-white rounded-md shadow hover:bg-white hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-3">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                        </svg>
                        Login
                    </a>
                </div>


                <div class="flex items-center justify-center">
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 text-3xl font-normal leading-6 text-white transition duration-150 ease-in-out border-4 border-white rounded-md shadow hover:bg-white hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-3">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                        </svg>
                        Register
                    </a>
                </div>
            </div>


        </section>

        <section class="py-20 bg-gray-50">
            <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
                <div class="flex flex-wrap items-center -mx-3">
                    <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                        <div class="w-full lg:max-w-md">
                            <h2 class="mb-4 text-3xl font-bold">Landlord/Advertiser Account</h2>
                            <h2 class="mb-4 text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                                BENEFITS OF USING THIS RESERVATION HOUSING SYSTEM</h2>

                            <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                                Don't have an account yet? <br>

                                Explore the advantages of registering with this sytem
                                Looking for a place to live?

                            </p>
                            <ul>
                                <li class="flex items-center py-2 space-x-4 xl:py-3">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                    <span class="font-medium text-gray-500">User-friendly for overseeing your online advertisements around the clock</span>
                                </li>
                                <li class="flex items-center py-2 space-x-4 xl:py-3">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                    <span class="font-medium text-gray-500">Collaborative promotion with affiliated schools directing students to the site</span>
                                </li>
                                <li class="flex items-center py-2 space-x-4 xl:py-3">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                    <span class="font-medium text-gray-500">Access live customer support and additional features!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                        <img class="mx-auto sm:max-w-sm lg:max-w-full" src="{{ asset('images/front-end/index/house.jpg') }}" alt="feature image">
                    </div>
                </div>
        </section>

        <section class="pt-4 pb-12 bg-gray-800">
            <div class="my-16 text-center">
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    Campuses on this system </h2>
                <p class="text-xl text-white">We have broadened our roster of Partner Schools, incorporating numerous campuses.
                    The following academic institutions are now included in our offerings:</p>
            </div>

            <div class="container mx-auto">
                <div class="flex flex-col items-center">
                    @foreach ($universities as $index => $university)
                    <div class="bg-white p-4 rounded-md shadow-md text-center mb-4">
                        <h3 class="text-lg font-bold mb-2">{{ $index + 1 }}. {{ $university->name }}</h3>

                    </div>
                    @endforeach
                </div>
            </div>

        </section>
</x-guest-layout>