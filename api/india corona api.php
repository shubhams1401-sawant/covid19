<?php
	// $data = file_get_contents('https://api.covid19api.com/summary'); //world data
	$data = file_get_contents('https://api.covid19india.org/data.json'); // india data
	$coronadata = json_decode($data);

	echo "<pre>";
	print_r($coronadata);
?>	