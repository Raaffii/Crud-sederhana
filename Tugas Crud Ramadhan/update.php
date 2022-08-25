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
        $query = "SELECT * FROM menu_berbuka WHERE tanggal = '$tanggal_upd'";

        //eksekusi query
        $result = mysqli_query($conn,$query);
    }

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tanggal = $_POST['tanggal'];
        $menu_takjil = $_POST['menu_takjil'];
        $menu_berbuka = $_POST['menu_berbuka'];
        $tempat = $_POST['tempat'];
        //query SQL

        $sql = "UPDATE menu_berbuka SET tempat='$tempat', menu_berbuka='$menu_berbuka', menu_takjil='$menu_takjil' WHERE tanggal='$tanggal'";
        //eksekusi query
        $result = mysqli_query($conn,$sql);

        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }
        header('Location: Menu_Berbuka_Crud.php?status='.$status);
  
       
    }
    
    ?>
    <h2>Ramadhan Update (Menu Berbuka)</h2>
    

<form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
            <div>
              <label>Tanggal</label>
              <input type="text" placeholder="Tanggal" name="tanggal" value="<?php echo $data['tanggal'];  ?>" required="required" readonly>
            </div>
            <div>
              <label>Menu takjil</label>
              <input type="text" placeholder="Menu takjil" name="menu_takjil" value="<?php echo $data['menu_takjil'];  ?>" required="required">
            </div>
            <div>
              <label>Menu berbuka</label>
              <input type="text" placeholder="Menu Berbuka" name="menu_berbuka" value="<?php echo $data['menu_berbuka'];  ?>" required="required">
            </div>
            <div>
              <label>tempat</label>
              <input type="text" placeholder="tempat" name="tempat" value="<?php echo $data['tempat'];  ?>" required="required">
            </div>
           
            <?php endwhile; ?>
            <button type="submit">Simpan</button>
            <br><br><br> 
            <a href="Menu_Berbuka_Crud.php"><p class="kembali">Batalkan Update</p></a>
          </form>
          
    
</body>
</html>