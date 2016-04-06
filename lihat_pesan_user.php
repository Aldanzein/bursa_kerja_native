<?php include 'koneksi.php';
				$car = $_POST['cari'];
				$dataPerPage = 2;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
<b>Daftar Pesan
<hr>
<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
    <thead>
        <tr  bgcolor="#AAAAFF"  >
      
            <td width="90px"><b>ID Pesan</td>
            <td width="160px"><b>Nama Perusahaan</td>
            <td width="150px"><b>ID Permintaan</td>
			<td width="120px"><b>Informasi</td>
            <td width="90px"><b>Konfirmasi</td>
			<td width="190px"><b>Pesan</td>
			<td width="50px"><b>Aksi</td>
			
			
			
            
        </tr>
    </thead>
    <?php
	include 'koneksi.php';
    $query = mysql_query("select a.*, b.*, d.* from t_permintaan_perusahaan d join t_pesan a join t_perusahaan b join t_anggota c where a.id_perusahaan=b.id_perusahaan and a.id_anggota=c.id_anggota and d.id_perusahaan=b.id_perusahaan and a.id_permintaan=d.id_permintaan and c.id_anggota=$data7 group by a.id_pesan desc LIMIT $offset, $dataPerPage   ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
          <tr bgcolor="#fff" border="2px">
            
            <td><?php echo $data['id_pesan']; ?></td>
            <td><?php echo $data['nm_perusahaan']; ?></td>
            <td><?php echo $data['id_permintaan']; ?></td>
			<td><?php echo $data['informasi']; ?></td>
			<td><?php echo $data['konfirmasi']; ?></td>
			<td><?php echo $data['pesan']; ?></td>
			<td><a href="hapus_pesan.php?id=<?php echo $data['id_pesan']; ?> "> Hapus</a> </td>
		

			
			</tr>
           
           
        </tr></form>
    <?php
        
    }
    $query1   = "SELECT COUNT(*) AS jumData FROM t_pesan where id_anggota='$data7'  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?pesan=Pesan&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?pesan=Pesan&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?pesan=Pesan&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
    
			</table><br>
			