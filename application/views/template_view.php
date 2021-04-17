<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>MVC</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/structure_mvc/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<span> SF SCHOOL</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="index.php?url=main">Главная</a></li>
						<li><a href="index.php?url=services">Опрос общественного мнения</a></li>
						
						<li class="last"><a href="index.php?url=contacts">Контакты</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="content">
					<div class="box">
						<?php include $content_view; ?>
						
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				
				<div id="page-bottom-content">
					<h3>Стихотворение А.С Пушкина</h3>
					<p>
					Я вас любил: любовь еще, быть может,
В душе моей угасла не совсем;
Но пусть она вас больше не тревожит;
Я не хочу печалить вас ничем.
Я вас любил безмолвно, безнадежно,
То робостью, то ревностью томим;
Я вас любил так искренно, так нежно,
Как дай вам бог любимой быть другим.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		
	</body>
</html>