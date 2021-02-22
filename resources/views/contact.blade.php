<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Rakhat</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="main" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="contact" class="nav__link active">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <!--===== CONTACT =====-->
    <section class="contact section" id="contact">
        <h2 class="section-title">Contact me</h2>

        <div class="contact__container bd-grid">
            <form action="" class="contact__form">
                <input type="text" placeholder="Name" class="contact__input">
                <input type="mail" placeholder="Email" class="contact__input">
                <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                <input type="button" value="Send" class="contact__button button">
            </form>
        </div>
    </section>
    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Rakhat</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
        </div>
        <p>&#169; 2020 Copyright. All rights reserved.</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="/js/main.js"></script>
</body>
</html>