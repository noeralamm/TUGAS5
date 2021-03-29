<h1><center>B I O D A T A </center></h1>
<?php
//Pendeklarasian variabel
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$JK = $_POST['JK'];
$Alamat = $_POST['Alamat'];
$hobi = $_POST['hobi'];

//pengambilan data untuk mengisi tampilan pada biodata
if ($NPM == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Nama == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Jurusan == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($JK == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
} elseif ($Alamat == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
}elseif ($hobi == "") {
	echo "<center>Lengkapi Data Biodata anda</center><br>";
//untuk menampilkan isian data tersebut
} else {
	echo "Npm : $NPM<br>" ;
	echo "Nama : $Nama<br>";
	echo "hobi : $hobi<br>";
	echo "Jurusan : $Jurusan<br>";
	echo "Jenis Kelamin : $JK<br>";
	echo "Alamat : $Alamat<br>";
}
?>