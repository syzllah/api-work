<?php

function convert($value) {

	$result = preg_replace("/[^a-zA-Z]/", " ", $value);
	return $result;
}

echo convert("Engineer-Wairuri-Kamau(ER)|20.00,15,16\n");
echo convert("Doctor Wamvua Ka12mbua(DR) `12040102010\r\n");
echo convert("Miss Topoi Susan\r\n");
echo convert("Engineer-Wairuri-Kamau|20.00,15,16\r\n");
?>