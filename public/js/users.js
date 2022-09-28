$(document).ready(function(){
    $('.btnsignup').click(function(){
        $('.loginform').hide();
        $('.btnsignup').hide();
        $('.createform').show();
        $('.btnlogin').show();
    });
    $('.btnlogin').click(function(){
        $('.createform').hide();
        $('.btnlogin').hide();
        $('.loginform').show();
        $('.btnsignup').show();
    });

    $('.custom-open').click(function(){
        $('.custom-show').show();
    });
    $('.custom-hide').click(function(){
        $('.custom-show').hide();
    });

    $('.loginpage').click(function(){
        $('.loginform').show();
        $('.btnsignup').show();
        $('.createform').hide();
        $('.btnlogin').hide();

    });
});