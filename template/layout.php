<!DOCTYPE html>
<html>
<head>
	<title><?= $page_title; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?= $page_desc; ?>">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
	<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="/favicons/mstile-70x70.png">
	<meta name="msapplication-square144x144logo" content="/favicons/mstile-144x144.png">
	<meta name="msapplication-square150x150logo" content="/favicons/mstile-150x150.png">
	<meta name="msapplication-square310x310logo" content="/favicons/mstile-310x310.png">
	<meta name="msapplication-wide310x150logo" content="/favicons/mstile-310x150.png">

	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,500italic,400italic,300italic,100italic,900,700,500,300,100&subset=cyrillic-ext,latin" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="template/css/jquery.reject.css" />
	<link rel="stylesheet" type="text/css" href="template/css/flipclock.css" />
	<link rel="stylesheet" type="text/css" href="template/css/social-likes.css" />
	<link rel="stylesheet" type="text/css" href="template/css/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="template/css/style.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<!--[if gte IE 9]><style type="text/css"> .gradient {filter: none;}</style><![endif]-->
		<!-- дата и время для счетчика -->
	<script>
		var counter_time_left = <?=$diff;?>;
	</script>
	<script type="text/javascript" src="template/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="template/js/jquery.reject.js"></script>
	<script type="text/javascript" src="template/js/jquery.activity.min.js"></script>
	<script type="text/javascript" src="template/js/flipclock.min.js"></script>
	<script type="text/javascript" src="template/js/social-likes.min.js"></script>
	<script type="text/javascript" src="template/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="template/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="template/js/jquery.countdown-ru.js"></script>
	<script type="text/javascript" src="template/js/script.js"></script>

    <script type="text/javascript" src="//cdn.sublimevideo.net/js/5pi32zdd.js"></script>
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

	<!-- GetResponse tracking code -->
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
	<!-- / GetResponse tracking code -->
	<script src="/<?=$pulse_dir;?>/includes/tracker.php?uri=<?=$_SERVER['REQUEST_URI'];?>&ref=<?=$_SERVER['HTTP_REFERER'];?>"></script>

	<img alt="" src="template/images/close.png" />
	<img alt="" src="template/images/fancybox_loading.gif" />
	<img alt="" src="template/images/fancybox_overlay.png" />
	<img alt="" src="template/images/blank.gif" />
</div>

<?=$content;?>


</body>
</html>