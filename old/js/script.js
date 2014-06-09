$(document).ready(init);
function init() {
	$.reject(); // reject browsers

    $('body').activity({
        'achieveTime':60
        ,'testPeriod':10
        ,useMultiMode: 1
        ,callBack: function (e) {
            ga('send', 'event', 'активность', 'активность в течение 60 сек', 'intensive | jquery.activity');
            yaCounter12922898.reachGoal('activity-60-sec');
        }
    });
	// modal window
	$('a.ajax').each(function() {
		var href = $(this).attr('href');
		$(this).attr('href', "#"+href);
		$(this).attr('data-href', href);
	});
	var hash = window.location.hash
    var fancybox_options = {
        maxWidth	: 800,
        maxHeight	: 100000,
        type        : 'ajax',
        fitToView	: false,
        autoSize	: true,
        closeClick	: false,
        padding		: 50,
        openEffect	: 'fade',
        closeEffect	: 'fade',
        helpers:  {overlay : {locked     : false}}
    };
	if (hash != "" && hash != "#") {
		var anchor = $(document).find('a[href="'+hash+'"]').first()
		if (anchor.size() > 0) {
			$.fancybox( anchor.attr('data-href'), fancybox_options);
			$('html, body').animate({ scrollTop: 0 }, 1500);
		}
	}
    $("a.ajax").on('click', function() {
			$.fancybox( $(this).attr('data-href'), fancybox_options);
			return false;
	});
    $("#header a.btn").on('click', function() // scroll on position
        {
            var scrollPos = $('#second').first().offset().top;
            $('html, body').animate({ scrollTop: scrollPos }, 1500, 'swing', function() {});
            ga('send', 'event', 'активность', 'пролистывание по кнопке', 'intensive | кнопка на первом экране');
            return false;
        }
    );
    $("#sixth .get_plan").on('click', function() {
        var scrollPos = $('#get_plan').first().offset().top;
        $('html, body').animate({ scrollTop: scrollPos }, 1500, 'swing', function() {});
        return false;
    })
    //$('.collapsing').hide();
    $("a.show_link").on('click', function() {
        $(this).parents('.collapsable').find('.collapse').stop().slideDown(500);
        $(this).parents().find('.hide_link').show(200);
        $(this).hide(200);
        return false;
    });
    $("a.hide_link").on('click', function() {
        $(this).parents('.collapsable').find('.collapse').stop().slideUp(500);
        $(this).parents('.collapsable').find('.show_link').show(200);
        $(this).hide(200);
        return false;
    });
    $(".selling .counter").countdown({until: counter_time_left, layout: '{dn} <sup>{dl}</sup> : {hn} <sup>{hl}</sup> : {mn} <sup>{ml}</sup> : {sn} <sup>{sl}</sup>'});
    $(".selling").each(function() {
        var max_height = 0;
        $(this).find("ul").each(function() {if (max_height < $(this).outerHeight()) max_height = $(this).outerHeight();})
        $(this).find("ul").css({height: max_height});
        $(this).find(".metric").css({height: max_height + 40});
    });

    $('a.btn.get_plan_big,a.btn.open_bus').on('click', function() {
		var text = '';
		if($(this).hasClass('get_plan_big'))
			text = 'intensive | Курс "Мини-интенсив". Тест-драйв';
		else if($(this).hasClass('open_bus'))
			text = 'intensive | Курс "Мини-интенсив". VIP';
        ga('send', 'event', 'заказ', 'клик на кнопке заказа', text);
    });

    
}
