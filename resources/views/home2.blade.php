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
    <title>Web Design Mastery | Holux</title>
  </head>
  <body>
    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">AMP REALTY</a></div>
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

    <header class="header">
      <div class="header__container">
        <div class="header__content">
          <h1>Your Trusted Partner in Finding the Perfect Home.</h1>
          <p>
          APM Realty helps clients find their perfect property with ease. 
          Combining expert guidance and smart marketing strategies, we make buying, selling, or investing in real estate simple and successful. 
          Join us today and let's unlock the doors to your dream property!
          </p>
          <div class="header__btns">
            <button class="btn btn__secondary">Buy Now</button>
            <button class="btn btn__primary">Learn More</button>
          </div>
        </div>
        <div class="header__image">
          <img src="./IMAGES/project-0.jpg" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="./IMAGES/project-01.jpg" alt="about" />
      </div>
      <div class="about__content">
        <h3>ABOUT US</h3>
        <h2 class="section__header">
          Award winning real estate company in Butuan
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
            <p>12</p>
          </div>
        </div>
      </div>
    </section>

    <section class="project__container" id="project">
      <div class="project__header">
        <div>
          <h2 class="section__header">Ongoing Projects</h2>
          <p class="section__subheader">
            We are dedicated to helping you find your dream property with ease
            and confidence.
          </p>
        </div>
        <div class="project__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-1.png" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Riva Model House</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Butuan City
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">P 2M</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-2.png" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Mara Model House</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Buenavista
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                  </div>
                  <div class="price">P 3M</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-3.png" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Cara Model House</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Nasipit, Agusan Del Norte
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                  </div>
                  <div class="price">P 3M</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-4.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Fiona Model House</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Cabadbaran City
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                  </div>
                  <div class="price">1500$</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-5.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Mikha Model House</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Ampayon, Butuan City
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="price">P 2M</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-6.jpg" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Freya Model House</h4>
                  <p>
                    <span><i class="ri-map-pin-line"></i></span>
                    Butuan City
                  </p>
                  <button>Book Now</button>
                </div>
                <div class="project__ratings">
                  <div class="stars">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                    <div class="ri-arrow-left-line swiper-button-prev"></div>
                    <div class="ri-arrow-right-line swiper-button-next"></div>
                  </div>
                  <div class="price">1400$</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container contact__container" id="contact">
      <div class="contact__image">
        <img src="./IMAGES/contact.png" alt="contact" />
      </div>
      <div class="contact__content">
        <h2 class="section__header">Contact Us</h2>
        <p class="section__subheader">
          Discover the difference, where expertise meets excellence in real
          estate. Let's embark on this exciting journey together.
        </p>
        <form action="#">
          <div class="form__group">
            <input type="text" placeholder="First Name" />
            <input type="text" placeholder="Last Name" />
          </div>
          <div class="form__group">
            <input type="text" placeholder="Email Address" />
            <input type="text" placeholder="Phone Number" />
          </div>
          <textarea cols="30" rows="5" placeholder="Description"></textarea>
          <button>SEND MESSAGE</button>
        </form>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h4>APM REALTY</h4>
          <p>
            Our team of seasoned professionals is committed to providing you
            with exceptional service, in-depth market knowledge, and
            personalized solutions tailored to your unique needs.
          </p>
          <div class="footer__socials">
            <span>
              <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            </span> 
            <span>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </span>
            <span>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </span>
          </div>
        </div>
        <div class="footer__col">
          <h4>Company Info</h4>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#project">Project</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <a href="#">Terms</a>
          <a href="#">Conditions</a>
          <a href="#">Policy</a>
        </div>
        <div class="footer__col">
          <h4>Contact</h4>
          <a href="#">
            <span><i class="ri-mail-line"></i></span> apmrealty@gmail.com
          </a>
          <a href="#">
            <span><i class="ri-phone-line"></i></span> +91 9876543210
          </a>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
