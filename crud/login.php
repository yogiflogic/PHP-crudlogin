<?php


    require '../crud/config.php';

    function login($data){
        
        global $sqlcon;
        $username = $data['username'];
        $password = md5($data['password']);

                $qr = "SELECT * FROM sigupuser WHERE username='$username' AND password='$password'";
                $hsl = mysqli_query($sqlcon,$qr);
                
                $cek = mysqli_fetch_assoc($hsl);

                if(isset($cek)){
                    echo 'success'; 
                    ?>
                    <script type="text/javascript">
                        alert("Anda Berhasil Login..")
                        window.location = "tampilkandata.php";
                    </script>
                    <?php
                }else{
                    echo 'failure';
                    ?>
                    <script type="text/javascript">
                        alert("Username atau Password Salah! Ulangi")
                        window.location = "index.php";
                    </script>
                    <?php
                }
        return $data;
    }

    

?>