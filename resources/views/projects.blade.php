<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ongoing Projects</title>
    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="./CSS/projetcs.css"
    />
    <!-- Remix Icon -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
        </style>
  </head>
  <body>
    <!-- Ongoing Projects Section -->
    <section class="section__container project__container" id="project">
      <div class="project__header">
        <div>
          <h2 class="section__header">Ongoing Projects</h2>
          <p class="section__subheader">
            We are dedicated to helping you find your dream property with ease and confidence.
          </p>
        </div>
        <div class="project__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-1.png" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Riva Model House</h4>
                  <p><span><i class="ri-map-pin-line"></i></span> Butuan City</p>
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
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="project__card">
              <img src="./IMAGES/house-2.png" alt="project" />
              <div class="project__content">
                <div class="project__details">
                  <h4>Mara Model House</h4>
                  <p><span><i class="ri-map-pin-line"></i></span> Buenavista</p>
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
          <!-- Additional Slides (Repeat the same structure for other houses) -->
          <!-- Add other swiper slides as needed -->
        </div>
      </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      // Initialize Swiper
      const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>
  </body>
</html>