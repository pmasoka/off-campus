<x-guest-layout>
    <section class="py-20">
        <div class="container flex items-center justify-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                <img class="mx-auto sm:max-w-sm lg:max-w-full lg:mx-0" src="{{ asset('images/front-end/index/university.jpg') }}" alt="feature image">
            </div>
        </div>
    </section>


    <section class="flex py-20 space-x-12 justify-center">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/front-end/index/property_listing.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Property Listings</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Search rental property listings near your campus.</p>
                <a href="{{ route('universities.table')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    View property listing
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/front-end/index/roommate.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Roommate Profiles</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Profiles of Students who are looking for a place to live.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Find Roommates
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="pt-2 pb-8 bg-green-600 mb-20">
        <div class="my-16 text-start ml-36">
            <h2 class="text-xl font-bold text-white">
                Embark on a journey to find your perfect haven amidst academia. Uncover spaces that resonate with comfort and convenience. Your ideal retreat, where the essence of belonging intertwines with every academic adventure. </h2>
        </div>

        <div class="flex row space-x-16 justify-center ml-10">
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
    </section>


</x-guest-layout>