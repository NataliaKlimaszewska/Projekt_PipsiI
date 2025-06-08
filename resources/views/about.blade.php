
@extends("layouts.master")
    @section("content")
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
<section class="text-center p-8 bg-pink-100">

    <h2 class="text-3xl font-bold mb-2">{{ __('messages.about_creators.title') }}</h2>
    <p class="mb-8 text-gray-600">{{ __('messages.about_creators.subtitle') }}</p>

    <div class="flex justify-center items-start gap-8 flex-wrap">

        <div class="creator-card">
            <img src="images/NatalkaSzogun.jpg" alt="Zdjęcie Natalii Klimaszewskiej" class="w-32 h-32 object-cover rounded-md mx-auto">
            <h3 class="font-bold mt-4">Natalia Klimaszewska</h3>
            <span class="text-pink-500 font-semibold">{{ __('messages.about_creators.role_pm') }}</span>
        </div>

        <div class="creator-card">
            <img src="images/Marcin.jpg" alt="Zdjęcie Marcina Szuszki" class="w-32 h-32 object-cover rounded-md mx-auto">
            <h3 class="font-bold mt-4">Marcin Szuszko</h3>
            <span class="text-pink-500 font-semibold">{{ __('messages.about_creators.role_backend') }}</span>
        </div>

        <div class="creator-card">
            <img src="images/Kamil.jpg" alt="Zdjęcie Kamila Ziemiańskiego" class="w-32 h-32 object-cover rounded-md mx-auto">
            <h3 class="font-bold mt-4">Kamil Ziemiański</h3>
            <span class="text-pink-500 font-semibold">{{ __('messages.about_creators.role_frontend') }}</span>
        </div>

    </div>

</section>
</body>
</html>
@endsection
