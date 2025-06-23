<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/dashboardstyle.css') }}">
    <title>Dashboard Admin</title>
    <link rel="icon" href="/Koskamling/img/koskamling-logo.png">
</head>
<body>
    @include('navbar')
    @yield('content')
    
</body>
</html>