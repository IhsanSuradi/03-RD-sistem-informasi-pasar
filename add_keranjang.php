<?php

	if (isset($_POST["id"])){
		$id_barang = $_POST["id"];
	}
	else {
		die("ID Barang tidak boleh kosong!");
	}
	
	include "koneksi.php";
	include "init_session.php";
	
	$add_result = mysqli_query($dbconn, "INSERT INTO keranjang VALUES (DEFAULT, $id_barang, $uid)");
	
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