<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.houses.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">House Index</a>
            </div>
            <div class="m-2 p-2 bg-white rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.houses.update', $house->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-6 p-2 bg-slate-100">
                            <div class="sm:col-span-6 pt-5">
                                <label for="universities" class="block text-sm font-medium text-gray-700">University</label>
                                <div class="mt-1">
                                    <select id="universities" name="universities" class="form-select block w-full mt-1">
                                        @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                                <div class="mt-1">
                                    <input type="file" id="image" name="image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="address" class="block text-sm font-medium text-gray-700"> Address </label>
                                <div class="mt-1">
                                    <input type="text" id="address" name="address" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('address')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="city" class="block text-sm font-medium text-gray-700"> City </label>
                                <div class="mt-1">
                                    <input type="text" id="city" name="city" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('city')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
                                <div class="mt-1">
                                    <input type="text" id="country" name="country" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('country')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4 pt-4">
                                <label for="location" class="block text-sm font-medium text-gray-700"> Property Location </label>
                                <div class="mt-1">
                                    <select id="location" name="location" class="form-select block w-full mt-1">
                                        @foreach ($universities as $university)
                                        <optgroup label="{{ $university->name }}">
                                            @foreach ($university->locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                @error('location')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="t_of_accommodation" class="block text-sm font-medium text-gray-700"> Type of Accommodation </label>
                                <div class="mt-1">
                                    <select id="t_of_accommodation" name="t_of_accommodation" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="shared_indoor_1_room">Shared Indoor 1 Room</option>
                                        <option value="non_shared_indoor_1_room">Non-Shared Indoor 1 Room</option>
                                        <option value="shared_outdoor_1_room">Shared Outdoor 1 Room</option>
                                        <option value="non_shared_outdoor_1_room">Non-Shared Outdoor 1 Room</option>
                                    </select>
                                </div>
                                @error('t_of_accommodation')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="sm:col-span-6 pt-4">
                                <label for="rental_rate" class="block text-sm font-medium text-gray-700"> Rental Rate </label>
                                <div class="mt-1">
                                    <input type="number" min="0.00" max="10000.00" id="rental_rate" name="rental_rate" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('rental_rate')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="occ_date" class="block text-sm font-medium text-gray-700"> Occupation Date </label>
                                <div class="mt-1">
                                    <input type="date" id="occ_date" name="occ_date" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('occ_date')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="no_of_washrooms" class="block text-sm font-medium text-gray-700"> Number of Washrooms </label>
                                <div class="mt-1">
                                    <input type="number" id="no_of_washrooms" name="no_of_washrooms" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('no_of_washrooms')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="student_number" class="block text-sm font-medium text-gray-700"> Number of Students </label>
                                <div class="mt-1">
                                    <input type="number" id="student_number" name="student_number" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('student_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="sm:col-span-6 pt-4">
                                <label for="l_occupied" class="block text-sm font-medium text-gray-700"> Landlord Occupied </label>
                                <div class="mt-1">
                                    <select id="l_occupied" name="l_occupied" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                @error('l_occupied')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="mt-6 p-2 bg-slate-100">
                            <h2 class="text-2xl font-semibold">Distances to Campus</h2>
                            <div class="sm:col-span-6 pt-4">
                                <label for="distance" class="block text-sm font-medium text-gray-700"> Distance to Campus </label>
                                <div class="mt-1">
                                    <input type="number" id="distance" name="distance" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('distance')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="w_time" class="block text-sm font-medium text-gray-700"> Walking Time </label>
                                <div class="mt-1">
                                    <input type="number" id="w_time" name="w_time" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('w_time')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="c_time" class="block text-sm font-medium text-gray-700"> Cycling Time </label>
                                <div class="mt-1">
                                    <input type="number" id="c_time" name="c_time" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('c_time')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 pt-4">
                                <label for="d_time" class="block text-sm font-medium text-gray-700"> Driving Time </label>
                                <div class="mt-1">
                                    <input type="number" id="d_time" name="d_time" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('d_time')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 p-2 bg-slate-100">
                            <h2 class="text-2xl font-semibold">Description</h2>
                            <div class="sm:col-span-6 pt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700"> Description </label>
                                <div class="mt-1">
                                    <textarea id="description" name="description" rows="4" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                </div>
                                @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-6 pt-4">
                            <label for="utilities" class="block text-sm font-medium text-gray-700"> Included Utilities </label>
                            <div class="mt-1">
                                <input type="text" id="utilities" name="utilities" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('utilities')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 pt-4">
                            <label for="amenities" class="block text-sm font-medium text-gray-700"> Amenities </label>
                            <div class="mt-1">
                                <input type="text" id="amenities" name="amenities" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('amenities')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6 p-2 bg-slate-100">
                            <h2 class="text-2xl font-semibold">Status</h2>
                            <div class="sm:col-span-6 pt-4">
                                <label for="status" class="block text-sm font-medium text-gray-700"> Status </label>
                                <div class="mt-1">
                                    <select id="status" name="status" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="available">Available</option>
                                        <option value="occupied">Unavailable</option>
                                        <option value="occupied">Pending</option>
                                    </select>
                                </div>
                                @error('status')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>