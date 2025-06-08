<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAKE GENERATOR</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-white shadow-md overflow-hidden">
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="bg-white dark-mode:bg-gray-800 max-w-screen-xl mx-auto px-4 md:px-6 lg:px-8 h-[80px] max-h-[80px] flex items-center justify-between">
        <div class="flex flex-row items-center justify-between w-full md:w-auto">
            <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Sweet Factory</a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="hidden md:flex flex-col md:flex-row md:items-center md:justify-end space-x-4">
            <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="/">{{ __('messages.navigation.home') }}</a>
            <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="/logIn">{{ __('messages.navigation.login') }}</a>
            <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="/register">{{ __('messages.navigation.signup') }}</a>
            <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="/about">{{ __('messages.navigation.meet_our_team') }}</a>
            <div @click.away="langOpen = false" class="relative" x-data="{ langOpen: false }">
                <button @click="langOpen = !langOpen" class="flex items-center px-3 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 focus:outline-none focus:shadow-outline">
                    <span>{{ __('messages.navigation.change language') }}</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': langOpen, 'rotate-0': !langOpen}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="langOpen" x-transition class="absolute right-0 mt-2 bg-white rounded-md shadow-lg w-48 z-20">
                    <div class="grid grid-cols-1 gap-1 p-2">
                        <a href="{{ route('language.switch', 'en') }}" class="flex items-center px-2 py-1 hover:bg-gray-100 rounded">
                            <img src="https://flagcdn.com/w40/gb.png" alt="EN" class="h-5 w-5 rounded-sm mr-2">
                            <span>ENG</span>
                        </a>
                        <a href="{{ route('language.switch', 'pl') }}" class="flex items-center px-2 py-1 hover:bg-gray-100 rounded">
                            <img src="https://flagcdn.com/w40/pl.png" alt="PL" class="h-5 w-5 rounded-sm mr-2">
                            <span>PL</span>
                        </a>
                        <a href="{{ route('language.switch', 'de') }}" class="flex items-center px-2 py-1 hover:bg-gray-100 rounded">
                            <img src="https://flagcdn.com/w40/de.png" alt="DE" class="h-5 w-5 rounded-sm mr-2">
                            <span>DE</span>
                        </a>
                        <a href="{{ route('language.switch', 'es') }}" class="flex items-center px-2 py-1 hover:bg-gray-100 rounded">
                            <img src="https://flagcdn.com/w40/es.png" alt="ES" class="h-5 w-5 rounded-sm mr-2">
                            <span>ES</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<x-weather-widget />

<main class="p-8">
</main>
    @yield("content")
</body>
</html>
