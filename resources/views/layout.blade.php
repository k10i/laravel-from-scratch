<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    @include('layouts.nav')

    @yield('content')

    @include('layouts.sidebar')

    @include('layouts.footer')
</body>
</html>
