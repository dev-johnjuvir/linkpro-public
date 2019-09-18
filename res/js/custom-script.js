$(document).ready(function(){
    $('.banner-text').addClass("animated slideIn");
    $("#lp-navbar-header2").addClass("animated fadeIn");
    $("#lp-navbar-header2").show();
    $("#lp-navbar-header1").hide();
    
});


$(window).on("scroll", function(){

    if( $(window).scrollTop() == 0){
    $("#lp-navbar-header2").addClass("animated fadeIn");
       $("#lp-navbar-header2").show();
       $("#lp-navbar-header1").hide();

    }else{
        $("#lp-navbar-header1").addClass("animated fadeInDown");
       $("#lp-navbar-header1").show();
       $("#lp-navbar-header2").hide();
    }
});
