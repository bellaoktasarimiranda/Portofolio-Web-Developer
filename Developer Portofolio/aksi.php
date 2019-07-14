<?php 
include'db.php';
if(isset($_POST['submit'])){
$namaDeveloper    = $_POST['namadevloper'];
$alamatDeveloper  = $_POST['alamatdevloper'];
$noHpDeveloper    = $_POST['nohpdevloper'];

mysqli_query($koneksi,"INSERT INTO developer VALUES ('', '$namaDeveloper', '$alamatDeveloper', '$noHpDeveloper')");

}
?>
