<b>Daftar Pesan Permintaan
<hr>

<?php include 'koneksi.php';
				$car = $_POST['cari'];
				$dataPerPage = 2;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
    <thead>
        <tr bgcolor="#AAAAFF" >
            <td><b>ID Pesan</td>
            <td><b>Nama Anggota</td>
            <td><b>Pendidikan</td>
            <td><b>Usia</td>
			<td><b>Keahlian</td>
			<td><b>Gaji</td>
			<td><b>Informasi</td>
			<td><b>Tindakan</td>
			<td><b>Diterima</td>
	
			
			
            
        </tr>
    </thead>
    <?php
	include 'koneksi.php';
    $query = mysql_query("select a.*, b.*,c.*, b.usia as usiakampret, b.pendidikan as pendidikankampret, b.kompetensi_keahlian as komp from t_pesan a join t_anggota b join t_permintaan_perusahaan c where c.id_perusahaan=a.id_perusahaan and a.id_anggota=b.id_anggota and a.id_permintaan=c.id_permintaan and a.id_perusahaan=$data2 group by id_pesan desc LIMIT $offset, $dataPerPage  ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
          <tr>
            
            <td><?php echo $data['id_pesan']; ?></td>
            <td><?php echo $data['nm_anggota']; ?></td>
            <td><?php echo $data['pendidikankampret']; ?></td>
			<td><?php echo $data['usiakampret']; ?></td>
			<td><?php echo $data['komp']; ?></td>
			<td><?php echo $data['gaji']; ?></td>
			<td><?php echo $data['informasi']; ?></td>
			<td> <a href="konfirmasipermintaan.php?id=<?php echo $data['id_pesan'];?>"> Konfirmasi</a> || <a href="Tolakpermintaan.php?id=<?php echo $data['id_pesan'];?>"> Tolak </a> </td>
			<td><?php echo $data['konfirmasi']; ?></td>
		

			
			</tr>
           
           
        </tr></form>
    <?php
        
    }
    $query1   = "SELECT COUNT(*) AS jumData FROM t_pesan where id_perusahaan='$data7' ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?pesan=Pesan&paging".($noPage-1)."'>&lt;&lt; Prev</a>";

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
			