<?php
include 'Model/Baza.php';

function anasayfa(){
	sayfa_goster("View/Html/Anasayfa.php","Anasayfa",$hazir_malumat = false);
}

function haqqinda(){
	sayfa_goster("View/Html/Haqqinda.php","Haqqinda",$hazir_malumat = false);
}

function melumatlar(){
	$hazir_malumat = melumatlari_al();
	sayfa_goster("View/Html/Melumatlar.php","Malumatlar",$hazir_malumat);
}
function sehv(){
	echo "Səhv";
}

?>