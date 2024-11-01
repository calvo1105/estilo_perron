let slideIndex = 0;
let autoSlideTimeout;

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("deslizadores");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    autoSlideTimeout = setTimeout(showSlides, 4000);
}

function plusSlides(n) {
    clearTimeout(autoSlideTimeout);
    slideIndex += n - 1;
    if (slideIndex >= document.getElementsByClassName("deslizadores").length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = document.getElementsByClassName("deslizadores").length - 1;
    }
    showSlides(slideIndex += n);
}

showSlides();