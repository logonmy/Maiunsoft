function setFontSize() {
    var n = document.documentElement.clientWidth,
        e = n / 750 * 100;
    document.getElementsByTagName("html")[0].style.fontSize = e + "px"
}
$(window).on("resize", setFontSize), setFontSize(), $(function() {
    function n() {
        setTimeout(function() {
            t = new IScroll("#wrapper", {
                preventDefault: !0,
                click: !0,
                useTransform: !0,
                mouseWheel: !0,
                momentum: !0,
                scrollbars: !1
            })
        }, 100)
    }

    function e() {
        $(window).scrollTop() > 800 ? $(".news .totop").show() : $(".news .totop").hide()
    }
    var t;
    window.addEventListener("load", n, !1), $(".menu").on("click", function() {
        n(), $(".menu_list").show(), $(".bg").show()
    }), $("nav .bg").on("tap", function() {
        $(".menu_list").hide(), $(".bg").hide(), $(".menu_list").find("a:not(.shouye)").hide(), $(".menu_list").find("i").css({
            background: "url('/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/down.png') no-repeat",
            backgroundSize: "cover"
        })
    }), $(".menu_list .item em").on("tap", function() {
        t.refresh(), $(".menu_list").hide(), $(".bg").hide(), $(".menu_list").find("a:not(.shouye)").hide(), $(".menu_list").find("i").css({
            background: "url('/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/down.png') no-repeat",
            backgroundSize: "cover"
        })
    });
    var o = 1;
    $(".menu_list .item span").on("tap", function() {
        switch (t.refresh(), o) {
            case 1:
                $(this).parent().find("a").css("display", "block"), $(this).parent().find("i").css({
                    background: "url('/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/up.png') no-repeat",
                    backgroundSize: "cover"
                }), o = 2;
                break;
            default:
                $(this).parent().find("a").css("display", "none"), $(this).parent().find("i").css({
                    background: "url('/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/down.png') no-repeat",
                    backgroundSize: "cover"
                }), o = 1
        }
    });
    var i = 1;
    $(".has").on("tap", function() {
        switch (t.refresh(), i) {
            case 1:
                $(this).next(".three").show(), i = 2;
                break;
            default:
                $(this).next(".three").hide(), i = 1
        }
    }), $(window).scroll(function() {
        e()
    }), e(), $(".news .more").not(".except").on("tap", function() {
        var n = $(this).data("cont");
        if (!window.localStorage) return alert("浏览器支持localstorage"), !1;
        window.localStorage.setItem("cont", n), window.location.href = "xiangqing"
    })
});