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

                        <div class="relative">
                            <img
                                id="avatarButton"
                                type="button"
                                data-dropdown-toggle="userDropdown"
                                data-dropdown-placement="bottom-start"
                                class="w-10 h-10 rounded-full cursor-pointer object-cover"
                                src="{{
                                    session('avatar_path')
                                    ? asset('storage/' . session('avatar_path'))
                                    : (auth()->user()->avatar_path
                                     ? asset('storage/' . auth()->user()->avatar_path)
                                       : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random')
                                 }}"
                                alt="Avatar użytkownika"
                            />


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
    <div class="container mx-auto px-6 py-12">


        <div class="flex flex-col items-center text-center space-y-8">


            <a href="/" class="text-3xl font-extrabold text-gray-900">
                Sweet Factory
            </a>

{{--            --}}{{-- 2. Formularz Newslettera --}}
{{--            <div class="w-full max-w-md">--}}
{{--                <h3 class="font-bold text-gray-900">{{ __('messages.footer.newsletter_header') }}</h3>--}}
{{--                <p class="text-sm text-gray-500 mt-1">{{ __('messages.footer.newsletter_text') }}</p>--}}

{{--                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mt-4 flex shadow-sm rounded-md">--}}
{{--                    @csrf--}}
{{--                    <input type="email" name="email" required placeholder="Twój e-mail" aria-label="Email for newsletter"--}}
{{--                           class="w-full py-2 px-3 border-gray-300 rounded-l-md focus:border-pink-500 focus:ring-pink-500">--}}
{{--                    <button type="submit" aria-label="Subscribe to newsletter"--}}
{{--                            class="inline-flex items-center px-4 py-2 bg-pink-500 text-white rounded-r-md hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">--}}
{{--                        <span>Zapisz</span>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}


            <nav class="flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm font-medium text-gray-600">
                <a href="/about" class="hover:text-pink-600">{{ __('messages.footer.meet_creators') }}</a>

                @guest
                    <a href="{{ route('register') }}" class="hover:text-pink-600">{{ __('messages.footer.signup') }}</a>
                    <a href="{{ route('logIn') }}" class="hover:text-pink-600">{{ __('messages.footer.login') }}</a>
                @endguest

                @auth
                    <a href="{{ route('profile.edit') }}" class="hover:text-pink-600">{{ __('messages.footer.my_profile') }}</a>
                @endauth
            </nav>


            <p class="text-xs text-gray-400">
                {{ __('messages.footer.copyright', ['year' => date('Y'), 'name' => 'Sweet Factory']) }}
            </p>

        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
