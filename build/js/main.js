$(document).ready(function () {
    var app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initBtnDropdown();
    this.setResponsiveBlockPosition();
    this.toggleHeaderMenuBtn();
    this.toggleCollapseMenuItemHeader();
    this.initSliders();

    this.initMaskedInput();
    /*this.initFormValidation();
    this.initMap();
    this.initCardDetailsSlider();*/
}

// Init ".btn-dropdown" behavior
application.prototype.initBtnDropdown = function () {
    if ($(".btn-dropdown").length) {
        $(".btn-dropdown").on("click", function (e) {
            if ($(".btn-dropdown").is(e.target) && $(".btn-dropdown").has(e.target).length === 0) {
                if (!$(this).hasClass("btn-dropdown--open")) {
                    $(".btn-dropdown").removeClass("btn-dropdown--open");
                    $(this).addClass("btn-dropdown--open");

                    $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--open");
                    $(this).find(".content-dropdown").addClass("content-dropdown--open");
                    $(this).find(".content-dropdown").addClass("content-dropdown--transition");
                    setTimeout(function () {
                        $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--transition");
                    }, 150);
                } else {
                    $(this).removeClass("btn-dropdown--open");
                    $(this).find(".content-dropdown").removeClass("content-dropdown--open");
                }
            }
        });

        $(document).on("click", function (e) {
            if (!$(".btn-dropdown").is(e.target) && $(".btn-dropdown").has(e.target).length === 0
                || $(".content-dropdown__results .content-dropdown__link").is(e.target)) {
                $(".btn-dropdown").removeClass("btn-dropdown--open");
                $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--open");
            }
        });
    }
}
// Set the position in the dropdown menu when the rightmost point of the block goes outside the container
application.prototype.setResponsiveBlockPosition = function () {
    $(".btn-dropdown").on("click", function () {
        var container = $(this).closest(".container"),
            containerRightCoord = container.offset().left + container.width(),
            popup = $(this).find(".content-dropdown"),
            popupRightCoord = popup.offset().left + popup.width();

        if (window.matchMedia("(min-width:992px)").matches) {
            if (containerRightCoord < popupRightCoord) {
                $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--right");
                popup.addClass("content-dropdown--right");
            } else { return; }
        }
    });
    $(".btn-dropdown--open").on("click", function () {
        $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--right");
    });
}
// Set behavior of ".header-menu__btn"
application.prototype.toggleHeaderMenuBtn = function () {
    $(".header-menu__btn").on("click", function () {
        if (!$(this).hasClass("header-menu__btn--open")) {
            $("body").addClass("overflow-hidden");
            $(".header").addClass("header--fixed");
            // burger btn
            $(this).addClass("header-menu__btn--open");
            // burger icon
            $(this).find(".icon--close").addClass("show");
            $(this).find(".icon--burger").removeClass("show");
            // collapse menu
            $(".header-menu__collapse-menu.collapsed").fadeIn(150);
            $(".header-menu__collapse-menu").removeClass("collapsed").addClass("open");
        } else {
            $("body").removeClass("overflow-hidden");
            $(".header").removeClass("header--fixed");
            // burger btn
            $(this).removeClass("header-menu__btn--open");
            // burger icon
            $(this).find(".icon--burger").addClass("show");
            $(this).find(".icon--close").removeClass("show");
            // collapse menu
            $(".header-menu__collapse-menu.open").fadeOut(150);
            $(".header-menu__collapse-menu").removeClass("open").addClass("collapsed");
            // collapse menu item header (every close event reset toggleCollapseMenuItemHeader() )
            $(".header-menu__collapse-menu-item-header").next("ul").css({ "display" : "" });
        }
    });

    /*$(document).on("click", function (e) {
        if (!$(".header-menu__btn .btn").is(e.target) && $(".header-menu__collapse-menu").has(e.target).length === 0) {
            $("body").removeClass("overflow-hidden");
            $(".header").removeClass("header--fixed");
            // burger btn
            $(".header-menu__btn").removeClass("header-menu__btn--open");
            // burger icon
            $(".header-menu__btn").find(".icon--burger").addClass("show");
            $(".header-menu__btn").find(".icon--close").removeClass("show");
            // collapse menu
            $(".header-menu__collapse-menu.open").fadeOut(150);
            $(".header-menu__collapse-menu").removeClass("open").addClass("collapsed");
        }
    });*/
}
// Set behavior of ".header-menu__collapse-menu-item-header"
application.prototype.toggleCollapseMenuItemHeader = function () {
    if (window.matchMedia("(min-width:992px)").matches) {
        $(".header-menu__collapse-menu-item-header").on("click", function () {
            if (!$(this).hasClass("open")) {
                $(".header-menu__collapse-menu-item-header").not(this).next("ul").hide(150);
                $(this).next("ul").show(150);
                $(".header-menu__collapse-menu-item-header").removeClass("open");
                $(this).addClass("open");
            } else {
                $(this).next("ul").hide(150);
                $(this).removeClass("open");
            }
        });
    } else {
        $(".header-menu__collapse-menu-item-header").next("ul").css({ "display" : "" });
    }
}
// Init sliders
application.prototype.initSliders = function () {
    /*var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });*/

    // Main slider
    if ($(".js-main-slider").length) {
        var sliderMain = new Swiper(".js-main-slider", {
            /*allowTouchMove: false,*/
            navigation: {
                nextEl: ".main-slider .swiper-button-next",
                prevEl: ".main-slider .swiper-button-prev",
            },
            pagination: {
                el: ".main-slider .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                992: {
                    pagination: false,
                },
            },
        });
    }

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
                searchControlProvider: "yandex#search"
            }),
            myPlacemark = new ymaps.Placemark([45.866693, 40.103282]);
            myMap.geoObjects.add(myPlacemark);
            myMap.controls.add("zoomControl"),
            myMap.behaviors.disable("scrollZoom");
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
            slidesPerView: "auto",
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