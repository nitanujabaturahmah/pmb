<?php
	//Start session  
	session_start();
	
	//import connection to database
	include "koneksi/koneksi.php";

	//check if $_SESSION is exist
	if (isset($_SESSION)) {
		foreach ($_SESSION as $key => $val) {
			${$key} = $val;
		}

// tabel berelasi antara tb_camaba dan tb_ortu
		$sql	= "INSERT INTO tb_camaba tb_ortu VALUES(null,'$nisn', '$nama', '$tempat_lahir', '$tanggal_lahir' ,'$jenis_kelamin'
		, '$jurusan', '$alamat', '$nohp', '$nama_ayah', '$pekerjaan_ayah','$penghasilan_ayah', '$no_ayah', '$nama_ibu'
		, '$pekerjaan_ibu','$penghasilan_ibu', '$no_ibu', '$alamat_ortu','','','','','','')";

		$exec 	= mysqli_query($conn,$sql);

		if ($exec) {

			$id 		= $conn->insert_id;
			//echo $id;
			$query 		= "INSERT INTO akun VALUES(null, '$email', '$password', '',1, $id)";

			$exec_akun 	=  mysqli_query($conn, $query);

			$date_regis	= date("Y-m-d");

			$query2		= "INSERT INTO detail_pendaftaran (id_user,tanggal_daftar,status_pendaftaran)
							VALUES($id, '$date_regis', 0)";

			$exec_detil	= mysqli_query($conn, $query2);

			if ($exec_akun && $exec_detil) {
				session_destroy();
				echo'<script> window.location="success_register.php"; </script> ';
			}else{
				echo mysqli_error($conn);
				echo 'gagal';
			}

		}else{
			echo mysqli_error($conn);
		}
	}
?>