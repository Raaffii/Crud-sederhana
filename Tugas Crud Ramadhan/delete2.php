<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

include ('conn.php'); 

$status = '';
$result = '';
//melakukan pengecekan apakah ada form yang dipost
    if (isset($_GET['tanggal'])) {
        //query SQL
        
        $tanggal_upd = $_GET['tanggal'];
        $query = "DELETE FROM sholat_terawih WHERE tanggal = '$tanggal_upd'"; 

        //eksekusi query
        $result = mysqli_query($conn,$query);

        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }

        //redirect ke halaman lain
        header('Location: Sholat_Terawih_Crud.php?status='.$status);
    }  

?>
    
</body>
</html>