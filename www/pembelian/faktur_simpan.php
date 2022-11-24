<?php

if(isset($_POST['id_faktur'])){
$id_faktur = $_POST['id_faktur'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$tgl_faktur	= $_POST['tgl_faktur'];
	$id_bag_keuangan	= $_POST['id_bag_keuangan'];
	$id_bag_pembelian	= $_POST['id_bag_pembelian'];
	
	$dataValid = "YA";
		
	if (strlen(trim($tgl_faktur))==0){
		echo " Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_keuangan))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_pembelian))==0){
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
		$sql = "update faktur_pembelian set
		tgl_faktur = '$tgl_faktur' ,
		id_bag_keuangan = '$id_bag_keuangan' , 
		id_bag_pembelian = '$id_bag_pembelian'  
		where id_faktur = $id_faktur ";
	}else{
		
	$sql = "insert into faktur_pembelian
			(tgl_faktur,id_bag_keuangan,id_bag_pembelian)
			values
			('$tgl_faktur','$id_bag_keuangan',$id_bag_pembelian) ";
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
	echo "<a href='faktur_tampil.php'>Daftar Faktur Barang</a>";
	exit;
								
?>
</hr>
<a href="faktur_tampil.php" />DAFTAR Faktur Barang</a> 