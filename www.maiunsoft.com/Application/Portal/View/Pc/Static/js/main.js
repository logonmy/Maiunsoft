! function() {
	var i = function() { console.log.apply(console, arguments) };
	i("%cWelcome To Maiun!", "background: #ccc;font-size: 32px;");
	$(".search-input").focus(function() { $(this).animate({ width: "210" }, 300, function() {}) }), $(".search-input").blur(function() { $(this).animate({ width: "140" }, 300, function() {}) });
	$(".swiper-slide").each(function(index) { 
		if(index > 0) { 
			var t = (new Swiper(".swiper-container", { 
				autoplay: 4e3, 
				loop: !0, 
				speed: 500, 
				pagination: ".swiper-pagination", 
				noSwiping: !0,
				paginationClickable: !0, 
				autoplayDisableOnInteraction: !1 
			}), null) } });
	$(".pointer").hover(function() { n(), $(this).find("span").css("border-bottom", "2px solid #1784db").css("color", "#1784db").addClass("pointer-change"), $(this).parent().find(".menu-mask").slideDown(200) }, function() {
		var i = $(this);
		t = setTimeout(function() {
			i.parent().find(".menu-mask").hide();
			i.find("span").css({ "border-bottom": "2px solid transparent", "color": "#000" }).removeClass("pointer-change")
		}, 100)
	}), $(".menu-mask").hover(function() { clearTimeout(t) }, function() { $(this).slideUp(100), $(this).siblings(".pointer").find("span").css("border-bottom", "2px solid transparent").css("color", "black").removeClass("pointer-change") });
	var n = function() { $(".menu-ul > ul").hide(), $(".menu-div > div").hide(), $(".menu-about > div").hide(), $(".menu-content > div > div").hide(), $(".menu-left > ul > li").find("img").hide(), $(".menu-left > ul > li:first-child").addClass("hover-back-color").css("color", "white").siblings().removeClass("hover-back-color").css("color", "#cbd0d4"), $(".menu-ul > ul:first-child").show(), $(".menu-content > div:first-child > div:first-child").show(), $(".menu-left > ul > li:first-child").find("img").show(), $(".nav-4-empty-block").show(), $(".menu-div > div:first-child").show(), $(".menu-about > div:first-child").show() };
	$(".menu-left li").hover(function() {
		$(this).siblings().removeClass("hover-back-color").css("color", "#cbd0d4"), $(this).siblings().find("img").hide(), $(".menu-ul > ul").hide(), $(".menu-div > div").hide(), $(".menu-about > div").hide(), $(".menu-content > div > div").hide(), $(this).addClass("hover-back-color").css("color", "white"), $(this).find("img").show();
		var i = $(this).index();
		$(this).parents(".menu-mask").find(".menu-right").children("div").children("div").eq(i).show(), $(this).parents(".menu-mask").find(".menu-right").children("div").children("ul").eq(i).show(), $(this).parents(".menu-mask").find(".menu-content").children("div").eq(i).children("div").eq(0).show()
	}, function() {}), $(".menu-ul > ul > li").hover(function() {
		$(".menu-content > div > div").hide();
		var i = $(this).parents("ul").index(),
			t = $(this).index();
		$(this).parents(".menu-right").find(".menu-content").children().eq(i).children().eq(t).show()
	}, function() {});
	$(".tabswitch-btn").each(function(index) {

	});
	$(".tabswitch-btn").click(function() {
			//$(".template-city").show();
			if(!$(this).hasClass("switch-active")) {
				$(this).siblings().removeClass("switch-active");
				$(this).addClass("switch-active");
				for(var i = 1; i < 6; i += 1) {
					var t = ".card-switch-" + i;
					$(t).hide()
				}
				var n = $(this).index() + 1;
				$(".card-switch-" + n).show()
			}
		}), $(".button-list > a").click(function() {
			$(this).siblings().removeClass("btn-active"), $(this).addClass("btn-active");
			for(var i = 1; i < 5; i += 1) {
				var t = ".switch-tab-" + i;
				$(t).hide()
			}
			var n = $(this).index() + 1,
				t = ".switch-tab-" + n;
			$(t).show()
		}), $(".button-list2 > a").click(function() {
			$(this).siblings().removeClass("btn-active"), $(this).addClass("btn-active");
			for(var i = 1; i < 7; i += 1) {
				var t = ".switch-tab-" + i;
				$(t).hide()
			}
			var n = $(this).index() + 1,
				t = ".switch-tab-" + n;
			$(t).show()
		}), $(".section-two-article").hover(function() { $(this).find("button").css("border-color", "#1784db"), $(this).find("button").css("color", "#1784db") }, function() { $(this).find("button").css("border-color", "white"), $(this).find("button").css("color", "black") }), $(".section-one-article").hover(function() {
			$(this).find("a").css("color", "#1784db");
			var i = $(this).find(".icon-right").attr("src"),
				t = i.indexOf("imgs");
			$(this).find(".icon-right").attr("src", i.slice(0, t) + "imgs/right-blue.jpg")
		}, function() {
			$(this).find("a").css("color", "black");
			var i = $(this).find(".icon-right").attr("src"),
				t = i.indexOf("imgs");
			$(this).find(".icon-right").attr("src", i.slice(0, t) + "imgs/right-black.png")
		}), $(".section-six-bg").hover(function() { $(this).find(".upblock-content").fadeIn(1e3), $(this).find(".upblock-btn").fadeIn(1e3), $(this).find(".upblock-icon-2").hide(), $(this).find(".upblock-icon-1").addClass("upblock-icon-hover"), $(this).find(".upblock-bg-cg").slideDown(400) }, function() { $(this).find(".upblock-icon-1").removeClass("upblock-icon-hover"), $(this).find(".upblock-icon-2").stop().fadeIn(600), $(this).find(".upblock-content").stop().hide(), $(this).find(".upblock-btn").stop().hide(), $(this).find(".upblock-bg-cg").stop().slideUp(100) }), $(".menu-ul li").click(function() {
			var t = $(this).index(),
				n = $(this).parent().index(),
				o = $(this).data("href");
			i(o), "service" === o.slice(1, 8) ? (0 == n ? localStorage["service-consult"] = t : 1 == n ? localStorage["service-dev"] = t : 2 == n ? localStorage["service-maintenance"] = t : 3 == n && (localStorage["service-train"] = t), location = "." + o) : "employ" === o.slice(1, 7) && (0 == n ? localStorage["employ-school"] = t : 1 == n && (localStorage["employ-social"] = t), location = "." + o)
		}), $(".drop-down").click(function(i) { $(".drop-down-item").toggle(), $(document).one("click", function() { $(".drop-down-item").hide() }), i.stopPropagation() }),
		$(".drop-down-item").click(function() {
			var cityNum = $(this).attr("data-city");
			$(".template-city").each(function(i, item) {
				$(this).hide();
				if($(this).attr("data-city") == cityNum) {
					$(this).show();
				}
			})
			$(".default-item").text($(this).text());
		});
		
		
}();