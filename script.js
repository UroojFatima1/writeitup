
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
s = document.getElementsByClassName("arrow");
v = document.getElementsById("features");
s.addEventListener("click", dis);
function dis() {
    v.style.display = "flex";}



/*let currentSlide = 0;
function moveSlide(dir) {
    if (dir == 1 && currentSlide == 4) { currentSlide = -1; }
    if (dir == -1 && currentSlide == 0) { currentSlide = 5; }
    currentSlide = currentSlide + dir;
    const slides = document.querySelectorAll(".slide");
    console.log(slides);
    slides.forEach(slide => slide.style.display = "none");
    slides[currentSlide].style.display = "flex";
}*/


