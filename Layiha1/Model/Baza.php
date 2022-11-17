<?php

$vb = new mysqli("localhost","root","","grams");

function melumatlari_al(){
	global $vb;

	$melumatlar = $vb->query("SELECT * FROM users ORDER BY id DESC");
	$hazir_melumat = $melumatlar->fetch_all(1);
	return $hazir_melumat;
}

?>