$(window).load(function() {
    tt_quickview.initQuickViewContainer();
});
var tt_quickview = {
    initQuickViewContainer: function() {
        $("body").append('<div class="quickview-container"></div>'), $("div.quickview-container").load("index.php?route=product/tt_quickview/appendcontainer")
    },
    appendCloseFrameLink: function() {
        var i = $("#qv-text-close").val();
        $("div#quickview-content").prepend("<a href='javascript:void(0);' class='a-qv-close' onclick='tt_quickview.closeQVFrame()'>" + i + "</a>")
    },
    closeQVFrame: function() {
        $("#quickview-bg-block").hide(), $(".quickview-load-img").hide(), $("div#quickview-content").hide().html("")
    },
    ajaxView: function(i) {
        i = -1 != i.search("route=product/product") ? i.replace("route=product/product", "route=product/tt_quickview") : "index.php?route=product/tt_quickview/seoview&ourl=" + i, $.ajax({
            url: i,
            type: "get",
            beforeSend: function() {
                $("#quickview-bg-block").show(), $(".quickview-load-img").show()
            },
            success: function(i) {
                1 == i.success && ($(".quickview-load-img").hide(), $("#quickview-content").html(i.html), tt_quickview.appendCloseFrameLink(), $("#quickview-content").show(), $("#datetimepicker").datetimepicker({
                    pickTime: !1
                }), $("#datetime").datetimepicker({
                    pickDate: !0,
                    pickTime: !0
                }), $("#Time").datetimepicker({
                    pickDate: !1
                }))
            }
        })
    }
};
