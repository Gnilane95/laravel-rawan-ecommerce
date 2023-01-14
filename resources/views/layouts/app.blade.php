@php
    $styleLink="font-bold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- link font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- script barmenu --}}
    <script src="https://kit.fontawesome.com/163e4be023.js" crossorigin="anonymous"></script>
    {{-- link google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    {{-- tailwind elements --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                sans: ['Inter', 'sans-serif'],
                },
            }
            }
        }
    </script>
    <title>Rawan</title>
    @livewireStyles
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
        <nav class="">
            {{-- nav1 --}}
            <div class="flex justify-between items-center bg-gradient-to-r from-primary-light to-slate-50 py-3 px-52 border-b border-gray-400">
                {{-- search --}}
                <div class="form-control">
                    <div class="">
                      <input type="text" placeholder="Rechercher un article..." class="w-64 rounded-xl" />
                    </div>
                </div>
                {{-- auth --}}
                <div class="">
                    @auth 
                        <ul>                                
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user"></i> 
                                <div class="dropdown dropdown-end">
                                    <label tabindex="0" class="cursor-pointer text-secondary-dark border-none">
                                        {{ Auth::user()->name }}
                                    </label>
                                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                        @if (Auth::user()->utype === 'ADM')
                                            <li >
                                                <a href="{{ route('admin.dashboard') }}">Tableau de bord</a>
                                            </li>
                                        @else
                                            <li >
                                                <a href="{{ route('user.dashboard') }}">Mon compte</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div> 
                                <span>/</span>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </form>
                            </li>
                        </ul>
                    @endauth
                    @guest
                        <ul class="font-bold text-slate-600">                                
                            <li><i class="fa-solid fa-key"></i> <a href="{{ route('login') }}">Log In </a>  / <a href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    @endguest
                </div>
            </div>
            {{-- nav2 --}}
            <div class="flex justify-between lg:fixedf lg:top-10f lg:z-50f w-fullf lg:bg-white shadow-md border-b border-gray-200 md:px-10 sm:px-3 lg:px-52 py-5g items-center font-bold">
                {{-- logo --}}
                <a href="/">
                    <img src="{{asset('storage/images/logo-rawan-removebg-preview.png') }}" alt="Logo Rawan" class="w-28">
                </a>
                
                {{-- other items sm --}}
                <div class="sm:flex sm: sm:items-center xl:hidden">
                    <a href="" class="btn btn-ghost btn-circle">
                        <i class="fa-solid fa-magnifying-glass text-gray-600"></i>
                    </a>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item">
                                {{-- {{ Cart::count() }} --}}
                            </span>
                        </div>
                        </label>
                        <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <div class="card-actions">
                            <a href="" class="btn btn-primary btn-block">Voir le panier</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-ghost btn-circle">
                            <i class="fa-regular fa-user text-gray-600"></i>
                        </a>
                    @endguest
                    @auth
                        <div class="dropdown dropdown-end flexh items-center">
                            <p class="text-gray-600 text-center">Bienvenue</p>
                            <label tabindex="0" class="cursor-pointer text-secondary-dark underline border-none">
                                {{-- {{ Auth::user()->name }} --}}
                            </label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li >
                                    <a href="">Mon profil</a>
                                    
                                </li>
                                @if (Auth::user()->is_admin === 1)
                                    <li>
                                        <a href="{{ route('dashboard') }}">Tableau de bord</a>
                                    </li>
                                @endif
                                <li >
                                    {{-- <x-btn-logout/> --}}
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            
                <input type="checkbox" id="check" class="hidden" >
                <label for="check" class="xl:hidden sm:text-2xl sm:loading-[80px]">
                    <i class="fa-solid fa-bars"></i>
                </label>
                {{-- nav items --}}
                <ul class="xl:space-x-5 xl:flex xl:space-y-0  xl:bg-transparent xl:opacity-100 xl:p-0 xl:z-auto xl:static xl:text-center xl:text-gray-800 sm:fixed sm:right-0 sm:top-20 xl:top-0 sm:leading-[80px] sm:z-50 sm:mr-10 xl:mr-0 sm:space-x-4 sm:rounded sm:h-[100vh] xl:h-fit sm:w-[100%] xl:w-fit sm:text-center sm:transition-all sm:duration-300 xl:transition-none sm:bg-slate-50 sm:left-[-100%] xl:left-0">
                    <li>
                        <a href="{{ route('bijoux.index') }}" class="hover:text-primary">Bijoux</a>
                    </li>
                    <li>
                        <a href="{{ route('vetements-femme.index') }}" class="hover:text-primary">Collections femmes</a>
                    </li>
                    <li>
                        <a href="{{ route('abayas-homme.index') }}" class="hover:text-primary">Abayas hommes</a>
                    </li>
                    <li>
                        <a href="{{ route('vetements-enfant.index') }}" class="hover:text-primary">Enfants</a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="hover:text-primary">blog</a>
                    </li>
                </ul>
                {{-- other items xl --}}
                <div class="xl:flex xl:items-center sm:hidden">
                    {{-- cart --}}
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            <span class="badge badge-sm indicator-item bg-secondary-dark border-none">
                                7
                            </span>
                        </div>
                        </label>
                        <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <div class="card-actions">
                            <a href="{{ route('cart.index') }}" class="btn bg-secondary-dark border-none btn-block">Voir le panier</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- wishlist --}}
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle">
                            <div class="indicator">
                                <i class="fa-regular fa-heart text-xl"></i>
                                <span class="badge badge-sm indicator-item bg-secondary-dark border-none">
                                    4
                                </span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            
        </nav>
    </header>

    {{ $slot }}

    @vite('resources/js/app.js')
    @vite('resources/js/scroll.js')

    <div class="bg-primary">
        @include('partials.footer._footer')
    </div>
    
    @livewireScripts
    {{-- script tailwind elements --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>