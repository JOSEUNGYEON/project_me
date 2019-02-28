//dom 생성이후 실행 
$(document).ready(function(){


 //f12 , 오른쪾 클릭 막기/
//	$(document).bind('keydown',function(e){
//            if ( e.keyCode == 123 /* F12 */) {
//                e.preventDefault();
//                e.returnValue = false;
//            }
//        });


document.onmousedown=disableclick;
    status="도용방지를 위해 ^ ^.";
    
    function disableclick(event){
        if (event.button==2) {
            alert(status);
            return false;
        }
    }






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
