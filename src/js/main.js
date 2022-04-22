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
    this.initTabs();
    this.initAccordion();
    this.initCustomSelect();
    this.initResetForm();
    this.initModalPopup();

    this.initMaskedInput();
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
    $(".header-menu__btn .btn").on("click", function () {
        if (!$(this).closest(".header-menu__btn").hasClass("header-menu__btn--open")) {
            $("body").addClass("overflow-hidden");
            $(".header").addClass("header--fixed");
            // burger btn
            $(this).closest(".header-menu__btn").addClass("header-menu__btn--open");
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
            $(this).closest(".header-menu__btn").removeClass("header-menu__btn--open");
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
        var mainSliderSettings = {
            effect: "fade",
            navigation: {
                nextEl: ".main-slider .swiper-button-next",
                prevEl: ".main-slider .swiper-button-prev",
            },
            pagination: {
                el: ".main-slider .swiper-pagination",
                clickable: true,
            }
        };
        new Swiper(".js-main-slider", mainSliderSettings);
    }

    // News slider
    if ($(".js-news-slider").length) {
        var newsSliderSettings = {
            slidesPerView: "auto",
            navigation: {
                nextEl: ".news .swiper-button-next",
                prevEl: ".news .swiper-button-prev",
            }
        };
        new Swiper(".js-news-slider", newsSliderSettings);
    }

    // Events-calendar slider
    if ($(".js-events-calendar-slider").length) {
        var eventsCalendarSliderSettingsHorizontal = {
                autoHeight: true,
                direction: "horizontal",
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".events-calendar .swiper-button-next",
                    prevEl: ".events-calendar .swiper-button-prev",
                },
            },
            eventsCalendarSliderSettingsVertical = {
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
            eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSliderSettingsVertical);
        }
        else if (window.matchMedia("(max-width: 991.98px)").matches) {
            eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSliderSettingsHorizontal);
        }

        reinitSlider();
        $(window).on("resize", reinitSlider);

        function reinitSlider() {
            if (window.matchMedia("(min-width: 992px)").matches) {
                eventsCalendarSlider.destroy();
                eventsCalendarSlider = null;
                eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSliderSettingsVertical);
            }
            else if (window.matchMedia("(max-width: 991.98px)").matches) {
                eventsCalendarSlider.destroy();
                eventsCalendarSlider = null;
                eventsCalendarSlider = new Swiper(".js-events-calendar-slider", eventsCalendarSliderSettingsHorizontal);
            }
        }
    }

    // Jointly projects slider
    if ($(".js-jointly-projects-slider").length) {
        var jointlyProjectsSliderSettings = {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".jointly-projects .swiper-button-next",
                prevEl: ".jointly-projects .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 3,
                },
            }
        };
        new Swiper(".js-jointly-projects-slider", jointlyProjectsSliderSettings);
    }

    // Jointly partners slider
    if ($(".js-jointly-partners-slider").length) {
        var jointlyPartnersSliderSettings = {
            slidesPerView: "auto",
            navigation: {
                nextEl: ".jointly-partners .swiper-button-next",
                prevEl: ".jointly-partners .swiper-button-prev",
            },
        };
        new Swiper(".js-jointly-partners-slider", jointlyPartnersSliderSettings);
    }

    // Sidebar slider
    if ($(".js-sidebar-slider").length) {
        var sidebarSliderSettings = {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: ".js-sidebar-slider .swiper-pagination",
                clickable: true
            },
            on: {
                init() {
                    this.el.addEventListener("mouseenter", () => {
                        this.autoplay.stop();
                    });

                    this.el.addEventListener("mouseleave", () => {
                        this.autoplay.start();
                    });
                }
            },
        };
        new Swiper(".js-sidebar-slider", sidebarSliderSettings);
    }

    // About-main slider
    if ($(".js-about-main-slider").length) {
        var aboutMainSliderSettings = {
            slidesPerView: "auto",
            navigation: {
                nextEl: ".js-about-main-slider-wrapper .swiper-button-next",
                prevEl: ".js-about-main-slider-wrapper .swiper-button-prev",
            },
        };
        new Swiper(".js-about-main-slider", aboutMainSliderSettings);
    }

    // Awards slider
    if ($(".js-awards-slider").length) {
        var awardsSliderSettings = {
            slidesPerView: 1,
            navigation: {
                nextEl: ".js-awards-slider .swiper-button-next",
                prevEl: ".js-awards-slider .swiper-button-prev",
            },
        };
        new Swiper(".js-awards-slider", awardsSliderSettings);
    }

    // About-history sliders
    if ($(".about-history-slider").length) {
        $(".about-history-slider").each(function (i) {
            var sliderID = $(".about-history-slider").eq(i).data("id"),
                aboutHistorySliderSettings = {
                    slidesPerView: "auto",
                    navigation: {
                        nextEl: ".js-about-history-" + sliderID + "-slider ~ .swiper-navigation .swiper-button-next",
                        prevEl: ".js-about-history-" + sliderID + "-slider ~ .swiper-navigation .swiper-button-prev",
                    }
                };
            new Swiper(".js-about-history-" + sliderID + "-slider", aboutHistorySliderSettings);
        });

        scrollConditionCheck();
        $(window).on("resize", scrollConditionCheck);

        function scrollConditionCheck() {
            $(".about-history-slider").each(function (i) {
                var sliderID = $(".about-history-slider").eq(i).data("id"),
                    slider = $(".js-about-history-" + sliderID + "-slider"),
                    sliderWidth = slider.width(),
                    numOfSlides = slider.find(".swiper-slide").length,
                    sumSlidesWidth = (numOfSlides * 179) - 20;

                if (sliderWidth >= sumSlidesWidth) {
                    slider.siblings(".swiper-navigation").addClass("swiper-navigation-none");
                } else if (sliderWidth < sumSlidesWidth) {
                    slider.siblings(".swiper-navigation").removeClass("swiper-navigation-none");
                }
            });
        }
    }


}
// Init tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        // adding class "selected" to active tab
        $(".tabs-heading__item").on("click", function () {
            $(this).closest(".tabs-heading").find(".tabs-heading__item").removeClass("selected");
            $(this).addClass("selected");
        });

        // show content of "selected" item
        tabsContentBinding();
        function tabsContentBinding() {
            var currentSelected = 1;
            $(".tabs-heading__item").on("click", function () {
                currentSelected = $(this).data("target");
                $(this).closest(".tabs").find(".tab-content__section").removeClass("active");
                $(this).closest(".tabs").find(".tab-content__section[data-id='" + currentSelected + "']").addClass("active");
            });
        }
    }
}
// Init accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        $(".accordion__collapse").hide();
        $(".js-accordion-btn").on("click", function () {
            if (!$(this).hasClass("open")) {
                $(".accordion__btn").removeClass("open");
                $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(150);
                $(this).addClass("open");
                $(this).closest(".accordion__item").addClass("active");
                $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(150);
            } else if ($(this).hasClass("open")) {
                $(this).removeClass("open");
                $(this).closest(".accordion__item").removeClass("active");
                $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(150);
                setTimeout(function () {
                    $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                }, 150);
            }
        });
    }
}
// Init custom select
application.prototype.initCustomSelect = function () {
    if ($(".js-custom-select").length) {
        $(".js-custom-select").each(function(){
            var $this = $(this),
                numberOfOptions = $(this).children("option").length,
                $selectTitle = null,
                $list = null,
                $listItems = null;

            $this.addClass("visually-hidden");
            if ($this.hasClass("js-custom-select-room")) {
                $this.wrap("<div class='custom-select custom-select-room'></div>");
            } else {
                $this.wrap("<div class='custom-select'></div>");
            }
            $this.after("<div class='custom-select__title default'></div>");

            $selectTitle = $this.next(".custom-select__title");
            $selectTitle.text($this.children("option").eq(0).text());

            $list = $("<ul />", {
                "class": "custom-select__options"
            }).insertAfter($selectTitle);

            for (var i = 0; i < numberOfOptions; i++) {
                $("<li />", {
                    text: $this.children("option").eq(i).text(),
                    rel: $this.children("option").eq(i).val(),
                    class: $this.children("option").eq(i).attr("class"),
                    style: $this.children("option").eq(i).attr("style")
                }).appendTo($list);
            }

            $listItems = $list.children("li");

            $selectTitle.on("click", function(e) {
                e.stopPropagation();
                $(".custom-select__title.active").not(this).each(function() {
                    $(this).removeClass("active").next(".custom-select__options").hide();
                });
                $(this).closest(".custom-select").toggleClass("active");
                $(this).toggleClass("active").next(".custom-select__options").toggle();
            });

            $listItems.on("click", function(e) {
                e.stopPropagation();
                $listItems.removeClass("selected");
                $(this).not(".custom-room").addClass("selected");
                $(this).closest(".custom-select").removeClass("active");
                $selectTitle.text($(this).text()).removeClass("active").removeClass("default");
                $this.val($(this).attr("rel"));
                $list.hide();
            });

            $(document).on("click", function (e) {
                if (!$(".js-custom-select").is(e.target)) {
                    $(".custom-select").removeClass("active");
                    $selectTitle.removeClass("active");
                    $list.hide();
                }
            });
        });
    }
}
// Init reset form data
application.prototype.initResetForm = function () {
    var thisResetBtn = $(".btn-reset");
    $(thisResetBtn).on("click", function () {
        var thisForm = $(this).closest("form").attr("id");
        $("#" + thisForm + " select").val("0");
        $("#" + thisForm + " .custom-select__title").text($("#" + thisForm + " .js-custom-select").find(":selected").text()).addClass("default");
        $("#" + thisForm + " input:not(input[type='checkbox']), #" + thisForm + " textarea").val("");
        $("#" + thisForm + " input[type='checkbox']").prop("checked", false);
    });
}
// Init modal popup
application.prototype.initModalPopup = function () {
    $("[data-toggle='modal']").on("click", function(e) {
        var elemId = $(this).data("target"),
            currentModal = $("#" + elemId),
            currentModalOverlay = currentModal.find(".modal-overlay");

        e.preventDefault();
        $(".modal").not("#" + elemId).removeClass("is-visible");
        $("#" + elemId).addClass("is-visible");

        if (window.matchMedia("(max-width:991.98px)").matches) {
            if (!currentModalOverlay.hasClass("desktop-only")) {
                $("body").addClass("overflow-hidden");
            }
        } else if (window.matchMedia("(min-width:992px)").matches) {
            if (!currentModalOverlay.hasClass("modal-overlay-mobile")) {
                $("body").addClass("overflow-hidden");
            }
        }
    });

    $(document).on("click", function (e) {
        if ($(".modal-overlay").is(e.target) || $(".modal-close").is(e.target)) {
            var elemId = $(e.target).closest(".modal").attr("id");
            e.stopPropagation();
            $("body").removeClass("overflow-hidden");
            $("#" + elemId).removeClass("is-visible");
        }
    });
}


// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7 (999) 999-99-99", { autoclear: false });
}