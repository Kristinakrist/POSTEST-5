<head>
<!--    <link rel="stylesheet" href="style.css">-->
</head>
<body>
    <?php require_once "koneksi.php";
    $error = "";
    
    if(isset($_SESSION['nama'])){
        header('Location: index.php');
    }else{
    ?>
    
        <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['username'];
        $pass = $_POST['password'];
        
        if(!empty(trim($nama)) && !empty(trim($pass))){
            
            $_SESSION['nama'] = $nama;
            if(cek_data($nama, $pass)){
                header('Location: index.php');
            }else{
                $error = "kombinasi nama dan password salah";
            }
        }else{
            $error = "nama dan password harus diisi";
        }
    }
    
    ?>
    
    <div class="form_login">
        <p id="judul_login"> Login </p>
        
        <form action="" method="post">
            <label for="username">Username</label><br>
            <input class="username" type="text" name="username"><br><br>
            <label for="passsword">Password </label><br>
            <input class="username" type="password" name="password"><br><br>
            <div class="error"><?= $error;?></div>
            
            <input class="submit" type="submit" name="submit" value="Login"><br>
        
        </form>
        
        <div id="under_login">Belum Punya akun, daftar <a href="daftar.php">disini</a>
            </div>
    </div>
</body>
<?php } ?>