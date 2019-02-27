window.onscroll = function() {hoverFunction()};

var header = document.getElementById("Header");
var sticky = header.offsetTop;

function hoverFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
