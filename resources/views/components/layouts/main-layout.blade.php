@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- link font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- script barmenu --}}
    <script src="https://kit.fontawesome.com/163e4be023.js" crossorigin="anonymous"></script>
    {{-- link google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Rawan | {{ $title }}</title>
    {{-- @livewireStyles --}}
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<style>
    #check:checked ~ ul{
        left: 0;
    }
</style>
<body>
    {{-- @include('partials._session') --}}
    <header>
        @include('partials.header._navbar')
        @include('partials.header._hero')
    </header>

    {{ $slot }}

    @vite('resources/js/app.js')
    @vite('resources/js/scroll.js')

    <div class="bg-primary">
        @include('partials.footer._footer')
    </div>
    {{-- @livewireScripts --}}
</body>
</html>