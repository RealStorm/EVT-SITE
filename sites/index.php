<?php 
	include "../functions/simple_html_dom.php";

	$html = file_get_html('http://livetracking.evt.com.pl/index.php/ltcontroller/getBestDriversStatsHTML');
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>Europe Virutal Transport</title>
		<link rel="stylesheet" href="../sass/style.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<header>
				<a href="index.html"><img class="left" src="../assets/images/evt.png" alt="Europe Virutal Transport logo"></a>
				<ul>
					<li><a href="http://evt.com.pl/forum/index.php">Forum</a></li>
					<li><a href="kontakt.html">Kontakt</a></li>
					<li><a href="garaz.html">Garaż</a></li>
					<li><a href="http://livetracking.evt.com.pl">Live Tracking</a></li>
				</ul>
				<a href="https://www.facebook.com/EuropeVirtualTransport"><img class="right" src="../assets/images/facebook.png" alt="evt-facebook"></a>
			</header>
			<main>
		<aside class="left"><h3>Facebook</h3>
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEuropeVirtualTransport&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></aside>
		<div class="middle"><h2>Rekrutacja OFF</h2><p class="welcometext">Witaj na oficjalnej stronie firmy Europe Virutal Transport.<p>
			<p class="indextext">Firma Europe Virutal Transport powstała 29 lipca 2013r i jest jedną z najdłużej działających  wirtualnych spedycji w Polsce.
			W naszej  pracy posługujemy się Systemem telematycznym Live Tracking System (LTS),stworzonym specjalnie na potrzeby naszej firmy.</p>
			<p class="indextext">System ten pozwala nam nadzorować pracę naszych kierowców oraz zautomatyzował wystawianie i rozliczanie frachtów.<br>
			Jako jedyna wirtualna spedycja w Polsce posiadamy autorski program do obsługi floty naszych pojazdów którego nie powstydziła by się realna firma transportowa.</p>
			<p class="indextext">Live Tracking System to autorski pomysł założycieli firmy  Europe Virutal Transport Łukasza, Szymona  rozwijany dalej przez Adama i Patryka.</p>
		</p></div>
		<aside class="right">
			<h3>Najlepsi kierowcy</h3>
			<table class="kierowcy">
				<?php
					foreach($html -> find('tr') as $element){
						echo $element;
					}
				 ?>
			</table>
		</aside>
		</main>
		<footer>
			<p>Strona wykonana przez Patryk Rybaczek 2016</p>
		</footer>
	</body>
</html>