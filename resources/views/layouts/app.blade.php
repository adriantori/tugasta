<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('include.head')
    
</head>
<body>
    <div id="app">
        @include('include.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
