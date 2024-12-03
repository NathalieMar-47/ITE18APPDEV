<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APM Realty</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
  <header>
    <div class="header-logo">
      <img src="logo.png" alt="APM Realty Logo">
      <h1>APM Realty</h1>
    </div>
    <p>Your Trusted Partner in Finding the Perfect Home.</p>
    <a href="{{url('contact')}}"><button id="contact-btn">Contact Me</button></a>
  </header>

  <section class="featured">
    <img src="./IMAGES/h1.jpg" alt="Featured House">
  </section>

  <section class="listings">
    <h2>Recent Listings</h2>
    <div class="listings-grid">
      <div class="listing">
        <img src="IMAGES/h1.jpg" alt="Butuan City House">
        <p class="location">Butuan City</p>
        <p class="type">Single Detached House</p>
      </div>
      <div class="listing">
        <img src="IMAGES/h2.jpg" alt="Buenavista House">
        <p class="location">Buenavista</p>
        <p class="type">Single Detached House</p>
      </div>
      <div class="listing">
        <img src="IMAGES/h3.jpg" alt="Nasipit House">
        <p class="location">Nasipit</p>
        <p class="type">Two Story</p>
      </div>
      <div class="listing">
        <img src="IMAGES/h4.jpg" alt="Cabadbaran House">
        <p class="location">Cabadbaran</p>
        <p class="type">Single Detached House</p>
      </div>
      <div class="listing">
        <img src="IMAGES/h5.jpg" alt="Buenavista House">
        <p class="location">Cabadbaran</p>
        <p class="type">Single Detached House</p>
      </div>
    </div>
  </section>

  <script src="./JAVA/javascript.js"></script>
</body>
</html>
