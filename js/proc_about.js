$(document).ready(function(){
  var allOptions = $("ul.rsume").children('li:not(.init)');
    allOptions.slideUp();

    $("ul.rsume").on("click", ".init", function() {
        $(this).closest("ul.rsume").children('li:not(.init)').slideToggle();
    });



    $("ul.rsume").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("ul.rsume").children('.init').html($(this).html());

    });
});
