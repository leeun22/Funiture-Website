/*global $, document, window, setTimeout, navigator, console, location*/
$(document).ready(function() {

    // Khai báo chế độ strict mode trong javascript (một chế nghiêm ngặt trong việc sử dụng đúng với cú pháp của javascript).
    'use strict';

    var fullnameError = true,
        usernameError = true,
        emailError = true,
        phoneError = true,
        passwordError = true,
        passConfirm = true;

    // Detect browser for css purpose
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
        $('.form form label').addClass('fontSwitch');
    }

    // Label effect
    $('input').focus(function() {

        $(this).siblings('label').addClass('active');
    });

    // Form validation
    $('input').blur(function() {
        // Full Name
        if ($(this).hasClass('fullname')) {
            if ($(this).val().length === 0) {
                $(this).siblings('span.error').text('Please type your full name').fadeIn().parent('.form-group').addClass('hasError');
                fullnameError = true;
            } else if ($(this).val().length > 1 && $(this).val().length < 6) {
                $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
                fullnameError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                fullnameError = false;
            }
        }

        // User Name
        if ($(this).hasClass('username')) {
            if ($(this).val().length === 0) {
                $(this).siblings('span.error').text('Please type your user name').fadeIn().parent('.form-group').addClass('hasError');
                usernameError = true;
            } else if ($(this).val().length > 1 && $(this).val().length < 6) {
                $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
                usernameError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                usernameError = false;
            }
        }
        // Email
        if ($(this).hasClass('email')) {
            if ($(this).val().length == '') {
                $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
                emailError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                emailError = false;
            }
        }

        // Phone
        if ($(this).hasClass('phone')) {
            if ($(this).val().length === 0) {
                $(this).siblings('span.error').text('Please type your phone').fadeIn().parent('.form-group').addClass('hasError');
                phoneError = true;
            } else if ($(this).val().length > 10 && $(this).val().length < 12) {
                $(this).siblings('span.error').text('Please type at least 10 numbers').fadeIn().parent('.form-group').addClass('hasError');
                phoneError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                phoneError = false;
            }
        }

        // PassWord
        if ($(this).hasClass('pass')) {
            if ($(this).val().length < 8) {
                $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
                passwordError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                passwordError = false;
            }
        }

        // PassWord Confirmation (Kiểm tra nếu mật khẩu xác nhận ko khớp với mật khẩu đặt thì đưa ra thông báo lỗi)
        // !== : Không đồng nhất (sử dụng cho so sánh kiểu dữ liệu là varchar)
        if ($('.pass').val() !== $('.passConfirm').val()) {
            $('.passConfirm').siblings('.error').text('Passwords don\'t match').fadeIn().parent('.form-group').addClass('hasError');
            passConfirm = false;
        } else {
            $('.passConfirm').siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
            passConfirm = false;
        }

        // Login Email / Phone
        if ($(this).hasClass('loginEmailPhone')) {
            if ($(this).val().length == '') {
                $(this).siblings('span.error').text('Please type your email address or your phone').fadeIn().parent('.form-group').addClass('hasError');
                emailError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                emailError = false;
            }
        }

        // Login password
        if ($(this).hasClass('loginPassword')) {
            if ($(this).val().length < 8) {
                $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
                passwordError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                passwordError = false;
            }
        }

        // label effect
        if ($(this).val().length > 0) {
            $(this).siblings('label').addClass('active');
        } else {
            $(this).siblings('label').removeClass('active');
        }
    });


    // form switch (JS đổi form)
    $('a.switchCTA').click(function(e) {
        $(this).toggleClass('active');
        e.preventDefault();

        if ($('a.switchCTA').hasClass('active')) {
            $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
        } else {
            $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
        }
    });


    // Form submit (Xử lý các lỗi đã set ở trên khi nhấn submit mà vẫn có input để trống)
    // $('form.signup-form').submit(function(event) {
    //     event.preventDefault();

    //     if (fullnameError == true || usernameError == true || emailError == true || phoneError == true || passwordError == true || passConfirm == true) {
    //         $('.fullname, .username, .email, .phone, .pass, .passConfirm').blur();
    //     } 
    //     // else {
    //     //     $('.signup, .login').addClass('switched');

    //     //     setTimeout(function() { $('.signup, .login').hide(); }, 700);
    //     //     setTimeout(function() { $('.brand').addClass('active'); }, 300);
    //     //     // setTimeout(function() { $('.heading').addClass('active'); }, 600);
    //     //     setTimeout(function() { $('.success-msg p').addClass('active'); }, 900);
    //     //     setTimeout(function() { $('.success-msg a').addClass('active'); }, 1050);
    //     //     setTimeout(function() { $('.form').hide(); }, 700);
    //     // }
    // });

    // Reload page
    $('a.profile').on('click', function() {
        location.reload(true);
    });


});