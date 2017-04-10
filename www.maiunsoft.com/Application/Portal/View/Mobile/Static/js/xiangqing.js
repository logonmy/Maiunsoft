$(function() {
    var t = localStorage.getItem("cont"),
        n = t.split("_"),
        i = n[0];
    n[1];
    $.get("../data/xiangqing.json", function(t) {
        var n, t = t.result;
        if (t.resultcode = 200) {
            n = '<div class="banner"><img src="' + t[i]["banner-img"] + '" alt=""><div class="title">' + t[i]["banner-title"] + "</div></div>", n += '<div class="news"><h1>' + t[i]["floor-head"] + '</h1><div class="floor" style="padding-top:0.9rem">', n += "<h3>脉云软件（上海）有限公司</h3>";
            for (var a = t[i].floor1.length, l = 0; l < a; l++) n += "<p>" + t[i].floor1[l].content + "</p>";
            n += "</div></div>"
        }
        $("#main").html(n)
    }, "json")
});