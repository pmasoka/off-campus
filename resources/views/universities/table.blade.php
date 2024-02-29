<x-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="container flex flex-row justify-center">
                <nav class="my-5 flex justify-center bg-gray-700 px-3 py-3">
                    <ul class="flex gap-3 px-5 py-1">
                        <li class="">
                            <a href="#" onclick="handleClick(event)" class="flex cursor-pointer items-center gap-2 rounded-3xl px-3 py-3 text-white transition-all ease-in-out hover:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <span class="px-2">Property List</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="handleClick(event)" class="flex cursor-pointer items-center gap-2 rounded-3xl px-3 py-3 text-white transition-all ease-in-out hover:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <span class="px-2">Roommate Finder</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Image</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">Amenities</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900 dark:text-white">
                                <div class="">
                                    <img class="h-36 w-16 " src="/docs/images/people/profile-picture-1.jpg" alt="Jese image" />
                                    <div class="ps-3">
                                        <div class="font-normal text-gray-500">Date of Listing</div>
                                    </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">React Developer</td>
                            <td class="px-6 py-4">software Developer</td>
                            <td class="px-6 py-4">C# Developer</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-guest-layout>