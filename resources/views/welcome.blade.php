<x-guest-layout>



    <img style="width: 100%; padding: 10px;" src="{{ asset('imgs/main.jpeg') }}" alt="">


    </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Explore the Future</h1>
            <p class="lead fw-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Consectetur explicabo, aut quisquam itaque facilis distinctio,
                ipsam perferendis ab quo quos culpa earum recusandae delectus alias deserunt ex,
                quam veritatis molestiae!.</p>
            <a class="btn btn-outline-secondary" href="#">More</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>



    <div class="row mb-2 ">
        @foreach ($vehicles as $vehicle)
            <div class="col-md-6 col-sm-12">

                <div
                    class=" bg-light row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative m-3 ">
                    <div class="col-3 p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">NEW</strong>
                        <h3 class="mb-0">{{ ucfirst($vehicle->name) }}</h3>
                        <h5 class="card-text mb-auto">{{ ucfirst($vehicle->mods->name) }}</h5>
                        <p class="card-text mb-auto">Engine: {{ $vehicle->engine }}</p>
                        <p class="card-text mb-auto">Status: {{ $vehicle->status }}</p>
                        <p class="card-text mb-auto">Color: {{ $vehicle->color }}</p>
                        <p class="card-text mb-auto">Price: {{ $vehicle->price }}</p>
                        <a href="#" class="stretched-link">Book this Car</a>
                    </div>
                    <div class="col-9 d-block">
                        <img src="<?php echo 'imgs/' . $vehicle->image; ?>">
                    </div>

                </div>

            </div>
        @endforeach
    </div>




</x-guest-layout>
