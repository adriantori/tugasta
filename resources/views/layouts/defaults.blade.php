<!doctype html>

<html>

<head>

   @include('include.head')

</head>

<body>
    <header>
        @include('include.header')
    </header>
    
    @yield('content')

<!-- Footer -->
<footer class="page-footer font-small bg.danger pt-4">
    @include('include.footer')
</footer>

</body>

</html>