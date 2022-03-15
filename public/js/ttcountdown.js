jQuery, $.fn.lofCountDown = function(t) {
    return this.each(function() {
        new $.lofCountDown(this, t)
    })
}, $.lofCountDown = function(t, e) {
    if (this.options = $.extend({
            formatStyle: "1",
            autoStart: !1,
            LeadingZero: !0,
            DisplayFormat: " ",
            FinishMessage: " ",
            CountActive: !0,
            TargetDate: null
        }, e || {}), null != this.options.TargetDate && "" != this.options.TargetDate) {
        this.timer = null, this.element = t, this.CountStepper = -1, this.CountStepper = Math.ceil(this.CountStepper), this.SetTimeOutPeriod = 1e3 * (Math.abs(this.CountStepper) - 1) + 990;
        var a = new Date(this.options.TargetDate),
            i = new Date;
        this.CountStepper > 0 ? ddiff = new Date(i - a) : ddiff = new Date(a - i), gsecs = Math.floor(ddiff.valueOf() / 1e3), this.CountBack(gsecs, this)
    }
}, $.lofCountDown.fn = $.lofCountDown.prototype, $.lofCountDown.fn.extend = $.lofCountDown.extend = $.extend, $.lofCountDown.fn.extend({
    calculateDate: function(t, e, a) {
        var i = (Math.floor(t / e) % a).toString();
        if (this.options.LeadingZero && i.length < 2 && (i = "0" + i), 1 == this.options.formatStyle) return '<b class="ttcount top">' + i + '</b><b class="ttcount bottom">' + i + '</b>';
        if (2 == this.options.formatStyle) {
            var n = i.split("");
            return '<div class="countdown_num"><span>' + n[0] + "</span><span>" + n[1] + "</span></div>"
        }
    },
    CountBack: function(t, e) {
        return t < 0 ? ($(e.element).parent().addClass("expired"), DisplayStr = e.options.DisplayFormat.replace(/%%D%%/g, "00"), DisplayStr = DisplayStr.replace(/%%H%%/g, "00"), DisplayStr = DisplayStr.replace(/%%M%%/g, "00"), DisplayStr = DisplayStr.replace(/%%S%%/g, "00"), void(e.element.innerHTML = DisplayStr)) : 1 == isNaN(t) ? ($(e.element).parent().addClass("expired"), DisplayStr = e.options.DisplayFormat.replace(/%%D%%/g, "00"), DisplayStr = DisplayStr.replace(/%%H%%/g, "00"), DisplayStr = DisplayStr.replace(/%%M%%/g, "00"), DisplayStr = DisplayStr.replace(/%%S%%/g, "00"), void(e.element.innerHTML = DisplayStr)) : (clearInterval(e.timer), DisplayStr = e.options.DisplayFormat.replace(/%%D%%/g, e.calculateDate(t, 86400, 1e5)), DisplayStr = DisplayStr.replace(/%%H%%/g, e.calculateDate(t, 3600, 24)), DisplayStr = DisplayStr.replace(/%%M%%/g, e.calculateDate(t, 60, 60)), DisplayStr = DisplayStr.replace(/%%S%%/g, e.calculateDate(t, 1, 60)), e.element.innerHTML = DisplayStr, void(e.options.CountActive && (e.timer = null, e.timer = setTimeout(function() {
            e.CountBack(t + e.CountStepper, e)
        }, e.SetTimeOutPeriod))))
    }
});