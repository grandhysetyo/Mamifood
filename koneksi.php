<?php 	
	$conn = new mysqli('localhost','root','','db_mamifood');
	if ($conn->connect_errno) {
			echo "Gagal Koneksi ke db".$conn->connect_error;
		}	

 ?>