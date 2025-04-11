$(window).on("load", function () {
    setTimeout(function () {
        $('body')
            .removeClass('loading')
            .addClass(weatherCondition)
        $('#SwRtBoard').css({
            "display": "flex"
        });
        // .css({
        //     "background": "url({assets_url}/img/log-ship.gif)", 'background-repeat': 'no-repeat', 'background-position': 'center center', 'background-size': 'cover'
        // });
    }, 3100);

});