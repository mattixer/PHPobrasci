<!DOCTYPE html>
<html>
<body>
<?php
	$ime=$_GET["ime"];
	$prezime=$_GET["prezime"];
	$ulica=$_GET["ulica"];
	$broj=$_GET["broj"];
	$primjedba=$_GET["primjedba"];
	$zemlja=$_GET["zemlja"];
	$telbr=$_GET["telbr"];
	$nickname=$_GET["nickname"];
	$password=$_GET["password"];

	echo "Ime: $ime<br>";
	echo "Prezime: $prezime<br>";
	echo "Ulica: $ulica<br>";
	echo "Broj: $broj<br>";
	echo "Primjedba: $primjedba<br>";
	echo "Zemlja: $zemlja<br>";
	echo "Tel. br.: $telbr<br>";
	echo "Korisnicko ime: $nickname<br>";
	echo "Lozinka: $password<br>";
?>
</body>
</html>