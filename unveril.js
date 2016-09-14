/*-- jquery ready event --*/
$(document).ready(function(){
    /*--- smooth scroll to anchor ---*/
         $('.scroll').on({
           click:function (e) {
             e.preventDefault();
             var root = $("html, body");
             var target = $(this).attr("href");
             root.animate({
                 scrollLeft: $(target).offset().left,
                 scrollTop: $(target).offset().top
            }, 600);
           }
         });
         
        
        $('.admScroll').click(function(e){
           e.preventDefault();
           var target = $(this).attr('href');

            $('#admPanel').animate({
               scrollTop : $(target).offset().top-$('#admForm').offset().top
            },'slow');

        });
        
    /*-- adding a fixed nav --*/
   
         
});
