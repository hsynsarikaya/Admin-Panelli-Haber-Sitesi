<?php 
	
	$username="root";
	$password="cece1453";
	$sunucu="localhost";
	$database ="magexpress";

	$baglan = mysql_connect($sunucu,$username,$password);
	mysql_query("SET NAMES UTF8");

	if (!$baglan) {
		echo "Bağlantı Hatası:".mysql_errno();
		exit();
	}
	
	$db=mysql_select_db($database);
	if (!$db) {
		echo "Veritabanı Hatası:".mysql_error(); echo "<br>";
	}
?>