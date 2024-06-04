<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css', 'resources/js/app.js');

    <title>Pixel Positions</title>
</head>

<body class="bg-black text-white">
    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10 font-bold">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6">
                
                <a href="#">Jobs</a>
                <a href="#">Carees</a>
                <a href="#">Slaries</a>
                <a href="#">Companies</a>

            </div>
            <div>
                <a href="#">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[1000px] mx-auto">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
