
<?php
	$id = $_GET['id'];
	$conn = mysqli_connect('db', 'user', 'test', "teman");
	$sql = "select * from kanco where id ='$id'";
	$hasil = mysqli_query($conn, $sql);
	if (!$hasil) die ("gagal koneksi");
	
	$data = mysqli_fetch_assoc($hasil);
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$nohp = $data["nohp"];
	$stats = $data["stats"];
?>

<h2>.::EDIT BARANG::.</h2>
<form action="simpan.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>"/>
	<table border="1">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $nama;?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $alamat;?>"/></td>
	</tr>
	<tr>
		<td>Nohp</td>
		<td><input type="text" name="nohp" value="<?php echo $nohp;?>"/></td>
	</tr>
<tr>
		<td>Status</td>
		<td><input type="text" name="stats" value="<?php echo $stats;?>"/></td>
	</tr>

	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="proses" value="Submit"/>
		<input type="reset" name="reset" value="Reset"/>
		</td>
	</tr>
	</table>
</form>
