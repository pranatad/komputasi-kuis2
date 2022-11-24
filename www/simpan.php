<?php
	if(isset($_POST['id'])){
		$id = $_POST['id'];
	$simpan = "EDIT";
	}else{
	$simpan = "BARU";	
	}
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$stats = $_POST['stats'];

	$conn = mysqli_connect('db', 'user', 'test', "teman");
	if($simpan == "EDIT"){
		
		$sql = "update kanco set
			nama = '$nama',
			alamat = '$alamat',
			nohp = '$nohp',
			stats = '$stats'
			where id = $id";
		}
	else{
		$sql = "insert into kanco
			(nama,alamat,nohp,stats)
			values
			('$nama', $alamat, $nohp, '$stats')";
		}
	$hasil = mysqli_query($conn, $sql);
	if(!$hasil){
		echo "Gagal simpan, silahkan diulangi!</br>";
		echo mysqli_error($conn);
		echo "<input type='button' value='kembali'
		onClick='self.history.back()'>";
		exit;} 
	else {
	echo "Simpan data berhasil";}
	
?>
<hr/>
