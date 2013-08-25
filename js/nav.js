$(document).ready(function () {

	//drop-down menu

$("#drop1").mouseover(function () {
        $("#drop1 > .custdrop").stop().slideToggle(200,"easeInSine");

    });

$("#drop1").mouseout(function () {
        $("#drop1 > .custdrop").stop().slideToggle(200,"easeOutBounce");

    });



$("#drop2").mouseover(function () {
        $("#drop2 > .custdrop").stop().slideToggle(200,"easeInSine");

    });

$("#drop2").mouseout(function () {
        $("#drop2 > .custdrop").stop().slideToggle(200,"easeOutBounce");

    });

	//login
	
$("#login").click(function (e) {
       // $("body").append('<div class="overlay"></div>');
        $(".popup").slideToggle();
    });

  // Dialog   

$('#regtrigger').click(function (e) {
    if ($(".popup").css("display") == "block") {
        $(".popup").css("display","none");
    }
        $('#basic-modal-content').modal();

        return false;
    });	

// //When mouse rolls over
//     $("#drop1").mouseover(function(){
//         $("#drop1 > ul").stop().show().animate({height:'80px'},{queue:false, duration:600, easing: 'easeOutBounce'})
//     });

//     //When mouse is removed
//     $("#drop1").mouseout(function(){
//         $("#drop1 > ul").stop().animate({height:'0px'},{queue:false, duration:600, easing: 'easeOutBounce'})
//         $("#drop1 > ul").hide();
//     });
	
})