<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    },
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased selection:bg-emerald-500 selection:text-white dark:bg-zinc-900 dark:text-gray-100">
    
    <div class="min-h-screen">
        
        <nav class="bg-white dark:bg-zinc-900 border-b border-gray-100 dark:border-zinc-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}" class="group flex items-center gap-2">
                                <span class="font-bold text-xl tracking-tight text-gray-900 dark:text-white group-hover:text-emerald-600 transition-colors">Aña🥞</span>
                            </a>
                        </div>

                        <!-- Links de Navegación -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-emerald-500 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-emerald-700 transition duration-150 ease-in-out">
                                {{ __('Dashboard') }}
                            </a>
                        </div>
                    </div>

                    <!-- Menú de usuario -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="relative ml-3 flex items-center gap-4">
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                {{ Auth::user()->name }}
                            </div>
                            
                            <!-- Botón Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-sm text-gray-500 hover:text-red-600 dark:text-gray-400 dark:hover:text-red-400 transition-colors">
                                    {{ __('Cerrar Sesión') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    

            <!-- Menú -->
            <div id="mobile-menu" class="hidden sm:hidden bg-white dark:bg-zinc-900 border-b border-gray-200 dark:border-zinc-700">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 border-emerald-500 text-base font-medium text-emerald-700 bg-emerald-50 dark:bg-emerald-900/10 dark:text-emerald-400 focus:outline-none focus:text-emerald-800 focus:bg-emerald-100 transition duration-150 ease-in-out">
                        {{ __('Dashboard') }}
                    </a>
                </div>
                <div class="pt-4 pb-4 border-t border-gray-200 dark:border-zinc-700">
                    <div class="flex items-center px-4">
                        <div class="ml-3">
                            <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                            <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:bg-gray-50 transition duration-150 ease-in-out">
                                {{ __('Cerrar Sesión') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="bg-white dark:bg-zinc-900 shadow-sm">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
        </header>

        <!-- Contenido Principal -->
        <main class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                
                <!-- Tarjeta de Bienvenida -->
                <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-[0_4px_20px_rgba(16,185,129,0.08)] ring-1 ring-emerald-500/20 sm:rounded-xl">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-emerald-600 dark:text-emerald-400">¡Hola, {{ Auth::user()->name }}!</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">Has iniciado sesión correctamente.</p>
                        </div>
                        <div class="hidden sm:block">
                            <span class="inline-flex items-center rounded-md bg-emerald-50 dark:bg-emerald-900/30 px-2 py-1 text-xs font-medium text-emerald-700 dark:text-emerald-400 ring-1 ring-inset ring-emerald-600/20">
                                Estado: Activo
                            </span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>