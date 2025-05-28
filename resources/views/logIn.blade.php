@extends('layouts.master')

@section('content')
<<<<<<< HEAD
=======


>>>>>>> 7bce3d3e (Initial project upload)
    <style>
        body,
        html { height: 100%; }
        body {
            font-family: "Lato", sans-serif;
            background: orange;
            display: flex;
            align-items: center;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            color: white;
        }
        .container { width: 400px; }
        form {
            display: flex;
            flex-direction: column;
            background: transparent;
            max-width: 320px;
            padding: 2rem;
            position: relative;
        }
        form::before, form::after {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            transition: all 0.5s ease;
        }
        form::before {
            z-index: -1;
            background: transparent;
            transform: translateX(-3.5rem) translateY(-3.75rem);
            border: 6px solid #0e39fe;
        }
        form::after {
            background: #0ea8ec;
            z-index: -2;
            transform: translateX(-2rem) translateY(-2.25rem);
        }
        form h1 {
            text-align: center;
            margin: 0 0 0.25rem 0;
            padding: 0;
            font-size: 1.5rem;
        }
        form small {
            display: block;
            margin: 0 auto 1rem;
            padding: 0;
            font-size: 14px;
        }
        form:focus-within {
            background: #0ea8ec;
        }
        form:focus-within::before {
            width: 0%;
            height: 0%;
            transform: translatex(0px) translatey(0px);
        }
        form .field {
            display: flex;
            flex-flow: column-reverse;
            margin-bottom: 1em;
        }
        form label, form input {
            transition: all 0.3s ease;
            touch-action: manipulation;
        }
        form label {
            opacity: 0;
        }
        form input {
            padding: 10px 20px;
            border: 4px solid white;
            margin: 0 1.5rem;
            background-color: transparent !important;
            -webkit-appearance: none;
            color: white;
        }
        form input:-webkit-autofill {
            background-color: transparent !important;
            -webkit-box-shadow: 0 0 0px 1000px #0ea8ec inset;
            -webkit-text-fill-color: white !important;
        }
        form input::placeholder { color: white; }
        form input:focus {
            color: #0e39fe;
            font-weight: bold;
            outline: 0;
            border: 6px solid #0e39fe;
        }
        form input::-webkit-input-placeholder { opacity: 1; transition: inherit; }
        form input:focus::-webkit-input-placeholder { opacity: 0; }
        form button {
            border: none;
            padding: 0.85rem 1rem;
            margin-top: 2rem;
            background-color: #0e39fe;
            color: white;
            font-size: 0.75rem;
            text-transform: uppercase;
            width: 65%;
            position: absolute;
            bottom: -20px;
            right: 18%;
            letter-spacing: 0.15em;
            transition: all 0.3s ease;
        }
        form button:hover { border: 6px solid #090c9b; }
        form p {
            font-size: 0.75rem;
            line-height: 1.125rem;
            margin: 0.5rem 1.5rem 1.75rem 1.5rem;
        }
        form p.success-message {
            font-size: 1.25rem;
            text-align: center;
            line-height: 2rem;
            margin: 1.5rem auto 5rem auto;
        }
        .alert {
            margin-top: 1rem;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm'); // Corrected ID
            const messageDiv = document.getElementById('loginMessage'); // Corrected ID
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            loginForm.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(loginForm);

                fetch('/log-in', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            messageDiv.textContent = data.message;
                            messageDiv.className = 'alert alert-success';
                            window.location.href = '/dashboard'; // Replace as needed
                        } else {
                            messageDiv.textContent = data.message;
                            messageDiv.className = 'alert alert-danger';
                        }
                    })
                    .catch(error => {
                        console.error('Login Error:', error);
                        messageDiv.textContent = 'An error occurred during login.';
                        messageDiv.className = 'alert alert-danger';
                    });
            });
        });
    </script>

    <div class="container">
        <form autocomplete="off" id='loginForm'> <input type="hidden" name="_token" value="{{ csrf_token() }}"> <h1 id="message">Get Started</h1>
            <small id="smallMessage"></small>
            <div class="field">
                <input type="email" name="email" placeholder="Email" id="email" autocomplete="off">
                <label for="email">Email</label>
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="Password" id="password" autocomplete="new-password">
                <label for="password">Password</label>
            </div>
            <button id="submit">Create My Account</button>
            <p>By signing up, I agree to to the Terms of Service and Privacy Policy</p>
            <div id="loginMessage"></div> </form>
    </div>
<<<<<<< HEAD
=======
    <!-- component -->
    <footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                    <img src="#" class="mr-5 h-6 sm:h-9" alt="logo" />
                    <p class="max-w-xs mt-4 text-sm text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, accusantium.
                    </p>
                    <div class="flex mt-8 space-x-6 text-gray-600">
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Facebook </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Instagram </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Twitter </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> GitHub </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Dribbble </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clipRule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <p class="font-medium">
                            Company
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> About </a>
                            <a class="hover:opacity-75" href> Meet the Team </a>
                            <a class="hover:opacity-75" href> History </a>
                            <a class="hover:opacity-75" href> Careers </a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">
                            Services
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> 1on1 Coaching </a>
                            <a class="hover:opacity-75" href> Company Review </a>
                            <a class="hover:opacity-75" href> Accounts Review </a>
                            <a class="hover:opacity-75" href> HR Consulting </a>
                            <a class="hover:opacity-75" href> SEO Optimisation </a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">
                            Helpful Links
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> Contact </a>
                            <a class="hover:opacity-75" href> FAQs </a>
                            <a class="hover:opacity-75" href> Live Chat </a>
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
                © 2022 Comany Name
            </p>
        </div>
    </footer>
>>>>>>> 7bce3d3e (Initial project upload)
@endsection
