<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Npm</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>no_telepon</td>
				<td><input type="text" name="no_telepon"></td>
			</tr>
			<tr>
			    <td>tgl_lahir</td>
			    <td><input type="text" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>


				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$no_telepon = $_POST['no_telepon'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$alamat = $_POST['alamat'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa(npm,nama,no_telepon,tgl_lahir,alamat) VALUES('$npm','$nama','$no_telepon','$tgl_lahir','$alamat')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>