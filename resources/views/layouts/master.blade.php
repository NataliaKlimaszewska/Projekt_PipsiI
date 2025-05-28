<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAKE GENERATOR</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-white shadow-md">
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="min-h-screen">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Sweet Factory</a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Home</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/createRecipe">Create Your Own Recipe</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/ideas">Ideas</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/logIn">Log In</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/register">Sign In</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/about">Meet Our Team</a>
                        <div @click.away="open = false" class="relative" x-data="{ open: true }">
                            <button @click="open = !open" class="flex flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>Change Language</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                                <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="bg-transparent p-2 rounded-lg">
                                            <a href="#" class="flex items-center space-x-2 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2">
                                                <img src="https://flagcdn.com/w40/gb.png" alt="EN" class="h-5 w-5 rounded-sm">
                                                <span class="font-semibold text-black-900 dark:text-black-200">ENG</span>
                                            </a>
                                        </div>
                                        <div class="bg-transparent p-2 rounded-lg">
                                            <a href="#" class="flex items-center space-x-2 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2">
                                                <img src="https://flagcdn.com/w40/pl.png" alt="pl" class="h-5 w-5 rounded-sm">
                                                <span class="font-semibold text-black-900 dark:text-black-200">PL</span>
                                            </a>
                                        </div>
                                        </a>

                                        <div class="bg-transparent p-2 rounded-lg">
                                            <a href="#" class="flex items-center space-x-2 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2">
                                                <img src="https://flagcdn.com/w40/de.png" alt=DE" class="h-5 w-5 rounded-sm">
                                                <span class="font-semibold text-black-900 dark:text-black-200">DE</span>
                                            </a>
                                        </div>
                                        </a>

                                        <div class="bg-transparent p-2 rounded-lg">
                                            <a href="#" class="flex items-center space-x-2 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2">
                                                <img src="https://flagcdn.com/w40/es.png" alt="ES" class="h-5 w-5 rounded-sm">
                                                <span class="font-semibold text-black-900 dark:text-black-200">ES</span>
                                            </a>
                                        </div>
                                        </a>
                                        <div class="bg-transparent p-2 rounded-lg">
                                            <a href="#" class="flex items-center space-x-2 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2">
                                                <img src="https://flagcdn.com/w40/ru.png" alt="RU" class="h-5 w-5 rounded-sm">
                                                <span class="font-semibold text-black-900 dark:text-black-200">RU</span>
                                            </a>
                                        </div>
                                        <div class="bg-transparent p-2 rounded-lg">
                                            <a href="#" class="flex items-center space-x-2 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg p-2">
                                                <img src="https://flagcdn.com/w40/fr.png" alt="FR" class="h-5 w-5 rounded-sm">
                                                <span class="font-semibold text-black-900 dark:text-black-200">FR</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{--<nav class="bg-white px-8 pt-2 shadow-md">
        <div class="-mb-px flex justify-center">
            <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/">Home</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/createRecipe">Create Your Own Recipe</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/ideas">Ideas</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/logIn">Log In</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/register">Sign In</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/quiz">Quiz</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="/about">Meet Our Team</a>
        </div>
    </nav>--}}
</header>

<main class="p-8">
</main>
    @yield("content")
</body>
</html>
