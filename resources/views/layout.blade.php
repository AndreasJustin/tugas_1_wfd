<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('asset/image/food-svgrepo-com.svg')}}">
    <title>FoodNesia | {{ $head }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Protest+Guerrilla&family=SUSE&display=swap"
        rel="stylesheet">
    @yield('head')
    <style>
        html {
            scroll-behavior: smooth !important;
        }

        .cinzel-regular {
            font-family: "Cinzel", serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .lora-regular {
            font-family: "Lora", serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }

        .nunito-sans-regular {
            font-family: "Nunito Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            font-variation-settings:
                "wdth" 100,
                "YTLC" 500;
        }

        .mulish-regular {
            font-family: "Mulish", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .oswald-regular {
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
        
        .text-red{
            color: #F03861;
        }
        .bg-orange{
            background-color: #F5D97E;
        }
        .bg-brown{
            background-color: #7D5E3F;
        }
    </style>
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>

</body>
@yield('script')

</html>
