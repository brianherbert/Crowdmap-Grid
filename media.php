<?php
	$curl_handle = curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,'http://api.crdmp3.com/v1/media/?fields=media.file_location,media.filename_l');
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,15); // Timeout set to 15 seconds. This is somewhat arbitrary and can be changed.
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1); //Set curl to store data in variable instead of print
	curl_setopt($curl_handle,CURLOPT_SSL_VERIFYPEER,false);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);
	echo $buffer;
?>