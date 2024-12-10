<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>{{config('app.name')}}</title>
</head>
<body>

    @include('components.header')

    <main>
        {{ $slot }}
    </main>

    <script src="{{ asset('assets/js/bundle.js') }}"></script>
</body>
</html>
