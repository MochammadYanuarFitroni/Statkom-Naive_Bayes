<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "finalpro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

function data(){
	global $conn;
	$query = "SELECT * FROM datalatih";
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows [] = $row;
	}
	return $rows;
}

function tambah($data){
  global $conn;
  $Nama_Mahasiswa = htmlspecialchars($data["Nama"]);
  $N_PMP = htmlspecialchars($data["PMP"]);
  $N_Ind = htmlspecialchars($data["Indo"]);
  $N_Ing = htmlspecialchars($data["Ing"]);
  $N_Mat = htmlspecialchars($data["Mat"]);
  $Bekerja = htmlspecialchars($data["Bekerja"]);
  $Organisasi = htmlspecialchars($data["Organisasi"]);
  $Jarak_Rumah = htmlspecialchars($data["Jarak_Rumah"]);
  $IPK = htmlspecialchars($data["IPK"]);

  $query = "INSERT INTO datalatih
        VALUES
        ('', '$Nama_Mahasiswa', '$N_PMP', '$N_Ind', '$N_Ing', '$N_Mat', '$Bekerja', '$Organisasi', '$Jarak_Rumah', '$IPK')
      ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM datalatih WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function hapus2($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM datauji WHERE id = $id");
  return mysqli_affected_rows($conn);
}
?>