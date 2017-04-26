<?php
	
	$json_string = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/almanac/q/ID/Semarang.json");
	$parsed_json = json_decode ($json_string);
	$json_string1 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/conditions/q/IA/mugas.json");
	$parsed_json1 = json_decode ($json_string1);
	$json_string2 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/astronomy/q/IA/Mugas.json");
	$parsed_json2 = json_decode ($json_string2);
	$json_string3 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/forecast/q/IA/Mugas.json");
	$parsed_json3 = json_decode ($json_string3);
	$json_string4 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/planner_07010731/q/IA/Mugas.json");
	$parsed_json4 = json_decode ($json_string4);
	$json_string5 = file_get_contents("http://api.wunderground.com/api/59aff698dad25e5b/yesterday/q/IA/Mugas.json");
	$parsed_json5 = json_decode ($json_string5);
	$icon = $parsed_json3->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'icon'};
	$negara = $parsed_json->response->results[0]->country_name;
  	$kota = $parsed_json->response->results[0]->city;
	$location = $parsed_json1->{'current_observation'}->{'display_location'}->{'full'};
	$date = $parsed_json1->{'current_observation'}->{'local_time_rfc822'};
	$angin = $parsed_json1->{'current_observation'}->{'wind_mph'};
	$ageOfMoon = $parsed_json2->{'moon_phase'}->{'ageOfMoon'};
	$sunrise = $parsed_json2->{'moon_phase'}->{'sunrise'}->{'hour'};
	$sunset = $parsed_json2->{'moon_phase'}->{'sunset'}->{'hour'};
	$min = $parsed_json4->{'trip'}->{'temp_high'}->{'min'}->{'C'};
	$max = $parsed_json4->{'trip'}->{'temp_high'}->{'max'}->{'C'};
	$avg = $parsed_json4->{'trip'}->{'temp_high'}->{'avg'}->{'C'};
	$cuaca = $parsed_json4->trip->cloud_cover->cond;
	$kemarin = $parsed_json5->{'history'}->{'date'}->{'pretty'};
	$visibility_km= $parsed_json1->{'current_observation'}->{'visibility_km'};
	echo "lokasi saat ini :";
	echo "<br>";
  	echo "kota   : $kota<br>";
	echo "negara :$negara<br>";
	echo "<br>";
	echo "Pada daerah ${location} diketahui :<br>";
	echo "<br>";
	echo "${date}<br>";
	echo "<br>";
	echo "cuaca saat ini :<br>";
	echo"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img src='http://icons.wxug.com/i/c/k/".$icon.".gif'> <br/>";
	echo "$cuaca<br>";
	echo "<br>";
	echo "Kecepatan Angin : ${angin} meter/jam<br>";
	echo "Jarak pandang : ${visibility_km}km<br>";
	echo "<br>";
	echo "Umur bulan : ${ageOfMoon}";
	echo "<br>";
	echo "Sunrise pada pukul ${sunrise}";
	echo "<br>";
	echo "Sunset pada pukul ${sunset}<br>";
	echo "<br>";
	echo "Suhu<br>";
	echo "Minimal : ${min}<br>";
	echo "Maximal : ${max}<br>";
	echo "Rata-rata : ${avg}<br>";
	echo "<br>";
	echo "<br>";
	echo "diperbaruhi ${kemarin}\n";
	echo "<br>";
	
	
	
	
	
	
	
	

	
