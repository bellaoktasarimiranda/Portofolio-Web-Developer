<?php 
include'db.php';
if(isset($_POST['submit'])){
$Database				= $_POST['dtbase'];
$BahasaScripting	  	= $_POST['bhscipting'];
$FrontendDeveloper    	= $_POST['frontenddevloper'];

mysqli_query($koneksi,"INSERT INTO keahlian VALUES ('', '$Database', '$BahasaScripting', '$FrontendDeveloper')");

}
?>