$(document).ready(function() {
    $('#img-gallery .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('#other-projects .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    // $('.dropdown').hover(function(){
    //     $(this).find(">span:first-child").toggleClass("show");
    // });
});