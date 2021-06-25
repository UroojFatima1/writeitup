let currentSlide = 0;
function moveSlide(dir) {
    if (dir == 1 && currentSlide == 4) { currentSlide = -1; }
    if (dir == -1 && currentSlide == 0) { currentSlide = 5; }
    currentSlide = currentSlide + dir;
    const slides = document.querySelectorAll(".slide");
    console.log(slides);
    slides.forEach(slide => slide.style.display = "none");
    slides[currentSlide].style.display = "flex";
}
s = document.getElementsByClassName("arrow");
v = document.getElementById("scroll");


s.addEventListener("click", dis());

function dis() {
    v.style.display = "flex";
}