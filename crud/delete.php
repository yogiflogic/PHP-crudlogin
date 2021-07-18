<?php
require("config.php");

$id = $_GET['id'];

$qr = "DELETE FROM `sigupuser` WHERE id='$id'";
$result = mysqli_query($sqlcon,$qr);

if (!empty($result)){
    echo "Hapus Data SUKSES";
    header("location: tampilkandata.php");
}

?>