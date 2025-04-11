




document.addEventListener('DOMContentLoaded', function () {
    // URL에서 파라미터 가져오기
    var params = new URLSearchParams(window.location.search);
    var menul = params.get('menul');

    // swiper-container 요소 찾기
    var homeContainer = document.querySelector('.homeContainer');
    var mallContainer = document.querySelector('.mallContainer');
    var niniContainer = document.querySelector('.niniContainer');
    var blogContainer = document.querySelector('.blogContainer');
    var swiperContainer = document.querySelector('.swiper-container');
    var robotContainer = document.querySelector('.robotContainer');

    // menul 파라미터 확인
    if (menul === 'home') {
        // 요소를 활성화
        homeContainer.classList.remove('welcome_hidden');
        mallContainer.style.setProperty('display', 'none', 'important');
        niniContainer.style.setProperty('display', 'none', 'important');
        blogContainer.style.setProperty('display', 'none', 'important');
        swiperContainer.style.setProperty('display', 'none', 'important');
        robotContainer.style.setProperty('display', 'none', 'important');
    } else if (menul === 'mall') {
        homeContainer.style.setProperty('display', 'none', 'important');
        mallContainer.classList.remove('welcome_hidden');
        niniContainer.style.setProperty('display', 'none', 'important');
        blogContainer.style.setProperty('display', 'none', 'important');
        swiperContainer.style.setProperty('display', 'none', 'important');
        robotContainer.style.setProperty('display', 'none', 'important');
    } else if (menul === 'talk') {
        homeContainer.style.setProperty('display', 'none', 'important');
        mallContainer.style.setProperty('display', 'none', 'important');
        niniContainer.classList.remove('welcome_hidden');
        blogContainer.style.setProperty('display', 'none', 'important');
        swiperContainer.style.setProperty('display', 'none', 'important');
        robotContainer.style.setProperty('display', 'none', 'important');
    } else if (menul === 'blog') {
        homeContainer.style.setProperty('display', 'none', 'important');
        mallContainer.style.setProperty('display', 'none', 'important');
        niniContainer.style.setProperty('display', 'none', 'important');
        blogContainer.classList.remove('welcome_hidden');
        swiperContainer.style.setProperty('display', 'none', 'important');
        robotContainer.style.setProperty('display', 'none', 'important');
    } else if (menul === 'swdev') {
        homeContainer.style.setProperty('display', 'none', 'important');
        mallContainer.style.setProperty('display', 'none', 'important');
        niniContainer.style.setProperty('display', 'none', 'important');
        blogContainer.style.setProperty('display', 'none', 'important');
        swiperContainer.classList.remove('welcome_hidden');
        robotContainer.style.setProperty('display', 'none', 'important');
    } else if (menul === 'robot') {
        homeContainer.style.setProperty('display', 'none', 'important');
        mallContainer.style.setProperty('display', 'none', 'important');
        niniContainer.style.setProperty('display', 'none', 'important');
        blogContainer.style.setProperty('display', 'none', 'important');
        swiperContainer.style.setProperty('display', 'none', 'important');
        robotContainer.classList.remove('welcome_hidden');
    }

    // 메뉴 버튼들을 가져오기
    var menuButtons = document.querySelectorAll('.menuBtn');

    // 각 메뉴 버튼에 클릭 이벤트 추가
    menuButtons.forEach(function (menuButton) {
        menuButton.addEventListener('click', function () {
            var selectedParam = this.getAttribute('data-param');
            var url = new URL(window.location.href);
            url.searchParams.set('menul', selectedParam);
            window.history.replaceState(null, null, url);


            if (selectedParam === 'home') {
                // .homeContainer을 제외한 모든 display: none
                homeContainer.style.setProperty('display', 'flex', 'important');    // 예시로 flex 사용
                mallContainer.style.setProperty('display', 'none', 'important');
                niniContainer.style.setProperty('display', 'none', 'important');
                blogContainer.style.setProperty('display', 'none', 'important');
                swiperContainer.style.setProperty('display', 'none', 'important');
                robotContainer.style.setProperty('display', 'none', 'important');
            } else if (selectedParam === 'mall') {
                homeContainer.style.setProperty('display', 'none', 'important');
                mallContainer.style.setProperty('display', 'flex', 'important');
                niniContainer.style.setProperty('display', 'none', 'important');
                blogContainer.style.setProperty('display', 'none', 'important');
                swiperContainer.style.setProperty('display', 'none', 'important');
                robotContainer.style.setProperty('display', 'none', 'important');
            } else if (selectedParam === 'talk') {
                homeContainer.style.setProperty('display', 'none', 'important');
                mallContainer.style.setProperty('display', 'none', 'important');
                niniContainer.style.setProperty('display', 'flex', 'important');
                blogContainer.style.setProperty('display', 'none', 'important');
                swiperContainer.style.setProperty('display', 'none', 'important');
                robotContainer.style.setProperty('display', 'none', 'important');
            } else if (selectedParam === 'blog') {
                homeContainer.style.setProperty('display', 'none', 'important');
                mallContainer.style.setProperty('display', 'none', 'important');
                niniContainer.style.setProperty('display', 'none', 'important');
                blogContainer.style.setProperty('display', 'flex', 'important');
                swiperContainer.style.setProperty('display', 'none', 'important');
                robotContainer.style.setProperty('display', 'none', 'important');
            } else if (selectedParam === 'swdev') {
                homeContainer.style.setProperty('display', 'none', 'important');
                mallContainer.style.setProperty('display', 'none', 'important');
                niniContainer.style.setProperty('display', 'none', 'important');
                blogContainer.style.setProperty('display', 'none', 'important');
                swiperContainer.style.setProperty('display', 'flex', 'important');
                robotContainer.style.setProperty('display', 'none', 'important');
            } else if (selectedParam === 'robot') {
                homeContainer.style.setProperty('display', 'none', 'important');
                mallContainer.style.setProperty('display', 'none', 'important');
                niniContainer.style.setProperty('display', 'none', 'important');
                blogContainer.style.setProperty('display', 'none', 'important');
                swiperContainer.style.setProperty('display', 'none', 'important');
                robotContainer.style.setProperty('display', 'flex', 'important');
            } else {
                // 모두 숨기기
                homeContainer.style.setProperty('display', 'none', 'important');
                mallContainer.style.setProperty('display', 'none', 'important');
                niniContainer.style.setProperty('display', 'none', 'important');
                blogContainer.style.setProperty('display', 'none', 'important');
                swiperContainer.style.setProperty('display', 'none', 'important');
                robotContainer.style.setProperty('display', 'none', 'important');
            }

        });
    });
});





