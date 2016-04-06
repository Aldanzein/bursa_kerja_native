<h3><b>Data Permintaan</b></h3><form method="post">	<input type="text" class="form-control" name="cari" placeholder="Cari ID Permintaan"></form>
<hr>
<?php include 'koneksi.php';
				$car = $_POST['cari'];
				$dataPerPage = 6;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
    <thead>
        <tr bgcolor="#AAAAFF">
            <td><b>ID Permintaan</td>
            <td><b>ID Perusahaan</td>
            <td><b>Pendidikan Terakhir</td>
            <td><b>Usia</td>
			<td><b>Kompetensi Keahlian</td>
			<td><b>Gaji</td>
			<td><b>Informasi</td>
			<td><b>Aksi</td>

			
            
        </tr>
    </thead>
    <?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
    $query = mysql_query("select * from t_permintaan_perusahaan where id_permintaan like '%$cari%' group by id_permintaan desc LIMIT $offset, $dataPerPage  ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            
            <td><?php echo $data['id_permintaan']; ?></td>
            <td><?php echo $data['id_perusahaan']; ?></td>
            <td><?php echo $data['pendidikan']; ?></td>
			<td><?php echo $data['usia']; ?></td>
			<td><?php echo $data['kompetensi_keahlian']; ?></td>
			<td><?php echo $data['gaji']; ?></td>
			<td><?php echo $data['informasi']; ?></td>

			<td><a href="hapus_permintaan.php?id=<?php echo $data['id_permintaan']; ?> "> Delete</a> </td>
			</tr>
           
           
        </tr>
    <?php
        
    }
	
	$query1   = "SELECT COUNT(*) AS jumData FROM t_permintaan_perusahaan  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?permintaan_perusahaan=Data+Permintaan&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?permintaan_perusahaan=Data+Permintaan&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?permintaan_perusahaan=Data+Permintaan&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
    
			</table><br>
