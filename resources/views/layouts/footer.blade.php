<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body>
    <footer class="fixed-bottom ">
        <div class="card">
            <div class="card-header text-center">
                <span class="text-danger">&there4;</span> Warung Rizky Laravel <span class="text-danger">&there4;</span>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0 text-center">
                    <p>Sistem Informasi 4 </p>
                    <footer class="blockquote-footer">Dibuat Oleh <cite title="Source Title">Rizky Akbar Siregar</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </footer>
</body>

</html>
