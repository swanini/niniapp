function setCookiePop(name, value, expiredays) {
    var todayDate = new Date();
    todayDate.setDate(todayDate.getDate() + expiredays);
    document.cookie = name + '=' + escape(value) + '; path=/; expires=' + todayDate.toGMTString() + ';'
}
function getCookiePop(name) {
    var obj = name + "=";
    var x = 0;
    while (x <= document.cookie.length) {
        var y = (x + obj.length);
        if (document.cookie.substring(x, y) == obj) {
            if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
                endOfCookie = document.cookie.length;
            return unescape(document.cookie.substring(y, endOfCookie));
        }
        x = document.cookie.indexOf(" ", x) + 1;
        if (x == 0) break;
    }
    return "";
}

function closeWin(key) {
    if ($("#todaycloseyn").prop("checked")) {
        setCookiePop('divpop' + key, 'Y', 1);
    }
    if (!$("#popCheck").prop("checked")) {
        $("#divpop" + key + "").hide();
        $(".popBack").hide();
    }
}
$(function () {
    if (getCookiePop("divpop1") != "Y") {
        $("#divpop1").show();
        $(".popBack").show();
    }
});