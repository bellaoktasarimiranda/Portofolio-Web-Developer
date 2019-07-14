php 
<html>
<head>
  <title>Form upload</title>
</head>
<body>
<h4>UPLOAD KARYA</h4>
<ol>
  <li>Cari file yang akan kalian upload.</li>
  <li>Ketika selesai, klik tombol 
      <strong>Upload File</strong></li>
</ol>
<hr />
<div align="center">
<form action="uploadkarya.php" method="post" 
      enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" 
    value="500000"><br />
  <input type="file" name="file_user" size="60">
  <br /><br />
  <input type="submit" value="Upload File">
</form>
</div>

</body>
</html>