<?php 
   
    require_once "koneksi.php";
    require_once "header.php";?>

<?php 
$error = "";
    $id = $_GET['id'];

    if(isset($_GET['id'])){
        $artikel2 = tampilkan_id($id);
        while($row= mysqli_fetch_assoc($Wisata)){
            
        $nama  = $row['nama'];
        $email    = $row['email'];
        $telepon    = $row['telepon'];
        }
    }
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email   = $_POST['email'];
        $telepon   = $_POST['telepon'];
        
        if(!empty(trim($nama)) && !empty(trim($email))){
            if(edit_data($nama, $email, $telepon, $id)){
                header('Location: index.php');
            }else{
                $error = "ada masalah saat edit data";
            }
        }else{
            $error = "data harus diisi";
        }
    }

?>