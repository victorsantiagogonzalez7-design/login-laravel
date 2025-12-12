<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
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
    <body class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 antialiased">
        
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-emerald-500 selection:text-white">
            
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

                    @if (Route::has('login'))
                        <nav class="flex flex-1 justify-end lg:col-span-2 lg:col-start-2">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-emerald-600 hover:bg-emerald-50 hover:ring-emerald-200 focus:outline-none focus-visible:ring-emerald-500 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a href="/google-auth/redirect" class="group rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-emerald-600 hover:bg-emerald-50 hover:ring-emerald-200 focus:outline-none focus-visible:ring-emerald-500 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white mr-2 flex items-center gap-1">
                                    <svg class="h-4 w-4 text-gray-500 group-hover:text-emerald-500 transition-colors" viewBox="0 0 24 24" fill="currentColor"><path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/></svg>
                                    Google
                                </a>

                                <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-emerald-600 hover:bg-emerald-50 hover:ring-emerald-200 focus:outline-none focus-visible:ring-emerald-500 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-emerald-600 hover:bg-emerald-50 hover:ring-emerald-200 focus:outline-none focus-visible:ring-emerald-500 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6 flex flex-col items-center justify-center text-center">
                    
                    <div class="relative p-8 bg-white dark:bg-zinc-900 rounded-xl shadow-[0_20px_50px_rgba(16,185,129,0.15)] ring-1 ring-emerald-500/20 dark:ring-emerald-400/20 max-w-3xl w-full transition-all duration-300 hover:shadow-[0_20px_50px_rgba(16,185,129,0.25)] hover:ring-emerald-500/40">
                        
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl mb-6">
                            <span class="text-emerald-600">Bienvenidos</span>
                        </h1>
                        
                        <p class="text-lg leading-8 text-gray-600 dark:text-gray-400 mb-8">
                            Bienvenido a nuestra plataforma. Inicia sesión para acceder a tu panel <span class="text-emerald-500 font-bold">:]</span>
                        </p>

                        <div class="flex items-center justify-center gap-x-6">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white flex items-center gap-2 hover:text-emerald-600 transition-colors group">
                                    Ir al Dashboard <span aria-hidden="true" class="group-hover:translate-x-1 transition-transform text-emerald-500">→</span>
                                </a>
                            @else
                                <a href="/google-auth/redirect" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white flex items-center gap-2 hover:text-emerald-600 transition-colors group">
                                    Entrar con Google <span aria-hidden="true" class="group-hover:translate-x-1 transition-transform text-emerald-500">→</span>
                                </a>
                            @endauth
                        </div>

                    </div>
                </main>
                
                <footer class="py-16 text-center text-sm text-black/70 dark:text-white/70">
                    Aña 🥞
                </footer>
            </div>
        </div>
    </body>
</html>