<?php
	
	//$response = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Beaverton&appid=705e4ebdb06f6660f408873f8d20c5d4');
	$response = '{"coord":{"lon":-122.8037,"lat":45.4871},"weather":[{"id":500,"main":"Rain","description":"light rain","icon":"10n"}],"base":"stations","main":{"temp":284.8,"feels_like":284.48,"temp_min":283.37,"temp_max":286.6,"pressure":1014,"humidity":94},"visibility":10000,"wind":{"speed":0.89,"deg":325,"gust":2.24},"rain":{"1h":0.1},"clouds":{"all":90},"dt":1635506536,"sys":{"type":2,"id":2007267,"country":"US","sunrise":1635518814,"sunset":1635555763},"timezone":-25200,"id":5713376,"name":"Beaverton","cod":200}';
	$array = json_decode($response);
	echo $response->weather->id;
?>
<html>
	<body>
		Test!
	</body>
</html>