<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Music</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="image/x-icon">

    @vite('resources/css/app.css')
</head>
<body class="w-full h-full bg-color1 newFlex flex-col overflow-hidden">
    {{ $slot }}
</body>
</html>