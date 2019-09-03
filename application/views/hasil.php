<?php
  if(isset($_POST['submit']))
  {
  $nama = $_POST ['nama'];
  $tmplahir = $_POST ['tmplahir'];

  echo "NAMA : $nama";
  echo "TempatLahir : $tmplahir";
  }
?>
