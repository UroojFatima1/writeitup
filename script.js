var slideIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  x[slideIndex-1].style.transition="all 2s"
  setTimeout(carousel, 4000); // Change image every 4 seconds
}
const ham=document.querySelector('.hamburger');
const nav=document.querySelector('.nav');
const links= document.querySelectorAll('.nav li a');

ham.addEventListener("click", ()=> {nav.classList.toggle("open");});
links.forEach(link => link.addEventListener("click",()=> {nav.classList.remove("open");}));



s = document.getElementsByClassName("arrow");
v = document.querySelector("#features");
s.addEventListener("click", dis);
function dis() {
    v.style.display = "flex";}



