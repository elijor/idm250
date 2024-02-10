function changeMenutoX(x) {
x.classList.toggle("change");
//   const menu = document.getElementById("menu");
//   menu.classList.add("menuActive");
};

document.addEventListener('DOMContentLoaded', function() {
  var hamburgerMenuButton = document.getElementById('hamburgerMenu');
  var menuElement = document.getElementById('menu');

  hamburgerMenuButton.addEventListener('click', function() {
    // Toggle the 'menuActive' class on the menu element
    menuElement.classList.toggle('menuActive');
  });
});