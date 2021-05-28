var mainTl = new TimelineMax();

$(document).ready(function () {
    init();
    var Controler = new ScrollMagic.Controller();

    // for About section
    new ScrollMagic.Scene({
        duration: 100,
        offset: 0,
    })
        .on('enter', function () {
            getNewsTl();
        })
        .reverse(false)
        .addTo(Controler);
});

function getBannerTl() {
    var $title=$("#bw-page-header .bw-section-title-vertical-reverse  .title");
    var $desc=$("#bw-page-header .bw-section-title-vertical-reverse  .desc");
    TL = new TimelineMax();

    TL
        .from($title,0.7, {y:100,opacity:0})
        .from($desc,0.7, {opacity:0,onStart:spilitText});

    TL.seek('about');
    return TL;
}

function getNewsTl() {
    var $article=$("#bw-news-box .article");
    var $paginate=$("#bw-news-box .pagination");
    TL = new TimelineMax();

    TL
        .staggerFrom($article,0.7, {y:100,opacity:0},0.2)
        .from($paginate,0.7, {opacity:0,onStart:spilitText});

    TL.seek('news');
    return TL;
}


// load methods
function init() {
    mainTl
        .add(getBannerTl(), 'scene-intro');
}