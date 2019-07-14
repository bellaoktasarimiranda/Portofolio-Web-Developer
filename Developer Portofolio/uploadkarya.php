<?php
require 'koneksi.php';

$konek = mysqli_connect("localhost", "root", "", "todo");

// cek apakah button sudah ditekan atau belom
if (isset($_POST["save"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (newlist($_POST) > 0) {
    echo "<script>
           alert('Data BERHASIL disimpan !!!');
          </script>";
  } else {
    echo "<script>
             alert('Data GAGAL diSimpan');
          </script>";
  }
}

  $file_user = $_FILES["file_user"]["tmp_name"];
  $namafile = $_FILES["file_user"]["name"];

  $tujuan = "c:\bella\" . $namafile;

  if ($file_user != "none") {
    copy($file_user, $tujuan);
    echo "<h3>Proses upload telah dilakukan.</h3>";
    echo "File User: $file_user<br />";
    echo "Tujuan: $tujuan";
  } else {
    echo "<h3>Upload Error!</h3>";
    echo "Anda belum memilih file yang akan di-upload.";
  }
?>