<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css', 'resources/js/app.js')

    <title>Pixel Positions</title>
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10 font-bold">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6">

                <a href="#">Jobs</a>
                <a href="#">Carees</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>

            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>


                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>


            @endauth

            @guest
                <div class="space-x-6">
                    <a href="/register">Sign up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest


        </nav>

        <main class="mt-10 max-w-[1000px] mx-auto">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
