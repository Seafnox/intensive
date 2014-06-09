$(document).ready(function(){
	
	var uagent = navigator.userAgent;
    uagent = uagent.indexOf("MSIE");
    
	/* Placeholder for IE */
    if(uagent != -1){
        $("form").find("input[type='text']").each(function() {
            var tp = $(this).attr("placeholder");
            $(this).attr('value',tp).css('color','#ccc');
        }).focusin(function() {
            var val = $(this).attr('placeholder');
            if($(this).val() == val) {
                $(this).attr('value','').css('color','#303030');
            }
        }).focusout(function() {
            var val = $(this).attr('placeholder');
            if($(this).val() == "") {
                $(this).attr('value', val).css('color','#ccc');
            }
        });

        /* Protected send form */
        $("form").submit(function() {
            $(this).find("input[type='text']").each(function() {
                var val = $(this).attr('placeholder');
                if($(this).val() == val) {
                    $(this).attr('value','');
                }
            })
        });
		
		
    };
		
	$("#slow").click(function(){
		var selected = $(this).attr('href');	
		$.scrollTo(selected, 500);		
		return false;
	});
	
	$("#black, #popup").hide();
	var popup = $("#popup iframe").remove();
	
	$("#lightbox").click(function(e){
		e.preventDefault();
		$("#black, #popup").fadeIn(1000);
		$("#popup").append(popup);
	});
	
	$("#black, #close_btn").click(function(){
		$("#black, #popup").fadeOut(1000);
		popup = $("#popup iframe").remove();
	});
	
	function stroka() {
		var st = unescape(window.location.href );
		var i = false;
		var r = st.substring( st.lastIndexOf('http://geniusmarketing.ru/') + 1, st.length );
		return r;
    }
    
	var pageName = stroka();
	
	if(pageName != 'index-2.html'){
		//1
		$("#heady").css({'cursor':'pointer'});
		$('#heady').click(function(){
			document.location.href = 'step1.html';
		});
		
		//2
		
		$("#steps2").append('<div id="toMain"></div>');
		$("#toMain").click(function(){document.location.href = 'step1.html';});
	}
	
	
	
	
	
	
	/*
	$('form').submit( function(ev) {
		ev.preventDefault();
		
		var ans = window.prompt("Докажите что вы человек, сколько будет 2 плюс пятдесят семь? (Напишите числом)");
		if(ans!="59"){
			alert('Неверно! еще раз');
			return false;
		} else {
			$(this).unbind('submit').submit();
		};
	});*/
	
	
	$("#form:not(.no-hide)").hide();
	$("#form_act").click(function(){
		$(this).slideUp(500);
		$("#form").slideDown(500);
	});
	
	
var url = window.location.href;;
var type = url.split('#');
var hash = '';
if(type.length > 1)
  hash = type[1];
  
if (hash == "video") {

document.getElementById('lightbox').click();

}	
	
	
});