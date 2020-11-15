<?php
include("connect.php");

$name = $_POST['name'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$mulai = $_POST['mulai'];
$berakhir = $_POST['berakhir'];
$tempat = $_POST['tempat'];
$harga = $_POST['harga'];
$benefit = isset($_POST['benefit']) ? implode(',', $_POST['benefit']) : "";
$gambar = $_FILES['gambar']['name'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($gambar, PATHINFO_EXTENSION);

if (in_array($ext, $ekstensi) === false) {
	header("location:home.php?alert=gagal_ekstensi");
} else {
	if ($ukuran < 1044070) {
		$gambar = $rand . '_' . $gambar;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $gambar);
		$create = mysqli_query($conn, "INSERT INTO `modul3_crud` (`name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES ('$name','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");
		if ($create) {
			header("location:home.php");
		} else {
			echo "input gagal";
		}
	} else {
		header("location:index.php?alert=gagak_ukuran");
	}
}
