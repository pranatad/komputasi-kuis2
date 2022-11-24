
<?php

if(isset($_POST['kode_det_brg'])){
$kode_det_brg = $_POST['kode_det_brg'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$kode_brg	= $_POST['kode_brg'];
	$stok_brg	= $_POST['stok_brg'];
	$id_bag_gudang	= $_POST['id_bag_gudang'];
	$tgl_det_brg	= $_POST['tgl_det_brg'];
	
	$dataValid = "YA";
		
	if (strlen(trim($kode_brg))==0){
		echo " Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($stok_brg))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_gudang))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($tgl_det_brg))==0){
		echo "Harus Diisi! <br/>";
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
		$sql = "update detail_barang set
		kode_brg = '$kode_brg' ,
		stok_brg = '$stok_brg' ,
		id_bag_gudang = '$id_bag_gudang' , 
		tgl_det_brg = '$tgl_det_brg'  
		where kode_det_brg = $kode_det_brg ";
	}else{
		
	$sql = "insert into detail_barang
			(kode_brg,stok_brg,id_bag_gudang,tgl_det_brg)
			values
			('$kode_brg','$stok_brg',$id_bag_gudang,'$tgl_det_brg') ";
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
	echo "<a href='detail_tampil.php'>Daftar Detail Barang</a>";
	exit;
								
?>
</hr>
<a href="detail_tampil.php" />DAFTAR Detail Barang</a> 