<?php session_start(); ?>

<header>
    <div class="logo">
        <img src="img/JLambCodeLogo.png" alt="">
    </div>
    <button class="btn menu-btn" aria-label="contact me">Say Hello</button>
    <div id="menuToggle">
        <input id="menu-open" type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="#home" class="menu-link"><li>Home</li></a>
            <a href="#services" class="menu-link"><li>My Services</li></a>
            <a href="#about" class="menu-link"><li>About Me</li></a></li>
            <a href="#artwork" class="menu-link"><li>My Artwork</li></a>
            <a hre="#sites" class="menu-link"><li>My Sites</li></a>
        </ul>
    </div>
    <nav class="nav" id="main-navigation">
        <ul class="nav__list">
            <li class="nav__item item"><a href="#home" class="nav__link btn nav-btn">Home</a></li>
            <li class="nav__item item"><a href="#services" class="nav__link btn nav-btn">My Services</a></li>
            <li class="nav__item item"><a href="#about" class="nav__link btn nav-btn">About Me</a></li>
            <li class="nav__item item"><a href="#artwork" class="nav__link btn nav-btn">My Artwork</a></li>
            <li class="nav__item item"><a href="#sites" class="nav__link btn nav-btn">My Sites</a></li>
        </ul>
    </nav>
    <button class="btn contact-btn" aria-label="contact me">Say Hello</button>
</header>