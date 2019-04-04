<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Test Laravel')</title>
</head>
<body>
        
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact</a>
    </ul>

    @yield('content')

</body>
</html>
