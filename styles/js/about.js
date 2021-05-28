
var mainTl = new TimelineMax();


/****************************/
/****** Document Ready ******/
/****************************/

$(document).ready(function () {

    init();

    $(".antivirus-owl-carousel").owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        autoplay: true,
        dots: true,
        items: 3,
        responsive: {
            1000: {
                items: 4
            },
            786: {
                items:2
            },
            500: {
                items: 2
            },
            200: {
                items: 1
            }
        }
    });

    $(".header-slider").owlCarousel({
        center: true,
        loop: true,
        margin: 0,
        autoplay: true,
        animate:true,
        items: 1,
        nav:true,
        onInitialized  : counter, //When the plugin has initialized.
        onTranslated : counter
    });

    $('.about-slider-box .arrow-left').click(function() {
        $('.header-slider').owlCarousel('prev');
    });

    $('.about-slider-box .arrow-right').click(function() {
        $('.header-slider').owlCarousel('next');
    });

    function counter(event) {
        var element   = event.target;         // DOM element, in this example .owl-carousel
        var items     = event.item.count;     // Number of items
        var item      = event.item.index + 1;     // Position of the current item

        // it loop is true then reset counter from 1
        if(item > items) {
            item = item - items
        }

        $('.about-slider-box .current').html(item);
        $('.about-slider-box .total').html(items);
    }



    var Controler = new ScrollMagic.Controller();

    // for About section
    new ScrollMagic.Scene({
        duration: 100,
        offset: 0,
    })
        .on('enter', function () {
            getInvetsTl();
        })
        .reverse(false)
        .addTo(Controler);

    // for plans
    new ScrollMagic.Scene({
        duration: 100,
        offset: 200,
    })
        .on('enter', function () {
            getProtectionTl();
        })
        .reverse(false)
        .addTo(Controler);



});


/****************************/
/****** home animations ******/
/****************************/

function getBannerTl() {
    var $title=$("#bw-page-header .bw-section-title .desc");
    TL = new TimelineMax();

    TL
        .from($title,0.7, {opacity:0,onStart:spilitText});

    TL.seek('about');
    return TL;
}


function getInvetsTl() {
    var $title=$("#bw-about-box .bw-title .title");
    TL = new TimelineMax();

    TL
        .from($title,0.7, {opacity:0,onStart:spilitText});

    TL.seek('invest');
    return TL;
}

function getProtectionTl() {
    var $desc=$("#bw-about-box .bw-section-title-vertical-reverse .desc");
    var $title=$("#bw-about-box .bw-section-title-vertical-reverse .title");
    TL = new TimelineMax();

    TL
        .from($title,0.5,{y:-50,opacity:0})
        .from($desc,0.7, {opacity:0,onStart:spilitText});

    TL.seek('protection');
    return TL;
}

// load methods
function init() {
    mainTl
        .add(getBannerTl(), 'scene-intro');
}