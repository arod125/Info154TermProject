function openNav() {
    document.getElementById("TheSideBar").style.height = "215px";
}           
function closeNav() {
    document.getElementById("TheSideBar").style.height = "0";
}


$(document).ready(function(){
    $(".details").hide();
   
    $(".Eimg").mouseenter(function(){
       $(this).animate({alignSelf: 'flex-start'}, 2000);
       $(".details").fadeIn(1000); 
       var hello = $(this).attr('id');
       alert(hello);
    });
    $(".Eimg").on("mouseleave", function(){
        $(".details").fadeOut(800);
    });
});
    