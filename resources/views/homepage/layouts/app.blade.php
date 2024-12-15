<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="img/logo-cyber-security.png" width="98px" />
    </head>
<body>

    @yield('content')
    <div class="container">
        <h1>WEB APPLICATION OF INFORMATION SECURITY</h1>
        <div class="buttons">
            <a href="{{ url('/login') }}" class="button">LOG IN</a>
            <a href="{{ url('/register') }}" class="button">REGISTER</a>
        </div>
    </div>
</body>
</html>