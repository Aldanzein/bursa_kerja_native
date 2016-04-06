<h3><b>Data Anggota</b></h3><form method="post">	<input type="text" class="form-control" name="cari" placeholder="Cari Nama Anggota"></form>
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
            <td><b>ID Anggota</td>
            <td><b>Nama Angoota</td>
            <td><b>Alamat</td>
            <td><b>Tanggal Lahir</td>
			<td><b>Pendidikan</td>
			<td><b>Kompetensi Keahlian</td>
			<td><b>Username</td>
			<td><b>Aksi</td>
		
			
			
            
        </tr>
    </thead>
    <?php
	$cari = $_POST['cari'];
	include 'koneksi.php';
    $query = mysql_query("select * from t_anggota where nm_anggota like '%$cari%' group by id_anggota desc LIMIT $offset, $dataPerPage  ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            
            <td><?php echo $data['id_anggota']; ?></td>
            <td><?php echo $data['nm_anggota']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['tgl_lahir']; ?></td>
			<td><?php echo $data['pendidikan']; ?></td>
			<td><?php echo $data['kompetensi_keahlian']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?> "> Delete</a> </td>
			</tr>
           
           
        </tr>
    <?php
        
    }
	
	$query1   = "SELECT COUNT(*) AS jumData FROM t_anggota  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?anggota=Data+Anggota&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?anggota=Data+Anggota&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?anggota=Data+Anggota&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
	

	
	
    
			</table><br>
			
			