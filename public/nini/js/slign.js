$(document).ready(function () {
    $('#loginSubmitBtn').on('click', function (e) {
        e.preventDefault();

        var emailId = $('input[name="emailId"]').val().trim();
        var userPw = $('input[name="user_pw"]').val().trim();

        // Validation checks
        if (!(emailId)) {
            alert("유효한 이메일 주소를 입력해주세요."); // Alert for invalid email
            return; // Stop further execution
        }

        if (userPw.length < 6) { // Example: password must be at least 6 characters
            alert("비밀번호는 최소 6자 이상이어야 합니다."); // Alert for short password
            return; // Stop further execution
        }

        // 폼 데이터 가져오기
        var formData = $('#loginForm').serialize();

        // AJAX 요청
        // $.ajax({
        //     type: "POST",
        //     url: "{main_murl}/login_ok.php",
        //     data: formData,
        //     success: function (data) {
        //         console.log("서버 응답:", data);
        //         console.log("통신성공");
        //         // var loginUserHtml = data.find('.loginUser').html();
        //         // console.log(loginUserHtml);
        //         // $('.loginUser').html("<div class='loginContain'><img src='{$main_url}/image/swanini_favic.png' alt='swania_login' id='rightHide'><!--{? member_pic > 0}-->< img src = '{$member_pic['file_path']}' alt = '' class= 'member_pic' id = 'chInfo' ><!--{/}--><p class= 'navbar-text' > {$member_info['user_name']}님</p ><a href='{$main_murl}/logout.php' class='btn navbar-btn btn-primary'>로그아웃</a><a href = '{$main_murl}/edit.php' class= 'btn navbar-btn btn-info' > 정보변경</a><!--{?member_info.user_st !== 'act' }--><a href='{$main_murl}/activate.php' class='btn navbar-btn btn-warning'>활성버튼</a><!--{/}-- ><a href='{$main_murl}/retire.php' class='btn navbar-btn btn-danger'>계정삭제</a><div class='login-btns'><input id='logoutB' class='login-submit' type='button' value='로그아웃'><input id='retireAc' class='login-submit' type='button' value='계정삭제'></div></div>");
        //         $('.loginUser').html(data);
        //     },
        //     error: function (XMLHttpRequest, textStatus, errorThrown) {
        //         console.log("통신실패");
        //     }
        // });

        $("#SwRtBoard").css("right", "-80%");
        setTimeout(function () {
            $("#SwRtBoard").addClass("swa_info_right_hide");
        }, 500);

        $.ajax({
            type: "POST",
            url: "{main_murl}/login_ok.php",
            data: formData,
            dataType: "json",  // 응답 데이터 형식을 JSON으로 설정
            success: function (response) {  // response는 이미 파싱된 JSON 객체
                console.log("서버 응답:", response);
                console.log("통신성공");

                // .loginUser 부분의 HTML을 업데이트
                $('.loginUser').html(response.html);

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log("통신실패");
            }
        });

        // $('#SwRtBoard').load(location.href + '#SwRtBoard .rightInner');

        $("#SwRtBoard").load(location.href + "#SwRtBoard .rightInner", function () {
            // 로드된 이후에 필요한 JavaScript 동작을 여기에 다시 적용
            // 버튼 클릭 이벤트를 다시 적용

            $("#rightHide").click(function () {
                $("#SwRtBoard").css("right", "-80%");
                setTimeout(function () {
                    $("#SwRtBoard").addClass("swa_info_right_hide");
                }, 500);
            });
        });

        // 오른쪽에서 열리는
        setTimeout(function () {
            $("#SwRtBoard").css("right", "0%");
            $("#SwRtBoard").removeClass("swa_info_right_hide");
        }, 500);

        $('.swlogin').load(location.href + ' .swlogin .login_font', function () {

            $("#logButt").click(function () {
                $("#SwRtBoard").removeClass("swa_info_right_hide");
                logButtClick = true;
                setRightPosition();

                function setRightPosition() {

                    if (!logButtClick) {
                        return;
                    }

                    var windowWidth = $(window).width();

                    if (windowWidth <= 443) {
                        $("#SwRtBoard").css("right", "0%");
                    } else if (windowWidth <= 572) {
                        $("#SwRtBoard").css("right", "0%");
                    } else if (windowWidth <= 768) {
                        $("#SwRtBoard").css("right", "0%");
                    } else if (windowWidth <= 1280) {
                        $("#SwRtBoard").css("right", "7.5%");
                    } else {
                        $("#SwRtBoard").css("right", "0");
                    }
                }
            });

            // load 이후 동적으로 CSS 스타일을 적용
            $('.swlogin .login_font').css({
                'display': 'flex',
                'align-items': 'center',
                'flex-direction': 'row',
                'justify-content': 'center'
            });

            setLanguageText(selectedLang);

            function setLanguageText(lang) {
                $('.pullbul').each(function () {
                    // data-lang-* 속성 값을 attr로 가져오기
                    var text = $(this).attr('data-lang-' + lang);  // 해당 언어에 맞는 data 속성 값 가져옴

                    console.log('Selected lang:', lang); // 선택된 언어 확인
                    console.log('Text from data-lang:', text); // 가져온 텍스트 확인

                    if (text) {
                        $(this).text(text);  // 요소 안에 text 값을 출력
                    } else {
                        console.warn('No text found for:', $(this)); // 텍스트가 없는 경우 경고
                    }
                });
            }

            var selectedLang = 'kr';
            setLanguageText(selectedLang);
        });

    });



    // 로그아웃 버튼 클릭 이벤트 위임
    $(document).on('click', '#logoutB', function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "{main_murl}/logout.php",
            data: {}, // 로그아웃 요청에 필요한 데이터가 있다면 여기에 추가
            success: function (data) {
                console.log("서버 응답:", data);
                console.log("통신 성공");
                // 로그인 상태가 변경되었으므로 필요한 경우 다시 로그인 상태 업데이트
                $('.loginUser').html(data); // 응답 데이터로 HTML 업데이트
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log("통신 실패:", textStatus, errorThrown);
            }
        });
    });
});