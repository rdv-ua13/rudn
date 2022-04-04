$(document).ready(function () {
    var app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initMaskedInput();
    /*this.initFormValidation();
    this.initMap();
    this.initCardDetailsSlider();*/
}

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7 (999) 999-99-99", { autoclear: false });
}
// Init quiz and form validation
application.prototype.initFormValidation = function () {
    $.validator.addMethod("pageRequired", function(value, element) {
        if(value){
            return true;
        }
        return false;
    }, $.validator.messages.required);

    var v = $("#askmeForm").validate({
        errorClass: "invalid",
        validClass: "valid",
        submitHandler: function() {
            alert("Submitted, thanks!");
        },
    });
}
// Init map
application.prototype.initMap = function () {
    if($("#map").length) {
        let coords = [54.732568, 37.177500];

        ymaps.ready(init);
        function init(){
            // Создание карты.
            let myMap = new ymaps.Map("map", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                center: coords,
                controls: [],
                zoom: 16,
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark([45.866693, 40.103282]);
            myMap.geoObjects.add(myPlacemark);
            myMap.controls.add('zoomControl'),
            myMap.behaviors.disable('scrollZoom');
        }
    }
}
// Init card-details slider
application.prototype.initCardDetailsSlider = function () {
    if($(".card-details").length) {
        var slider = new Swiper(".cd-slider-main", {
            slidesPerView: 1,
            spaceBetween: 15,
            allowTouchMove: false,
            watchOverflow: true,
            watchSlidesProgress: true,
            centeredSlides: true,
            pagination: {
                el: ".card-details .swiper-pagination",
            },
            thumbs: {
                swiper: thumbs,
            },
            breakpoints: {
                // when window width is >= value
                768: {
                    loop: true,
                    loopedSlides: 4,
                },
            }
        });

        var thumbs = new Swiper(".cd-slider-thumb", {
            slidesPerView: 'auto',
            spaceBetween: 15,
            watchOverflow: true,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            navigation: {
                nextEl: ".card-details .swiper-button-next",
                prevEl: ".card-details .swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= value
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 4,
                    loop: true,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    loop: true,
                }
            }
        });

        slider.controller.control = thumbs;
        thumbs.controller.control = slider;
    }
}