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
