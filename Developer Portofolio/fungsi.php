<?php

$konek = mysqli_connect("localhost", "root", "", "webdeveloper");


function query($query)
{
  global $konek;
  $result = mysqli_query($konek, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function newlist($data)
{
  global $konek;
  // ambil data dari setiap elemen dalam form
  // $id = htmlspecialchars($data["id"]);
  $list_name = htmlspecialchars($data["list_name"]);
  $note = htmlspecialchars($data["note"]);
  $jam = htmlspecialchars($data["jam"]);
  $tgl = htmlspecialchars($data["tgl"]);
  // $proses = htmlspecialchars($data["proses"]);

  // query insert data
  $query = "INSERT INTO list
    VALUES
    ('', '$list_name', '$note', '$jam', '$tgl', 'On Progress')";

  mysqli_query($konek, $query);
  return mysqli_affected_rows($konek);
}
