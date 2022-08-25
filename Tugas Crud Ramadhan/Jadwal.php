<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jadwal.css">
</head>
<body>
    <?php  include "conn.php"; 
    
    $ambil="SELECT * FROM jadwal";
    $result=mysqli_query($conn,$ambil);

    
    ?>

    <div style="display:flex; margin: 0px 60px 0px 300px;">
    <h1 style="color:white">Ramadhan-1443H</h1> <img src="aset/moon.png" alt="" width="50px" height="50px">
    </div>
    <section class="navbar">
    <ul>
    <li>
        <a href="jadwal.php">Jadwal</a></li>
        <li style="padding-left:20px"><a href="Menu_Berbuka_Crud.php">Menu Berbuka(crud)</a></li>
        <li style="padding-left:20px"><a href="Sholat_Terawih_Crud.php">Sholat Terawih(crud)</a></li>
    </ul>
    
</section>

<table border=2px class="konten" >
    <thead bgcolor="#383838">
        <td width="100px" style="color:white">List</td>
        <td width="100px" style="color:white">Tanggal</td>
        <td width="100px" style="color:white">Imsyak</td>
        <td width="100px" style="color:white">Subuh</td>
        <td width="100px" style="color:white">Dzuhur</td>
        <td width="100px" style="color:white">Ashar</td>
        <td width="100px" style="color:white">Magrib</td>
        <td width="100px" style="color:white">Isya</td>
    </thead>
        <?php while($data = mysqli_fetch_array($result)): ?>
        <?php $hari=1; ?>
        <tbody>
            <?php if($hari<13) : ?>
                <td bgcolor="lightblue">v</td>
            <?php else : ?>
                <td></td>
            <?php endif ?>
            <td><?php echo $data['tanggal'];?></td>
            <td><?php echo $data['imsyak'];?></td>
            <td><?php echo $data['subuh'];?></td>
            <td><?php echo $data['dzuhur'];?></td>
            <td><?php echo $data['ashar'];?></td>
            <td><?php echo $data['maghrib'];?></td>
            <td><?php echo $data['isya'];?></td>
        </tbody>
        <?php endwhile ?>

        <?php 
        $tanggal=mktime(10, 30, 40, 4, 3, 2022);
        $imsyak=mktime(4, 6, 0, 4, 3, 2022);
        $subuh=mktime(4, 16, 0, 4, 3, 2022);
        $dzuhur=mktime(11, 35, 0, 4, 3, 2022);
        $ashar=mktime(14, 51, 0, 4, 3, 2022);
        $maghrib=mktime(17, 35, 0, 4, 3, 2022);
        $isya=mktime(18, 45, 0, 4, 3, 2022);
        
        
        ?>
        <?php $jarak=2; ?>
        <?php while($hari<=30) :?>
            <?php if($jarak<2) :?>    
        <tbody>
            <?php $imsyak=strtotime("-1 minutes",$imsyak); ?>
            <?php $subuh=strtotime("-1 minutes",$subuh); ?>
            <?php $dzuhur=strtotime("-1 minutes",$dzuhur); ?>
            <?php $ashar=strtotime("-1 minutes",$ashar); ?>
            <?php $maghrib=strtotime("-1 minutes",$maghrib); ?>
            <?php $isya=strtotime("-1 minutes",$isya); ?>
            <?php $tanggal=strtotime("+1 days",$tanggal); ?>
            
            <?php if($hari<11) : ?>
                <td bgcolor="lightblue">v</td>
            <?php else : ?>
                <td></td>
            <?php endif ?>
            <td><?php echo date("Y-m-d",$tanggal) ?></td>
            <td><?php echo date("h:i:s",$imsyak) ?></td>
            <td><?php echo date("h:i:s",$subuh) ?></td>
            <td><?php echo date("h:i:s",$dzuhur) ?></td>
            <td><?php echo date("h:i:s",$ashar) ?></td>
            <td><?php echo date("h:i:s",$maghrib) ?></td>
            <td><?php echo date("h:i:s",$isya) ?></td>
            <?php $hari=$hari+1; ?>
            <?php $jarak=$jarak+1; ?>
        </tbody>
        <?php else :?>
            <tbody>
            <?php $tanggal=strtotime("+1 days",$tanggal); ?>
            
            <?php if($hari<11) : ?>
                <td bgcolor="lightblue">v</td>
            <?php else : ?>
                <td></td>
            <?php endif ?>
            <td><?php echo date("Y-m-d",$tanggal) ?></td>
            <td><?php echo date("h:i:s",$imsyak) ?></td>
            <td><?php echo date("h:i:s",$subuh) ?></td>
            <td><?php echo date("h:i:s",$dzuhur) ?></td>
            <td><?php echo date("h:i:s",$ashar) ?></td>
            <td><?php echo date("h:i:s",$maghrib) ?></td>
            <td><?php echo date("h:i:s",$isya) ?></td>
            <?php $hari=$hari+1; ?>
            <?php $jarak=$jarak-1; ?>
        </tbody>
        <?php endif ?>
        <?php endwhile ?>
        
    </table>


    
</body>
</html>