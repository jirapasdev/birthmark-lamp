var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 5,
    spaceBetween: 0,
    centeredSlides: true,
    centeredSlidesBounds: true,
    loop: true,
    grabCursor: true,
    on: {
        init: function () {
            $(".swiper-slide-active h2").addClass('client-active');
            $(".swiper-slide-next h2").addClass('client-prev');
            $(".swiper-slide-prev h2").addClass('client-prev');
        },
    },
    autoplay: {
        speed: 100,
    },

});
swiper.on('transitionStart', function () {
    $(".client-name ").removeClass('client-active');
    $(".client-name ").removeClass('client-prev');
});
swiper.on('transitionEnd', function () {
    $(".swiper-slide-active h2").addClass('client-active');
    $(".swiper-slide-next h2").addClass('client-prev');
    $(".swiper-slide-prev h2").addClass('client-prev');
});

$('.owl-carousel').owlCarousel({

    margin: 10,
    nav: false,
    dots: false,
    loop: true,
    autoHeight: true,
    autoplay: true,
    autoplayTimeout: 2300,
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})




window.onscroll = function () { myFunction() };
function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}



$(document).ready(function () {
    // $("#showcase-list").hide();
});
$("#showcase-stack").click(function () {
    $("#showcase-stack").hide();
    $("#showcase_txt").hide();
    $("#showcase-list").show();
    $("#showcase-slide").addClass('animate__animated  animate__fadeInRight');
});


function myFunction(x) {
    if (x.matches) { // If media query matches
        $("#showcase-list").show();
        $("#showcase_txt").show();
        $("#showcase-stack").hide();
    } else {
        $("#showcase-list").hide();
        $("#showcase_txt").hide();
        $("#showcase-stack").show();
    }
}
var x = window.matchMedia("(max-width: 992px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes