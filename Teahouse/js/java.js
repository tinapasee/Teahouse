document.addEventListener("DOMContentLoaded", function () {
   const toggleBtn = document.getElementByid("toggleBtn");
   const registerSection = document.querySelector(".register-section");

   toggleBtn.addEventListener("click", function () {
       registerSection.classList.toggle("hidden");
   });
});
