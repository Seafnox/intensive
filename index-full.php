<?
	$now = time();
	$interval = 21 * 60 * 60;
	if(isset($_COOKIE['time_start']) && $_COOKIE['time_start'] > $now - $interval)
		$diff = $_COOKIE['time_start'] + $interval - $now;
	else{
		$diff = $interval;
		setcookie('time_start', $now, $now + $interval);
	}
	$ad = $_GET['ad'] ? '&ad=' . intval($_GET['ad']) : '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>От 100 000 до 300 000 рублей прибыли в интернет-магазине</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="/favicon.png" rel="shortcut icon" type="image/png" />
	<link href="/favicon57.png" rel="apple-touch-icon">
	<link href="/favicon72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="/favicon114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="/favicon144.png" rel="apple-touch-icon" sizes="144x144">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,500italic,400italic,300italic,100italic,900,700,500,300,100&subset=cyrillic-ext,latin" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.reject.css" />
	<link rel="stylesheet" type="text/css" href="css/flipclock.css" />
	<link rel="stylesheet" type="text/css" href="css/social-likes.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<!--[if gte IE 9]><style type="text/css"> .gradient {filter: none;}</style><![endif]-->
		<!-- дата и время для счетчика -->
	<script>
		var counter_time_left = <?=$diff;?>;
	</script>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.reject.js"></script>
	<script type="text/javascript" src="js/jquery.activity.min.js"></script>
	<script type="text/javascript" src="js/flipclock.min.js"></script>
	<script type="text/javascript" src="js/social-likes.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.countdown-ru.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div id="preload">
	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,"script","//www.google-analytics.com/analytics.js","ga");

		ga("create", "UA-29022975-1", "imsider.ru");
		ga("send", "pageview");

	</script>
	<!-- / Google Analytics -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter12922898 = new Ya.Metrika({id:12922898,
						webvisor:true,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img alt="" src="//mc.yandex.ru/watch/12922898" style="position:absolute; left:-9999px;" /></div></noscript>
	<!-- / Yandex.Metrika counter -->
	<!-- Oh My Stats tracker -->
	<script type="text/javascript">
	  //<![CDATA[
		var _oms = window._oms || [];
	   
		_oms.push(["set_project_id", "atlfqdjiipmbpuiwguywuqdbunemyzoojqujvlpp"]);
		_oms.push(["set_domain", ".imsider.ru"]);
		(function() {
		  var oms = document.createElement("script");
		  oms.type = "text/javascript";
		  oms.async = true;
		  oms.src = "//ohmystats.com/oms.js";
		  var s = document.getElementsByTagName("script")[0];
		  s.parentNode.insertBefore(oms, s);
		})();
	  //]]>
	</script>
	<!-- Oh My Stats tracker -->
	<img alt="" src="images/close.png" />
	<img alt="" src="images/fancybox_loading.gif" />
	<img alt="" src="images/fancybox_overlay.png" />
	<img alt="" src="images/blank.gif" />
</div>
<header id="header">
	<div class="container">
		<div class="preheader">
		  <p>Школа интернет-магазинов Imsider.ru</p>
		  <p>Онлайн-интенсив бизнесмена-миллионера</p>
		</div>
	  <div class="page-header">
		<h1>От 100 000 до 300 000 рублей <span>прибыли в интернет-магазине. С 25 по 27 февраля 2014</span></h1></div>
	  <div class="preheader">
		  <p>&nbsp;</p>
		  <p class="text-center">Я открою новый бизнес за три дня. В прямом эфире. Вместе с вами. <em>(Н. Федоткин)</em></p>
		</div>
		<p><a href="" class="btn flat dark_blue">Участвовать</a></p>
	</div>
<div class="border-bottom gradient-left"></div>
</header>
<section id="first" class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-4"><p class="lg">100x</p><p>Сотни работающих <br>интернет-магазинов</p></div>
			<div class="col-xs-4"><p class="lg">45 600</p><p>Участников <br>сообщества</p></div>
			<div class="col-xs-4"><p class="lg">1+ млрд.</p><p>Оборот интернет-магазинов <br>сообщества Имсайдера</p></div>
		</div>
	</div>
</section>
<section id="second">
	<div class="container">
		<div class="embeded width850">
			<iframe src="http://www.youtube.com/embed/WnAuONzdujw?rel=0&amp;vq=hd720" height="480" width="853" allowfullscreen="" frameborder="0"></iframe>
		</div>
	</div>
</section>
<section class="selling" id="get_plan">
    <div class="container">
        <h1>Начните свое дело прямо сейчас</h1>
        <p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
        <p class="counter roboto_condensed"></p>
        <div class="row">
            <div class="col-xs-6 left_block">
                <header>
                    <h2>Интенсив</h2>
                    <p class="price">5 000<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first"><p>Мастер-класс Николая Федоткина</p></li>
                    <li><p>Мастер-класс Тимура Шакова</p></li>
                    <li><p>Мастер-класс Сергея Балакирева</p></li>
                    <li><p>Запись мастер-классов</p></li>
                    <li><p>Ответы на вопросы в чате во время<br>мастер-классов</p></li>
                    <li><p>Запись тренинга Битва интернет-магазинов</p></li>
                    <li><p>Запись тренинга Секретные техники продаж каирских бедуинов</p></li>
                    <li><p>Запись тренинга SEO для интернет-магазина</p></li>
                    <li><p>Запись тренинга Яндекс директ для интернет-магазина</p></li>
                    <li><p>Запись тренинга Продажи через Вконтакте</p></li>
                    <li><p>Безусловная гарантия возврата денег в течение трех суток после Интенсива</p></li>
				</ul>
                <div class="dashed"></div>
                <p class="goal">План на 100 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn get_plan_big">получить план действий</a></p>
            </div>
            <div class="col-xs-6 right_block">
                <header>
                    <h2>Интенсив + Бизнес под ключ</h2>
                    <p class="price">14 900<span class="ruble">e</span></p>
                </header>
              <ul>
                    <li class="first">
                        <p><strong>Все, что входит в Интенсив</strong></p></li>
                    <li class="first">
                        <p><strong>Участие в тренинге <a href="http://reality300.imsider.ru/index.new.php?ad=92492" target="_blank">Бизнес под ключ</a> (тариф Новичок):</strong></p></li>
                    <li><p>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</p></li>
                    <li><p>LIVE тренинг в Москве с прямым эфиром на весь мир</p></li>
                    <li><p>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</p></li>
                    <li><p>Доступ к шаблонам дизайна
                            и рекламы, которыми будем пользоваться мы
                    </p>
                  </li>
                  <li><p>Готовый одностраничный сайт</p></li>
                  <li><p>Сертификат о прохождении тренинга</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">Цель +300 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP-Reality5/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn open_bus">открыть бизнес</a></p>
            </div>
            <div class="metric">
                <div class="basic">0<span class="ruble">e</span></div>
                <div class="middle">~100 000<span class="ruble">e</span></div>
                <div class="end">+300 000<span class="ruble">e</span></div>
            </div>
        </div>
        <div class="notify">Нажимая кнопку Получить план действий или Открыть бизнес, вы принимаете условия <a class="text_link ajax fancybox.ajax" href="ajax_oferta.html">Договора-оферты</a></div>
    </div>
</section>
<section id="third">
	<div class="container">
		<h1>Мы все знаем</h1>
		<div class="row">
			<div class="col-xs-3">
				<p><img alt="Мы начинали с ноля" src="images/third_1.jpg"></p>
				<p>Мы начинали с ноля</p>
			</div>
			<div class="col-xs-3">
				<p><img alt="У нас тоже не было знаний" src="images/third_2.jpg"></p>
				<p>У нас тоже не было <br>знаний</p>
			</div>
			<div class="col-xs-3">
				<p><img alt="опыт в развитии интернет-магазинов - 17 лет" src="images/third_3.jpg"></p>
				<p>Наш общий опыт <br>в запуске и развитии <br>интернет-магазинов <br>17 лет</p>
			</div>
			<div class="col-xs-3">
				<p><img alt="В наших компаниях работает 186 человек" src="images/third_4.jpg"></p>
				<p>В наших компаниях <br>работает 186 человек</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<hr>
				<p>Мы знаем: вы читаете этот текст, потому что <strong>хотите открыть собственный бизнес.</strong></p>
			</div>
			<div class="col-xs-4">
				<hr>
				<p>Или уже пытались, но так и <strong>не поняли с чего начать.</strong></p>
				<p>А в результате <strong>запутались еще больше.</strong></p>
			</div>
			<div class="col-xs-4">
				<hr>
				<p>И еще целая куча подобных вопросов скорее всего мучает сейчас вообще.</p>
			</div>
		</div>
		<div class="row"><p class="total">Неудивительно, ведь возникает огромная масса вопросов.</p></div>
	</div>
</section>
<section id="fourth">
	<div class="container">
		<ul>
			<li><p>Как работать с поставщиками без ИП и ООО?</p></li>
			<li><p>Как правильно отправлять товары и получать деньги от клиентов?</p></li>
			<li><p>Как вычислить нишу, которая принесет деньги?</p></li>
			<li><p>C чего вообще начать?</p></li>
			<li><p>Как сделать сайт за два дня так, чтобы с него покупали, <br>а не просто заходили ваши друзья?</p></li>
			<li><p>Как не слить деньги на дизайнеров, программистов и SEOшников?</p></li>
		</ul>
	</div>
</section>
<section id="fifth">
	<div class="container">
		<h1>И еще больше вопросов наверняка мучают вас.</h1>
		<p class="header-comment">Возможно вы даже уже попробовали открыть свой интернет-магазин…</p>
		<div class="row">
			<div class="col-xs-6">
				<img alt="" src="images/fifth_1.jpg">
				<p>Долго и муторно обсуждали сайт с дизайнерами-фрилансерами или с трудом лепили его сами.</p>
			</div>
			<div class="col-xs-6">
				<img alt="" src="images/fifth_2.jpg">
				<p>Возможно сделали этот сайт, но в итоге не получили ни одного заказа.</p>
			</div>
		</div>
		<p class="epic">EPIC FAIL</p>
		<h2>Мы тоже проходили через все это. И у нас тоже возникала куча вопросов:</h2>
		<ul>
			<li><p>— За что хвататься? </p></li>
			<li><p>— Что делать? </p></li>
			<li><p>— С чего начать свое дело?</p></li>
		</ul>
	</div>
</section>
<section id="sixth">
	<div class="container">
		<div class="col-xs-8 computer"></div>
		<div class="col-xs-4">
			<h1>Вам будет гораздо проще:</h1>
			<p>Вы получите пошаговый план для открытия своего интернет-магазина с доходом от <strong>100 000<span class="ruble">i</span> всего за 3 дня</strong></p>
			<p><a href="#get_plan" class="btn get_plan">получить план действий</a></p>
		</div>
	</div>
</section>
<section id="seventh">
	<div class="container">
		<h1>До сих пор думаете, что открыть бизнес с нуля и быстро получить прибыль тысяч 100 нереально?</h1>
		<p class="header-comment">Тогда посмотрите один из сотен примеров, доказывающих обратное.</p>
		<div class="embeded width850">
			<iframe width="853" height="480" src="//www.youtube.com/embed/gnU1LHA8Dgg" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section id="eighth">
	<div class="container">
		<h1>Интенсив-тренинг с реальными практиками не на бумаге, а на деле!</h1>
		<p class="header-comment">Что это для вас?</p>
		<div class="row work">
			<div class="col-xs-4">
				<h2>Первые шаги</h2>
				<p>Мы расскажем вам с чего начать и чего ждать. Ведь делать первые шаги в одиночку сложнее всего.</p>
			</div>
			<div class="col-xs-4">
				<h2>Экономия времени</h2>
				<p>Вы сэкономите время, потому что не будете искать ответы на вопросы.</p>
			</div>
			<div class="col-xs-4">
				<h2>Готовые решения и шаблоны</h2>
				<p>Вам не придется делать все с нуля, у вас уже будут наработки и схемы. Вы получите наши наработки бесплатно.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 smile"></div>
			<div class="col-xs-8">
				<h2>Поддержка профи</h2>
				<p class="big">У вас будет больше уверенности, ведь вам помогали серьезные люди.</p>
			</div>
		</div>
		<div class="row work">
			<div class="col-xs-4">
				<h2>Сообщество успешных людей</h2>
				<p>Тяжело продвигать свое дело в одиночку. Вы будете работать в команде, в окружении таких же стремящихся и достигающих успеха людей.</p>
			</div>
			<div class="col-xs-4">
				<h2>Менторство</h2>
				<p>На старте очень важно иметь наставника, к результату которого вы сами стремитесь. Для вас будут работать сразу три тренера-практика, владельцы действующих интернет-магазинов.</p>
			</div>
			<div class="col-xs-4">
				<h2>Команда поддержки</h2>
				<p>На всем протяжении тренинга вас будет поддерживать команда тактических тренеров, технический персонал и служба поддержки. У вас будет собственное онлайн-рабочее пространство, все записи и тезисы тренинга.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 garant"></div>
			<div class="col-xs-8">
				<h2>Гарантия без условий и хитростей</h2>
				<p>Вы можете потребовать возврат денег во время тренинга или в течение суток после окончания тренинга. Без объяснения причин. Если это не ваше, то нам ваши деньги не нужны.</p>
			</div>
		</div>
	</div>
</section>
<section id="ninth">
	<div class="container">
		<h1>Что конкретно вы получите</h1>
		<div class="row">
			<div class="col-xs-4">
				<img alt="Пошаговую инструкцию по открытию своего интернет-магазина" src="images/eight_1.png">
				<p>Пошаговую инструкцию по открытию своего интернет-магазина</p>
			</div>
			<div class="col-xs-4">
				<img alt="Мотивацию и энергию для работы как минимум на месяц вперед" src="images/eight_2.png">
				<p>Мотивацию и энергию для работы как минимум на месяц вперед</p>
			</div>
			<div class="col-xs-4">
				<img alt="Обратную связь и поддержку от миллионеров-практиков" src="images/eight_3.png">
				<p>Обратную связь и поддержку от миллионеров-практиков</p>
			</div>
		</div>
	</div>
</section>
<section id="tenth">
	<div class="container">
		<h1>Еще конкретнее:</h1>
		<ul>
			<li><p><span>—</span> Пошаговый математический план достижения <strong>первых 100 000 руб.</strong> чистой прибыли.</p></li>
			<li><p><span>—</span> Три секретных способа выбора прибыльной ниши <strong>(wordstat отдыхает)</strong>.</p>            </li>
			<li><p><span>—</span> <strong>Функции Вконтакте для избранных</strong>: детализация ниши, продажи для своих, быстрый старт бизнеса.</p>      </li>
			<li><p><span>—</span> <strong>Метод Федоткина</strong>. За счет чего выстреливают бизнесы Николая и как гарантированно найти свой прибыльный бизнес?</p>                       </li>
			<li><p><span>—</span> <strong>Оффер — Трафик — Конверсия</strong> как простая формула интернет-бизнеса. Раскроем ее засекреченные фишки работы с поставщиками. Как заставить поставщика покупать у вас?</p>     </li>
			<li><p><span>—</span> <strong>Как получить первый продающий трафик</strong> с качеством лучше, чем у Яндекс Директа без вложений?</p>                  </li>
			<li><p><span>—</span> <strong>Техника Биг идея</strong>. Как быстро стать из маленького магазинчика авторитетным интернет-бизнесом?</p>                </li>
			<li><p><span>—</span> <strong>Технические моменты и движок интернет-магазина</strong>. Что помогло нам (не технарям) окончательно забыть про «движки», «хостинги», «фрилансеров» и заработать еще больше денег?</p>   </li>
			<li><p><span>—</span> <strong>Почему вы откладываете важные дела</strong> «на потом» и до сих пор не открыли свой бизнес? </p>        </li>
			<li><p><span>—</span> Секрет эффективности от Николая Федоткина.</p>  </li>

		</ul>
	</div>
</section>
<section class="selling">
	<div class="container">
		<h1>Начните свое дело прямо сейчас</h1>
        <p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
        <p class="counter roboto_condensed"></p>
        <div class="row">
            <div class="col-xs-6 left_block">
                <header>
                    <h2>Интенсив</h2>
                    <p class="price">5 000<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first"><p>Мастер-класс Николая Федоткина</p></li>
                    <li><p>Мастер-класс Тимура Шакова</p></li>
                    <li><p>Мастер-класс Сергея Балакирева</p></li>
                    <li><p>Запись мастер-классов</p></li>
                    <li><p>Ответы на вопросы в чате во время<br>мастер-классов</p></li>
                    <li><p>Запись тренинга Битва интернет-магазинов</p></li>
                    <li><p>Запись тренинга Секретные техники продаж каирских бедуинов</p></li>
                    <li><p>Запись тренинга SEO для интернет-магазина</p></li>
                    <li><p>Запись тренинга Яндекс директ для интернет-магазина</p></li>
                    <li><p>Запись тренинга Продажи через Вконтакте</p></li>
                    <li><p>Безусловная гарантия возврата денег в течение трех суток после Интенсива</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">План на 100 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn get_plan_big">получить план действий</a></p>
            </div>
            <div class="col-xs-6 right_block">
                <header>
                    <h2>Интенсив + Бизнес под ключ</h2>
                    <p class="price">14 900<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first">
                        <p><strong>Все, что входит в Интенсив</strong></p></li>
                    <li class="first">
                        <p><strong>Участие в тренинге <a href="http://reality300.imsider.ru/index.new.php?ad=92492" target="_blank">Бизнес под ключ</a> (тариф Новичок):</strong></p></li>
                    <li><p>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</p></li>
                    <li><p>LIVE тренинг в Москве с прямым эфиром на весь мир</p></li>
                    <li><p>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</p></li>
                    <li><p>Доступ к шаблонам дизайна
                            и рекламы, которыми будем пользоваться мы
                    </p>
                  </li>
                  <li><p>Готовый одностраничный сайт</p></li>
                  <li><p>Сертификат о прохождении тренинга</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">Цель +300 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP-Reality5/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn open_bus">открыть бизнес</a></p>
            </div>
            <div class="metric">
                <div class="basic">0<span class="ruble">e</span></div>
                <div class="middle">~100 000<span class="ruble">e</span></div>
                <div class="end">+300 000<span class="ruble">e</span></div>
            </div>
        </div>
		<div class="notify">Нажимая кнопку Получить план действий или Открыть бизнес, вы принимаете условия <a class="text_link ajax fancybox.ajax" href="ajax_oferta.html">Договора-оферты</a></div>
	</div>
</section>
<section id="eleven">
	<div class="container">
		<h1>Все сомнения — это лишь отговорки</h1>
		<div class="row">
			<div class="col-xs-7">
				<p>95% людей мечтают о работе на себя.</p>
				<img alt="95% людей мечтают" src="images/eleven_humans.jpg">
			</div>
			<div class="col-xs-5">
				<div class="row">
					<p>И только 5% действительно работают.</p>
					<img alt="5% действительно работают" src="images/eleven_run.jpg">
					<h3>Почему так происходит?</h3>
					<p><strong>Виной тому мифы. Мифы о бизнесе.</strong></p>
					<p>«Открыть своё дело почти невозможно», думает большинство. Но так ли это? Конечно нет.</p>
				</div>
			</div>
		</div>
		<h2>Мы развенчиваем все популярные мифы о бизнесе собственным примером.</h2>
		<div class="row">
			<div class="col-xs-4">
				<h3>МИФ №1</h3>
				<p class="description">Чтобы заниматься бизнесом, необходим большой стартовый капитал</p>
				<p>Когда я начинал, стартовым капиталом для меня стали два навигатора. </p>
				<p>Сейчас владею video-shoper.ru, bodo.ru и другими успешными проектами.</p>
				<div class="comment">
					<img alt="Николай Федоткин" src="images/avatar/avatar_1.jpg">
					<p class="name"><span>Николай</span> <span>Федоткин</span></p>
					<p>Владелец компаний video-shoper.ru, bodo.ru и других бизнесов с оборотом 1 млрд. рублей в год. Управляет более чем 136 сотрудниками удаленно через айфон.</p>
				</div>
			</div>
			<div class="col-xs-4">
				<h3>МИФ №2</h3>
				<p class="description">Чтобы быть предпринимателем нужно закончить бизнес-школу</p>
				<p>У меня юридическое образование, а в бизнес я пришел по своему желанию.</p>
				<div class="comment">
					<img alt="Сергей Балакирев" src="images/avatar/avatar_2.jpg">
					<p class="name"><span>Сергей</span> <span>Балакирев</span></p>
					<p>Автор «Формулы быстрого старта интернет-магазинов», совладелец действующих интернет-бизнесов.</p>
					<p>Основной проект — Deoshop.ru, один из лидеров рынка нишевой косметики.</p>
				</div>
			</div>
			<div class="col-xs-4">
				<h3>МИФ №3</h3>
				<p class="description">Нужны полезные связи, везде же коррупция, сейчас сложно пробиться самому</p>
				<p>Я достиг всего сам. Я просто делал, а если не получалось, то пробовал достичь цели другим путем. Тут главное практика.</p>
				<div class="comment">
					<img alt="Тимур Шаков" src="images/avatar/avatar_3.jpg">
					<p class="name"><span>Тимур</span> <span>Шаков</span></p>
					<p>Основатель действующих интернет-проектов с общим оборотом более 2 млн. долларов в год, совладелец действующих интернет-бизнесов. </p>
					<p>Основной проект — Deoshop.ru, один из лидеров рынка нишевой косметики.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h3>МИФ №4</h3>
				<p class="description">Открыть новый бизнес нельзя, все уже поделено, обычным людям в этой области не место</p>
			</div>
		</div>
		<p class="total">Мы своим примером доказали обратное!</p>
		<p class="total">&nbsp;</p>
		<div class="text-center">
		<div class="embeded width850">
		  <iframe width="853" height="480" src="//www.youtube.com/embed/X6NPu3eABWA" frameborder="0" allowfullscreen></iframe>
	  </div>
	  </div>
	</div>
</section>
<section id="twelve">
	<div class="container">
		<h1>Вот вам живой пример в нашем лице</h1>
		<p class="header-comment">Еще раз напомним, что мы такие же простые люди, как вы. Просто в отличие от вас мы уже решились открыть свой бизнес. И вот чего мы достигли (а значит и вы тоже сможете):</p>
		<div class="row">
			<div class="col-xs-8"><img alt="Интернет-магазины" src="images/shop_1.jpg"></div>
			<div class="col-xs-4">
				<h2>Интернет-магазин <a class="text_link" href="//Deoshop.ru">Deoshop.ru</a></h2>
				<p class="owners">Владельцы: <span>Тимур Шаков и Сергей Балакирев</span></p>
				<ul>
					<li><p>Крупнейший интернет-магазин косметики в Рунете.</p></li>
					<li><p>Ежемесячный оборот более 5 000 000 рублей. </p></li>
					<li><p>Более 100 000 клиентов.</p></li>
					<li><p>Сертификат успешной закупки в 2012 году.</p></li>
					<li><p>Участник международной ассоциации электронных ритейлеров.</p></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4"><img alt="Интернет-магазины" src="images/shop_2.jpg"></div>
			<div class="col-xs-4"><img alt="Интернет-магазины" src="images/shop_3.jpg"></div>
			<div class="col-xs-4">
				<h2>Интернет-магазины <a class="text_link" href="//video-shoper.ru">Video-shoper.ru</a> и <a class="text_link" href="//Bodo.ru">Bodo.ru</a></h2>
				<p class="owners">Владелец: Николай Федоткин</p>
				<ul>
					<li><p>Ежемесячный оборот более 100 000 000 рублей.</p></li>
					<li>
					  <p>Созданы с нуля охранником книжного магазина из провинции и за три года вышли на оборот 1 млрд рублей в год.</p></li>
				</ul>
			</div>
		</div>
		<h3>Без инвестиций, без технических знаний — все магазины прибыльны</h3>
		<div class="dashed"></div>
		<div class="row you_shop">
			<div class="col-xs-8">
				<h1>Знаете, чего еще здесь не хватает?</h1>
				<img alt="чего еще здесь не хватает?" src="images/computer2.png">
			</div>
			<div class="col-xs-4">
				<p>Вашего магазина с крупным доходом, который достоин встать в одну колонку с нашим. Вот так:</p>
				<h2>Ваш прибыльный интернет-магазин</h2>
				<p class="owners">Владельц: Вы</p>
				<ul>
					<li><p>Ежемесячный доход от 100 000 рублей</p></li>
				</ul>
				<p class="italic">Хватит размышлять. Делайте. Прямо сейчас. А мы поможем вам достигнуть конкретных результатов.</p>
			</div>
		</div>
	</div>
</section>
<section class="selling">
	<div class="container">
		<h1>Начните свое дело прямо сейчас</h1>
        <p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
        <p class="counter roboto_condensed"></p>
        <div class="row">
            <div class="col-xs-6 left_block">
                <header>
                    <h2>Интенсив</h2>
                    <p class="price">5 000<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first"><p>Мастер-класс Николая Федоткина</p></li>
                    <li><p>Мастер-класс Тимура Шакова</p></li>
                    <li><p>Мастер-класс Сергея Балакирева</p></li>
                    <li><p>Запись мастер-классов</p></li>
                    <li><p>Ответы на вопросы в чате во время<br>мастер-классов</p></li>
                    <li><p>Запись тренинга Битва интернет-магазинов</p></li>
                    <li><p>Запись тренинга Секретные техники продаж каирских бедуинов</p></li>
                    <li><p>Запись тренинга SEO для интернет-магазина</p></li>
                    <li><p>Запись тренинга Яндекс директ для интернет-магазина</p></li>
                    <li><p>Запись тренинга Продажи через Вконтакте</p></li>
                    <li><p>Безусловная гарантия возврата денег в течение трех суток после Интенсива</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">План на 100 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn get_plan_big">получить план действий</a></p>
            </div>
            <div class="col-xs-6 right_block">
                <header>
                    <h2>Интенсив + Бизнес под ключ</h2>
                    <p class="price">14 900<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first">
                        <p><strong>Все, что входит в Интенсив</strong></p></li>
                    <li class="first">
                        <p><strong>Участие в тренинге <a href="http://reality300.imsider.ru/index.new.php?ad=92492" target="_blank">Бизнес под ключ</a> (тариф Новичок):</strong></p></li>
                    <li><p>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</p></li>
                    <li><p>LIVE тренинг в Москве с прямым эфиром на весь мир</p></li>
                    <li><p>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</p></li>
                    <li><p>Доступ к шаблонам дизайна
                            и рекламы, которыми будем пользоваться мы
                    </p>
                  </li>
                  <li><p>Готовый одностраничный сайт</p></li>
                  <li><p>Сертификат о прохождении тренинга</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">Цель +300 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP-Reality5/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn open_bus">открыть бизнес</a></p>
            </div>
            <div class="metric">
                <div class="basic">0<span class="ruble">e</span></div>
                <div class="middle">~100 000<span class="ruble">e</span></div>
                <div class="end">+300 000<span class="ruble">e</span></div>
            </div>
        </div>
		<div class="notify">Нажимая кнопку Получить план действий или Открыть бизнес, вы принимаете условия <a class="text_link ajax fancybox.ajax" href="ajax_oferta.html">Договора-оферты</a></div>
	</div>
</section>
<section id="thirteen">
	<div class="container">
		<h1>Теория здесь не работает</h1>
		<p class="big">Если вы теоретик и привыкли решать все бизнес-задачи в уме или на бумажке, то вы можете уходить. У вас ничего не получится.</p>
		<div class="row">
			<hr>
			<div class="col-xs-6">
				<p><strong>Потому что открытие бизнеса — это прежде всего практическа наука.</strong></p>
				<p>И именно практическими занятиями мы с вами и займемся.</p>
			</div>
			<div class="col-xs-6">
				<p><strong>Ваш мозг уже придумал слишком много всего. </strong></p>
				<p>А из этой схемы вы узнаете, с чего на самом деле начинать, какие ресурсы вам необходимы, какие препятствия вы можете встретить и как их избежать.</p>
			</div>
		</div>
		<div class="row" id="you"><span>ВЫ</span></div>
		<div class="row arrow_down"></div>
		<div class="row">
			<div class="col-xs-12 dashed"></div>
			<div class="col-xs-4">
				<h2><span>РАЗ</span></h2>
				<ul>
					<li><p>— Определяем нишу</p></li>
					<li><p>— Собираем информацию</p></li>
					<li><p>— Создаем движок</p></li>
					<li><p>— Запускаем бизнес</p></li>
				</ul>
			</div>
			<div class="col-xs-4">
				<h2><span>ДВА</span></h2>
				<ul>
					<li><p>— Нагоняем трафик</p></li>
					<li><p>— Оптимизируем</p></li>
					<li><p>— Продвигаем</p></li>
					<li><p>— Запускаем Директ</p></li>
				</ul>
			</div>
			<div class="col-xs-4">
				<h2><span>ТРИ</span></h2>
				<ul>
					<li><p>— Подключаем дополнительные каналы</p></li>
					<li><p>— Активизируем direct mail</p></li>
					<li><p>— Проникаем в социальные сети</p></li>
					<li><p>— Начинаем акции</p></li>
				</ul>
			</div>
		</div>
		<div class="row arrow_down"></div>
		<p class="lg">ВАШ ПРИБЫЛЬНЫЙ БИЗНЕС</p>
	</div>
</section>
<section id="fourteen">
	<div class="container">
		<h1>Наш тренинг принесет вам результат.</h1>
		<p class="header-comment">Если нет — вернем вам деньги.</p>
		<div class="row">
			<div class="col-xs-4">
				<hr>
				<p><strong>Мы — не теоретики и не консультанты. </strong></p>
				<p>Мы практики, построившие свои компании с ноля.</p>
			</div>
			<div class="col-xs-4">
				<hr>
				<p><strong>Мы всего добились сами.</strong></p>
				<p>Сегодня в наших интернет магазинах работает почти 200 человек.</p>
			</div>
			<div class="col-xs-4">
				<hr>
				<p>Ниже на видео Вы можете увидеть одну из точек самовывоза интернет магазина Video-shoper.ru Николая Федоткина. </p>
				<p>В его компаниях работает уже 138 человек.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h2>Хотите, что бы у Вас было так же? </h2>
				<p>Тогда записывайтесь на тренинг бизнес практиков.</p>
			</div>
		</div>
		<div class="embeded width850">
			<iframe width="853" height="480" src="//www.youtube.com/embed/vIReW7icktI" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section id="fifteen">
	<div class="container">
		<h1>Вы купили билет и прошли <br>наши занятия</h1>
		<img alt="Вы купили билет и прошли наши занятия" src="images/scheme.jpg">
		<div class="row">
			<div class="col-xs-6 text-left"><p class="big">Вы получили <br>прибыльный бизнес</p></div>
			<div class="col-xs-6 text-right"><p class="big">Мы вернули вам <br>ваши деньги</p></div>
		</div>
		<p class="underline">Именно так. У вас есть абсолютно безопасная возможность стать бизнесменом — не упустите ее. <br><strong>Просто начните действовать.</strong></p>
	</div>
</section>
<section class="selling">
	<div class="container">
		<h1>Начните свое дело прямо сейчас</h1>
        <p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
        <p class="counter roboto_condensed"></p>
        <div class="row">
            <div class="col-xs-6 left_block">
                <header>
                    <h2>Интенсив</h2>
                    <p class="price">5 000<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first"><p>Мастер-класс Николая Федоткина</p></li>
                    <li><p>Мастер-класс Тимура Шакова</p></li>
                    <li><p>Мастер-класс Сергея Балакирева</p></li>
                    <li><p>Запись мастер-классов</p></li>
                    <li><p>Ответы на вопросы в чате во время<br>мастер-классов</p></li>
                    <li><p>Запись тренинга Битва интернет-магазинов</p></li>
                    <li><p>Запись тренинга Секретные техники продаж каирских бедуинов</p></li>
                    <li><p>Запись тренинга SEO для интернет-магазина</p></li>
                    <li><p>Запись тренинга Яндекс директ для интернет-магазина</p></li>
                    <li><p>Запись тренинга Продажи через Вконтакте</p></li>
                    <li><p>Безусловная гарантия возврата денег в течение трех суток после Интенсива</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">План на 100 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn get_plan_big">получить план действий</a></p>
            </div>
            <div class="col-xs-6 right_block">
                <header>
                    <h2>Интенсив + Бизнес под ключ</h2>
                    <p class="price">14 900<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first">
                        <p><strong>Все, что входит в Интенсив</strong></p></li>
                    <li class="first">
                        <p><strong>Участие в тренинге <a href="http://reality300.imsider.ru/index.new.php?ad=92492" target="_blank">Бизнес под ключ</a> (тариф Новичок):</strong></p></li>
                    <li><p>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</p></li>
                    <li><p>LIVE тренинг в Москве с прямым эфиром на весь мир</p></li>
                    <li><p>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</p></li>
                    <li><p>Доступ к шаблонам дизайна
                            и рекламы, которыми будем пользоваться мы
                    </p>
                  </li>
                  <li><p>Готовый одностраничный сайт</p></li>
                  <li><p>Сертификат о прохождении тренинга</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">Цель +300 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP-Reality5/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn open_bus">открыть бизнес</a></p>
            </div>
            <div class="metric">
                <div class="basic">0<span class="ruble">e</span></div>
                <div class="middle">~100 000<span class="ruble">e</span></div>
                <div class="end">+300 000<span class="ruble">e</span></div>
            </div>
        </div>
		<div class="notify">Нажимая кнопку Получить план действий или Открыть бизнес, вы принимаете условия <a class="text_link ajax fancybox.ajax" href="ajax_oferta.html">Договора-оферты</a></div>
	</div>
</section>
<section id="sixteen">
	<div class="container">
		<h1>Кстати, вы у нас не первый</h1>
		<p class="header-comment">Что говорят клиенты, которые прошли другие наши тренинги?</p>
		<div class="row">
			<div class="col-xs-4">
				<p class="description">Супер! Мне понравилось. Было интересно слышать Сергея и Тимура!</p>
				<p>Очень вдохновили ребята. Я писал Сергею, что местами мне казалось, что он угадывает мои мысли. Мне даже петь хотелось после семинара.</p>
				<p>Очень вдохновили и много фишек рассказали. Молодцы!</p>
				<div class="comment">
					<img src="images/avatar/seyar.jpg" alt="Сеяр Аблязизов">
					<p class="name"><span>Сеяр</span> <span>Аблязизов</span></p>
					<p><a class="text_link" href="http://katrini.ru">katrini.ru</a> (магазин создан с нуля на нашем проекте)</p>
				</div>
			</div>
			<div class="col-xs-4">
				<p class="description"><strong>Сергей и Тимур, я в восторге от вашего проекта.</strong></p>
				<p>До вас вся информация по открытию ИМ была размыта и размазана по всему Интернету маленькими непонятными частями. На <a href="http://blog.imsider.ru/" target="_blank">imsider.ru</a> все иначе, столько полезного для ИМ я нигде не встречал.                </p>
				<div class="collapsable">
					<div class="collapse">
						<p>Все, что узнал от вас, я старался делать на следующий день, потому что наши конкуренты тоже могли посещать ваши вебинары и сделать это раньше меня. </p>
						<p>Но на конкурентских сайтов изменений нет, а на моем есть и самое главное с хорошими результатами. </p>
						<p>Еще раз, огромное Вам спасибо! Развивайте imsider.ru он нам нужен.</p>
					</div>
					<p><a class="text_link out show_link" href="">Читать дальше</a></p>
					<p><a class="text_link out hide_link" href="">Скрыть</a></p>
				</div>
				<div class="comment">
				  <img src="images/avatar/gastinov.jpg" alt="Альберт Гастинов">
				  <p class="name"><span>Альберт</span> <span>Гастинов</span></p>
					<p><a class="text_link" href="http://podgotoffka.ru">podgotoffka.ru</a></p>
				</div>
			</div>
			<div class="col-xs-4">
				<p class="description"><strong>Потраченные деньги вернулись мне в первый же месяц.</strong></p>
				<p>До посещения тренингов imsider.ru я уже имел опыт в создании интернет-магазинов. Мы с другом создали магазин рыболовных товаров. Но, возникли проблемы с поставщиками и магазин закрылся.</p>
				<div class="collapsable">
					<div class="collapse">
						<p>После этого мы пошли каждый своей дорогой, но я решил и дальше развиваться в этом направлении и обратился к специалистам. Нашел Ваш сайт и записался на тренинги.</p>
						<p>Я посетил два тренинга «Продажи вверх» и «Планета продаж». У меня в планах уже был свой интернет-магазин и, посещая эти тренинги, я смог его запустить.</p>
						<p>Долго выбирал категорию товаров для своего сайта и остановил свой выбор на ножах. Как оказалось, многие рекламодатели отказываются пускать рекламу ножей, мотивируя это тем, что холодное оружие в свободном доступе запрещено. Но я всё же не стал бросать начатое.</p>
						<p>Домен я купил в середине сентября и уже с первых чисел октября пошли первые заказы. Сначала было тихо, но потом количество заказов возрастало. За февраль было оформлено 42 заказа. Сейчас средний чек составляет около 800-1000 грн.(3000-4000 р.) Обновляется сайт, добавляются новые товары, расширяется круг поставщиков.</p>
						<p>Но, чтобы этого достичь, пришлось преодолеть немало препятствий. Хотел разместить рекламу на Яндексе – не разрешили, потребовали документы на лицензирование товара. Я нашёл заключение экспертов о том, что это не холодное оружие, а товары хозяйственного быта и лицензия не требуется. Также нужно было гарантийное письмо с подписью и печатью частного предпринимателя — я объяснил, что ещё не оформлен. В таком случае подойдет письмо с подписью нотариуса, сделал и её. Реклама вроде как прошла.</p> 
						<p>Похожая ситуация произошла и с Google, только больше документов потребовалось. Решив, что отступать некуда я начал добиваться размещения рекламы в Google.</p>
						<p>Посещая тренинги я понял, что весь успех интернет-магазина строится на мелочах, которыми нельзя пренебрегать.</p> 
						<p>Спасибо Сергею, что порекомендовал мне «оживить» сайт, добавить преимущества моего магазина, графики, обратную связь. Хорошо, что есть люди, которые конкретно говорят, что нужно делать, а что — нет.</p> 
						<p>В процессе обучения у меня и в мыслях не было, что я зря трачу время и деньги. Все потраченные средства на обучение вернулись мне в первый же месяц.</p> 
						<p>Я очень благодарен вам, ребята, за полезную информацию и дельные советы. Так держать!</p>
					</div>
					<p><a class="text_link out show_link" href="">Читать дальше</a></p>
					<p><a class="text_link out hide_link" href="">Скрыть</a></p>
				</div>
				<div class="comment">
				  <img alt="Алексей" src="images/avatar/alexey.jpg">
				  <p class="name"><span>Алексей</span></p>
					<p><a class="text_link" href="http://http://realman.com.ua/">realman.com.ua</a></p>
			  </div>
			</div>
		</div>
		<div class="row video">
			<div class="col-xs-8 embeded">
				<iframe width="625" height="380" src="//www.youtube.com/embed/AW-Zebt7c0M" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-xs-4">
				<p class="title">Сомневался, не верил, сделал... и заработал 1 200 000 руб.</p>
				<p class="name">Андрей Манько</p>
				<p class="site"><a class="text_link" href="http://energodin.ru">energodin.ru</a></p>
			</div>
		</div>
		<div class="row video">
			<div class="col-xs-8 embeded">
				<iframe width="625" height="380" src="//www.youtube.com/embed/5JMGDdFlHLg" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-xs-4">
				<p class="title">Мой личный прорыв —
					не менее 20%. У новичков
					он будет гораздо больше</p>
				<p class="name">Игорь Минтусов</p>
			</div>
		</div>
	</div>
</section>
<section id="seventeen">
	<div class="container">
		<h1>А может продолжить работать на «дядю»?</h1>
		<div class="row">
			<div class="col-xs-6">
				<hr class="sub">
				<h2><span>ЗА</span></h2>
				<div class="bordered">
					<p>В конце-концов, нужен ли вам этот бизнес? Этот творческий поиск, волнения, поиск нового? </p>
					<p><em>Ведь работа в офисе не так уж и плоха. А кое в чем она действительно лучше собственного бизнеса. </em></p>
					<p>Хотя бы вот в этом:</p>
				</div>
				<ul>
					<li><p>Вам не надо волноваться и решать сложные проблемы</p></li>
					<li><p>У вас стабильная зарплата и четкий круг обязанностей</p></li>
					<li><p>Ваш уровень ответственности гораздо ниже</p></li>
					<li><p>Вы не вкладываете и не теряете собственные деньги</p></li>
					<li><p>У вас нормированный восьмичасовой рабочий день.</p></li>
				</ul>
			</div>
			<div class="col-xs-6">
				<hr class="sub">
				<h2><span>ПРОТИВ</span></h2>
				<div class="bordered">
					<p>Что? Вы хотите творческой свободы, исполнения вашей мечты, независимости и богатства? </p>
					<p><em>Тогда работа на «дядю» для вас полна недостатков. </em></p>
					<p>Скажем, вот таких:</p>
				</div>
				<ul>
					<li><p>Вам приходится делать то, что вам приказывают</p></li>
					<li><p>Ваша зарплата редко растет, а говорить о саморазвитии и вовсе не приходится</p></li>
					<li><p>Вас постоянно преследует страх потерять работу</p></li>
					<li><p>Чем старше вы становитесь, тем сложнее найти выгодное место</p></li>
					<li><p>Вас постоянно пытаются «подсидеть»</p></li>
					<li><p>Каждый день вам приходится вставать в семь утра</p></li>
					<li><p>Отпуск приходится выбивать с боем</p></li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-xs-4">
				<p>Конечно, это можно терпеть. Но подумайте о своих планах на старость? </p>
				<p><strong>Кому вы будете нужны? <br>Государству? </strong></p>
			</div>
			<div class="col-xs-4">
				<p><strong>Разве на пенсию в 10 000 вы сможете прожить?</strong></p>
				<p>А между тем старость приближается. И времени, чтобы что-то предпринять остается все меньше и меньше.</p>
			</div>
			<div class="col-xs-4">
				<p><strong>Вы уже придумали, что делать?</strong> Положили деньги в сбербанк?</p>
			</div>
		</div>
		<p class="total">У нас есть способ лучше.</p>
	</div>
</section>
<section id="eighteen">
	<div class="container">
		<h1>Вложите деньги в собственное дело</h1>
		<h1>И прибыль не заставит вас ждать.</h1>
	</div>
</section>
<section class="selling">
	<div class="container">
		<h1>Начните свое дело прямо сейчас</h1>
        <p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
        <p class="counter roboto_condensed"></p>
        <div class="row">
            <div class="col-xs-6 left_block">
                <header>
                    <h2>Интенсив</h2>
                    <p class="price">5 000<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first"><p>Мастер-класс Николая Федоткина</p></li>
                    <li><p>Мастер-класс Тимура Шакова</p></li>
                    <li><p>Мастер-класс Сергея Балакирева</p></li>
                    <li><p>Запись мастер-классов</p></li>
                    <li><p>Ответы на вопросы в чате во время<br>мастер-классов</p></li>
                    <li><p>Запись тренинга Битва интернет-магазинов</p></li>
                    <li><p>Запись тренинга Секретные техники продаж каирских бедуинов</p></li>
                    <li><p>Запись тренинга SEO для интернет-магазина</p></li>
                    <li><p>Запись тренинга Яндекс директ для интернет-магазина</p></li>
                    <li><p>Запись тренинга Продажи через Вконтакте</p></li>
                    <li><p>Безусловная гарантия возврата денег в течение трех суток после Интенсива</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">План на 100 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn get_plan_big">получить план действий</a></p>
            </div>
            <div class="col-xs-6 right_block">
                <header>
                    <h2>Интенсив + Бизнес под ключ</h2>
                    <p class="price">14 900<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first">
                        <p><strong>Все, что входит в Интенсив</strong></p></li>
                    <li class="first">
                        <p><strong>Участие в тренинге <a href="http://reality300.imsider.ru/index.new.php?ad=92492" target="_blank">Бизнес под ключ</a> (тариф Новичок):</strong></p></li>
                    <li><p>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</p></li>
                    <li><p>LIVE тренинг в Москве с прямым эфиром на весь мир</p></li>
                    <li><p>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</p></li>
                    <li><p>Доступ к шаблонам дизайна
                            и рекламы, которыми будем пользоваться мы
                    </p>
                  </li>
                  <li><p>Готовый одностраничный сайт</p></li>
                  <li><p>Сертификат о прохождении тренинга</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">Цель +300 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP-Reality5/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn open_bus">открыть бизнес</a></p>
            </div>
            <div class="metric">
                <div class="basic">0<span class="ruble">e</span></div>
                <div class="middle">~100 000<span class="ruble">e</span></div>
                <div class="end">+300 000<span class="ruble">e</span></div>
            </div>
        </div>
		<div class="notify">Нажимая кнопку Получить план действий или Открыть бизнес, вы принимаете условия <a class="text_link ajax fancybox.ajax" href="ajax_oferta.html">Договора-оферты</a></div>
	</div>
</section>
<section id="nineteen">
	<div class="container">
		<h1>Просто делайте</h1>
		<hr>
		<div class="row">
			<div class="col-xs-4">
				<p>И начните зарабатывать деньги. Посмотрите видео ниже — это магазин Deoshop.ru, который создали Сергей Балакирев и Тимур Шаков.</p>
				<p><strong>С ноля.</strong></p>
			</div>
			<div class="col-xs-4">
				<p><strong>Оба предпринимателя приехали в Москву из провинции. </strong></p>
				<p><span>Сегодня это второй по величине интернет-магазин натуральной косметики в России с оборотом 3 млн долларов.</span></p>
			</div>
			<div class="col-xs-4">
				<p>На тренинге Сергей с Тимуром расскажут как им это удалось. Смотрите видео и записывайтесь на тренинг.</p>
			</div>
		</div>
		<div class="embeded">
			<iframe width="853" height="480" src="//www.youtube.com/embed/hTF3e68Gbhk" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section id="twenty">
	<div class="container">
		<h1>Время работать на результат</h1>
		<hr>
		<div class="row">
			<div class="col-xs-4">
				<p>Самое сложное — это действовать прямо сейчас. </p>
			</div>
			<div class="col-xs-4">
				<p>Поэтому если вы предпочитаете размышлять, а не делать, закройте эту страницу. Ведь мы не будем ждать вас вечно.</p>
			</div>
			<div class="col-xs-4">
				<p>Уверены в себе и готовы получить пошаговый план для открытия своего интернет-магазина всего за 3 дня?</p>
			</div>
		</div>
		<p class="total">В таком случае вы знаете что делать.</p>
	</div>
</section>
<section class="selling">
	<div class="container">
		<h1>Начните свое дело прямо сейчас</h1>
        <p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
        <p class="counter roboto_condensed"></p>
        <div class="row">
            <div class="col-xs-6 left_block">
                <header>
                    <h2>Интенсив</h2>
                    <p class="price">5 000<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first"><p>Мастер-класс Николая Федоткина</p></li>
                    <li><p>Мастер-класс Тимура Шакова</p></li>
                    <li><p>Мастер-класс Сергея Балакирева</p></li>
                    <li><p>Запись мастер-классов</p></li>
                    <li><p>Ответы на вопросы в чате во время<br>мастер-классов</p></li>
                    <li><p>Запись тренинга Битва интернет-магазинов</p></li>
                    <li><p>Запись тренинга Секретные техники продаж каирских бедуинов</p></li>
                    <li><p>Запись тренинга SEO для интернет-магазина</p></li>
                    <li><p>Запись тренинга Яндекс директ для интернет-магазина</p></li>
                    <li><p>Запись тренинга Продажи через Вконтакте</p></li>
                    <li><p>Безусловная гарантия возврата денег в течение трех суток после Интенсива</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">План на 100 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn get_plan_big">получить план действий</a></p>
            </div>
            <div class="col-xs-6 right_block">
                <header>
                    <h2>Интенсив + Бизнес под ключ</h2>
                    <p class="price">14 900<span class="ruble">e</span></p>
                </header>
                <ul>
                    <li class="first">
                        <p><strong>Все, что входит в Интенсив</strong></p></li>
                    <li class="first">
                        <p><strong>Участие в тренинге <a href="http://reality300.imsider.ru/index.new.php?ad=92492" target="_blank">Бизнес под ключ</a> (тариф Новичок):</strong></p></li>
                    <li><p>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</p></li>
                    <li><p>LIVE тренинг в Москве с прямым эфиром на весь мир</p></li>
                    <li><p>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</p></li>
                    <li><p>Доступ к шаблонам дизайна
                            и рекламы, которыми будем пользоваться мы
                    </p>
                  </li>
                  <li><p>Готовый одностраничный сайт</p></li>
                  <li><p>Сертификат о прохождении тренинга</p></li>
                </ul>
                <div class="dashed"></div>
                <p class="goal">Цель +300 000</p>
                <p class="footer"><a href="http://imsider.justclick.ru/order/intensiv7_VIP-Reality5/?tag=intensive.imsider.ru<?=$ad;?>" target="_blank" class="btn open_bus">открыть бизнес</a></p>
            </div>
            <div class="metric">
                <div class="basic">0<span class="ruble">e</span></div>
                <div class="middle">~100 000<span class="ruble">e</span></div>
                <div class="end">+300 000<span class="ruble">e</span></div>
            </div>
        </div>
		<div class="notify">Нажимая кнопку Получить план действий или Открыть бизнес, вы принимаете условия <a class="text_link ajax fancybox.ajax" href="ajax_oferta.html">Договора-оферты</a></div>
	</div>
</section>


<footer id="footer">
	<div class="container">
		<h1>Клиентская поддержка</h1>
		<div class="row">
			<div class="col-xs-12"><hr></div>
			<div class="col-xs-4">
				<p class="footer_phone">8 800 333-07-63</p>
				<p class="footer_time">с 10:00 до 19:00 (мск)</p>
				<p class="footer_email"><a class="text_link" href="mailto:support@imsider.ru">support@imsider.ru</a></p>
				<p class="footer_time">круглосуточно</p>
			</div>
			<div class="col-xs-4">
				<p class="header">Мы в соц. сетях</p>
				<ul>
					<li><a class="text_link" href="http://youtube.com/user/ImsiderTV">youtube.com/user/ImsiderTV</a></li>
					<li><a class="text_link" href="http://facebook.com/groups/IMsider">facebook.com/groups/IMsider</a></li>
					<li><a class="text_link" href="http://vk.com/club35101030">vk.com/club35101030</a></li>
					<li><a class="text_link" href="http://twitter.com/#!/imsider">twitter.com/#!/imsider</a></li>
				</ul>
			</div>
			<div class="col-xs-4 padding">
				<p class="header">Клиентам</p>
				<ul>
					<li><a href="ajax_oferta.html" class="text_link ajax fancybox.ajax">Договор оферты</a></li>
					<li><a href="ajax_privacy.html" class="text_link ajax fancybox.ajax">Политика конфиденциальности</a></li>
					<li><a href="ajax_data.html" class="text_link ajax fancybox.ajax">Реквизиты</a></li>
				</ul>
			</div>
		</div>
		<div id="footer_social">
			<ul class="social-likes">
				<li class="text">Рассказать друзьям:</li>
				<li class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</li>
				<li class="mailru" title="Поделиться ссылкой в Моем Мире">Мой Мир</li>
				<li class="vkontakte" title="Поделиться ссылкой Вконтакте">Вконтакте</li>
				<li class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</li>
				<li class="plusone" title="Поделиться ссылкой в Google+">Google+</li>
				<li class="livejournal" title="Поделиться ссылкой в ЖЖ">LiveJournal</li>
			</ul>
		</div>
	</div>
</footer>
<script type="text/javascript">
var gr_goal_params = {
 param_0 : '',
 param_1 : '',
 param_2 : '',
 param_3 : '',
 param_4 : '',
 param_5 : ''
};</script>
<script type="text/javascript" src="https://app.getresponse.com/goals_log.js?p=17540&u=SwZy"></script>
</body>
</html>
