<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>





</body>



<header class="d-flex justify-content-center py-3 bg-light">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Category</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Booking</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Brands</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        @if (Route::has('login'))

            @auth
                @if (Auth::user()->id == 1)
                    <li><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" class="nav-link" onclick="event.preventDefault();
                                                                      this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            @else
                <li> <a href="{{ route('login') }}" class="nav-link">Login</a></li>

                @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endif
            @endauth

        @endif
    </ul>
</header>



</div>
</nav>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>



</body>

</html>
