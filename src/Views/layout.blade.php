<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>{{ config('app.name') }} | @yield('title', 'Vault Admin')</title>
    </head>
    <body>

        @include('vault::partial.header')

        @yield('content')

        @include('vault::partial.footer')

        @stack('scripts')

    </body>
</html>
