<?php

$sqlcon = mysqli_connect('localhost','root','','forbes2021');

if ($sqlcon->connect_error){
    die("Connection failed".$sqlcon->connect_error);
}

?>