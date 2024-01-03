<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{-- <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #825a5a;
        }
    </style> --}}
    <title>{{ $title ?? 'Tandur Menandur' }}</title>
</head>

<body>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
