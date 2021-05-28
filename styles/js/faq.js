var mainTl = new TimelineMax();

$(document).ready(function() {
    init();

    $("#helpSearch").hideseek({
        highlight: true,
        nodata: "No results found"
    });
    $("#helpSearch").on("_after_each", function() {
        if ($(this).val()) {
            $(".cf-tab-content-box").show();
            $(".cf-tab-links li").removeClass("active");
            $(".cf-tab-content-box").addClass("active");
            $(".cf-tab-content-box .answer").show();
            $(".question").addClass("questionBig");
            $(".answer").addClass("active");
        }
    });
    $("#helpSearch").on("keyup", function() {
        if (!$(this).val()) {
            $(".cf-tab-content-box .answer").hide();
            $(".question").removeClass("questionBig");
            $(".answer").removeClass("active");
            $(".cf-tab-content-box").removeClass("active");
            $(".cf-tab-content-box").hide();
            $(".cf-tab-links li")
                .first()
                .addClass("active");
            $(".cf-tab-content-box")
                .first()
                .show();
            $(".cf-tab-content-box")
                .first()
                .addClass("active");
        }
    });

    // cf tabs
    $(".cf-tab .cf-tab-content-box").hide();
    $('[data-role="cf-tab"]').prepend(function() {
        if ($(this).hasClass("active")) {
            $($(this).data("target")).show();
        }
    });
    $('[data-role="cf-tab"]').click(function() {
        var $this = $(this);
        var target = $this.data("target");
        $('[data-role="cf-tab"] , .cf-tab .cf-tab-content-box').removeClass("active");
        $(".cf-tab .cf-tab-content-box").hide();
        $this.addClass("active");
        $(target).show();
        $(target).addClass("active");
    });

    // cf questions
    $(".questions .question .answer").hide("");
    $(".questions .question .button , .questions .question .title").click(function() {
        var element = $(this)
            .closest(".question")
            .find(".answer");

        if (element.hasClass("active")) {
            element.hide();
            element.removeClass("active");
            if ($(this).hasClass("button"))
                $(this)
                    .html("+")
                    .removeClass("active");
            else
                $(this)
                    .closest(".question")
                    .find(".button")
                    .html("+")
                    .removeClass("active");

            $(this)
                .closest(".question")
                .removeClass("questionBig");
        } else {
            element.show();
            $(this)
                .closest(".question")
                .addClass("questionBig");
            element.addClass("active");
            if ($(this).hasClass("button"))
                $(this)
                    .html("-")
                    .addClass("active");
            else
                $(this)
                    .closest(".question")
                    .find(".button")
                    .html("-")
                    .removeClass("active");
        }
    });
});

function getBannerTl() {
    var $title = $("#bw-page-header .bw-section-title-vertical-reverse  .title");
    var $desc = $("#bw-page-header .bw-section-title-vertical-reverse  .desc");
    TL = new TimelineMax();

    TL.from($title, 0.7, { y: 100, opacity: 0 }).from($desc, 0.7, { opacity: 0, onStart: spilitText });

    TL.seek("about");
    return TL;
}

// load methods
function init() {
    mainTl.add(getBannerTl(), "scene-intro");
}
