// Adding functionality to the Contact Me button
document.getElementById('contact-btn').addEventListener('click', () => {
  alert('Thank you for reaching out! Please call us at 123-456-7890.');
});

// Swiper Initialization
const swiper = new Swiper('.swiper', {
  loop: true, // Enables looping of slides
  navigation: {
    nextEl: '.ri-arrow-right-line',
    prevEl: '.ri-arrow-left-line',
  },
  autoplay: {
    delay: 3000, // Auto-slide every 3 seconds
  },
  effect: 'slide', // Default swipe effect
  grabCursor: true, // Change cursor to grab icon
});
