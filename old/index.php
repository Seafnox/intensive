<?
	$date2 = '2013-11-25 19:29:59'; // дата и время для счетчика
	$date1 = 'now';

	$diff = strtotime($date2) - strtotime($date1); // разница в секундах
	if ($diff < 0) $diff = 0;


	$ad = $_GET['ad'] ? '&ad=' . intval($_GET['ad']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Интенсив Имсайдера</title>
	<link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link media="all" rel="stylesheet" href="css/jquery.reject.css" />
	<link href="css/flipclock_new.css" rel="stylesheet">
	<link media="all" rel="stylesheet" href="css/all.css">
	<script src="js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="js/jquery.reject.js"></script>
	<script type="text/javascript" src="js/flipclock.min.js"></script>
	<script src="js/jquery.main.js" ></script>
	<link type="image/x-icon" href="favicon.ico" rel="icon"/>
	<link href="favicon.ico" rel="shortcut icon"/>
	<!--[if IE]><script src="js/ie.js"></script><![endif]-->
	<script type="text/javascript">	
		$(document).ready(function(){
		$.reject({ 
	    reject: { 
	        msie5:true,
	        msie6:true,
			msie7:true,
	        unknown:false
	     }
		});	
		});
	</script>
	<script>
    	$(document).ready(function(){
        	var clock = $('#counter_timer').FlipClock(<?=$diff;?>, {
                autoStart: true, // auto start
                countdown: true, // true = countdown, false = count up
                clockFace: 'DailyCounter'
            });
        });
	</script>
</head>
<body>
<!-- Google Analytics counter -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-29022975-1', 'imsider.ru');
	  ga('send', 'pageview');
	</script>
	<!-- /Google Analytics counter -->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter12922898 = new Ya.Metrika({id:12922898, enableAll: true, webvisor:true});
			} catch(e) {}
		});
		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
	</script>
	<div id="wrapper">
		<div class="w1">
			<header id="header">
				<h1>Интенсив Имсайдера</h1>
				<strong class="logo"><a href="#">Imsider.ru практики продаж в интернете</a></strong>
			</header>
			<div class="intro-text">
				<h1>От <strong class="medium">100 000</strong> до <strong class="medium">300 000</strong> рублей <strong class="big">прибыли</strong> <span class="center">в интернет-магазине</span></h1>
				<div class="button-holder">
					<a class="button" href="#packages">Хочу участвовать</a>
				</div>
			</div>
			<div id="main">
				<section class="results-section">
					<ul class="list-results">
						<li>Сотни работающих интернет-магазинов</li>
						<li>45 600 участников сообщества</li>
						<li>Оборот интернет-магазинов сообщества Имсайдера более 1 млрд в год</li>
					</ul>
					<div class="block-video">
						<iframe width="851" height="479" src="http://www.youtube.com/embed/WnAuONzdujw" frameborder="0"></iframe>
					</div>
					<h1>МЫ СДЕЛАЛИ ЭТО, ТЕПЕРЬ ВАША ОЧЕРЕДЬ</h1>
					<div class="results-icons">
						<span class="title">Наши интернет-магазины:</span>
						<ul>
							<li><a target="_blank" href="http://new.bodo.ua/"><img src="images/ico-bodo.png" alt="Bodo" width="204" height="85" ></a></li>
							<li><a target="_blank" href="http://video-shoper.ru/"><img src="images/ico-video-shoper.png" alt="Video-shoper.ru" width="201" height="84" ></a></li>
							<li><a target="_blank" href="http://www.deoshop.ru/"><img src="images/ico-deoshop.png" alt="Deoshop.ru" width="300" height="96" ></a></li>
						</ul>
					</div>
				</section>
				<section class="section">
					<h1>Мы все знаем</h1>
					<ul class="knoweledge-list">
						<li><span class="item">Мы начинали с ноля</span></li>
						<li class="second"><span class="item">У нас тоже не было знаний</span></li>
						<li><span class="item">Наш опыт в интернет- магазинах 17 лет</span></li>
						<li class="fourth"><span class="item">В наших компаниях работает 186 человек</span></li>
					</ul>
					<p>Мы знаем: вы читаете этот текст, потому что хотите открыть собственный бизнес. Или уже пытались, но так и не поняли с чего начать. А в результате запутались еще больше. И еще целая КУЧА подобных вопросов скорее всего мучает сейчас вообще.</p>
					<p>Неудивительно, ведь возникает огромная масса вопросов.</p>
					<ul class="block-questions">
						<li>Как работать с поставщиками без ИП и ООО?</li>
						<li>Как правильно отправлять товары и получать деньги от клиентов?</li>
						<li class="third">Как вычислить нишу, которая принесет деньги?</li>
						<li class="fourth">C чего вообще начать?</li>
						<li class="fifth">Как сделать сайт за два дня так, чтобы с него покупали, а не просто заходили ваши друзья?</li>
						<li class="sixth">Как сделать сайт за два дня так, чтобы с него покупали, а не просто заходили ваши друзья?</li>
						<li class="seventh">Как не слить деньги на дизайнеров, программистов и SEOшников?</li>
					</ul>
					<p>И еще больше «Как?» и «Что?» наверняка мучают вас. </p>
					<p>Возможно вы даже уже попробовали открыть свой интернет-магазин…</p>
					<ul class="list-items">
						<li>Долго и муторно обсуждали сайт с дизайнерами-фрилансерами или с трудом лепили его сами.</li>
						<li>Возможно сделали этот сайт, но в итоге не получили ни одного заказа.</li>
					</ul>
					<p>Мы тоже проходили через все это. И у нас тоже возникала куча вопросов: За что  хвататься? Что делать? С чего начать свое дело?</p>
					<div class="box-grey">
						<div class="inner">
							<strong class="title">ВАМ БУДЕТ ГОРАЗДО ПРОЩЕ:</strong>
							<p>Вы получите пошаговый план для открытия своего интернет-магазина с доходом <br> от <span class="mark">100 000</span> рублей всего за <span class="mark">3 дня</span></p>
						</div>
					</div>
					<img src="images/img01.jpg" alt="image description" class="visual" width="994" height="615" >
				</section>
				<section class="section">
					<h1>Интенсив-тренинг <br> с реальными практиками <br>не на бумаге, а на деле!</h1>
					<h2>Что это для вас?</h2>
					<ul class="list-advantages">
						<li>
							<h3>Ваш мощный старт</h3>
							<p>Вы начнете свое дело под руководством опытных интернет-предпринимателей, достигших всего самостоятельно. Оборот наших бизнесов более миллиарда рублей в год. Мы четко знаем, какие проблемы уже встали на вашем пути или еще встанут. Вы получите уже проверенные и протестированные пути к первой прибыли.</p>
						</li>
						<li>
							<h3>Первые шаги</h3>
							<p>Мы расскажем вам с чего начать и чего ждать. Ведь делать первые шаги в одиночку сложнее всего. </p>
						</li>
						<li class="time">
							<h3>Экономия времени</h3>
							<p>Вы сэкономите время, потому что не будете искать ответы на вопросы.</p>
						</li>
						<li class="profi">
							<h3>Поддержка профи</h3>
							<p>У вас будет больше уверенности, ведь вам помогали серьезные люди.</p>
						</li>
						<li class="solutions">
							<h3>Готовые решения и шаблоны</h3>
							<p>Вам не придется делать все с нуля, у вас уже будут наработки и схемы. Вы получите наши наработки бесплатно.</p>
						</li>
						<li class="community">
							<h3>Сообщество успешных людей</h3>
							<p>Тяжело продвигать свое дело в одиночку. Вы будете работать в команде, в окружении таких же стремящихся и достигающих успеха людей.</p>
						</li>
						<li class="mentors">
							<h3>Менторство</h3>
							<p>На старте очень важно иметь наставника, к результату которого вы сами стремитесь. Для вас будут работать сразу три тренера-практика, владельцы действующих интернет-магазинов.</p>
						</li>
						<li class="team">
							<h3>Команда поддержки</h3>
							<p>На всем протяжении тренинга вас будет поддерживать команда тактических тренеров, технический персонал и служба поддержки. У вас будет собственное онлайн-рабочее пространство, все записи и тезисы тренинга.</p>
						</li>
						<li class="guarantee">
							<h3>Гарантия без условий и хитростей</h3>
							<p>Вы можете потребовать возврат денег во время тренинга или в течение суток после окончания тренинга. Без объяснения причин. Если это не ваше, то нам ваши деньги не нужны.</p>
						</li>
					</ul>
				</section>
				<section class="section">
					<h1>Что конкретно <br>вы получите</h1>
					<ul class="knoweledge-list short">
						<li><span class="item">Пошаговую инструкцию по открытию своего интернет-магазина</span></li>
						<li class="second"><span class="item">Мотивацию и энергию для работы как минимум на месяц вперед</span></li>
						<li><span class="item">Обратную связь и поддержку от миллионеров- практиков</span></li>
					</ul>
					<p><strong>Еще конкретнее:</strong></p>
					<ul class="listing">
						<li>Пошаговый математический план достижения первых 100 000 р. чистой прибыли</li>
						<li>Три секретных способа выбора прибыльной ниши (wordstat отдыхает)</li>
						<li>Функции Вконтакте для избранных: детализация ниши, продажи для своих, быстрый старт бизнеса</li>
						<li>Метод Федоткина. За счет чего выстреливают бизнесы Николая и как гарантированно найти свой прибыльный бизнес</li>
						<li>Оффер - Трафик - Конверсия как простая формула интернет-бизнеса. Раскроем ее засекреченные фишки работы с поставщиками. Как заставить поставщика покупать у вас?</li>
						<li>Как получить первый продающий трафик с качеством лучше, чем у Яндекс Директа без вложений</li>
						<li>Техника Биг идея. Как быстро стать из маленького магазинчика авторитетным интернет-бизнесом</li>
						<li>Технические моменты и движок интернет-магазина. Что помогло нам (не технарям) окончательно забыть про «движки», «хостинги», «фрилансеров» и заработать еще больше денег</li>
						<li>Почему вы откладываете важные дела «на потом» и до сих пор не открыли свой бизнес? <br> Секрет эффективности от Николая Федоткина</li>
					</ul>
				</section>
				<section class="section-packages" id="packages">
					<h1>НАЧНИТЕ СВОЕ ДЕЛО ПРЯМО СЕЙЧАС</h1>
					<ul class="packages">
						<li class="stretch">
							<header class="heading">
								Тест драйв <span class="price">3 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Запись мастер-класса</li>
								<li>Ответы на вопросы</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">План на 100 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54342/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
						<li class="stretch">
							<header class="heading">
								VIP <span class="price">5 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Мастер-класс Тимура Шакова</li>
								<li>Мастер-класс Сергея Балакирева</li>
								<li>Запись мастер-классов</li>
								<li>Ответы на вопросы</li>
								<li>Запись тренинга Битва интернет-магазинов</li>
								<li>Запись тренинга Секретные техники продаж каирских бедуинов</li>
								<li>Запись тренинга SEO для интернет-магазина</li>
								<li>Запись тренинга Яндекс директ для интернет-магазина</li>
								<li>Запись тренинга Продажи через Вконтакте</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">Цель +300 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54341/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
					</ul>
					<div class="agree">
						<img src="images/ico-tick.gif" alt="" class="alignleft" width="35" height="29" >
						<span class="text">Нажимая кнопку Участвовать или Победить вы принимаете условия <a href="#">Договора-оферты</a></span>
					</div>
				</section>
				<section class="section">
					<h1>Все сомнения — <br>это лишь отговорки</h1>
					<h2>90% людей мечтают о работе на себя. <br>И только 5% действительно работают. Почему?</h2>
					<p>Виной тому мифы. Мифы о бизнесе.</p>
					<p>«Открыть своё дело почти невозможно», думает большинство. Но так ли это? Конечно нет. <br>Мы развенчиваем все популярные мифы о бизнесе собственным примером.</p>
					<ul class="list-mythologies">
						<li>
							<header class="heading">
								<span class="quotes">«</span>
								<div class="text-block">
									<h2>Развенчивает миф Николай Федоткин</h2>
									<p>Владелец компаний <a href="http://video-shoper.ru/">video-shoper.ru</a>, <a href="http://new.bodo.ua/">bodo.ru</a> и других бизнесов с оборотом 1 млрд. рублей в год. Управляет более чем 136 сотрудниками удаленно через айфон.</p>
								</div>
							</header>
							<div class="text-section">
								<h3>Чтобы заниматься бизнесом, необходим большой стартовый капитал</h3>
								<img src="images/img02.jpg" alt="Николай Федоткин" class="alignleft" width="327" height="409" >
								<blockquote>
									<q>– Когда я начинал, стартовым капиталом для меня стали два навигатора. Сейчас владею <br><a href="http://video-shoper.ru/">video-shoper.ru</a>, <a href="http://new.bodo.ua/">bodo.ru</a><br> и другими успешными проектами. </q>
								</blockquote>
							</div>
						</li>
						<li>
							<header class="heading">
								<span class="quotes">«</span>
								<div class="text-block">
									<h2>Развенчивает миф Сергей Балакирев</h2>
									<p>Автор «Формулы быстрого старта интернет-магазинов», совладелец действующих интернет-бизнесов. Основной проект – <a href="http://www.deoshop.ru/">Deoshop.ru</a>, один из лидеров рынка нишевой косметики.</p>
								</div>
							</header>
							<div class="text-section">
								<h3>Чтобы быть предпринимателем нужно закончить бизнес-школу</h3>
								<img src="images/img03.jpg" alt="Сергей Балакирев" class="alignleft" width="327" height="409" >
								<blockquote>
									<q>– У меня юридическое образование, а в бизнес я пришел по своему желанию.</q>
								</blockquote>
							</div>
						</li>
						<li>
							<header class="heading">
								<span class="quotes">«</span>
								<div class="text-block">
									<h2>Развенчивает миф Тимур Шаков</h2>
									<p>Основатель действующих интернет-проектов с общим оборотом более 2 млн. долларов в год, совладелец действующих интернет- бизнесов. Основной проект – <a href="http://www.deoshop.ru/">Deoshop.ru</a>, один из лидеров рынка нишевой косметики.</p>
								</div>
							</header>
							<div class="text-section">
								<h3>Нужны полезные связи, везде же коррупция, сейчас сложно пробиться самому</h3>
								<img src="images/img04.jpg" alt="Тимур Шаков" class="alignleft" width="327" height="409" >
								<blockquote>
									<q>– Я достиг всего сам. Я просто делал, а если не получалось, то пробовал достичь цели другим путем. Тут главное практика.</q>
								</blockquote>
							</div>
						</li>
						<li class="all">
							<header class="heading">
								<span class="quotes">«</span>
								<h2>Развенчивают миф Тимур Шаков, Сергей Балакирев и Николай Федоткин</h2>
							</header>
							<div class="text-section">
								<h3>Открыть новый бизнес нельзя, все уже поделено, обычным людям в этой области не место</h3>
								<ul class="list-visual">
									<li><img src="images/img05.jpg" alt="Николай Федоткин" class="alignleft" width="144" height="182" ></li>
									<li><img src="images/img06.jpg" alt="Сергей Балакирев" class="alignleft" width="144" height="182" ></li>
									<li><img src="images/img07.jpg" alt="Тимур Шаков" class="alignleft" width="144" height="182" ></li>
								</ul>
								<blockquote>
									<q>– Мы своим примером доказали обратное!</q>
								</blockquote>
							</div>
						</li>
					</ul>
				</section>
				<section class="section section-examples">
					<h1>Вот вам живой пример <br>в нашем лице</h1>
                    <div class="block-video">
						<iframe width="851" height="479" src="http://www.youtube.com/embed/X6NPu3eABWA" frameborder="0"></iframe>
					</div>
					<h2>Еще раз напомним, что мы такие же простые люди, как вы. Просто в отличие от вас мы уже решились открыть свой бизнес. И вот чего мы достигли (а значит и вы тоже сможете):</h2>
					<ul class="list-examples">
						<li>
							<h3>Интернет-магазин <a href="http://www.deoshop.ru/">Deoshop.ru</a></h3>
							<p>Владельцы: Тимур Шаков и Сергей Балакирев</p>
							<div class="image-block">
								<img src="images/img08.jpg" alt="Deoshop.ru" width="648" height="481" >
							</div>
							<ul class="listing">
								<li>Крупнейший интернет-магазин косметики в Рунете.</li>
								<li>Ежемесячный оборот более 5 000 000 рублей. Более 100 000 клиентов.</li>
								<li>Сертификат успешной закупки в 2012 году.</li>
								<li>Участник международной ассоциации электронных ритейлеров.</li>
							</ul>
						</li>
						<li>
							<h3>Интернет-магазины <a href="http://video-shoper.ru/">Video-shoper.ru</a> и <a href="http://new.bodo.ua/">Bodo.ru</a></a></h3>
							<p>Владелец: Николай Федоткин</p>
							<div class="image-block">
								<img src="images/img09.jpg" alt="video-shoper.ru" width="648" height="481" >
							</div>
							<div class="image-block">
								<img src="images/img10.jpg" alt="bodo.ua" width="646" height="580" >
							</div>
							<ul class="listing">
								<li>Ежемесячный оборот более 100 000 000 рублей</li>
								<li>Созданы с нуля охранником книжного магазина из провинции и за три года вышли на оборот 1 млрд рублей в год.</li>
							</ul>
						</li>
					</ul>
					<div class="box-grey-2">
						<h2>Без инвестиций, Без технических знаний Все магазины прибыльны</h2>
					</div>
					<h2>Знаете, чего еще здесь не хватает? <br> Вашего магазина с крупным доходом, который достоин встать в одну колонку с нашим. <br> Вот так:</h2>
					<div class="box-example">
						<h3>Ваш прибыльный интернет-магазин</h3>
						<p>Владельц: Вы</p>
						<div class="box-green">
							<span>Прибыльный интернет-магазин.ru</span>
						</div>
						<ul class="listing">
							<li>Ежемесячный доход от 100 000 рублей</li>
						</ul>
					</div>
					<p>Хватит размышлять. Делайте. Прямо сейчас. А мы поможем вам достигнуть конкретных результатов.</p>
				</section>
				<section class="section-packages packages2">
					<h1>НАЧНИТЕ СВОЕ ДЕЛО ПРЯМО СЕЙЧАС</h1>
					<ul class="packages">
						<li class="stretch">
							<header class="heading">
								Тест драйв <span class="price">3 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Запись мастер-класса</li>
								<li>Ответы на вопросы</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">План на 100 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54342/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
						<li class="stretch">
							<header class="heading">
								VIP <span class="price">5 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Мастер-класс Тимура Шакова</li>
								<li>Мастер-класс Сергея Балакирева</li>
								<li>Запись мастер-классов</li>
								<li>Ответы на вопросы</li>
								<li>Запись тренинга Битва интернет-магазинов</li>
								<li>Запись тренинга Секретные техники продаж каирских бедуинов</li>
								<li>Запись тренинга SEO для интернет-магазина</li>
								<li>Запись тренинга Яндекс директ для интернет-магазина</li>
								<li>Запись тренинга Продажи через Вконтакте</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">Цель +300 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54341/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
					</ul>
					<div class="agree">
						<img src="images/ico-tick.gif" alt="" class="alignleft" width="35" height="29" >
						<span class="text">Нажимая кнопку Участвовать или Победить вы принимаете условия <a href="#">Договора-оферты</a></span>
					</div>
				</section>
				<section class="section steps">
					<h1 class="small">Теория здесь не работает</h1>
					<h2>Если вы теоретик и привыкли решать все бизнес-задачи в уме или на бумажке, то вы можете уходить. У вас ничего не получится.</h2>
					<p>Потому что открытие бизнеса — это прежде всего ПРАКТИЧЕСКАЯ НАУКА. И именно практическими занятиями мы с вами и займемся.</p>
					<p>Ваш мозг уже придумал слишком много всего. А из этой схемы вы узнаете, с чего на самом деле начинать, какие ресурсы вам необходимы, какие препятствия вы можете встретить и как их избежать.</p>
					<img src="images/img15.png" alt="image description" class="aligncenter" width="583" height="1008" >
				</section>
				<section class="section">
					<h1>Наш тренинг принесет <br>вам результат. </h1>
					<h2>Если нет — вернем вам деньги</h2>
					<p>Мы – не теоретики и не консультанты. Мы практики, построившие свои компании с ноля. Мы всего добились сами. Сегодня в наших интернет магазинах работает почти 200 человек. Ниже на видео Вы можете увидеть одну из точек самовывоза интернет-магазина Video-shoper.ru Николай Федоткин. В его компаниях работает уже 138 человек. Хотите, что бы у Вас было так же? Тогда записывайтесь на тренинг бизнес-практиков.</p>
					<div class="block-video-2">
						<iframe width="638" height="390" src="http://www.youtube.com/embed/vIReW7icktI" frameborder="0"></iframe>
					</div>
					<img src="images/img16.png" alt="image description" class="aligncenter" width="987" height="407" >
					<p>Именно так. У вас есть абсолютно безопасная возможность стать бизнесменом — не упустите ее. Просто начните действовать.</p>
				</section>
				<section class="section-packages">
					<h1>НАЧНИТЕ СВОЕ ДЕЛО ПРЯМО СЕЙЧАС</h1>
					<ul class="packages">
						<li class="stretch">
							<header class="heading">
								Тест драйв <span class="price">3 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Запись мастер-класса</li>
								<li>Ответы на вопросы</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">План на 100 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54342/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
						<li class="stretch">
							<header class="heading">
								VIP <span class="price">5 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Мастер-класс Тимура Шакова</li>
								<li>Мастер-класс Сергея Балакирева</li>
								<li>Запись мастер-классов</li>
								<li>Ответы на вопросы</li>
								<li>Запись тренинга Битва интернет-магазинов</li>
								<li>Запись тренинга Секретные техники продаж каирских бедуинов</li>
								<li>Запись тренинга SEO для интернет-магазина</li>
								<li>Запись тренинга Яндекс директ для интернет-магазина</li>
								<li>Запись тренинга Продажи через Вконтакте</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">Цель +300 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54341/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
					</ul>
					<div class="agree">
						<img src="images/ico-tick.gif" alt="" class="alignleft" width="35" height="29" >
						<span class="text">Нажимая кнопку Участвовать или Победить вы принимаете условия <a href="#">Договора-оферты</a></span>
					</div>
				</section>
				<section class="section">
					<h1 class="small-2">Кстати, вы у нас не первый</h1>
					<h2>Что говорят клиенты, которые прошли <br>другие наши тренинги?</h2>
					<p>Наши тренинги — залог успешности. И многие клиенты убедились в этом на деле. <br>Вот лишь несколько отзывов людей, ставших предпринимателями благодаря команде Imsider:</p>
					<ul class="list-testimonials">
						<li>
							<div class="block-visual">
								<div class="holder">
									<img src="images/img11.jpg" alt="Сеяр Аблязизов" width="170" height="172" >
								</div>
							</div>
							<div class="text-block">
								<h2>Сеяр Аблязизов</h2>
								<strong class="title"><a href="http://katrini.ru">katrini.ru</a> (магазин создан с нуля на нашем проекте)</strong>
								<p><strong>Супер! Мне понравилось. Было интересно слышать Сергея и Тимура!</strong> Очень вдохновили ребята. Я писал Сергею, что местами мне казалось, что он угадывает мои мысли. Мне даже петь хотелось после семинара. Очень вдохновили и много фишек рассказали. Молодцы!</p>
							</div>
						</li>
						<li>
							<div class="block-visual">
								<div class="holder">
									<img src="images/img12.jpg" alt="Алина Мухаметгареева" width="177" height="182" >
								</div>
							</div>
							<div class="text-block">
								<h2>Алина Мухаметгареева</h2>
								<strong class="title"><a href="http://sleeper-keeper.ru">sleeper-keeper.ru</a></strong>
								<p><strong>Первый интернет-магазин, первый заказ, первые продажи!</strong> Когда я узнала о проекте Имсайдер, кроме желания открыть интернет магазин и кучи страхов, у меня ничего не было. Ни идеи ЧТО продавать, и уж тем более КАК продавать. За время проведения тренинга я так много узнала, что мне кажется сложно все перечислить. После тренинга, спустя месяц – собственный интернет-магазин, первый заказ на сумму 2500 руб., первый заработок (в жизни), если не считать подработку в студенческие годы) и вера, что все получится!</p>
							</div>
						</li>
						<li>
							<div class="block-visual">
								<div class="holder">
									<img src="images/img13.jpg" alt="Максим Макогонов" width="170" height="172" >
								</div>
							</div>
							<div class="text-block">
								<h2>Максим Макогонов</h2>
								<p><strong>Тренинг «Интернет-магазин за вечер. Формула быстрого старта» неожиданно оказался полным ценной информации.</strong> Ребята показали искреннее желание помогать новичкам в создании интернет-магазинов, причем бесплатно. Таких щедрых на информацию тренеров в рунете практически нет. Не смотря на то, что тренинг шёл несколько часов и его не обошли стороной технические неполадки, информация слушалась на одном дыхании. Отдельное спасибо за то, что были даны примеры перспективных ниш, одну из ниш уже тестирую. Спасибо большое!</p>
							</div>
						</li>
					</ul>
					<ul class="list-video">
						<li><iframe width="638" height="390" src="http://www.youtube.com/embed/AW-Zebt7c0M" frameborder="0"></iframe></li>
						<li><iframe src="http://player.vimeo.com/video/61881429" width="638" height="390" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
						<li><iframe width="638" height="390" src="http://www.youtube.com/embed/5JMGDdFlHLg" frameborder="0"></iframe></li>
					</ul>
				</section>
				<section class="section">
					<h1>А может продолжить <br>работать на «дядю»?</h1>
					<p>В конце-концов, нужен ли вам этот бизнес? Этот творческий поиск, волнения, поиск нового? Ведь работа в офисе не так уж и плоха. А кое в чем она  действительно лучше собственного бизнеса. Хотя бы вот в этом:</p>
					<ul class="list-reasons listing">
						<li>Вам не надо волноваться и решать сложные проблемы</li>
						<li>У вас стабильная зарплата и четкий круг обязанностей</li>
						<li>Ваш уровень ответственности гораздо ниже</li>
						<li>Вы не вкладываете и не теряете собственные деньги</li>
						<li>У вас нормированный восьмичасовой рабочий день.</li>
					</ul>
					<p>Что? Вы хотите творческой свободы, исполнения вашей мечты, независимости и богатства? Тогда работа на «дядю» для вас полна недостатков. Скажем, вот таких:</p>
					<ul class="list-reasons listing">
						<li>Вам приходится делать то, что вам приказывают</li>
						<li>Ваша зарплата редко растет, а говорить о саморазвитии и вовсе не приходится</li>
						<li>Вас постоянно преследует страх потерять работу</li>
						<li>Чем старше вы становитесь, тем сложнее найти выгодное место</li>
						<li>Вас постоянно пытаются «подсидеть»</li>
						<li>Каждый день вам приходится вставать в семь утра</li>
						<li>Отпуск приходится выбивать с боем</li>
					</ul>
					<p>Конечно, это можно терпеть. Но подумайте о своих планах на старость? Кому вы будете нужны? Государству? Разве на пенсию в 10 000 вы сможете прожить?</p>
					<p>А между тем старость приближается. И времени, чтобы что-то предпринять остается все меньше и меньше.</p>
					<p>Вы уже придумали, что делать? Положили деньги в сбербанк?</p>
					<p>У нас есть способ лучше.</p>
					<img src="images/img17.jpg" alt="Вложите деньги в собственное дело. И прибыль не заставит вас ждать." class="aligncenter" width="952" height="651" >
				</section>
				<section class="section-packages">
					<h1>НАЧНИТЕ СВОЕ ДЕЛО ПРЯМО СЕЙЧАС</h1>
					<ul class="packages">
						<li class="stretch">
							<header class="heading">
								Тест драйв <span class="price">3 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Запись мастер-класса</li>
								<li>Ответы на вопросы</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">План на 100 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54342/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
						<li class="stretch">
							<header class="heading">
								VIP <span class="price">5 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Мастер-класс Тимура Шакова</li>
								<li>Мастер-класс Сергея Балакирева</li>
								<li>Запись мастер-классов</li>
								<li>Ответы на вопросы</li>
								<li>Запись тренинга Битва интернет-магазинов</li>
								<li>Запись тренинга Секретные техники продаж каирских бедуинов</li>
								<li>Запись тренинга SEO для интернет-магазина</li>
								<li>Запись тренинга Яндекс директ для интернет-магазина</li>
								<li>Запись тренинга Продажи через Вконтакте</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">Цель +300 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54341/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
					</ul>
					<div class="agree">
						<img src="images/ico-tick.gif" alt="" class="alignleft" width="35" height="29" >
						<span class="text">Нажимая кнопку Участвовать или Победить вы принимаете условия <a href="#">Договора-оферты</a></span>
					</div>
				</section>
				<section class="section">
					<h1>Просто делайте</h1>
					<p>И начните зарабатывать деньги. Посмотрите видео ниже - это магазин Deoshop.ru который создали Сергей Балакирев и Тимур Шаков. С ноля. Оба предпринимателя приехали в Москву из провинции. Сегодня это второй по величине интернет-магазин натуральной косметики в России с оборотом 3 млн долларов. На тренинге Сергей с Тимуром расскажут как им это удалось. Смотрите видео и записывайтесь на тренинг.</p>
					<div class="block-video-2">
						<iframe width="638" height="390" src="http://www.youtube.com/embed/hTF3e68Gbhk" frameborder="0"></iframe>
					</div>
				</section>
				<section class="section">
					<h1>Время работать <br>на результат</h1>
					<p>Самое сложное — это действовать прямо сейчас. Поэтому если вы предпочитаете размышлять, а не делать, закройте эту страницу. Ведь мы не будем ждать вас вечно.</p>
					<p>Уверены в себе и готовы получить пошаговый план для открытия своего интернет-магазина всего за 3 дня?</p>
					<div class="block-action">
						<span>В таком случае вы знаете что делать.</span>
					</div>
				</section>
				<section class="section-packages packages2">
					<h1>НАЧНИТЕ СВОЕ ДЕЛО ПРЯМО СЕЙЧАС</h1>
					<ul class="packages">
						<li class="stretch">
							<header class="heading">
								Тест драйв <span class="price">3 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Запись мастер-класса</li>
								<li>Ответы на вопросы</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">План на 100 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54342/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
						<li class="stretch">
							<header class="heading">
								VIP <span class="price">5 000 <span class="rouble">&#8399;</span></span>
							</header>
							<ul>
								<li>Мастер-класс Николая Федоткина</li>
								<li>Мастер-класс Тимура Шакова</li>
								<li>Мастер-класс Сергея Балакирева</li>
								<li>Запись мастер-классов</li>
								<li>Ответы на вопросы</li>
								<li>Запись тренинга Битва интернет-магазинов</li>
								<li>Запись тренинга Секретные техники продаж каирских бедуинов</li>
								<li>Запись тренинга SEO для интернет-магазина</li>
								<li>Запись тренинга Яндекс директ для интернет-магазина</li>
								<li>Запись тренинга Продажи через Вконтакте</li>
							</ul>
							<footer class="bottom-block">
								<strong class="title">Цель +300 000</strong>
								<div class="button-row"><button onclick="location.href='http://imsider.justclick.ru/ad/54341/'" type="button" class="button">Открыть бизнес</button></div>
							</footer>
						</li>
					</ul>
					<div class="agree">
						<img src="images/ico-tick.gif" alt="" class="alignleft" width="35" height="29" >
						<span class="text">Нажимая кнопку Участвовать или Победить вы принимаете условия <a href="#">Договора-оферты</a></span>
					</div>
				</section>
				<section class="section-counter">
					<h1>Станьте участником тренинга.</h1>
					<h2>Прямо сейчас.</h2>
					<div id="counter_timer"></div>
				</section>
			</div>
		</div>
	</div>
</body>
</html>