<?php

require_once "../database/config.php";
        
        $username = filter_var($_POST['username'],FILTER_VALIDATE_EMAIL);
        $password = md5($_POST['password']);
        
                $qr = "SELECT * FROM sigupuser WHERE username='$username' AND password='$password'";
                $hsl = mysqli_query($sqlcon,$qr);
                
                $cek = mysqli_fetch_assoc($hsl);

                if(isset($cek) == TRUE){
                    ?>
                    <script type="text/javascript">
                        alert("Anda Berhasil Login..")
                        window.location = "../view/formtampildata.php";
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert("Username atau Password Salah! Ulangi")
                        window.location = "../index.php";
                    </script>
                    <?php
                }

?>