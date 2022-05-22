<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex  p-2">
                <a href="{{ route('admin.vehicleDetails.index') }}"
                    class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
            </div>

            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.vehicleDetails.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="dors" class="block text-sm font-medium text-gray-700"> Dors </label>
                        <div class="mt-1">
                            <input type="text" id="dors" name="dors"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="seats" class="block text-sm font-medium text-gray-700"> Seats </label>
                        <div class="mt-1">
                            <input type="text" id="seats" name="seats"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="col-span-6">
                        <label for="vehicles" class="block text-sm font-medium text-gray-700">Vehicle</label>
                        <select id="vehicles" name="vehicle_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected disabled>Select Model</option>

                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-admin-layout>
