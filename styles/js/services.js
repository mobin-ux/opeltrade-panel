
var mainTl = new TimelineMax();


/****************************/
/****** Document Ready ******/
/****************************/

$(document).ready(function () {

    init();

    $(".header-slider").owlCarousel({
        center: true,
        loop: true,
        margin: 0,
        autoplay: true,
        animate:true,
        items: 1,
        nav:false,
        dots:false,
        onInitialized  : counter, //When the plugin has initialized.
        onTranslated : counter
    });

    $('.slider-box .arrow-left').click(function() {
        $('.header-slider').owlCarousel('prev');
    });

    $('.slider-box .arrow-right').click(function() {
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

        $('.slider-box .current').html(item);
        $('.slider-box .total').html(items);
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
    var $desc=$("#bw-page-header .description");
    var $plans=$("#bw-page-header .plans-box");
    TL = new TimelineMax();

    TL
        .from($title,0.7, {opacity:0,onStart:spilitText})
        //.from($desc,0.3, {y:-50,opacity:0,onStart:spilitTextLines})
        //.staggerFrom($plans,0.7, {y:50,opacity:0},0.2);

    TL.seek('about');
    return TL;
}


function getInvetsTl() {
    var $title=$("#bw-services-box .bw-section-title-vertical-reverse .title");
    var $desc=$("#bw-services-box .bw-section-title-vertical-reverse .desc");
    var $description=$("#bw-services-box  .description");
    var $calc=$("#bw-services-box .calc");
    var $calc_info=$("#bw-services-box .calculator-info li");
    var $btn=$("#bw-services-box .btn");
    TL = new TimelineMax();

    TL
        .from($title,0.7, {opacity:0,y:-50})
        //.from($desc,0.5, {opacity:0,onStart:spilitText})
        //.from($description,0.5, {opacity:0,onStart:spilitTextLines},'-=0.2')
       // .from($calc,1, {opacity:0,x:-150,rotation:-50},'-=0.5')
        .staggerFrom($calc_info,0.5, {y:100,opacity:0},0.2)
        .from($btn,0.5, {opacity:0,y:50},'-=1');


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