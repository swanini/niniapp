document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    let loginok = urlParams.get('loginok') || 'no';

    // 기본값 no
    if (!loginok) {
        loginok = 'no';
        urlParams.set('loginok', 'no');
        history.replaceState(null, '', '?' + urlParams.toString());
    }

    // 파라미터
    const loginForm = document.querySelector('.loginContain.signin');
    const regForm = document.querySelector('.loginContain.register');
    const lostpwForm = document.querySelector('.loginContain.lostpw');

    loginForm.style.display = (loginok === 'no') ? 'flex' : 'none';
    regForm.style.display = (loginok === 'reg') ? 'flex' : 'none';
    lostpwForm.style.display = (loginok === 'lostpw') ? 'flex' : 'none';

    // 파라미터 설정 전환
    document.getElementById('signUpBtn')?.addEventListener('click', function () {
        urlParams.set('loginok', 'reg');
        history.pushState(null, '', '?' + urlParams.toString());
        loginForm.style.display = 'none';
        regForm.style.display = 'flex';
    });

    document.getElementById('backToLoginBtn')?.addEventListener('click', function () {
        urlParams.set('loginok', 'no');
        history.pushState(null, '', '?' + urlParams.toString());
        loginForm.style.display = 'flex';
        regForm.style.display = 'none';
        lostpwForm.style.display = 'none';
    });

    document.getElementById('lostPwBtn')?.addEventListener('click', function () {
        urlParams.set('loginok', 'lostpw');
        history.pushState(null, '', '?' + urlParams.toString());
        loginForm.style.display = 'none';
        regForm.style.display = 'none';
        lostpwForm.style.display = 'flex';
    });

    document.getElementById('backToLoginBtnLostPw')?.addEventListener('click', function () {
        urlParams.set('loginok', 'no');
        history.pushState(null, '', '?' + urlParams.toString());
        loginForm.style.display = 'flex';
        regForm.style.display = 'none';
        lostpwForm.style.display = 'none';
    });
});