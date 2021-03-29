<html>
<head>
<title> Pemograman PHP dengan Array </title>    
</head>
<body>
<?php
//penulisan array depat dibuat seperti berikut
$nama[] = "ALAM";
$nama[] = "NOER";
$nama[] = "Yahya";
//berfungsi untuk menampilkan array sesuai dengan urutan 
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
//menghitung jumlah elemen array
$jum_array = count($nama);
//menampilkan jumlah array
echo "jumlah elemen array = ".$jum_array;
?>   
</body>    
</html>