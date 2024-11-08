<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('bs.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
     <div class="container mt-4">
        @yield('content')
     </div>
     <script src="{{ asset('bs.min.js') }}"></script>
</body>
</html>
