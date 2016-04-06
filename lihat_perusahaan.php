<h3><b>Data Perusahaan</b></h3><form method="post">	<input type="text" class="form-control" name="cari" placeholder="Cari Nama Perusahaan"></form>
<hr>
<?php include 'koneksi.php';
				
				$dataPerPage = 7;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
    <thead>
        <tr bgcolor="#AAAAFF">
            <td><b>ID Perusahaan</td>
            <td><b>Nama Perusahaan</td>
            <td><b>Jenis Usaha</td>
            <td><b>Alamat</td>
			<td><b>Bidang</td>
			<td><b>Nama Pemilik</td>
			<td><b>Username</td>
			<td><b>Aksi</td>
			
            
        </tr>
    </thead>
    <?php
	include 'koneksi.php';
	$cari = $_POST['cari'];
    $query = mysql_query("select * from t_perusahaan where nm_perusahaan like '%$cari%' group by id_perusahaan desc LIMIT $offset, $dataPerPage   ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            
            <td><?php echo $data['id_perusahaan']; ?></td>
            <td><?php echo $data['nm_perusahaan']; ?></td>
            <td><?php echo $data['jenis_usaha']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['bidang']; ?></td>
			<td><?php echo $data['nm_pemilik']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><a href="hapus_perusahaan.php?id=<?php echo $data['id_perusahaan']; ?> "> Delete</a> </td>
			</tr>
           
           
        </tr>
    <?php
        
    }
	
	
	$query1   = "SELECT COUNT(*) AS jumData FROM t_perusahaan  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?perusahaan=Data+Perusahaan&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?perusahaan=Data+Perusahaan&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?perusahaan=Data+Perusahaan&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
	

	

    
			</table><br>
