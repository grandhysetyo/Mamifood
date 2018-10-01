<?php 
	include 'koneksi.php';
	//KONSUMEN
	if (isset($_POST['Register'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nohp 	  = $_POST['nohp'];

		$insert2 = $conn->query("INSERT INTO tb_konsumen(noHpKonsumen) VALUES('$nohp')");
		$sql = $conn->query("SELECT * FROM tb_konsumen WHERE noHpKonsumen='$nohp'");
		$data = $sql->fetch_assoc();
		$id  = $data['idKonsumen'];



		$option =  array('cost' => 4 );
		$hashPass = password_hash($password,PASSWORD_BCRYPT,$option);		
		$insert  = $conn->query("INSERT INTO tb_user (username,password,typeuser,id) VALUES('$username','$hashPass','user','$id')");
		
		if ($insert) {
			echo "Sukses Register";
		}
		else {
			echo "Gagal Register";
		}
	}



	if (isset($_POST['login'])) {
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = $conn->query("SELECT * FROM tb_user WHERE username='$username' ");
		$data = $query->fetch_assoc();
		
		if (password_verify($password,$data['password'])) {
			//SET SESSION
			$_SESSION['typeuser'] = $data['typeuser'];
			$_SESSION['username'] = $data['username'];
			if ($_SESSION['typeuser']=='user') {
				// echo "Login sebagai User cuy";
				header("location:index.php");
			}
			else {
				// echo "Login sebagai User cuy";
				header("location:Admin/index.php");
			}
			
		}
	}



 ?>