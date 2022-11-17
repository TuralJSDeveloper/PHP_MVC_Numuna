<h3>Məlumatlar bazadan alınıb</h3>
<table>
<?php

foreach ($baza as $bazas) {
   echo "<tr><td>".$bazas["Ad"]." </td> "."<td>".$bazas["Soyad"]." </td> "."<td>".$bazas["Tarix"]."</td></tr>";
}
?>

</table>