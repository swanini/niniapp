// langChange using data-lang
var languageForm = document.getElementById('languageForm');
var changeLang = document.querySelectorAll('[data-lang-kr], [data-lang-jp], [data-lang-en]');

languageForm.addEventListener('change', function () {
    var selectedLanguage = this.elements['lang'].value;

    for (var i = 0; i < changeLang.length; i++) {
        var ChangeL = changeLang[i];
        var krText = ChangeL.getAttribute('data-lang-kr');
        var jpText = ChangeL.getAttribute('data-lang-jp');
        var enText = ChangeL.getAttribute('data-lang-en');

        if (selectedLanguage === 'kr') {
            ChangeL.textContent = krText;
        } else if (selectedLanguage === 'jp') {
            ChangeL.textContent = jpText;
        } else {
            ChangeL.textContent = enText;
        }
    }
});