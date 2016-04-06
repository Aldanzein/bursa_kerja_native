<html>
<head>

		<title>Cari Lowongan</title>
		<link href="devoops/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="cssindex.css" rel="stylesheet" type="text/css" media="all" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

<body bgcolor="black">
<div id="headeratas" style="margin-top: -20px; margin-bottom: 25px;">
	<a href="index.php"><img src="banner/banner.png" width="300px" height="87px" ></a>

	<form style="margin-left: 1100px; margin-top: -85px;" action="loginuser.php">
		<input type="submit" value="Masuk"></form>
		
	<form style="margin-left: 1230px; margin-top: -41px;" action="register.php">
		<input type="submit" value="Register"></form>
		
	<form style="margin-left: 300px; margin-top: -39px;" action="cari.php" method="post" >
		<div class="form-group">
		
				<input type="text" class="form-control" name="cari" placeholder="Cari Lowongan Kerja">
			</div>
		</form>

</div>
<center><h2><font color="black">Daftar Lowongan Pekerjaan</h2></center></font>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
	
		<?php include 'koneksi.php';

				$dataPerPage = 12;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			
			<div class="box-content no-padding"><a href="loginuser.php">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>Nama Perusahaan</th>
							<th>Kompetensi Keahlian</th>
							<th>Pendidikan Min</th>
							<th>Usia Min</th>
							<th>Gaji</th>
							<th>Informasi</th>
						</tr>
					</thead>
					<tbody>
					<!-- Start: list_row -->
						<?php include "koneksi.php";
						$term = $_POST['cari'];
$query = mysql_query("select b.*, c.*, c.kompetensi_keahlian as kompetensi from t_perusahaan b join t_permintaan_perusahaan c where (b.id_perusahaan=c.id_perusahaan and b.nm_perusahaan like '%$term%') or (b.id_perusahaan=c.id_perusahaan and c.kompetensi_keahlian like '%$term%') or (b.id_perusahaan=c.id_perusahaan and c.pendidikan like '%$term%') or (b.id_perusahaan=c.id_perusahaan and c.usia like '%$term%') or (b.id_perusahaan=c.id_perusahaan and c.gaji like '%$term%') or (b.id_perusahaan=c.id_perusahaan and c.informasi like '%$term%') group by c.id_permintaan desc LIMIT $offset, $dataPerPage  ");

 
  while ($data = mysql_fetch_array($query)) {
  $id = $data['id_anggota'];
 $data['kompetensi_keahlian'];
  
?><tr>
							<td><?php echo  $data['nm_perusahaan'];?></td>
							<td><?php echo  $data['kompetensi'];?></td>
							<td><?php echo  $data['pendidikan'];?></td>
							<td><?php echo  $data['usia'];?></td>
							<td><?php echo  $data['gaji'];?></td>
							<td><?php echo  $data['informasi'];}?></td>
						</tr>
						

						
				</table></a>
			</div>
		</div><center><b>
			<?php
	$query1   = "SELECT COUNT(*) AS jumData FROM t_permintaan_perusahaan  ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?&paging=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?&paging=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?&paging=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
	</div>
	<div id="footer" style="margin-top: 12px;">
	</div>
	
	</body></html>