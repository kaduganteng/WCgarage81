$('.owl-carousel').owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    padding: 0,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})