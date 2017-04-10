$(function() {
    $(".info_menu a").click(function() {
        var n = $(this).index();
        $(this).addClass("current"), $(this).siblings().removeClass("current"), $(".all-content").find(".content").eq(n).show(), $(".all-content").find(".content").eq(n).siblings().hide()
    }), $(".news-top-right").tap(function() {
        $(".cpmWrapper").show()
    }), $(".cpmWrapper span").tap(function() {
        $(".cpmWrapper").hide()
    }), $(".city ul li").tap(function() {
        $(this).addClass("now"), $(this).siblings().removeClass("now");
        var n = $(this).html() + "<i></i>";
        $(".news-top-right").html(n), $(".cpmWrapper").hide()
    })
});