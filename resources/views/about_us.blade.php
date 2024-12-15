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
    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="./IMAGES/project-01.jpg" alt="About Us" />
      </div>
      <div class="about__content">
      <a href="{{url('main')}}"><button>Home</button></a>
      <a href="{{url('about_us')}}"><button>About Us</button></a>
      <a href="{{url('projects')}}"><button>Projects</button></a>
      <a href="{{url('message')}}"><button>Contact</button></a>
      <a href="{{url('log_in')}}"><button>Log In</button></a>
      <a href="{{url('registration')}}"><button>Register</button></a>
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