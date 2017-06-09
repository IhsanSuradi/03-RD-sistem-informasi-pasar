<?php

	require_once "koneksi.php";
	
	$idtoko = $_GET['idtoko'];
	$kueri = "SELECT keranjang.id, list_barang.id_barang, list_barang.id_toko, keranjang.notified FROM keranjang INNER JOIN list_barang ON keranjang.id_list=list_barang.id WHERE (list_barang.id_toko=$idtoko) AND (keranjang.notified=0);";
	$result = mysqli_query($dbconn, $kueri);
	if (mysqli_num_rows($result) > 0){
		while ($row_list = mysqli_fetch_assoc($result)){

			$idkeranjang = $row_list['id'];
			$idbarang = $row_list['id_barang'];
			
			$kueri = "UPDATE keranjang SET notified=1 WHERE id=$idkeranjang;";
			$result3 = mysqli_query($dbconn, $kueri);
			
			$kueri = "SELECT * FROM barang WHERE id_barang=$idbarang;";
			$result2 = mysqli_query($dbconn, $kueri);
			if (mysqli_num_rows($result2) > 0){
				while ($row_barang = mysqli_fetch_object($result2)){
					$r[] = $row_barang;
				}
			}
		}
	}
	if (isset($r))
		print json_encode($r);
	else
		print "[]";

?>