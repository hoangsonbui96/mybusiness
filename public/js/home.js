$(document).ready(function(){
    $(".business").hover(function(){
        $(".dropdown-menus2").show(900);
    });

    $(".business").mouseleave(function(){
        $(".dropdown-menus2").css("display","none");
    });

    $(".dropdown-menus2").mouseenter(function(){
        $(".dropdown-menus2").css("display","block");
    });

    $(".dropdown-menus2").mouseleave(function(){
        $(".dropdown-menus2").css("display","none");
    });

    $('.carousel').carousel({
        interval: 4000
    });

    // $(".cols-fix-1").mouseenter(function(){
    //     $(".cols-fix-1").css("background-color","transparent");
    //     $(".cols-fix-1").css("border","5px solid white");
    // });

    // $(".cols-fix-1").mouseleave(function(){
    //     $(".cols-fix-1").css("background-color","#ffc107");
    //     $(".cols-fix-1").css("border","0px solid white");
    // });

    // $(".cols-fix-2").mouseenter(function(){
    //     $(".cols-fix-2").css("background-color","transparent");
    //     $(".cols-fix-2").css("border","5px solid white");
    // });

    // $(".cols-fix-2").mouseleave(function(){
    //     $(".cols-fix-2").css("background-color","#ffc107");
    //     $(".cols-fix-2").css("border","0px solid white");
    // });

    // $(".cols-fix-3").mouseenter(function(){
    //     $(".cols-fix-3").css("background-color","transparent");
    //     $(".cols-fix-3").css("border","5px solid white");
    // });

    // $(".cols-fix-3").mouseleave(function(){
    //     $(".cols-fix-3").css("background-color","#ffc107");
    //     $(".cols-fix-3").css("border","0px solid white");
    // });

    // $(".cols-fix-4").mouseenter(function(){
    //     $(".cols-fix-4").css("background-color","transparent");
    //     $(".cols-fix-4").css("border","5px solid white");
    // });

    // $(".cols-fix-4").mouseleave(function(){
    //     $(".cols-fix-4").css("background-color","#ffc107");
    //     $(".cols-fix-4").css("border","0px solid white");
    // });
});
