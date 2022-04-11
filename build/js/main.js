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
            $(".header-actions").fadeIn(150);
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
            if (window.matchMedia("(max-width: 991.98px)").matches) {
                $(".header-actions").fadeOut(150);
            }
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
    if (window.matchMedia("(min-width: 992px)").matches) {
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
    // Main slider
    if ($(".js-main-slider").length) {
        var mainSettings = {
            spaceBetween: 30,
            effect: "fade",
            navigation: {
                nextEl: ".main-slider .swiper-button-next",
                prevEl: ".main-slider .swiper-button-prev",
            },
            pagination: {
                el: ".main-slider .swiper-pagination",
                clickable: true,
            },
        },
        mainSlider = new Swiper(".js-main-slider", mainSettings);
    }

    // News slider
    if ($(".js-news-slider").length) {
        var newsSettings = {
            slidesPerView: 1.2,
            spaceBetween: 30,
            navigation: {
                nextEl: ".news .swiper-button-next",
                prevEl: ".news .swiper-button-prev",
            },
            breakpoints: {
                992: {
                    spaceBetween: 24,
                    slidesPerView: 3,
                },
            }
        },
        newsSlider = new Swiper(".js-news-slider", newsSettings);
    }

    // Jointly projects slider
    if ($(".js-jointly-projects-slider").length) {
        var jointlyProjectsSettings = {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".jointly-projects .swiper-button-next",
                prevEl: ".jointly-projects .swiper-button-prev",
            },
            breakpoints: {
                992: {
                    slidesPerView: 3,
                },
            }
        },
        jointlyProjectsSlider = new Swiper(".js-jointly-projects-slider", jointlyProjectsSettings);
    }

    // Jointly partners slider
    if ($(".js-jointly-partners-slider").length) {
        var jointlyPartnersSettings = {
            slidesPerView: 1.65,
            spaceBetween: 20,
            navigation: {
                nextEl: ".jointly-partners .swiper-button-next",
                prevEl: ".jointly-partners .swiper-button-prev",
            },
            breakpoints: {
                992: {
                    slidesPerView: 6,
                },
            }
        },
        jointlyPartnersSlider = new Swiper(".js-jointly-partners-slider", jointlyPartnersSettings);
    }

    // Events-calendar slider
    if ($(".js-events-calendar-slider").length) {
        var eventsCalendarSettingsHHorizontal = {
            autoHeight: true,
            direction: "horizontal",
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".events-calendar .swiper-button-next",
                prevEl: ".events-calendar .swiper-button-prev",
            },
        },
        eventsCalendarSettingsVertical = {
            autoHeight: true,
            direction: "vertical",
            slidesPerView: "auto",
            spaceBetween: 0,
            navigation: {
                nextEl: ".events-calendar .swiper-button-next",
                prevEl: ".events-calendar .swiper-button-prev",
            },
        },
        eventsCalendarSlider = null;

        if (window.matchMedia("(min-width: 992px)").matches) {
            eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSettingsVertical);
        }
        else if (window.matchMedia("(max-width: 991.98px)").matches) {
            eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSettingsHHorizontal);
        }

        reinitSlider();
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if (window.matchMedia("(min-width: 992px)").matches) {
                eventsCalendarSlider.destroy();
                eventsCalendarSlider = null;
                eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSettingsVertical);
            }
            else if (window.matchMedia("(max-width: 991.98px)").matches) {
                eventsCalendarSlider.destroy();
                eventsCalendarSlider = null;
                eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSettingsHHorizontal);
            }
        }

    }


}

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7 (999) 999-99-99", { autoclear: false });
}