<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('custom/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('custom/index.js') }}"></script>
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FairRate</title>
    </head>

    <body class="antialiased font-sans">

        <nav class="bg-transparent py-4 px-4 lg:px-16 xl:py-8 fixed top-0 z-50 w-full md:px-8 xl:px-24 xxl:px-40"
            id="navbar">
            <div class="flex items-center justify-between flex-wrap relative">
                <div class="w-1/2 md:w-1/4">
                    <a href="#">
                        <img class="w-28" src="{{ asset('assets/logo.png') }}" alt="">
                    </a>
                </div>

                <div class="w-1/2 text-right sm:hidden">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                </div>

                <div class="w-full navigation-menu hidden md:flex md:w-3/4 relative text-title">
                    <div
                        class="flex flex-col md:flex-row pt-8 pb-2 md:pt-0 md:pb-0 md:ml-auto md:items-center relative">
                        <a href="#"
                            class="block mt-3 bg-button px-4 py-2 rounded text-white font-semibold md:ml-6 md:mt-0">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </nav>

        @yield('hero')

        <section class="bg-gray-100 flex flex-col text-center py-16 px-4 lg:px-16 md:px-8 xl:px-24 xxl:px-40">

            @yield('content')
        </section>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script>
            $('.navbar-toggler').click(function() {
                $(this).toggleClass('active');
                $('.navigation-menu').toggleClass('hidden');
                $('#navbar').addClass('bg-white');
            });
            $(function() {
                var navigation = $("#navbar");
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 10) {
                        navigation.addClass("bg-white xl:py-4 shadow-md");
                        navigation.removeClass("xl:py-8");
                    } else {
                        navigation.removeClass("bg-white xl:py-4 shadow-md");
                        navigation.addClass("xl:py-8");
                    }
                });
            });
        </script>
    </body>

    </html>
