<?php 
    require 'config.php';
    date_default_timezone_set("Asia/Makassar");

    $query = "SELECT * FROM perpus";
    $result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Perpustakaan</h3>
    <table border=1>
        <tr>
            <th>No.</th>
            <th>Tanggal Upload</th>
            <th>Waktu Upload</th>
        </tr>
        <?php
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            
            <td><?= $i++; ?></td>
            <td><?= $row['pinjam']?></td>
            <td><?= $row['kembali']?></td>
            <td>
                <?php
                    if($row['kembali'] <= date("d-m-Y")){
                        echo "Denda Telat";
                    }else{
                        echo"masih dipinjam";
                    }
                ?>
            </td>
        </tr>
        <?php
            $i++;
            }
        ?>
    </table>
    <footer>
        <p>Copyright @ 2010-<?= date("Y")?></p>
    </footer>
</body>
</html>