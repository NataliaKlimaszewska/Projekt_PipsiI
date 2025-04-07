<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAKE GENERATOR</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-white shadow-md">
    <nav class="bg-white px-8 pt-2 shadow-md">
        <div class="-mb-px flex justify-center">
            <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/">Home</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/createRecipe">Create Your Own Recipe</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/ideas">Ideas</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/logIn">Log In</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/register">Sign In</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/quiz">Quiz</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="/about">Meet Our Team</a>
        </div>
    </nav>
</header>

<main class="p-8">
    <p>Tutaj damy całą stronę startową</p>
</main>
    @yield("content")
</body>
</html>
