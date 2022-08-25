<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Crud.css">
</head>
<body>
<?php

include ('conn.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $imam = $_POST['imam'];
    $masjid = $_POST['masjid'];
  

    $simpan="INSERT INTO sholat_terawih(tanggal,imam,masjid) VALUES('$tanggal','$imam','$masjid')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
      $status = 'ok';
    }
    else{
      $status = 'err';
    }
    header('Location: Sholat_Terawih_Crud.php?status='.$status);
   
}

?>


<h2>Tambah Data</h2>
<form action="form2.php" method="POST">
        
        <div>
          <label>Tanggal</label>
          <input type="date" placeholder="Tanggal" name="tanggal" min="2022-05-03">
        </div>
        <div>
          <label>Imam</label>
          <input type="text" placeholder="Imam" name="imam">
        </div>
        <div>
          <label>Masjid</label>
          <input type="text" placeholder="Masjid" name="masjid">
        </div>
        <button type="submit">Simpan</button>
        <br><br><br> 
        <a href="Sholat_Terawih_Crud.php"><p class="kembali">Batalkan</p></a>
      </form>
</body>
</html>