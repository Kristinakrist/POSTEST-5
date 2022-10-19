<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Tanggal Pinjam : <?= date("d-m-Y")?>
    </p><br>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="">Tanggal Kembali: </label>
        <input type="date" name="kembalikan" id="">
        <label for="
        <label for="">Buku : </label><br>
        <input type="file" name="gambar">
        <input type="hidden" name="pinjam" value=<?= date("d-m-Y")?>>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    require 'config.php';

    if(isset($_POST['submit'])){
        $kembali = $_POST['kembalikan'];
        $pinjam = $_POST['pinjam'];

        $gambar = $_FILES['gambar']['name'];
        $ukuran = $_
        echo $gambar."br";
        echo $ukuran;

        //$query = "INSERT INTO perpus(pinjam,kembali) VALUES('$pinjam','$kembali')";
        //$result = $db->query($query);

       // if($result){
          //  header("Location:index.php");
       // }else{
         //   echo "gagal kirim";
        }
    }
?>