<?php 
    
    session_start();


    $koneksi = mysqli_connect ("localhost", "root", "", "website");

    function tampilkan(){
        $query = "SELECT * FROM Wisata";
        return result($query);
    }

    function tampilkan_side(){
        $query = "SELECT * FROM Wisata";
        return result($query);
    }
    
    function tampilkan_id($id){
        $query = "SELECT * FROM Wisata WHERE id=$id";
        return result($query);
    }
    function hasil_cari($cari){
        $query = "SELECT * FROM Wisata WHERE nama LIKE '%$cari%'";
        return result($query);
    }
    function result($query){
        global $koneksi;
        if($result = mysqli_query($koneksi, $query)){
            return $result;
        }
    }
    function tambah_data($nama, $email, $telepon){
//        $nama = escape($nama);
//        $email   = escape($email);
        $query = "INSERT INTO Wisata (nama, email, telepon) VALUES ('$nama', '$email', '$telepon')";
        return run($query);
    }
    function edit_data($nama, $email, $telepon, $id){
        $query = "UPDATE Wisata SET nama='$nama', email='$email', telepon='$telepon' WHERE id=$id ";
        return run($query);
    }
    function hapus_data($id){
        $query = "DELETE FROM Wisata WHERE id=$id";
        return run($query);
    }
    //login
    function cek_data($nama, $pass){
      global $koneksi;
        
        $query = "SELECT * FROM login WHERE username='$nama' && password='$pass'";
         
         if($result = mysqli_query($koneksi, $query)){
             if(mysqli_num_rows($result) !=0) return true;
             else return false;
         }
    }

//       function cek_status($nama){
//           
//        $query = "SELECT status FROM login WHERE username='$nama";
//           global $koneksi;
//            if($result = mysqli_query($koneksi, $query)){
//                while($row= mysqli_fetch_assoc($result)){
//                    $status = $row['status'];
//                    
//                }
//                
//                return $status;
//            }
//        
//}

    function run($query){
        global $koneksi;
        if(mysqli_query($koneksi, $query)) return true;
        else return false;
        
    }
 
    
    function excerpt($string){
        $string = substr($string, 0, 200);
        return $string. "....";
    }   

  

    
?>