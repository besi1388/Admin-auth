<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.vehicles.store') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="sm:col-span-6 mt-2">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Vehicle Brand </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>


                    <div class="col-span-6">
                        <label for="mod" class="block text-sm font-medium text-gray-700">Model</label>
                        <select id="mod" name="mod_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option selected disabled>Select Model</option>

                            @foreach ($mods as $mod)
                                <option value="{{ $mod->id }}">{{ $mod->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="engine" class="block text-sm font-medium text-gray-700"> Engine </label>
                        <div class="mt-1">
                            <input type="text" id="engine" name="engine"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <br>
                    @foreach ($categories as $category)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="categories[]"
                                value="{{ $category->id }}">
                            <label class="form-check-label" for="inlineCheckbox1">
                                {{ $category->category }}</label>
                        </div>
                    @endforeach
                    <br>
                    <div class="sm:col-span-6 mt-2">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="col-span-6 mt-2">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select id="status" name="status"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="color" class="block text-sm font-medium text-gray-700"> Color </label>
                        <div class="mt-1">
                            <input type="text" id="color" name="color"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="sm:col-span-6 mt-2">
                        <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
                        <div class="mt-1">
                            <input type="text" id="price" name="price"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <br>

                    <div class="mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
                    $('#make').on('change', function() {
                        var makeId = this.value;
                        $('#model').html('');
                        $.ajax({
                            url: '{{ route('admin.vehicles.index') }}?make_id=' + makeId,
                            type: 'get',
                            success: function(res) {
                                $('#model').html('<option value="">Select Model</option>');
                                $.each(res, function(key, value) {
                                    $('#model').append('<option value="' + value
                                        .id + '">' + value.name + '</option>');
                                });
                                //$('#city').html('<option value="">Select City</option>');
                            }
                        });
                    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</x-admin-layout>
