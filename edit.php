<!DOCTYPE html>
<html>
<head>
	<title>Membuat sistem CRUD Dengan PHP Dan MySQL dan Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat Sistem CRUD Dengan PHP Dan MySQL</h1>
		<h3>Edit data dari database</h3>
	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>
	<form action="edit-2.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="number" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>

				
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
