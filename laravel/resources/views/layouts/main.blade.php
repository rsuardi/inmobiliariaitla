<html>
    @include('layouts.header')

    <body>
    <h5>El menú</h5>
    <ul>
        <li>Anuncios</li>
    </ul>

    @yield('content')
    @include('layouts.footer')
    @yield('scripts')
    </body>
</html>