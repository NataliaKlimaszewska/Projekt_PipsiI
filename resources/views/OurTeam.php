<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Team</title>

</head>
<body>
<style>
    .responsive-cell-block {
        min-height: 75px;
    }

    * {
        font-family: Nunito, sans-serif;
    }

    .text-blk {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        line-height: 25px;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    .responsive-container-block {
        min-height: 75px;
        height: fit-content;
        width: 100%;
        padding-top: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        display: flex;
        flex-wrap: wrap;
        margin-top: 0px;
        margin-right: auto;
        margin-bottom: 0px;
        margin-left: auto;
        justify-content: flex-start;
    }

    .outer-container {
        padding-top: 10px;
        padding-right: 30px;
        padding-bottom: 10px;
        padding-left: 30px;
        background-color: rgb(255, 235, 234);
    }

    .heading-text {
        font-weight: 700;
        font-size: 48px;
        line-height: 35px;
        color: rgb(51, 51, 51);
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 32px;
        margin-left: 0px;
        text-align: center;
    }

    .sub-heading-text {
        max-width: 470px;
        font-size: 25px;
        line-height: 35px;
        text-align: center;
        font-weight: 700;
        color: rgb(102, 102, 102);
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 100px;
        margin-left: 0px;
        margin: 0 0 70px 0;
    }

    .inner-container {
        flex-direction: column;
        align-items: center;
        margin-top: 80px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
    }

    .cards-container {
        max-width: 1320px;
    }

    .name {
        font-size: 22px;
        line-height: 35px;
        font-weight: 700;
        color: rgb(102, 102, 102);
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 5px;
        margin-left: 0px;
    }

    .position {
        color: rgb(244, 152, 146);
        font-size: 22px;
        line-height: 35px;
        font-weight: 700;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 20px;
        margin-left: 0px;
    }

    .team-member-image {
        width: 100%;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 40px;
        margin-left: 0px;
    }

    .social-media-icon {
        margin-top: 0px;
        margin-right: 25px;
        margin-bottom: 0px;
        margin-left: 0px;
        cursor: pointer;
        margin: 0 25px 10px 0;
    }

    .card-container {
        padding-top: 0px;
        padding-right: 25px;
        padding-bottom: 0px;
        padding-left: 25px;
        margin: 0 0 30px 0;
    }

    @media (max-width: 1024px) {
        .socialMediaIcons {
            margin: 0 20px 10px 0;
        }
    }

    @media (max-width: 768px) {
        .card-container {
            margin: 0 0 60px 0;
            width: 80%;
        }

        .cards-container {
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    }

    @media (max-width: 500px) {
        .inner-container {
            padding: 10px 0 10px 0;
            margin: 50px 0 50px 0;
        }

        .cards-container {
            padding: 10px 0 10px 0;
        }

        .card-container {
            width: 100%;
            padding: 0 15px 0 15px;
        }

        .outer-container {
            padding: 10px 20px 10px 20px;
        }

        .sub-heading-text {
            font-size: 20px;
            line-height: 25px;
            margin: 0 0 30px 0;
        }

        .heading-text {
            font-size: 22px;
            line-height: 28px;
        }
    }
</style>
<nav>
    <a href="home.php">Home</a>
    <a href="CreateRecipe.php">Create Your Own Recipe</a>
    <a href="Ideas.php">Ideas</a>
    <a href="LogginPage.php">Logging Page</a>
    <a href="SignInPage.php">Sign In Page</a>
    <a href="Quiz.php">Quiz Page</a>
    <a href="OurTeam.php">Meet Creators</a>
</nav>
<h1>Meet Creators</h1>
<p>Tutaj damy nas :)</p>
<div class="responsive-container-block outer-container">
    <div class="responsive-container-block inner-container">
        <p class="text-blk heading-text">
           Meet Creators :)
        </p>
        <p class="text-blk sub-heading-text">
            There are your "baking heros"! They made this website for you, so now you don't have to worry about your recipes.
        </p>
        <div class="responsive-container-block cards-container">
            <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-mobile-12 wk-tab-12 card-container">
                <p class="text-blk name">
                    Maxwell Doe
                </p>
                <p class="text-blk position">
                    Instructor
                </p>
                <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
            </div>
            <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-mobile-12 wk-tab-12 card-container">
                <p class="text-blk name">
                    Maxwell Doe
                </p>
                <p class="text-blk position">
                    Instructor
                </p>
                <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors2.svg">
            </div>
            <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-mobile-12 wk-tab-12 card-container">
                <p class="text-blk name">
                    Maxwell Doe
                </p>
                <p class="text-blk position">
                    Instructor
                </p>
                <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors3.svg">

            </div>
        </div>
    </div>
</div>

</body>
</html>
