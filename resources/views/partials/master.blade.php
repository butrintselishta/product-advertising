<!doctype html>
<html>

@include('partials.head')

<body class="home">
    @include('partials.header')

        @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>
