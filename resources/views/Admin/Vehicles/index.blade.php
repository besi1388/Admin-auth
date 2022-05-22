<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.vehicles.create') }}"
                    class=" btn px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Create Vehicle</a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Brand
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Model
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Engine
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    @php
                        $i = 0;
                    @endphp
                    <tbody>

                        @foreach ($vehicles as $vehicle)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ ++$i }}
                                <td class="px-6 py-4">
                                    {{ $vehicle->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle->mods->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle->engine }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle->image }}">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle->status }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle->color }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vehicle->price }}
                                </td>

                                <td class="px-6 py-4 ">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.vehicles.edit', $vehicle->id) }}"
                                            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-white ">Edit</a>
                                        <form method="POST"
                                            action="{{ route('admin.vehicles.destroy', $vehicle->id) }}"
                                            class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
