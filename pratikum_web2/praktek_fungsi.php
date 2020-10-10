<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Praktek Fungsi</title>
</head>
<body>
	<h1>Penjumlahan dan Pengurangan Menggunakan Fungsi</h1>

	Nilai A = 8; <br>
	Nilai B = 6;

	<?php  
		function tambah($a, $b){
			return $a + $b;
		}
		function kurang($a, $b){
			return $a - $b;
		}
		function jarak() {
			echo "<br>";
		}
		jarak();
		echo "Hasil Penjumlahan A + B = ". tambah(8,6);
		jarak();
		echo "Hasil Pengurangan A - B = ". kurang(8,6);
	?>


</body>
</html>