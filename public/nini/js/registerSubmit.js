



$(document).ready(function () {
    var $registerSubmitBtn = $('#registerSubmitBtn');
    $registerSubmitBtn.off('click').on('click', function (e) {
        e.preventDefault();
        var emailId = $('input[name="emailId"]').val().trim();
        var userPw = $('input[name="user_pw"]').val().trim();
        var userPwRe = $('input[name="user_pw_re"]').val().trim();
        // Validation checks
        if (!emailId) {
            alert("이메일을 입력하세요!");
            return;
        }
        if (userPw.length < 6) {
            alert("비밀번호를 입력하세요!");
            return;
        }
        if (userPwRe.length < 6) {
            alert("비밀번호를 입력하세요!");
            return;
        }
        var formData = $('#loginForm').serialize();
    });
});