<?php
require_once "../database/config.php";
?>
    <?php
        $qr = "SELECT * FROM namerider";
        $result = mysqli_query($sqlcon,$qr);

        $no = 1;
        while($row = mysqli_fetch_assoc($result)){
            ?>
            
            <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td align="center"> <?php  echo $row['nickname'];?></td>
                <td align="center"> <?php  echo $row['nostart'];?></td>
                <td align="center" bgcolor="aqua">
                    <a href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Yakin Ingin Menghapus');">DELETE</a>
                </td>
                </tr>
            
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
 