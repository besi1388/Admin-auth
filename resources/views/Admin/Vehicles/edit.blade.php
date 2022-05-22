<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.vehicles.update', $vehicle->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6 mt-2">
                        <label for="make" class="block text-sm font-medium text-gray-700"> Make </label>
                        <div class="mt-1">
                            <input type="text" id="make" name="make" value="{{ $vehicle->name }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>


                    <div class="sm:col-span-6 mt-2">
                        <label for="model" class="block text-sm font-medium text-gray-700"> Model </label>
                        <div class="mt-1">
                            <input type="text" id="model" name="model" value="{{ $vehicle->mod }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="engine" class="block text-sm font-medium text-gray-700"> Engine </label>
                        <div class="mt-1">
                            <input type="text" id="engine" name="engine" value="{{ $vehicle->engine }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Car Image </label>
                        <div class="mt-1">
                            <input type="file" id="image" name="image" value="{{ $vehicle->image }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="col-span-6">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select id="status" name="status" value="{{ $vehicle->status }}"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="color" class="block text-sm font-medium text-gray-700"> Color </label>
                        <div class="mt-1">
                            <input type="text" id="color" name="color" value="{{ $vehicle->color }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="price" class="block text-sm font-medium text-gray-700"> price </label>
                        <div class="mt-1">
                            <input type="text" id="price" name="price" value="{{ $vehicle->price }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-admin-layout>
