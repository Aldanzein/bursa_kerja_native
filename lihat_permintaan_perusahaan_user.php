<b>Daftar Rekomendasi Lowongan Kerja
<hr>

<?php include 'koneksi.php';
				$car = $_POST['cari'];
				$dataPerPage = 1;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
				<br><center>
				
					  <?php
	include 'koneksi.php';
    $query = mysql_query("select a.*, a.usia as usiakampret, g.*, b.gambar as gbr, b.nm_perusahaan from t_permintaan_perusahaan a join t_perusahaan b join t_anggota g where a.id_perusahaan=b.id_perusahaan and a.kompetensi_keahlian='$kompetensi' and $usia<=a.usia and g.pendidikan='$pendidikan' group by id_permintaan desc LIMIT $offset, $dataPerPage  ");
 
    
    while ($data = mysql_fetch_array($query)) {
	
    ?>
				
				
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
			


    <thead>
      <tr>
	 <td rowspan="6" > <center><img src="<?php echo $data['gbr'];?>" width="228px" height="228px" style="border-radius: 20px"> </td>
			<td><b>Nama Perusahaan</td><td><b>:&nbsp<?php echo $data['nm_perusahaan'];?></td></tr>
			<tr>
			<td><b>Pendidikan Terakhir</td><td><b>:&nbsp<?php echo $data['pendidikan'];?></td></tr>
			<tr>
			<td><b>Usia</td><td><b>:&nbsp<?php echo $data['usiakampret'];?></td></tr>
			<tr>
			<td><b>Kompetensi Keahlian</td><td><b>:&nbsp<?php echo $data['kompetensi_keahlian'];?></td></tr>
			<tr>
			<td><b>Gaji</td><td><b>:&nbsp<?php echo $data['gaji'];?></td></tr>
			<tr>
			<td><b>Informasi</td><td><b>:&nbsp<?php echo $data['informasi'];?></td></tr>

			<td><a href="kirim_permintaan.php?ida=<?php echo $ida; ?>&idp=<?php echo $data['id_perusahaan'];?>&idp2=<?php echo $data['id_permintaan'];?>"><b> Kirim Permintaan</b></a> </td>
			</tr>
           
           
     
    
    
			</table>
<?php
}
        
  
	$query1   = "SELECT COUNT(*) AS jumData FROM t_permintaan_perusahaan where kompetensi_keahlian='$kompetensi' and '$usia'<=usia  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?permintaan=Data+Anggota&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?permintaan=Data+Anggota&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?permintaan=Data+Anggota&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		
		?>
	