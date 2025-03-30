<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<style>
    * {
        font-family: Nunito, sans-serif;
    }

    .outer-container {
        padding: 20px;
        background-color: rgb(255, 235, 234);
        text-align: center;
    }

    .heading-text {
        font-weight: 700;
        font-size: 36px;
        color: rgb(51, 51, 51);
        margin-bottom: 20px;
    }

    .sub-heading-text {
        font-size: 20px;
        font-weight: 700;
        color: rgb(102, 102, 102);
        margin-bottom: 40px;
    }

    .cards-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card-container {
        text-align: center;
        width: 250px;
    }

    .team-member-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .name {
        font-size: 18px;
        font-weight: 700;
        color: rgb(102, 102, 102);
        margin-top: 10px;
    }

    .position {
        color: rgb(244, 152, 146);
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 768px) {
        .cards-container {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
</body>
<body>
<header class="bg-white shadow-md">
    <nav class="bg-white px-8 pt-2 shadow-md">
        <div class="-mb-px flex justify-center">
            <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="home.php">Home</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="CreateRecipe.php">Create Your Own Recipe</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="Ideas.php">Ideas</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="LogginPage.php">Log In</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="SignInPage.php">Sign In</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="Quiz.php">Quiz</a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="OurTeam.php">Meet Our Team</a>
        </div>
    </nav>
</header>
<div class="outer-container">
    <h1 class="heading-text">Meet Creators :)</h1>
    <p class="sub-heading-text">
        These are your "baking heroes"! They created this website so you don't have to worry about your recipes.
    </p>

    <div class="cards-container">
        <div class="card-container">
            <img class="team-member-image" src="images/NatalkaSzogun.jpg" alt="Natalka">
            <p class="name">Natalia Klimaszewska</p>
            <p class="position">Creator </p>
        </div>
        <div class="card-container">
            <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors2.svg" alt="Instructor">
            <p class="name">Jane Doe</p>
            <p class="position">Instructor</p>
        </div>
        <div class="card-container">
            <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors3.svg" alt="Instructor">
            <p class="name">John Smith</p>
            <p class="position">Instructor</p>
        </div>
    </div>
</div>
</body>
</html>
