$(function () {

    "use strict";

    //===== Prealoder

    $(window).on('load', function (event) {
        $('.preloader').delay(500).fadeOut(500);
    });


    //===== Sticky

    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".navbar-area").removeClass("sticky");
        } else {
            $(".navbar-area").addClass("sticky");
        }
    });


    //===== Section Menu Active

    var scrollLink = $('.page-scroll');
    // Active link switching
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 73;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    });


    //===== close navbar-collapse when a  clicked

    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });

    $(".navbar-toggler").on('click', function () {
        $(this).toggleClass("active");
    });

    $(".navbar-nav a").on('click', function () {
        $(".navbar-toggler").removeClass('active');
    });


    //===== Sidebar

    $('[href="#side-menu-left"], .overlay-left').on('click', function (event) {
        $('.sidebar-left, .overlay-left').addClass('open');
    });

    $('[href="#close"], .overlay-left').on('click', function (event) {
        $('.sidebar-left, .overlay-left').removeClass('open');
    });


    //===== Slick

    $('.slider-items-active').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 800,
        arrows: true,
        prevArrow: '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
        nextArrow: '<span class="next"><i class="lni lni-arrow-right"></i></span>',
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                }
            }
        ]
    });


    //===== Isotope Project 4

    $('.container').imagesLoaded(function () {
        var $grid = $('.grid').isotope({
            // options
            transitionDuration: '1s'
        });

        // filter items on button click
        $('.portfolio-menu ul').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        //for menu active class
        $('.portfolio-menu ul li').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });


    //===== slick Testimonial Four

    $('.testimonial-active').slick({
        dots: false,
        arrows: true,
        prevArrow: '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
        nextArrow: '<span class="next"><i class="lni lni-arrow-right"></i></span>',
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 800,
        slidesToShow: 1,
    });


    //====== Magnific Popup

    $('.video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });


    //===== Magnific Popup

    $('.image-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });


    //===== Back to top

    // Show or hide the sticky footer button
    $(window).on('scroll', function (event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });


    //Animate the scroll to yop
    $('.back-to-top').on('click', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });


    //===== 
















});

let cards = $('.card-up-down ');

for (let i = 0; i < cards.length; i++) {
    $(cards[i]).on('show.bs.collapse', function (e) {
        cards[i].querySelector("i").className = "fas fa-minus"; // alert("asdsd");<i class=""></i>fas fa-minus

    });

    $(cards[i]).on('hide.bs.collapse', function (e) {
        cards[i].querySelector("i").className = "fas fa-plus";

    });

}





function navbarChange(item) {

    var prev = item.closest("div");
    prev = prev.getElementsByClassName("active");
    const posanterior = prev[0].parentNode.id - 1;
    prev[0].classList.remove("active");

    item.getElementsByTagName("a")[0].className = "nav-link active";

    var card = document.getElementsByClassName("nav-card");
    card[posanterior].classList.add("d-md-none")
    card[item.id - 1].classList.remove("d-md-none");

}














function mostrarDatosDePersona() {

    Swal.fire({
        title: '<h4>DIANA EFFAND</h4>',
        html:
            '<p>DATOS DE NACIMIENTO<p>' +
            '<table class="table"><thead><tr><th>Edad</th> <th>Lugar</th> <th>Año</th> <th>Mes</th> <th>Día</th> <th>Hora</th> <th>Acción</th></tr></thead>' +
            '<tr><td>35</td> <td>Lima,Perú</td><td>1975</td><td>Junio</td><td>17</td><td>17:04:54</td><td><i class="fas fa-pencil-alt"></i>' +
            '<i class= "fas fa-times" ></i>' +
            '<i class="fas fa-info-circle"></i>' +
            '</td ></tr></table >',
        showConfirmButton: false,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: false,

    });
}

function agregarPersona() {
    Swal.fire({
        title: '<h4>AÑADIR PERSONA</h4>',
        html:
            '<p>DATOS DE NACIMIENTO<p>' +
            '<input id="swal-input1" class="swal2-input" placeholder="Ingresa Nombre" >' +
            '<div class="justify-content-center"><input type="date" id="swal-input1" class="col-5"  >' +
            '<input type="time" id="swal-input1" class="col-5"></div>' +
            '<select class="swal2-input"><option>Selecione prvoncia</option></select>' +
            '<input id="swal-input1" class="swal2-input" placeholder="CIUDAD" >',
        showCloseButton: true,
        showCancelButton: false,
        confirmButtonText: "AÑADIR",
        focusConfirm: false,

    });

}