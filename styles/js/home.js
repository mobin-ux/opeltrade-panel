$coins = $("#bw-home-banner .coin");
$coin1 = $("#bw-home-banner .coin1");
$coin2 = $("#bw-home-banner .coin2");
$coin3 = $("#bw-home-banner .coin3");
$coin4 = $("#bw-home-banner .coin4");
$coin5 = $("#bw-home-banner .coin5");
//about
var $about_title = $("#bw-home-about .bw-section-title .desc");
var $about_plans = $("#bw-home-about .box");
var $about_desc = $("#bw-home-about .description");
var $about_footer = $("#bw-home-about .footer");
var $about_btitle = $("#bw-home-about .bw-section-title .title");

//plans
var $plan_title = $("#bw-home-plans .bw-section-title .desc");
var $plan_btitle = $("#bw-home-plans .bw-section-title .title");
var $plan_title2 = $("#bw-home-plans .bw-section-title-vertical .desc");
var $plan_btitle2 = $("#bw-home-plans .bw-section-title-vertical .title");
var $plan_btn = $("#bw-home-plans .btn");

//help
var $help_btitle = $("#bw-home-help .bw-section-title .title");
var $help_title = $("#bw-home-help .bw-section-title .desc");

$bigCircle = $("#bw-home-banner .big-circle");
$bigCircleContent = $("#bw-home-banner .big-circle .content");
$links = $("#bw-home-banner .links");
var mainTl = new TimelineMax();

var slideInterval = null;
var slideIndex = 0;
var timer = 3;

/******** number format js function *********/
function number_format(number, decimals, decPoint, thousandsSep) {
    number = (number + "").replace(/[^0-9+\-Ee.]/g, "");
    var n = !isFinite(+number) ? 0 : +number;
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
    var sep = typeof thousandsSep === "undefined" ? "," : thousandsSep;
    var dec = typeof decPoint === "undefined" ? "." : decPoint;
    var s = "";

    var toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return "" + (Math.round(n * k) / k).toFixed(prec);
    };

    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }

    return s.join(dec);
}

/****************************/
/****** Document Ready ******/
/****************************/

$(document).ready(function() {
    init();

    // start live prices carousel
    var swiper = new Swiper("#bw-home-live-price .swiper-container", {
        slidesPerView: 4,
        spaceBetween: 0,
        autoplay: true,
        breakpoints: {
            355: {
                slidesPerView: 1,
                autoplay: true
            },
            480: {
                slidesPerView: 2,
                autoplay: true
            },
            640: {
                slidesPerView: 3,
                autoplay: true
            }
        }
    });

    $(".faq-section").owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        autoplay: true,
        animate: false,
        dots: true,
        items: 1,
        animateOut: "fadeOut",
        animateIn: "flipInX",
        autoplayTimeout:10000,
        responsive: {
            855: {
                items: 3
            },
            700: {
                items: 2
            }
        }
    });

    // live prices
    function load_coin_price(coin) {
        $.ajax({
            url: "https://api.cryptonator.com/api/ticker/" + coin + "-usd",
            dataType: "json",
            success: function(result) {
                if (coin == "doge") {
                    $("#" + coin + "-price").html("" + number_format(result.ticker.price, 4, ".", ",") + "<span class='unit'> USD</span>");
                } else {
                    $("#" + coin + "-price").html("" + number_format(result.ticker.price, 2, ".", ",") + "<span class='unit'> USD</span>");
                }
            }
        });
    }
    load_coin_price("btc");
    load_coin_price("eth");
    load_coin_price("ltc");
    load_coin_price("dash");
    load_coin_price("doge");
    load_coin_price("bch");

    $("#bw-home-banner").mousemove(function(e) {
        if (timer > 3) {
            var offset = $(this).offset();
            var X = e.pageX - offset.left;
            var Y = e.pageY - offset.top;
            $("#coord").text("X: " + X + ", Y: " + Y);

            TL = new TimelineMax();

            TL.staggerTo($coins, 0.6, { x: X / 30, y: Y / 30 }, 0.1);
        }
    });

    /********* Scroll Magic For Animations ********/

    var Controler = new ScrollMagic.Controller();

    // for About section
    new ScrollMagic.Scene({
        duration: 0,
        offset: -300
    })
        .on("enter", function() {
            getAboutTl();
        })
        .reverse(false)
        .addTo(Controler);

    // for plans
    new ScrollMagic.Scene({
        duration: 100,
        offset: 400
    })
        .on("enter", function() {
            getPlansTl();
        })
        .reverse(false)
        .addTo(Controler);

    // for help
    new ScrollMagic.Scene({
        duration: 100,
        offset: 2500
    })
        .on("enter", function() {
            getHelpTl();
        })
        .reverse(false)
        .addTo(Controler);
});

function generateRandomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

/****************************/
/****** header slider ******/
/****************************/

function sliderSetInterval(bool) {
    if (bool) {
        slideInterval = setInterval(function() {
            slideIndex++;
            showSlides(slideIndex);
        }, 8000);
    } else {
        clearInterval(slideInterval);
    }
}

function plusSlides(n) {
    sliderSetInterval(false);
    if (n >= 1) {
        slideIndex++;
        var title_id = "#h";
        $(title_id + n).css("visibility", "initial");
        $(title_id + n).css("opacity", "1");
        console.log(title_id + n);
    } else {
        slideIndex--;
    }

    showSlides(slideIndex, true);
}

function CurrentSlides(n) {
    sliderSetInterval(false);
    slideIndex = n;
    showSlides(slideIndex, true);
}

