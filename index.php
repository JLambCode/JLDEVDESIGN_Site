<?php include "db.php"; ?>
<?php include "header.php"; ?>

    <!--Navigation-->
    <?php include "navigation.php"; ?>

    <!--Intro-->
    <section class="intro nav-selected section" id="home">
        <h1 class="section__title section__title--intro">
            Hi, I'm <strong>Jeremy Lamb</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">graphic design&#128126; &lt;web/&gt; software; </p>
        <img src="img/headshot.JPG" alt="a picture of my logo" class="intro__img">
    </section>

    <!--Services-->
    <section class="my-services section" id="services">
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
            <div class="service">
                <h3>Graphic Design</h3>
                <p>I have many years of experience with logos, screenprint designs, promotional graphics and more.<br><br>
                    I work with both digital and traditional mediums to avoid monotony.
                    I implement the user experience design process and understand the important role it has in creating a visual narrative.</p>
            </div>
            <div class="service">
                <h3>Web Dev</h3>
                <p>In this day and age, a website is the face of a business. It tells the story of who you are and what you do.<br><br>
                    It's the primary driver of putting your products or services in front of the competition, but success requires good communication.
                    That's why I am the complete solution for your website needs with expertise in User Interface, User Experience and Graphic Design.</p>
            </div>
            <div class="service">
                <h3>Software Dev</h3>
                <p>I am a software developer for a global print solutions company.<br><br>
                    I have a B.S. in Software Engineering and experience in mobile application development and solutions delivery.
                    I really enjoy thinking outside the box and learning new things to arrive at the perfect solution!</p>
            </div>
        </div>
        <a href="#artwork" class="btn work-btn">My Work</a>
    </section>

    <!--About Me-->
    <section class="about-me section" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Designer & developer based out of Richmond, KY</p>
        <div class="about-me__body">
            <p>Proud father of three wonderful children, husband to a very understanding wife and butler to a tiny dog named Nano.<br><br>
                I grew up playing with Lego and Lincoln Logs and became interested in electronics at a young age.
                I loved to take things apart to see how they ticked and put them back together in working order... usually.<br><br>
                I received my B.S. in Software Engineering in November of 2020 but I didn't stop there. I teach myself new stuff all the time through online learning, books and good ol' trial and error.<br><br>
                I've built this website to advertise my skills and offer my services. I am here to help you achieve your goals!</p>
        </div>

        <img src="img/headshot2.jpg" alt="" class="about-me__img">
    </section>

    <!--My Work-->
    <section class="my-artwork section" id="artwork">
        <h2 class="section__title section__title--artwork">My Artwork</h2>
        <p class="section__title section__subtitle--artwork">Click on each panel to view</p>

        <div class="options">
	        <div class="option active" style="--optionBackground:url('img/art/1.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/2.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/3.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/4.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/5.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/6.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/7.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/8.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/9.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/10.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/11.png');">
                <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url('img/art/12.png');">
                <div class="shadow"></div>
            </div>
        </div>
    </section>

    <!--My Sites-->
    <section class="my-sites section" id="sites">
        <h2 class="section__title section__title--sites">My Sites</h2>
        <p class="section__subtitle section__subtitle--sites">Examples of my websites</p>

    </section>

    <!--Footer-->
    <?php include "footer.php" ?>
    