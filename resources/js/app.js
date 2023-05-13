import './bootstrap';


const dropdownBtn = document.getElementById("dropdown-btn");
const dropdownMenu = document.getElementById("dropdown-menu");

dropdownBtn.addEventListener("click", () => {
  dropdownMenu.classList.toggle("hidden");
});


const dropdownBtn2 = document.getElementById("dropdown-btn-2");
const dropdownMenu2 = document.getElementById("dropdown-menu-2");

dropdownBtn2.addEventListener("click", () => {
  dropdownMenu2.classList.toggle("hidden");
});
