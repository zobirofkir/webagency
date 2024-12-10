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

    @include('components.footer')

    <a
    href="javascript:void(0)"
    class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md duration-300 ease-in-out hover:bg-opacity-80"
  >
    <span
      class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
    ></span>
  </a>



    <script src="{{ asset('assets/js/pricing.js') }}"></script>
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
</body>
</html>
