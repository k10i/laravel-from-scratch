<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    @include('layouts.nav')

    @if ($flash = session('message'))
    <div class="flash-message">
        {{ $flash }}
    </div>
    @endif

    @yield('content')

    @include('layouts.sidebar')

    @include('layouts.footer')
</body>
</html>
