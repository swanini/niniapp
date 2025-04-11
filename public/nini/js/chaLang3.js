var lang;

$(document).ready(function () {
    // 초기 로딩 시 lang 변수 값 확인
    var params = new URLSearchParams(window.location.search);
    lang = params.get('lang');
    console.log("lang 변수 초기 값:", lang);

    // 라디오 박스 선택
    $('input[name="lang"][value="' + lang + '"]').prop('checked', true);


    // 실패 코드 시작
    // $('#languageForm input[type="radio"]').on('click', function () {
    //     var selectedLanguage = $('input[name="lang"]:checked').val();
    //     var url = window.location.href.split('?')[0];
    //     window.history.replaceState(null, null, url + '?lang=' + selectedLanguage);
    //     lang = selectedLanguage;
    //     console.log("lang 변수 값:", lang);
    //     updateLanguageText();
    // });
    // 실패 코드 종료

    // 언어 변경 이벤트 처리
    $('#languageForm input[type="radio"]').on('click', function () {
        var selectedLanguage = $('input[name="lang"]:checked').val();

        // 현재 URL의 파라미터를 유지하면서 lang 파라미터만 업데이트
        var params = new URLSearchParams(window.location.search);
        params.set('lang', selectedLanguage);

        // 페이지 리로드하지 않고 URL의 파라미터를 업데이트
        window.history.replaceState(null, null, '?' + params.toString());

        // lang 변수 업데이트
        lang = selectedLanguage;

        // lang 변수 확인 (옵션)
        console.log("lang 변수 값:", lang);

        // 언어 변경에 따른 텍스트 업데이트
        updateLanguageText();
    });

    // 초기 텍스트 업데이트
    updateLanguageText();
});

// 텍스트 업데이트 함수
function updateLanguageText() {
    var changeLang = $('[data-lang-kr], [data-lang-jp], [data-lang-en]');

    changeLang.each(function () {
        var ChangeL = $(this);
        var krText = ChangeL.data('lang-kr');
        var jpText = ChangeL.data('lang-jp');
        var enText = ChangeL.data('lang-en');

        if (lang === 'kr') {
            ChangeL.text(krText);
        } else if (lang === 'jp') {
            ChangeL.text(jpText);
        } else {
            ChangeL.text(enText);
        }
    });

    // input 요소에 대한 value 업데이트
    $('input[data-lang-kr], input[data-lang-jp], input[data-lang-en]').each(function () {
        var inputElement = $(this);
        var krValue = inputElement.data('lang-kr');
        var jpValue = inputElement.data('lang-jp');
        var enValue = inputElement.data('lang-en');
        var krloginPH = "메일 또는 ID";
        var jploginPH = "メール及びID";
        var enloginPH = "Email or ID";
        if (lang === 'kr') {
            inputElement.val(krValue);
            $('#loginEId').attr('placeholder', krloginPH);
        } else if (lang === 'jp') {
            inputElement.val(jpValue);
            $('#loginEId').attr('placeholder', jploginPH);
        } else {
            inputElement.val(enValue);
            $('#loginEId').attr('placeholder', enloginPH);
        }
    });


    $('.home_sns_body').each(function () {
        var krText = $(this).find('.ist_cap #krlang').html();
        var jpText = $(this).find('.ist_cap #jplang').html();
        var enText = $(this).find('.ist_cap #enlang').html();

        // 모든 언어 텍스트 요소 숨기기
        $(this).find('#krlang, #jplang, #enlang').hide();

        // 선택된 언어에 따라 표시
        if (lang === 'kr') {
            $(this).find('#krlang').html(krText).show();
        } else if (lang === 'jp') {
            $(this).find('#jplang').html(jpText).show();
        } else {
            $(this).find('#enlang').html(enText).show();
        }
    });
}