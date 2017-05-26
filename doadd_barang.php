<?php

	include "koneksi.php";
	
	$nama_barang = $_POST["namabarang"];
	$jumlah_stock = $_POST["jumlahstock"];
	$harga_barang = $_POST["hargabarang"];
	
	// check data barang kalau udah ada
	$check_result = mysqli_query($dbconn, "SELECT id_barang FROM barang WHERE nama='$nama_barang';");
	if (mysqli_num_rows($check_result) > 0){
		$row_check = mysqli_fetch_assoc($check_result);
		$id_barang = $check_result["id_barang"];
	}
	else {
		// barang belum ada!
		$add_barang_result = mysqli_query($dbconn, "INSERT INTO barang (id_barang, id_kat, nama, deskripsi) VALUES (DEFAULT, 1, '$nama_barang', '');");
		$id_barang = mysqli_insert_id($dbconn);
	}

	$add_list_result = mysqli_query($dbconn, "INSERT INTO list_barang (id, id_barang, id_toko, harga, banyak) VALUES (DEFAULT, $id_barang, 1, $harga_barang, $jumlah_stock);");

	if (isset($_POST["origin"])){
		$origin = $_POST["origin"];
		header("HTTP/1.1 302 Moved Temporarily");
		header("Location: $origin");
	}
	else {
		header("HTTP/1.1 302 Moved Temporarily");
		header("Location: index.php");
	}

?>