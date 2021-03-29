<!DOCTYPE html>
<html>
<head>
	<title>Isi Biodata</title>
</head>
<h1> BIODATA</h1>
<body>
	<!-- Pengambilan data yang diinginkan dengan mengisi pada border biodata
	 -->
<table border="2">
	<form action="outputbiodata.php" method="POST">
		<tr>
			<td>NPM</td>
			<td> : </td>
			<td><input type="text" name="NPM"></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td> : </td>
			<td><input type="text" name="Nama"></td>
		</tr>
		<tr>
			<td>Hobi Anda </td>
			<td> : </td>
			<td><input type="text" name="hobi"></td>
		</tr>
		<tr>
			<td>Jurusan Kuliah </td>
			<td> : </td>
			<td><input type="text" name="Jurusan"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td> : </td>
			<td><input type=radio name=JK value="Laki-Laki">Laki-Laki
				<input type=radio name=JK value=Perempuan>Perempuan
			</td>
		</tr>
		<tr>
			<td>Alamat rumah </td>
			<td> : </td>
			<td><input type="textfield" name="Alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="tambah data"></td>
		</tr>
	</form>
</table>
</body>
</html>