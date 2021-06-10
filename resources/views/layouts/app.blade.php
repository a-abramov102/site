<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<title>{{'test'}}</title>
</head>
<body>
    <div class="container">
        <x-categories></x-categories>
    </div>
    <main class="container">
        <x-carousel-category :categories="$categories"></x-carousel-category>
        <div class="row mb-2">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <!--поле контента-->
            @yield('content')
        </div>
    </main>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 -->

    <script src="{{ asset("js/app.js") }}"></script>

</body>
</html>