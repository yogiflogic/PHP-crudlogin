<?php
    require('../database/config.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $nohp     = $_POST['nohp'];

        if (isset($_POST['fsubmit'])){
            $msk = "INSERT INTO sigupuser VALUES ('','$username','$password','$nohp')";
            $qr = mysqli_query($sqlcon,$msk);
            
            if($qr === TRUE){
                echo "Masukan Data Berhasil";
                header("location:tampilkandata.php");
            }
            
            
        }
  
?>