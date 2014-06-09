var clock;
$(document).ready(function () {
    setTimeout(function () {
        document.getElementById("join").className = "bounceIn animated";
        $.cookie("onetimeoffer_counter", (time_left - bounce_time) | 1 );
    }, bounce_time*1000);
    if ($.cookie("onetimeoffer_counter") != undefined ) {
        time_left = $.cookie("onetimeoffer_counter");
    }


    $('body').activity({
        'achieveTime':60
        ,'testPeriod':10
        ,useMultiMode: 1
        ,callBack: function (e) {
            ga('send', 'event', 'активность', 'активность в течение 60 сек', 'book | jquery.activity');  yaCounter12922898.reachGoal('activity-60-sec');
        }
    });

    $.reject();

    $('a.ajax').each(function() {
        var href = $(this).attr('href');
        $(this).attr('href', "#"+href);
        $(this).attr('data-href', href);
    });
    var hash = window.location.hash
    var fancyboxOptions = {
        maxWidth	: $(window).width() > 730 ? 800 : $(window).width() - 70,
        maxHeight   : 100000,
        scrolling	: 'no',
        type        : 'ajax',
        fitToView	: false,
        autoSize	: true,
        closeClick	: false,
        padding		: 15,
        openEffect	: 'fade',
        closeEffect	: 'fade',
        helpers:  {overlay: {locked: false}},
        afterClose: function() {window.location.hash = "main";}
    }
    if (hash != "" && hash != "#") {
        var anchor = $(document).find('a.ajax[href="'+hash+'"]').first()

        if (anchor.size() > 0) {
            $.fancybox( anchor.attr('data-href'), fancyboxOptions);
            $('html, body').animate({ scrollTop: 0 }, 1500);
        } else if ($(hash).size() > 0) {
            setTimeout(function() {$('html, body').animate({ scrollTop: $(hash).offset().top-40 }, 1000);}, 300);
        }
    }
    $("a.ajax").on('click', function() {
        $.fancybox( $(this).attr('data-href'), fancyboxOptions);
    });

    $("#join .join a").click(function() {
        ga('send', 'event', 'клик', 'клик по кнопке', 'strategyroom | клик по кнопке "Принять участие"');
    });
    clock = $('#timer .inner').FlipClock(time_left, {
        clockFace: 'DailyCounter',
        countdown: true,
        language: 'ru',
        callbacks: {
            stop: function() {
                window.location.href = "http://imsider.ru/confirm/thanks.php";
            },
            interval: function() {
                if ($.cookie("onetimeoffer_counter") != undefined ) {
                    $.cookie("onetimeoffer_counter", clock.time.time);
                }
            }
        }
    });

});