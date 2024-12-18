<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Estate Company | About & Projects</title>
    <link rel="stylesheet" href="./CSS/about_us.css" />
    <style>
        </style>
  </head>
  <body>
    <!-- About Us Section -->
    <h1>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">APM REALTY</a></div>
        <ul class="nav__links">
          <li class="link"><a href="{{url('main')}}">HOME</a></li>
          <li class="link"><a href="{{url('about_us')}}">ABOUT</a></li>
          <li class="link"><a href="{{url('projects')}}">PROJECT</a></li>
          <li class="link"><a href="{{url('message')}}">CONTACT</a></li>
          </ul>
<div class="nav__btns">
  <a href="log_in" class="btn btn__primary">Log In</a>
  <a href="registration" class="btn btn__secondary">Register Now</a>
</div>
</nav>
      </h1>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="./IMAGES/project-01.jpg" alt="About Us" />
      </div>
     
        <h3>ABOUT US</h3>
        <h2 class="section__header">
          Award-winning real estate company in Butuan
        </h2>
        <p class="section__subheader">
          Whether you're a first-time homebuyer, a seasoned investor, or simply
          looking for a change, we're here to guide you every step of the way.
          Our mission is to make your real estate journey smooth and successful.
          </p>
        <div class="about__grid">
          <div class="about__card">
            <h4>CURRENT LISTINGS</h4>
            <p>34+</p>
          </div>
          <div class="about__card">
            <h4>YEARS EXPERIENCE</h4>
            <p>20+</p>
          </div>
          <div class="about__card">
          <h4>ONGOING PROJECTS</h4>
          <p>12+</p>
        </div>
      </div>
    </section>
  </body>
</html>