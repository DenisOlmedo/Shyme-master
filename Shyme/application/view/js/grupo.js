/* <alteracao> */ 
$(document).ready(function(){
    $('span.glyphicon').click(function(){
        
        if($(this).hasClass('glyphicon-star-empty'))
        {
            $(this).removeClass('glyphicon-star-empty')
            $(this).addClass("glyphicon-star");
        }
        
        else {
            $(this).removeClass('glyphicon-star')
            $(this).addClass("glyphicon-star-empty");
        }
    });
});
/* </alteracao> */ 