@extends("layouts.master")

@section("content")
    <h1>Strona główna</h1>


    <p>Witamy na stronie głównej! Oto lista składników:</p>

    <x-ingredients :ingredientsGroups="$ingredientsGroups" :defaultDisplay="true" />
    <!-- component -->

    <footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                    <img src="#" class="mr-5 h-6 sm:h-9" alt="logo" />
                    <p class="max-w-xs mt-4 text-sm text-gray-600">
                     Sweet Factory is a novice web page where you can generate recipes. Made with idea against of food waste.
                    </p>

                </div>
                <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <p class="font-medium">
                            Company
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> About </a>
                            <a class="hover:opacity-75" href> Meet the Team </a>
                            <a class="hover:opacity-75" href> Sign In </a>
                            <a class="hover:opacity-75" href> Careers </a>
                        </nav>
                    </div>

                    <div>
                        <p class="font-medium">
                            Helpful Links
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> Contact </a>
                            <a class="hover:opacity-75" href> FAQs </a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">
                            Legal
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> Privacy Policy </a>
                            <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                            <a class="hover:opacity-75" href> Returns Policy </a>
                            <a class="hover:opacity-75" href> Accessibility </a>
                        </nav>
                    </div>
                </div>
            </div>
            <p class="mt-8 text-xs text-gray-800">
                © 2025 Sweet Factory
            </p>
        </div>
    </footer>
@endsection
