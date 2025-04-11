


// 이곳은 input 명령어를 받아 언어를 변경해주는 위치
$(document).ready(function () {
    $('#languageForm input[type="radio"]').on('click', function () {
        var selectedLanguage = $('input[name="lang"]:checked').val();

        // get parameter 추가
        var newUrl = updateQueryStringParameter(window.location.href, 'lang', selectedLanguage);
        window.history.replaceState(null, null, newUrl);
    });
});

// get parameter 수정
function updateQueryStringParameter(url, key, value) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = url.indexOf('?') !== -1 ? "&" : "?";
    if (url.match(re)) {
        return url.replace(re, '$1' + key + "=" + value + '$2');
    } else {
        return url + separator + key + "=" + value;
    }
}