// 페이지가 로드될 때 초기 값을 설정
window.addEventListener('load', function () {
    let url = new URL(window.location.href);
    if (!url.searchParams.has('menul')) {
        // menul 파라미터가 없다면 초기 값을 'home'으로 설정
        url.searchParams.set('menul', 'home');
        // URL을 변경하되 페이지는 새로고침 하지 않음

        window.history.replaceState({}, '', url);
        // URL을 변경하고 페이지를 새로고침
        // window.location.href = url;

        // AJAX 활용
        // loadContent();
        // 특정 요소들을 숨김
        hideElements();
    }
});

// function loadContent() {
//     // 예시로 URL의 파라미터에 따라 다른 내용을 로드하는 기능 구현
//     const contentDiv = document.querySelector('.welcome_center > div');
//     if (contentDiv) {
//         // AJAX 요청
//         const xhr = new XMLHttpRequest();
//         xhr.open('GET', 'path/to/your/content'); // 실제 서버 경로로 변경
//         xhr.onload = function () {
//             if (xhr.status === 200) {
//                 contentDiv.innerHTML = xhr.responseText;
//             }
//         };
//         xhr.send();
//     }
// }

function hideElements() {
    const mallContainer = document.querySelector('.mallContainer');
    const niniContainer = document.querySelector('.niniContainer');
    const blogContainer = document.querySelector('.blogContainer');
    const swiperContainer = document.querySelector('.swiperContainer');
    const robotContainer = document.querySelector('.robotContainer');

    if (mallContainer) mallContainer.style.setProperty('display', 'none', 'important');
    if (niniContainer) niniContainer.style.setProperty('display', 'none', 'important');
    if (blogContainer) blogContainer.style.setProperty('display', 'none', 'important');
    if (swiperContainer) swiperContainer.style.setProperty('display', 'none', 'important');
    if (robotContainer) robotContainer.style.setProperty('display', 'none', 'important');
}


const menuButtons = document.querySelectorAll('.menuBtn');

// 각 menuBtn에 클릭 이벤트 리스너를 추가
menuButtons.forEach(btn => {
    btn.addEventListener('click', function () {
        // data-param 속성 값을 가져옴
        const paramValue = btn.getAttribute('data-param');

        // 현재 URL을 가져옴
        let url = new URL(window.location.href);

        // 'menul' 파라미터를 해당 값으로 설정
        url.searchParams.set('menul', paramValue);

        // URL을 변경하되 페이지는 새로고침 하지 않음
        window.history.pushState({}, '', url);
    });
});