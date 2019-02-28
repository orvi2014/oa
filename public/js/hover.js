window.onscroll = function() {hoverFunction()};

var header = document.getElementById("oaHeader");
var sticky = header.offsetTop;

function hoverFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
