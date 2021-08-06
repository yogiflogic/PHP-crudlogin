<?php
    require_once "../database/config.php";
    
        if (isset($_POST['fsubmit'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $nohp     = $_POST['nohp'];
            
            $pgeuser = pg_escape_string($username);
            
                $msk = "INSERT INTO sigupuser VALUES ('','$pgeuser','$password','$nohp')";
                $qr = mysqli_query($sqlcon,$msk);
                
                if($qr === TRUE){
                    echo "Masukan Data Berhasil";
                    header("location:tampilkandata.php");
                }
            
            
        }
  
?>