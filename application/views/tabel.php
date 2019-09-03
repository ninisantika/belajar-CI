<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>BIODATA</title>
  <style type="text/css">
  </style>
</head>
<body style="background-color:lightgrey;">
<h2> BIODATA DIRI </h2>
<form action="" method="POST">
<div class="row">
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama" size=20/></td>
    </tr>
</div>
<div class="row">
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="tmplahir" size=20/></td>
    </tr>
</div>
  <div class="row">
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" name="sex" value="1" id="" /><label class="" for="">Laki-laki </label>
        <input type="radio" name="sex" value="2" id="" /><label class="" for="">Perempuan </label></td>
    </tr>
  </div>
  <div class="row">
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><select name="jurusan">
        <option value="" selected="selected">--Pilih Jurusan
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Ekonomi">Ekonomi</option>
        </select></td>
    </tr>
  </div>
  <div class="row">
    <tr>
        <td>&nbsp</td>
        <td>&nbsp</td>
        <td><input type="submit" value="Simpan"/></td>
    </tr>
  </div>
  </table>
  </form>
  <?php
    if(isset($_POST['submit']))
    {
    $nama = $_POST ['nama'];
    $tmplahir = $_POST ['tmplahir'];


    echo "NAMA : $nama";
    echo "TempatLahir : $tmplahir";
    }
  ?>
</body>
</html>
