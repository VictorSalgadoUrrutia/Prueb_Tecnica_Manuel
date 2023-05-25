$(function() {

    $(".form-register-div").hide(); 
    $(".btn-register").click(function(){
        $(".form-login").hide();
        
    });

    $(".btn-register").click(function(){
        $(".form-register").show();
        $(".form-register-div").show();
        $(".btn-register").hide();
        $(".title-register").show();
        $(".title").hide();
        
    });
    $(".btn-login").click(function(){
        $(".form-login").show();
        $(".form-register").hide();
        $(".title-register").hide();
        $(".btn-register").show();
        $(".title").show();
    });
    


});