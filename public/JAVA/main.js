const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// Swiper Initialization
const swiper = new Swiper('.swiper', {
  loop: true, 
  navigation: {
    nextEl: '.ri-arrow-right-line',
    prevEl: '.ri-arrow-left-line',
  },
  autoplay: {
    delay: 3000, 
  },
  effect: 'slide',
  grabCursor: true, 
});
