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
         
        c = $('#data').offset().top;
         console.log(c);
        $('.admScroll').click(function(){
           var target = $(this).attr('href');

            $('#admPanel').animate({
               scrollTop : $(target).offset().top-$('#admForm').offset().top
            },'slow');

        });
         
});
