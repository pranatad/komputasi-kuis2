<?php
if(isset($_POST['kode_per_brg'])){
$kode_per_brg = $_POST['kode_per_brg'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$kode_brg	= $_POST['kode_brg'];
	$id_bag_pemasaran	= $_POST['id_bag_pemasaran'];
	$id_bag_gudang	= $_POST['id_bag_gudang'];
	$qty	= $_POST['qty'];
	$tgl_per_brg	= $_POST['tgl_per_brg'];
	
	$dataValid = "YA";
	
		if (strlen(trim($kode_brg))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_pemasaran))==0){
		echo "Harga Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($id_bag_gudang))==0){
		echo "Harga Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($qty))==0){
		echo "Harga Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($tgl_per_brg))==0){
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
		$sql = "update permintaan_barang set
		kode_brg = '$kode_brg' ,
		id_bag_pemasaran = '$id_bag_pemasaran' ,
		id_bag_gudang = '$id_bag_gudang' , 
		qty = '$qty',
		tgl_per_brg = '$tgl_per_brg'  
		where kode_per_brg = $kode_per_brg ";
	}else{
		
	$sql = "insert into permintaan_barang
			(kode_brg,id_bag_pemasaran,id_bag_gudang,qty,tgl_per_brg)
			values
			('$kode_brg','$id_bag_pemasaran','$id_bag_gudang','$qty','$tgl_per_brg') ";
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
	echo "<a href='minta_tampil.php'>Daftar Permintaan barang</a>";
	exit;
								
?>
</hr>
<a href="minta_tampil.php" />DAFTAR Permintaan</a> 
