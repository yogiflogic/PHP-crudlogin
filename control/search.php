<?php
    require_once "../database/config.php";
?>

<form action="search.php" method="GET">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
	<tr>
        <th>No</th>
        <th>Name Rider</th>
		<th>No Start</th>
	</tr>
    
<?php
if(isset($_GET['cari']))
{
    $cari = $_GET['cari'];
    $qr = "SELECT * FROM namerider WHERE nickname LIKE %".$cari."%";
    $result = mysqli_query($sqlcon,$qr);
    if (empty($result)){
        ?>
        <script>
        alert("Tampilkan data gagal");
        window.location = "search.php";
        </script>
        <?php
    }
}
else
{       
        $qr = "SELECT * FROM 'namerider'";
		$result = mysqli_query($sqlcon,$qr);		
}


    $no = 1;
    while($row = mysqli_fetch_array($result))
    {
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['nickname'] ?></td>
        <td><?php echo $row['nostart'] ?></td>
        </tr>
        <?php
         header("location:search.php");
    }
  
?>
</table> 