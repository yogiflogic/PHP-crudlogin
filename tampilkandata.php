<?php
require("config.php");

$tampil = "SELECT * FROM sigupuser";
$result = mysqli_query($sqlcon,$tampil);

$no = 1;
while($row = mysqli_fetch_assoc($result)){
    ?>
    <table border="1" width="10px" height="10px">
        <td><?php echo $no++ ?></td>
        <td> <?php  echo htmlspecialchars($row['username']);?></td>
        <td> <?php  echo $row['no_hp'];?></td>
        <td>
            <a href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Yakin Ingin Menghapus');">DELETE</a>
        </td>
        </tr>
    </table>
    <?php
    
    if (empty($row)){
        ?>
        <script>
        alert("Tampilkan data gagal");
        window.location = "superadmin.php";
        </script>
        <?php
    }
}

?>