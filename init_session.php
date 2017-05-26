<?php

	// Mulai session baru
	session_start();
	
	// session belum punya id?
	if (!isset($_SESSION["uid"])){
		// Buat id session baru
		$uss_result = mysqli_query($dbconn, "INSERT INTO u_session VALUES (DEFAULT, 1, '', now())");
		// Ambil uid dari hasil query sebelumnya
		$uid = mysqli_insert_id($dbconn);
		// Buat session_hash untuk memastikan id tidak dimanipulasi orang lain
		$session_str = $uid . ":" . $_SERVER['HTTP_USER_AGENT'];
		$session_hash = hash("sha256", $session_str);
		$uss_result = mysqli_query($dbconn, "UPDATE u_session SET session_hash='$session_hash' WHERE id=$uid;");
		// Set session id
		$_SESSION["uid"] = $uid;
	}
	else {
		// Ambil id session dari session aktif
		$uid = $_SESSION["uid"];
		// Kalkulasi session_hash dari id sekarang
		$session_str = $uid . ":" . $_SERVER['HTTP_USER_AGENT'];
		$session_hash = hash("sha256", $session_str);
		// Cek di database, kalo session_hash tidak sama dgn di database -> error
		$uss_result = mysqli_query($dbconn, "SELECT session_hash FROM u_session WHERE id=$uid;");
		if (mysqli_num_rows($uss_result) > 0){
			$row_uss = mysqli_fetch_assoc($uss_result);
			if ($session_hash != $row_uss["session_hash"]){
				session_destroy();
				die("Session security check error! Refresh to start new session...");
			}
			$uss_result = mysqli_query($dbconn, "UPDATE u_session SET last_access=now() WHERE id=$uid;");
		}
		else {
			session_destroy();
			die("Invalid session!");
		}
	}

?>