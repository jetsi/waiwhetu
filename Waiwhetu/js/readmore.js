
$(document).ready(function(){

                var readMoreHtml = $(".readmore").html();
                var lessText = readMoreHtml.substr(0, 150);

            if(readMoreHtml.length > 150){
                $(".readmore").html(lessText).append(" ... <button href='' class='readmore_link btn btn-info'> Show More ></a>");
            }
else{
    $(".readmore").html(readMoreHtml);
}
    $("body").on("click", ".readmore_link", function(even){
        event.preventDefaulty
        $(this).parent(".readmore").html(readMoreHtml).append("  <button href='' class='show_less btn btn-info'>Show Less.. </button>")
    });  
    $("body").on("click", ".show_less", function(){
        
        $(this).parent(".readmore").html(readMoreHtml.substr(0, 150)).append(" ... <buttun href='' class='readmore_link btn btn-info'>Show more ></button>")
    });

    });

