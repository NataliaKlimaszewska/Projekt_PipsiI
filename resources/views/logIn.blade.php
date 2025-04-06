@extends('layouts.master')

@section('content')
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
@endsection
