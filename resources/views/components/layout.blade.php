<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif



    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="{{ route('dojo.index') }}">All Dojos</a>
            <a href="{{ route('ninja.index') }}">All Ninjas</a>
            <a href="{{ route('ninja.create') }}">Create New Ninja</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>

</html>
