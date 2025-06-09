<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sweet Factory</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
<header class="bg-white shadow-md" x-data="{ open: false }">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <div class="flex items-center">
                <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">Sweet Factory</a>
            </div>

            <div class="flex items-center">
                <nav class="hidden md:flex md:items-center md:space-x-4">
                    <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900" href="/">{{ __('messages.navigation.home') }}</a>
                    @auth
                        {{-- JEŚLI UŻYTKOWNIK JEST ZALOGOWANY, POKAŻ TO: --}}
                        <div class="relative">
                            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover"
                                 src="{{ auth()->user()->avatar_path ? asset('storage/' . auth()->user()->avatar_path) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}"
                                 alt="User dropdown">

                            <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-56 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div class="font-bold">{{ auth()->user()->name }}</div>
                                    <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                                </div>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                    <li>
                                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mój Profil</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    {{-- Formularz wylogowania --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); this.closest('form').submit();"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                            Wyloguj się
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>

                    @else
                        {{-- JEŚLI UŻYTKOWNIK NIE JEST ZALOGOWANY, POKAŻ TO: --}}
                        <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900" href="{{ route('logIn') }}">{{ __('messages.navigation.login') }}</a>
                        <a class="px-3 py-2 text-sm font-semibold text-white bg-pink-500 hover:bg-pink-600 rounded-md" href="{{ route('register') }}">{{ __('messages.navigation.signup') }}</a>
                    @endauth
                    <a class="px-3 py-2 text-sm font-semibold text-gray-700 hover:text-gray-900" href="/about">{{ __('messages.navigation.meet_our_team') }}</a>

                    <div class="relative" x-data="{ langOpen: false }" @click.away="langOpen = false">
                        <button @click="langOpen = !langOpen" class="flex items-center px-3 py-2 text-sm font-semibold text-gray-700 rounded-lg hover:text-gray-900 focus:outline-none focus:shadow-outline">
                            <span>{{ __('messages.navigation.change_language') }}</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': langOpen, 'rotate-0': !langOpen}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="langOpen" x-cloak class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20" x-transition>
                            <div class="py-2">
                                <a href="{{ route('language.switch', 'en') }}" class="flex items-center space-x-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <img src="https://flagcdn.com/w20/gb.png" alt="EN" class="h-4 w-auto rounded-sm">
                                    <span class="font-semibold">English</span>
                                </a>
                                <a href="{{ route('language.switch', 'pl') }}" class="flex items-center space-x-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <img src="https://flagcdn.com/w20/pl.png" alt="PL" class="h-4 w-auto rounded-sm">
                                    <span class="font-semibold">Polski</span>
                                </a>
                                <a href="{{ route('language.switch', 'de') }}" class="flex items-center space-x-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <img src="https://flagcdn.com/w20/de.png" alt="DE" class="h-4 w-auto rounded-sm">
                                    <span class="font-semibold">Deutsch</span>
                                </a>
                                <a href="{{ route('language.switch', 'es') }}" class="flex items-center space-x-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <img src="https://flagcdn.com/w20/es.png" alt="ES" class="h-4 w-auto rounded-sm">
                                    <span class="font-semibold">Español</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="flex md:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden pb-4">
            <a class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/">{{ __('messages.navigation.home') }}</a>
            <a class="block px-3 py-2 mt-1 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/logIn">{{ __('messages.navigation.login') }}</a>
            <a class="block px-3 py-2 mt-1 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/register">{{ __('messages.navigation.signup') }}</a>
            <a class="block px-3 py-2 mt-1 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/about">{{ __('messages.navigation.meet_our_team') }}</a>

            <div class="border-t border-gray-200 mt-4 pt-4">
                <span class="block px-3 text-xs font-semibold text-gray-500 uppercase">{{ __('messages.navigation.change_language') }}</span>
                <div class="mt-2 space-y-1">
                    <a href="{{ route('language.switch', 'en') }}" class="flex items-center space-x-3 px-3 py-2 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        <img src="https://flagcdn.com/w20/gb.png" alt="EN" class="h-4 w-auto rounded-sm">
                        <span>English</span>
                    </a>
                    <a href="{{ route('language.switch', 'pl') }}" class="flex items-center space-x-3 px-3 py-2 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        <img src="https://flagcdn.com/w20/pl.png" alt="PL" class="h-4 w-auto rounded-sm">
                        <span>Polski</span>
                    </a>
                    <a href="{{ route('language.switch', 'de') }}" class="flex items-center space-x-3 px-3 py-2 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        <img src="https://flagcdn.com/w20/de.png" alt="DE" class="h-4 w-auto rounded-sm">
                        <span>Deutsch</span>
                    </a>
                    <a href="{{ route('language.switch', 'es') }}" class="flex items-center space-x-3 px-3 py-2 text-base font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        <img src="https://flagcdn.com/w20/es.png" alt="ES" class="h-4 w-auto rounded-sm">
                        <span>Español</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="p-8">
</main>
    @yield("content")
<footer class="relative footer-background text-gray-700">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <span class="text-xl">Sweet Factory</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">{{ __('messages.footer.slogan') }}</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
            <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-gray-900 tracking-widest text-sm mb-3">{{ __('messages.footer.services_header') }}</h2>
                <nav class="list-none mb-10">
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.services_web') }}</a></li>
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.services_dev') }}</a></li>
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.services_host') }}</a></li>
                </nav>
            </div>
            <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-gray-900 tracking-widest text-sm mb-3">{{ __('messages.footer.about_header') }}</h2>
                <nav class="list-none mb-10">
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.about_company') }}</a></li>
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.about_team') }}</a></li>
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.about_history') }}</a></li>
                </nav>
            </div>
            <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-gray-900 tracking-widest text-sm mb-3">{{ __('messages.footer.careers_header') }}</h2>
                <nav class="list-none mb-10">
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.careers_jobs') }}</a></li>
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.careers_dev') }}</a></li>
                    <li><a class="text-gray-600 hover:text-gray-800" href="#">{{ __('messages.footer.careers_benefits') }}</a></li>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 bg-opacity-75">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">
                {{ __('messages.footer.copyright', ['year' => date('Y'), 'name' => 'Sweet Factory']) }}
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a class="text-gray-500 hover:text-gray-700"><svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg></a>
                <a class="ml-3 text-gray-500 hover:text-gray-700"><svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg></a>
                <a class="ml-3 text-gray-500 hover:text-gray-700"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path></svg></a>
            </span>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
