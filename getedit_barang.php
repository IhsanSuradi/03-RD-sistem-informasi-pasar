<?php

	include "koneksi.php";
	
	if (isset($_GET["id"])){
		$id_list = $_GET["id"];
	}
	else {
		$id_list = 1; // TODO: buat jadi error kalau sudah siap pengetestan
	}
	
	// Inisilalisasi variabel apabila tidak ditemukan data barang
	$nama_barang = "<Unknown>";
	$jumlah_barang = 0;
	$harga_barang = 0;
	
	$list_barang_result = mysqli_query($dbconn, "SELECT * FROM list_barang WHERE id=$id_list;");
	if (mysqli_num_rows($list_barang_result) > 0){
		$row_list = mysqli_fetch_assoc($list_barang_result);
		$jumlah_barang = $row_list["banyak"];
		$harga_barang = $row_list["harga"];
		$id_barang = $row_list["id_barang"];
		$barang_result = mysqli_query($dbconn, "SELECT nama FROM barang WHERE id_barang=$id_barang;");
		if (mysqli_num_rows($barang_result) > 0){
			$row_barang = mysqli_fetch_assoc($barang_result);
			$nama_barang = $row_barang["nama"];
		}
	}

?>