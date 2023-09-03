var slideIndex = 0;

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

showSlides();

var slideIndex = 1;







let carousel_all = Array.from(document.querySelectorAll('.custom-carousel'));
carousel_all.forEach(function (elem) {
    let carousel = elem.querySelector('.carousel');
    let left = elem.querySelector('.left');
    let right = elem.querySelector('.right');
    let item = elem.querySelector('.item');
    console.log(left);
    right.addEventListener('click', function (e) {
        carousel.scrollLeft += item.clientWidth;
    });
    left.addEventListener('click', function () {
        carousel.scrollLeft -= item.clientWidth;
    })
})


