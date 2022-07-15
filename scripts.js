//jQuery
$(document).ready(function(){

    $("#toggle").on("click", function() {
        $("#mobile-links").toggle(500);  
        $(".fa-bars").toggleClass("fa-times");
    });

});