function showSlides(n, cback) {
    $links.find(".link").removeClass("active");

    var i;
    var slides = document.getElementsByClassName("link");
    if (n >= slides.length) {
        slideIndex = 0;
    }
    if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (i = 0; i < slides.length; i++) {
        if (slideIndex == i) {
            slides[i].className += " active";
            animate(slides[i]);
            $(".big-circle .current").html(i + 1);
            $(".slide_title").removeClass("show");
            $("#slide_title" + i + "").addClass("show");
        }
    }

    if (cback == true) sliderSetInterval(true);
}

function animate(selector) {
    TL = new TimelineMax();
    TL.set($(".big-circle p"), { autoAlpha: 0 }),
        TL.set($("#bw-home-banner .links strong"), { opacity: 0 }),
        TL.fromTo($(selector).find("span"), 0.4, { opacity: 0, autoAlpha: 0 }, { opacity: 1, autoAlpha: 1 }),
        TL.fromTo($(selector).find("h4"), 0.7, { x: -200, opacity: 0, autoAlpha: 0 }, { x: 0, opacity: 1, autoAlpha: 1 }, "-=0.2"),
        TL.to($(selector).find("strong"), 0.7, { opacity: 1, onStart: spilitText }, "-=0.1"),
        TL.fromTo($($(selector).data("target")), 0.5, { autoAlpha: 0, y: -10 }, { autoAlpha: 1, y: 0 }, "-=1.2");
}

/****************************/
/****** home animations ******/
/****************************/

function getBannerTl() {
    TL = new TimelineMax();
    var ani_s = null;

    if ($(window).width() <= 768) ani_s = 0;
    else ani_s = 1;

    TL.to($bigCircle, ani_s, { opacity: 1, autoAlpha: 1, rotation: 0, transformOrigin: "center center" })
        .to($bigCircleContent, 1.2, { autoAlpha: 1, transformOrigin: "center center", ease: Bounce.ease })
        .to($links, 0.5, { x: 0, autoAlpha: 1, ease: Bounce.ease })
        .staggerTo(
            [$coin1, $coin2, $coin4, $coin5],
            0.5,
            { y: 0, x: 0, autoAlpha: 1, ease: CustomEase.create("custom", "M0,0 C0.16,0.776 0.242,0.74 0.242,0.74 0.242,0.74 0.502,1.082 1,1") },
            0.2
        )
        .to(
            $coin3,
            1,
            {
                scale: 1,
                transformOrigin: "center center",
                autoAlpha: 1,
                ease: CustomEase.create("custom", "M0,0 C0.16,0.776 0.242,0.74 0.242,0.74 0.242,0.74 0.502,1.082 1,1")
            },
            "-=0.2"
        );

    sliderSetInterval(true);

    var hTimer = setInterval(function() {
        timer++;
    }, 1000);

    TL.seek("coins");
    return TL;
}

function getAboutTl() {
    TL = new TimelineMax();

    TL.to($about_btitle, 0.5, { opacity: 1, y: 0, x: 0 })
        .to($about_title, 0.7, { opacity: 1, onStart: spilitText })
        .staggerTo($about_plans, 0.8, { x: 0, opacity: 1 }, 0.2, "-=1")
        .to($about_desc, 0.6, { opacity: 1, y: 0, x: 0 }, "-=1")
        .to($about_footer, 0.8, { y: 0, opacity: 1 }, "-=0.5");

    TL.seek("about");
    return TL;
}

function getPlansTl() {
    TL = new TimelineMax();

    TL.to($plan_btitle, 0.7, { opacity: 1, x: 0, y: 0 })
        .to($plan_title, 0.7, { opacity: 1, onStart: spilitText })
        .to($plan_btitle2, 0.7, { opacity: 1, x: 0, y: 0 })
        .to($plan_title2, 0.7, { opacity: 1, onStart: spilitText })
        .to($plan_btn, 0.5, { opacity: 1, onStart: spilitText }, "-=0.5");

    TL.seek("plans");
    return TL;
}
function getHelpTl() {
    TL = new TimelineMax();

    TL.to($help_btitle, 0.7, { opacity: 1, y: 0, x: 0 }).to($help_title, 0.7, { opacity: 1, onStart: spilitText });

    TL.seek("help");
    return TL;
}
// set from animations
function clearStage() {
    var clearTl = new TimelineMax();

    clearTl
        /*-------------Banner-------------*/
        .set($bigCircle, { opacity: 0, autoAlpha: 0, rotation: -90 })
        .set($bigCircleContent, { autoAlpha: 0, transformOrigin: "center center" })
        .set($links, { x: 500, autoAlpha: 0 })
        .set($coin1, { x: 100, autoAlpha: 0 })
        .set($coin3, { scale: 0, transformOrigin: "center center", autoAlpha: 0 })
        .set($coin5, { x: -300, autoAlpha: 0 })
        .set($coin4, { x: -200, autoAlpha: 0 })
        .set($coin2, { x: 100, y: -168, autoAlpha: 0 })
        // banners
        .set($about_title, { opacity: 0 })
        .set($about_plans, { x: 20, opacity: 0 })
        .set($about_desc, { opacity: 0, x: -10 })
        .set($about_footer, { y: 50, opacity: 0 })
        .set($about_btitle, { y: -50, opacity: 0 })
        //plans
        .set($plan_btitle, { opacity: 0, x: 0, y: 0 })
        .set($plan_title, { opacity: 0 })
        .set($plan_btitle2, { opacity: 0, x: 0, y: 0 })
        .set($plan_title2, { opacity: 0 })
        .set($plan_btn, { opacity: 0 })
        .set($help_btitle, { opacity: 0, y: -50 })
        .set($help_title, { opacity: 0 });
    //help
    return clearTl;
}

// load methods
function init() {
    mainTl.add(clearStage()).add(getBannerTl(), "scene-intro");
}
