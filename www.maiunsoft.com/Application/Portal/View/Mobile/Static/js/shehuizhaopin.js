$(function() {
    new Swiper(".cont", {
        speed: 300,
        loop: !0,
        preventClicks: !1,
        initialSlide: 0,
        freeMode: !0,
        freeModeMomentum: !0,
        freeModeSticky: !0,
        slidesPerView: "auto",
        centeredSlides: !1
    });
    $(".info_menu a").click(function() {
        var e = $(this).index();
        $(this).addClass("current"), $(this).siblings().removeClass("current"), e < 5 ? ($(".all-content").find(".content").eq(e).show(), $(".all-content").find(".content").eq(e).siblings().hide()) : 4 < e && e < 10 ? ($(".all-content").find(".content").eq(e - 5).show(), $(".all-content").find(".content").eq(e - 5).siblings().hide()) : ($(".all-content").find(".content").eq(e - 10).show(), $(".all-content").find(".content").eq(e - 10).siblings().hide())
    }), $(".news-top-right").tap(function() {
        $(".cpmWrapper").show()
    }), $(".cpmWrapper span").tap(function() {
        $(".cpmWrapper").hide()
    }), $(".city ul li").tap(function() {
        $(this).addClass("now"), $(this).siblings().removeClass("now");
        var e = $(this).html() + "<i></i>";
        $(".news-top-right").html(e), $(".cpmWrapper").hide()
    })
});