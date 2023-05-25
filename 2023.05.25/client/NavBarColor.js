// Get the current URL
var currentURL = window.location.href;

// Find the link with a matching URL
var links = document.getElementsByClassName("nav-link");
for (var i = 0; i < links.length; i++) {
  if (links[i].href === currentURL) {
    links[i].classList.add("active");
    break;  // Exit the loop after finding the active link
  }
}