<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/styles.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>{{__("Portfolio")}}</title>
    </head>
    <body>
    @extends('layout')
    @section('content')
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">{{__("Rakhat")}}</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="main" class="nav__link active">{{__("Home")}}</a></li>
                        <li class="nav__item"><a href="about" class="nav__link">{{__("About")}}</a></li>
                        <li class="nav__item"><a href="skills" class="nav__link">{{__("Skills")}}</a></li>
                        <li class="nav__item"><a href="contact" class="nav__link">{{__("Contact")}}</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">{{__("Hi,")}}<br>{{__("I'm")}} <span class="home__title-color">{{__("Rakhat")}}</span><br> {{__("Frontend Developer")}}</h1>

                    <a href="contact" class="button">{{__("Contact me")}}</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>
            </section>

        <footer class="footer">
            <p class="footer__title">{{__("Rakhat")}}</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 {{__("Copyright. All rights reserved.")}}</p>
        </footer>
        @endsection
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="/js/main.js"></script>
    </body>
</html>