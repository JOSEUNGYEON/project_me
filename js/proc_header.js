
$(document).ready(function(){

$("ul.lang").on("click", ".init", function() {
    $(this).closest("ul.lang").children('li:not(.init)').slideToggle();
});


var allOptions = $("ul.lang").children('li:not(.init)');
$("ul.lang").on("click", "li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("ul.lang").children('.init').html($(this).html());
    allOptions.slideUp();
});

});
//url에 lang type 붙이기 
function languageType(type){
	var url = $(location).attr('href');
	//console.log(url);
	var lParam = urlParam('lang', url);
//	console.log(lParam);
	url = url.replace('?lang='+lParam, '');


	if(type == 'en'){
		url = url + '?lang=' + type;
	}

				//console.log(url);
	$(location).attr('href', url);

}
	function urlParam(name,url){
				var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(url);
				return results?results[1]:null;
			}
