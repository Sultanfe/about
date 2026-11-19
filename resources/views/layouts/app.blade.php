<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'Trust and authenticity for every unit, from factory to buyer.')">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:rounded-md focus:px-4 focus:py-2 focus:bg-sky-600 focus:text-white focus:text-sm">
        Skip to content
    </a>

    <!-- Header / Nav -->
    <header class="border-b border-slate-200 bg-white/95">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8" aria-label="Main navigation">
            <a href="{{ route('about') }}" class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-slate-900">
                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-sky-600 text-sm font-bold text-white">Tri</span>
                <span class="hidden sm:inline">TriProof AI</span>
            </a>

            <div class="flex items-center gap-2">
                <label for="mobile-menu"
                    class="sm:hidden flex items-center justify-center px-3 py-2 rounded-md text-slate-700 transition hover:bg-slate-100 focus:outline-offset-2 focus-visible:ring-2 focus-visible:ring-sky-600">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path class="h-6 w-6" d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </label>

                <input type="checkbox" id="mobile-menu" class="peer hidden">

                <div class="hidden sm:flex items-center gap-1">
                    <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-sky-700 focus:outline-offset-2 focus-visible:ring-2 focus-visible:ring-sky-600">
                        About
                    </a>
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-sky-700 focus:outline-offset-2 focus-visible:ring-2 focus-visible:ring-sky-600">
                            Log in
                        </a>
                    @endif
                    <div class="ml-2 flex items-center border-l border-slate-200 pl-2">
                        <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="flex items-center gap-1.5 rounded-md px-2 py-1.5 text-xs font-medium text-slate-600 transition hover:bg-slate-100 {{ app()->getLocale() === 'en' ? 'bg-slate-100' : '' }}">
                            <span class="hidden sm:inline">EN</span>
                            <span class="sm:hidden">&#69;&#78;</span>
                        </a>
                        <a href="{{ route('locale.switch', ['locale' => 'bn']) }}" class="flex items-center gap-1.5 rounded-md px-2 py-1.5 text-xs font-medium text-slate-600 transition hover:bg-slate-100 {{ app()->getLocale() === 'bn' ? 'bg-slate-100' : '' }}">
                            <span class="hidden sm:inline">&#2549;&#2686;&#2661;</span>
                            <span class="sm:hidden">&#2549;&#2686;&#2661;</span>
                        </a>
                    </div>
                </div>

                <div class="hidden peer-checked:block peer-checked:sm:block sm:hidden">
                    <div class="flex flex-col gap-1 border-t border-slate-200 py-3">
                        <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-sky-700">About</a>
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-sky-700">Log in</a>
                        @endif
                        <div class="mt-2 flex flex-col gap-1 border-t border-slate-200 pl-3">
                            <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="flex items-center gap-1.5 text-xs font-medium text-slate-600 hover:text-sky-700">EN</a>
                            <a href="{{ route('locale.switch', ['locale' => 'bn']) }}" class="flex items-center gap-1.5 text-xs font-medium text-slate-600 hover:text-sky-700">&#2549;&#2686;&#2661;</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page content -->
    <main id="main" class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-200 bg-slate-50">
        <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <a href="{{ route('about') ?? '/'" class="text-sm text-slate-600 transition hover:text-sky-700">About</a>
                <span class="text-slate-400">&middot;</span>
                <a href="{{ route('privacy') ?? '#' }}" class="text-sm text-slate-600 transition hover:text-sky-700">Privacy</a>
                <a href="{{ route('terms') ?? '#' }}" class="text-sm text-slate-600 transition hover:text-sky-700">Terms</a>
                <span class="text-slate-400">&middot;</span>
                <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="text-xs text-slate-500 transition hover:text-sky-700">EN</a>
                <a href="{{ route('locale.switch', ['locale' => 'bn']) }}" class="text-xs text-slate-500 transition hover:text-sky-700">&#2549;&#2686;&#2661;</a>
            </div>
        </div>
    </footer>
</body>
</html>
