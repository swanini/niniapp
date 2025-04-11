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