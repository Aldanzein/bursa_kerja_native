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
            <td><b>ID Chat</td>
            <td><b>ID Anggota</td>
            <td><b>Chat</td>
			<td><b>Aksi</td>
		
			
			
            
        </tr>
    </thead>
    <?php
	$cari = $_POST['cari'];
	include 'koneksi.php';
    $query = mysql_query("select a.*, b.* from chat a join t_anggota b where a.id_anggota=b.id_anggota and b.nm_anggota like '%$cari%' group by id_chat desc LIMIT $offset, $dataPerPage  ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            
            <td><?php echo $data['id_chat']; ?></td>
            <td><?php echo $data['nm_anggota']; ?></td>
            <td><?php echo $data['chat']; ?></td>
			<td><a href="hapus_chat.php?id=<?php echo $data['id_chat']; ?> "> Delete</a> </td>
			</tr>
           
           
        </tr>
    <?php
        
    }
	
	$query1   = "SELECT COUNT(*) AS jumData FROM chat  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?chat=Chat&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?chat=Chat&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?chat=Chat&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
	

	
	
    
			</table><br>
			