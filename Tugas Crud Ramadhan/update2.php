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
<?php include ('conn.php'); 


if (isset($_GET['tanggal'])) {
    //query SQL
    $tanggal_upd = $_GET['tanggal'];
    $query = "SELECT * FROM sholat_terawih WHERE tanggal = '$tanggal_upd'";

    //eksekusi query
    $result = mysqli_query($conn,$query);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $imam = $_POST['imam'];
    $masjid = $_POST['masjid'];
    //query SQL

    $sql = "UPDATE sholat_terawih SET imam='$imam', masjid='$masjid' WHERE tanggal='$tanggal'";
    //eksekusi query
    $result = mysqli_query($conn,$sql);

    if ($result) {
      $status = 'ok';
    }
    else{
      $status = 'err';
    }
    header('Location: Sholat_Terawih_Crud.php?status='.$status);

   
}

?>
<h2>Ramadhan Update (Jadwal)</h2>


<form action="update2.php" method="POST">
        <?php while($data = mysqli_fetch_array($result)): ?>
        <div>
          <label>Tanggal</label>
          <input type="text" placeholder="Tanggal" name="tanggal" value="<?php echo $data['tanggal'];  ?>" required="required" readonly>
        </div>
        <div>
          <label>Imam</label>
          <input type="text" placeholder="Imam" name="imam" value="<?php echo $data['imam'];  ?>" required="required">
        </div>
        <div>
          <label>Masjid</label>
          <input type="text" placeholder="Masjid" name="masjid" value="<?php echo $data['masjid'];  ?>" required="required">
        </div>
        
       
        <?php endwhile; ?>
        <button type="submit">Simpan</button>
        <br><br><br> 
        <a href="Sholat_Terawih_Crud.php"><p class="kembali">Batalkan Update</p></a>
      </form>
      
</body>
</html>