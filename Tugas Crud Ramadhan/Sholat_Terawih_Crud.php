<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Sholat_Terawih2.css">
</head>
<body>
<?php  include "conn.php"; 
    
    $ambil="SELECT * FROM sholat_terawih";
    $result=mysqli_query($conn,$ambil);
?>
<div style="display:flex; margin: 0px 60px 0px 300px;">
<h1 style="color:white">Ramadhan-1443H</h1> <img src="aset/moon.png" alt="" width="50px" height="50px">
</div>
    <section class="navbar">
    <ul>
    <li><a href="jadwal.php">Jadwal</a></li>
    <li style="padding-left:20px"><a href="Menu_Berbuka_Crud.php">Menu Berbuka(crud)</a></li>
    <li style="padding-left:20px"><a href="Sholat_Terawih_Crud.php">Sholat Terawih(crud)</a></li>
    </ul>

    </section>

<a href="form2.php"><img src="aset/add.png" alt="" width="25px" height="25px"></a>
<a href="form2.php"><span style="padding-bottom: 200px;">Tambah data</span></a>
<table class="konten" border=2px>
        <thead bgcolor="#383838">
            <td style="color:white">Action</td>
            <td style="color:white">Tanggal</td>
            <td style="color:white">Imam</td>
            <td style="color:white">Masjid</td>
        </thead>
        <?php $dot=0;?>
        <?php while($data = mysqli_fetch_array($result)): ?>
        <?php if($dot==10): ?>
        <tbody bgcolor="grey">
            <td width="200px"><?php echo $data['tanggal'];?></td>
            <td width="200px"><?php echo $data['imam'];?></td>
            <td width="200px"><?php echo $data['masjid'];?></td>
            <?php $dot=$dot+1; ?>
            <td>
                    <a href="<?php echo "update2.php?tanggal=".$data['tanggal']; ?>"> <img src="aset/update.jpg" alt="" width="25px" height="25px"></a>
                    <span>|</span>
                    <a href="<?php echo "delete2.php?tanggal=".$data['tanggal']; ?>"> <img src="aset/bin.png" alt="" width="25px" height="25px"></a>
            </td>
        </tbody>
        
        <?php  else : ?>
        <tbody>
            <td><?php echo $data['tanggal'];?></td>
            <td><?php echo $data['imam'];?></td>
            <td><?php echo $data['masjid'];?></td>
            <?php $dot=$dot+1; ?>
            <td>
                    <a href="<?php echo "update2.php?tanggal=".$data['tanggal']; ?>"> <img src="aset/update.jpg" alt="" width="25px" height="25px"></a>
                    <span>|</span>
                    <a href="<?php echo "delete2.php?tanggal=".$data['tanggal']; ?>"> <img src="aset/bin.png" alt="" width="25px" height="25px"></a>
            </td>
        </tbody>
        <?php endif; ?>
        <?php endwhile ?>
    </table>

</body>
</html>