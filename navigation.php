<?php session_start(); ?>

<header>
    <div class="logo">
        <img src="img/JLambCodeLogo.png" alt="">
    </div>
    <button class="btn menu-btn" aria-label="contact me">Say Hello</button>
    <div id="menuToggle">
        <input id="menu-open" type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="#home" class="menu-link">
                <li>Home</li>
            </a>
            <a href="#services" class="menu-link">
                <li>My Services</li>
            </a>
            <a href="#about" class="menu-link">
                <li>About Me</li>
            </a></li>
            <a href="#designs" class="menu-link">
                <li>Designs</li>
            </a>
            <a hre="#dev" class="menu-link">
                <li>Development</li>
            </a>
        </ul>
    </div>
    <nav class="nav" id="main-navigation">
        <ul class="nav__list">
            <li class="nav__item item"><a href="#home" class="nav__link btn nav-btn">Home</a></li>
            <li class="nav__item item"><a href="#services" class="nav__link btn nav-btn">Services</a></li>
            <li class="nav__item item"><a href="#about" class="nav__link btn nav-btn">About</a></li>
            <li class="nav__item item"><a href="#designs" class="nav__link btn nav-btn">Designs</a></li>
            <li class="nav__item item"><a href="#dev" class="nav__link btn nav-btn">Development</a></li>
        </ul>
    </nav>
    <button type="button" class="btn contact-btn" data-toggle="modal" data-target="#emailModal" aria-label="contact me">
        Say Hello
    </button>
    <div class="modal fade show" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Me</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Your name</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="form29" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form29">Your email</label>
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Subject</label>
                    </div>

                    <div class="md-form">
                        <i class="fas fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                        <label data-error="wrong" data-success="right" for="form8">Your message</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>