<html lang="{{ str_replace('__', '-', app()->getlocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | Show</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body class="text-center px-8 py-12">
    <h1>Welcome to the Ninja Network</h1>
    <p>Click the button below to view the list of ninjas.</p>
    <a href="/ninja" class="btn mt-4 inline-block">
        Find Ninjas!
    </a>
</body>

</html>
