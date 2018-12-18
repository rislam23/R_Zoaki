$(document).ready(function(){
   $(window).scroll(function () {
       if($(this).scrollTop() > 20){
           $("#main-nav").addClass("scroll-navbar");
       }else{
           $("#main-nav").removeClass("scroll-navbar");
       }
       
   });
});