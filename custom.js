$(document).ready(function() {
    // scroll menu script
    $(window).scroll(function() {
        if(this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        }else {
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 1500) {
            $('.scroll-up-btn').addClass("show");
        }else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slideup script
    $('.scroll-up-btn').click(function() {
        $('html').animate({scrollTop: 0});
    });

    // type animation script
    var typed = new Typed(".typing",{
        strings: ["Web Developer", "Web Designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    var typed = new Typed(".typing-2",{
        strings: ["Web Developer", "Web Designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // toggle menu script
    $('.menu-btn').click(function() {
        $('.navbar .menu1').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 1000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});