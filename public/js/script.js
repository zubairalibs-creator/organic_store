document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if(navbar) {
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    }
  });
});
