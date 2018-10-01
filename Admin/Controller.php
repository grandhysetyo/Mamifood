<?php 
include 'config/koneksi.php';
	//KONSUMEN
	if (isset($_POST['addKonsumen'])) {
		$sql = $conn->prepare('INSERT INTO tb_konsumen (namaKonsumen,noHpKonsumen,alamatKonsumen) VALUES(?,?,?)');
		$sql->bind_param('sss', $nama, $nohp, $alamat);

		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$alamat = $_POST['alamat'];
		

		if($sql->execute()){
			echo "Berhasil Tambah Data";
		}
		else {
			echo "Gagal Tambah Data";
		}
	}

	elseif (isset($_POST['updateKonsumen'])) {
		$sql = $conn->prepare('UPDATE tb_konsumen SET namaKonsumen=?, noHpKonsumen=?, alamatKonsumen=? WHERE idKonsumen=?');
		$sql->bind_param('sssi', $nama, $nohp, $alamat, $idKonsumen);
		
		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$idKonsumen = $_POST['id'];

		if($sql->execute()){
			echo "Berhasil update Data";
		}
		else {
			echo "Gagal update Data";
		}
	}

	elseif (isset($_POST['deleteKonsumen'])) {
		$sql = $conn->prepare('DELETE FROM tb_konsumen  where idKonsumen=?');
		$sql->bind_param('i', $idKonsumen);

		$idKonsumen = $_POST['idKonsumen'];
		

		if($sql->execute()){
			echo "Berhasil Delete Data";
		}
		else {
			echo "Gagal Delete Data";
		}
	}
	//CLIENT
	elseif (isset($_POST['addClient'])) {
		$sql = $conn->prepare('INSERT INTO tb_client (namaClient,noHpClient,alamatClient) VALUES(?,?,?)');
		$sql->bind_param('sss', $nama, $nohp, $alamat);

		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$alamat = $_POST['alamat'];
		

		if($sql->execute()){
			echo "Berhasil Tambah Data";
		}
		else {
			echo "Gagal Tambah Data";
		}
	}

	elseif (isset($_POST['updateClient'])) {
		$sql = $conn->prepare('UPDATE tb_client SET namaClient=?, noHpClient=?, alamatClient=? WHERE idClient=?');
		$sql->bind_param('sssi', $nama, $nohp, $alamat, $idClient);
		
		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$idClient = $_POST['idClient'];

		if($sql->execute()){
			echo "Berhasil update Data";
		}
		else {
			echo "Gagal update Data";
		}
	}

	elseif (isset($_POST['deleteClient'])) {
		$sql = $conn->prepare('DELETE FROM tb_client  where idClient=?');
		$sql->bind_param('i', $idClient);

		$idClient = $_POST['idClient'];
		

		if($sql->execute()){
			echo "Berhasil Delete Data";
		}
		else {
			echo "Gagal Delete Data";
		}
	}
	//KURIR
	elseif (isset($_POST['addKurir'])) {
		$sql = $conn->prepare('INSERT INTO tb_kurir (namaKurir,noHpKurir,status) VALUES(?,?,?)');
		$sql->bind_param('sss', $nama, $nohp, $status);

		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$status = $_POST['status'];
		

		if($sql->execute()){
			echo "Berhasil Tambah Data";
		}
		else {
			echo "Gagal Tambah Data";
		}
	}

	elseif (isset($_POST['updateKurir'])) {
		$sql = $conn->prepare('UPDATE tb_kurir SET namaKurir=?, noHpKurir=?, status=? WHERE idKurir=?');
		$sql->bind_param('sssi', $nama, $nohp, $alamat, $idKurir);
		
		$nama 	= $_POST['nama'];
		$nohp 	= $_POST['nohp'];
		$status = $_POST['status'];
		$idKurir = $_POST['idKurir'];

		if($sql->execute()){
			echo "Berhasil update Data";
		}
		else {
			echo "Gagal update Data";
		}
	}

	elseif (isset($_POST['deleteKurir'])) {
		$sql = $conn->prepare('DELETE FROM tb_kurir  where idKurir=?');
		$sql->bind_param('i', $idKurir);

		$idKurir = $_POST['idKurir'];
		

		if($sql->execute()){
			echo "Berhasil Delete Data";
		}
		else {
			echo "Gagal Delete Data";
		}
	}

 ?>