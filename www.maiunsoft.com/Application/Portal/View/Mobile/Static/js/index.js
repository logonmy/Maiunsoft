$(function() {

	$(".swiper-slide").each(function(index) {
		if(index > 0) {
			new Swiper(".banner", {
				autoplay: 2e3,
				loop: !0,
				speed: 300,
				pagination: ".swiper-pagination",
				paginationClickable: !0,
				autoplayDisableOnInteraction: !1
			})
		}
	})

});