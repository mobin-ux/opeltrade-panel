
var mainTl = new TimelineMax();
var $marketing_desc=$("#bw-partnership-box .bw-section-title-vertical .desc");
var $marketing_title=$("#bw-partnership-box .bw-section-title-vertical .title");
var $marketing_marks=$("#bw-partnership-box .marketing-tools .item");
var $marketing_btn=$("#bw-partnership-box .marketing-tools .btn");

/****************************/
/****** Document Ready ******/
/****************************/

$(document).ready(function () {

    init();


    var Controler = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        duration: 100,
        offset: 0,
    })
        .on('enter', function () {
            getInvetsTl();
        })
        .reverse(false)
        .addTo(Controler);

    new ScrollMagic.Scene({
        duration: 0,
        offset: -50,
    })
        .on('enter', function () {
            getReferTl();
        })
        .reverse(false)
        .addTo(Controler);

    new ScrollMagic.Scene({
        duration: 0,
        offset: 100,
    })
        .on('enter', function () {
            getMarketingTl();
        })
        .reverse(false)
        .addTo(Controler);


});


/****************************/
/****** home animations ******/
/****************************/

function getBannerTl() {
    var $title=$("#bw-page-header .bw-section-title-vertical-reverse .title");
    var $desc=$("#bw-page-header .bw-section-title-vertical-reverse .desc");
    var $description=$("#bw-page-header .description");

    TL = new TimelineMax();

    TL
        .from($title,0.7, {opacity:0,onStart:spilitText})
        //.from($desc,0.3, {opacity:0,onStart:spilitTextLines})
        //.from($description,0.7, {y:-50,opacity:0,onStart:spilitTextLines});

    TL.seek('about');
    return TL;
}


function getReferTl() {
    var $title=$("#bw-partnership-box .bw-title-center .title");
    var $desc=$("#bw-partnership-box .bw-title-center .desc");
    var $description=$("#bw-partnership-box  .description");
    var $com_box=$("#bw-partnership-box .com-box");

    TL = new TimelineMax();

    TL
        .from($title,0.7, {opacity:0,y:-50})
        .from($desc,0.5, {opacity:0,onStart:spilitText})
        .from($description,0.5, {opacity:0,onStart:spilitTextChars})
        .staggerFrom($com_box,0.5, {y:100,opacity:0},0.2)
        .from($btn,0.5, {opacity:0,y:50},'-=1');


    TL.seek('invest');
    return TL;
}

function getMarketingTl() {

    TL = new TimelineMax();

    TL
        .to($marketing_title,0.5,{y:0,opacity:1})
        .to($marketing_desc,0.6, {opacity:1,onStart:spilitText})
        .staggerTo($marketing_marks, 1.2,{y:0,opacity:1, ease: Bounce.easeOut},0.2)
        .to($marketing_btn,0.5, {opacity:1,onStart:spilitText},'-=0.6');

    TL.seek('getMarketingTl');
    return TL;
}
// set from animations
function clearStage() {
    var clearTl = new TimelineMax();
    clearTl
        .set($marketing_title,{y:-50,opacity:0})
        .set($marketing_desc, {opacity:0})
        .set($marketing_marks,{y:-100,opacity:0})
        .set($marketing_btn, {opacity:0});

    return clearTl;
}

// load methods
function init() {
    mainTl
        .add(clearStage())
        .add(getBannerTl(), 'scene-intro');
}