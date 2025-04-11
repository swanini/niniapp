// PC 메뉴바 밑으로 메뉴 내려옴
$('.navbar_gnb, .sub_shadow').on('mouseenter mouseleave', function (aa) {
    if ($(window).width() > 1169) {     // pc(데스크탑) 상태일 때만 사용
        if (aa.type == 'mouseenter') {  // 마우스를 올려놨을 때
            // stop 메소드를 넣어주어야 한다! 필수
            // 응용할 때도 반드시 stop 메소드 명령어를 사용
            $('.sub').stop().slideDown();
            $('.sub_shadow').stop().fadeIn();
        } else {
            // 콜백함수
            $('.sub').stop().slideUp(200, function () {
                $('.sub').removeAttr('style');
            });
            $('.sub_shadow').stop().fadeOut(200, function () {
                $(this).removeAttr('style');
            });
        }
    }
});
/*
    mouseenter / mouseleave     - 자식 요소가 있다면 해당 자식요소 영역은 제외  <= 이것을 추천!
    mouseover / mouseout         - 자식 요소가 있다면 해당 자식요소 영역까지 포함
*/

// 모바일-메인메뉴 클릭하면 서브메뉴 생성
const $mainBtn = $('.navbar_gnb > li > a');     // 메인메뉴
$mainBtn.click(function () {
    if ($(window).width() < 1170) {             // 모바일 상태였을 때만
        if (!$(this).parents('li').hasClass('on')) {            // 클릭한 a의 부모 li에 on 클라스가 없을때
            $('.sub').slideUp(400);                                        // 깨끗하기 위해
            $('.navbar_gnb > li').removeClass("on");      // 깨끗하기 위해
            // 같은 형제관계에 있는 애 1개만 적용
            $(this).siblings('.sub').slideDown(1000);
            $(this).parents('li').addClass("on"); // 내 단계에서 윗단계(n단계~)
        } else {                        // 클릭한 부분이 이미 열려있는 상태(on클라스가 있는 상태)
            $('.sub').slideUp(400);
            // $('.navbar_gnb > li').removeClass("on");
            $(this).parents('li').removeClass('on');
        }
    }
});

// 모바일 상태에서 햄버거 버튼을 누르면 사이드바가 열리고 닫힘
$('.trigger').click(function () {
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $('.gnb').animate({ right: 0 }, 1000);
        $('header').animate({ left: -250 }, 1000);
    } else {
        $('.gnb').animate({ right: -250 }, 700);
        $('header').animate({ left: 0 }, 700);
    }
});

// 모바일 상태에서 서브메뉴를 열고 데스크탑상태로 바꾸면 서브가 그냥 보이는 상태 - 수정
$(window).resize(function () {
    if ($(window).width() > 1169) {
        $('.sub').removeAttr('style');
        $('.navbar_gnb > li').removeClass('on');
    }
});