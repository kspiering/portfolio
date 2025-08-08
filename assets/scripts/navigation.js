const menuToggle = document.getElementById("menu-toggle");
const nav = document.getElementById("nav");
const closeBtn = document.getElementById("close");

menuToggle.addEventListener("click", () => {
  nav.classList.add("show");
  closeBtn.style.display = "block";
  menuToggle.style.display = "none";
});

closeBtn.addEventListener("click", () => {
  nav.classList.remove("show");
  closeBtn.style.display = "none";
  menuToggle.style.display = "block";
});

// Scroll Andere Farbe
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
