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

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tanggal = $_POST['tanggal'];
    $menu_takjil = $_POST['menu_takjil'];
    $menu_berbuka = $_POST['menu_berbuka'];
    $tempat = $_POST['tempat'];

    $simpan="INSERT INTO menu_berbuka(tanggal,menu_takjil,menu_berbuka,tempat) VALUES('$tanggal','$menu_takjil','$menu_berbuka','$tempat')";
    $result=mysqli_query($conn,$simpan); 
    
    if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

    header('Location: Menu_Berbuka_Crud.php?status='.$status);
}
?>


<h2>Tambah Data</h2>
<form action="form.php" method="POST">
            <div>
              <label>Tanggal</label>
              <input type="date" placeholder="Tanggal" name="tanggal"  min="2022-05-03" >
            </div>
            <div>
              <label>Menu takjil</label>
              <input type="text" placeholder="Menu takjil" name="menu_takjil"   >
            <div>
              <label>Menu berbuka</label>
              <input type="text" placeholder="Menu Berbuka" name="menu_berbuka"   >
            </div>
            <div>
              <label>tempat</label>
              <input type="text"  placeholder="tempat" name="tempat"   >
            </div>
           

            <button type="submit">Simpan</button>
            <br><br><br> 
            <a href="Menu_Berbuka_Crud.php"><p class="kembali">Batalkan Tambah Data</p></a>
          </form>
</body>
</html>