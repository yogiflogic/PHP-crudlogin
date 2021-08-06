<?php

$sqlcon = mysqli_connect('localhost','root','','dblatihan');

if ($sqlcon->connect_error){
    die("Connection failed".$sqlcon->connect_error);
}

?>