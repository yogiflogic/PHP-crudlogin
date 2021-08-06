<?php
require_once "config.php";
    
        $perpage = 10;
        $qrdata = mysqli_query($sqlcon,"SELECT * FROM forbes2021");
        $totalarr= mysqli_fetch_assoc($qrdata);
        $jmldata = count($totalarr);
        $result = ceil($jmldata/$perpage);
        $halamanaktif = isset($_GET['page']) ? $_GET['page'] : 1;
        $awalData = ($perpage*$halamanaktif) - $perpage;
        $next = $halamanaktif + 1;
        $prev = $halamanaktif - 1;
        
        //menampilkan data pagination
        $qrdata2 = mysqli_query($sqlcon,"SELECT * FROM forbes2021 LIMIT $awalData,$perpage");
        while($row = mysqli_fetch_assoc($qrdata2)){
                ?>
                <tr>
                    <td align="center"> <?=  $row['Rank'];?></td>
                    <td align="center"> <?=  $row['Name'];?></td>
                    <td align="center"> <?=  $row['Country'];?></td>
                    <td align="center"> <?=  $row['Sales'];?></td>
                    <td align="center"> <?=  $row['Profit'];?></td>
                    <td align="center"> <?=  $row['Assets'];?></td>
                    <td align="center"> <?=  $row['Market_Value'];?></td>
                    <td align="center"> <?=  $row['Year'];?></td>
                    <td align="center">
                        <a href="delete.php?id=<?= $row['id']; ?>"onclick="return confirm('Yakin Ingin Menghapus');">DELETE</a>
                    </td>
                </tr>
            <?php
        }
        
        //pagination
        ?>
        <ul class="pagination">

            <li class="page-item <?php if($halamanaktif <= 1){ echo 'disabled'; } ?>">
                <a class="page-link" href="?page=<?=$halamanaktif -1?>">Previous</a>
            </li>
            <?php for($i = 1; $i < $perpage; $i++) :?>
                <a class="page-link" href="?page=<?= $i ?>"><?=$i?></a></li>
            <?php endfor; ?>
        
            <li class="page-item <?php if($halamanaktif >= $totalarr) { echo 'disabled'; } ?>">
                <a class="page-link" href="?page=<?=$next?>">Next</a>
            </li>
                  
        </ul>
        
/* 
function hitung_umur($tanggal_lahir){
	$birthDate = new DateTime($tanggal_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	$m = $today->diff($birthDate)->m;
	$d = $today->diff($birthDate)->d;
	return $y." tahun ".$m." bulan ".$d." hari";
}
echo hitung_umur("1991-09-01");
*/
?>
