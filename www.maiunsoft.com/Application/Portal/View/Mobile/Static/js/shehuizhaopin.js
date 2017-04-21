$(function() {
	new Swiper('.job-social',{
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
	$(".job-type div.socialType").click(function() {
    	$(".template-city").show();
        var e = $(this).index();
        $(this).addClass("current"), $(this).siblings().removeClass("current"), e < 5 ? ($(".all-content").find(".content").eq(e).show(), $(".all-content").find(".content").eq(e).siblings().hide()) : 4 < e && e < 10 ? ($(".all-content").find(".content").eq(e - 5).show(), $(".all-content").find(".content").eq(e - 5).siblings().hide()) : ($(".all-content").find(".content").eq(e - 10).show(), $(".all-content").find(".content").eq(e - 10).siblings().hide())
   });
	$(".socialType").each(function(i,item){
		if(i == 5){
			$(this).addClass("current");
		}
	})
	
    $(".news-top-right").tap(function() {
        $(".cpmWrapper").show()
    }), $(".cpmWrapper span").tap(function() {
        $(".cpmWrapper").hide()
    }), $(".city ul li").tap(function() {
    	var cityNum = $(this).attr("data-city");
    	$(".template-city").each(function(i,item){
    		$(this).hide();
    		if($(this).attr("data-city") == cityNum){
    			$(this).show();
    		}
    	})
        $(this).addClass("now"), $(this).siblings().removeClass("now");
        var e = $(this).html() + "<i></i>";
        $(".news-top-right").html(e), $(".cpmWrapper").hide()
    })
});