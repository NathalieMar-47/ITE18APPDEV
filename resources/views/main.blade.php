<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./CSS/style2.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Web Design Mastery | APM REALTY</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">APM REALTY</a></div>
        <ul class="nav__links">
          <li class="link"><a href="#home">HOME</a></li>
          <li class="link"><a href="#about">ABOUT</a></li>
          <li class="link"><a href="#project">PROJECT</a></li>
          <li class="link"><a href="#contact">CONTACT</a></li>
        </ul>
        <div class="nav__btns">
          <button class="btn btn__primary">Log In</button>
          <button class="btn btn__secondary">Register Now</button>
        </div>
      </div>
    </nav>

    <!-- Header Section -->
    <header class="header">
    <a href="{{url('main')}}"><button>Home</button></a>
      <a href="{{url('about_us')}}"><button>About Us</button></a>
      <a href="{{url('projects')}}"><button>Projects</button></a>
      <a href="{{url('message')}}"><button>Contact</button></a>
      <a href="{{url('log_in')}}"><button>Log In</button></a>
      <a href="{{url('registration')}}"><button>Register</button></a>
      <div class="header__container">
        <div class="header__content">
          <h1>Your Trusted Partner in Finding the Perfect Home.</h1>
          <p>
            APM Realty helps clients find their perfect property with ease.
            Combining expert guidance and smart marketing strategies, we make
            buying, selling, or investing in real estate simple and successful.
            Join us today and let's unlock the doors to your dream property!
          </p>
          <div class="header__btns">
            <button class="btn btn__secondary">Buy Now</button>
            <button class="btn btn__primary">Learn More</button>
          </div>
        </div>
      </div>
    </header>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./JS/script.js"></script>
  </body>
</html>
