<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    {{-- navigation menu --}}
    <menu>
        <li><a href="/">Home</a></li>
        <li><a href="/form">Form</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/loginform">Login</a></li>
    </menu>

    {{ $slot }}
</body>

</html>
