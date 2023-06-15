//Раскрываем мобильное меню
document.addEventListener("DOMContentLoaded", function() {
    var burgerElement = document.getElementById("burger");
    var menuElement = document.querySelector(".mobiler__header");
  
    burgerElement.addEventListener("click", function() {
      menuElement.classList.toggle("active");
      document.body.classList.toggle("fixed");
    });
  });
  