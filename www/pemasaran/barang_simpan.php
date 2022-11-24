<?php

if(isset($_POST['kode_brg'])){
$kode_brg = $_POST['kode_brg'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$nama_brg	= $_POST['nama_brg'];
	$jenis_brg	= $_POST['jenis_brg'];
	$harga	= $_POST['harga'];
	
	$dataValid = "YA";
		
	if (strlen(trim($nama_brg))==0){
		echo "Nama barang Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($jenis_brg))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($harga))==0){
		echo "Harga Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if ($dataValid == "TIDAK"){
		echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>";
		echo "<input type='button' value='kembali'
			  onClick = 'self.history.back()'> ";
		exit;
	}
	
	include "../koneksi2.php";
	
	if($simpan == "EDIT"){
		$sql = "update barang set
		nama_brg = '$nama_brg' ,
		jenis_brg = '$jenis_brg' , 
		harga = $harga  
		where kode_brg = $kode_brg ";
	}else{
		
	$sql = "insert into barang
			(nama_brg,jenis_brg,harga)
			values
			('$nama_brg','$jenis_brg',$harga) ";
	}		
	$hasil = mysqli_query($kon, $sql);

	
	if (!$hasil){
		echo "Gagal Simpan, silahkan ulangi! <br/>";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value'Kembali'
			onClick = 'self.history.back()'> ";
		exit;
	} else {
		echo "Simpan data berhasil" ;
	}
	echo "<a href='barang_tampil.php'>Daftar Barang</a>";
	exit;
								
?>
</hr>
<a href="barang_tampil.php" />DAFTAR Barang</a> 