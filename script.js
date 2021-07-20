window.addEventListener('DOMContentLoaded', carousel, false);
function myFunction(s) {
  if (s.matches ) { // If media query matches
   document.getElementById("covertext").innerHTML="Are you looking for <br>\ninteresting content to read?<br>\n <br>\n Or have a brilliant idea<br>\n to share with the world?<br>\ <br>\n Look no further,<br>\n because we are offering just that <br>\nand much more!<br>\n <br>\n ";

  }
  else{ document.getElementById("covertext").innerHTML="Are you looking for interesting content to read?<br><br> Or have a brilliant idea to share with the world?<br><br>Look no further, because we are offering just that <br>and much more! ";} 
}
var ct = window.matchMedia("(max-width:500px)");
myFunction(ct);
ct.addListener(myFunction);

var slideIndex = 0;
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




