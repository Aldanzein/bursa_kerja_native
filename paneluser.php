<?php
session_start();
include"koneksi.php";
$login=mysql_query("SELECT * FROM t_anggota WHERE username='$_SESSION[namauser]'
					AND password='$_SESSION[passuser]'");
$ketemu=mysql_num_rows($login);
if ($ketemu > 0){



?>
<html>
<title>Panel User</title>
<head>

<link href="lumino/css/bootstrap.min.css" rel="stylesheet">
<link href="lumino/css/datepicker3.css" rel="stylesheet">
<link href="lumino/css/bootstrap-table.css" rel="stylesheet">
<link href="lumino/css/styles.css" rel="stylesheet">
<link href="cssuser.css" rel="stylesheet" type="text/css" media="all" />
<body>

<div id="headeratas" style="color: white;" > 
<img src="banner/banner.png" width="200px" height="60px" >
<?php include 'koneksi.php';
			
			$query = mysql_query(" select * from t_anggota where username='$_SESSION[namauser]' ");
				while ($data = mysql_fetch_array($query)) {?>
				Selamat datang <b><i><?php echo $data['username'];}
				?></i></b>
				
				
<form style="margin-left: 1200px; margin-top: -57px;" action="logout.php">
		<input  type="submit" name="logout" value="Log Out"></form></div>
	<div id="wrapper">
		
		
		<div id="header">
			<div class="header1"><center>
			
				<?php include 'koneksi.php';
			
			$query = mysql_query(" select * from t_anggota where username='$_SESSION[namauser]' ");
				while ($data = mysql_fetch_array($query)) { 
				$kompetensi = $data['kompetensi_keahlian'];
				$usia = $data['usia'];
				$ida = $data['id_anggota'];
				$data7 = $data['id_anggota'];
				$pendidikan = $data['pendidikan'];
				?> 
				
		<table cellpadding="7" cellspacing="4" border="0px" style="border:2px solid #9999FF; border-radius: 3px;" >
				<td> <img src="<?php echo $data['gambar'];?>" width="158px" height="153px"> </td>
				</table>
			<br>	
			<table cellspacing=10 style="font-size: 12px;" >

			<tr>
			<td><b>Nama<hr></td><td><b>:&nbsp<?php echo $data['nm_anggota'];?><hr></td></tr>
			<tr>
			<td><b>Alamat<hr></td><td><b>:&nbsp<?php echo $data['alamat'];?><hr></td></tr>
			<tr>
			<td><b>Tanggal Lahir<hr></td><td><b>:&nbsp<?php echo $data['tgl_lahir'];?><hr></td></tr>
			<tr>
			<td><b>Umur<hr></td><td><b>:&nbsp<?php echo $data['usia'];?><hr></td></tr>
			<tr>
			<td><b>Pendidikan<hr></td><td><b>:&nbsp<?php echo $data['pendidikan'];?><hr></td></tr>
			<tr>
			<td><b>Kompetensi Keahlian<hr></td><td><b>:&nbsp<?php echo $data['kompetensi_keahlian'];}?><hr></td></tr>
			
			</table></center>
			</div>
			<div class="header2">
			
				<h2>Panel User</h2>
				
			</div>
			
			</div>
			<div id="project">
			
			<form method="get" style="color: white" >
					<input  type="submit" name="permintaan" value="Lowongan Rekomendasi"  >
					<input type="submit" name="pesan" value="Pesan">
					<input type="submit" name="privasi" value="Edit Akun">
					<input type="submit" name="carlow" value="Cari Lowongan">
			
				</form>
			
			<?php
			if ($_GET ['permintaan']) :
			include 'lihat_permintaan_perusahaan_user.php' ;
			endif;
			
			if ($_GET ['pesan']) :
			include 'lihat_pesan_user.php' ;
			endif; 
			
			if ($_GET ['privasi']) :
			include 'input_edit_akunuser.php' ;
			endif; 
			
			if ($_GET ['carlow']) :
			include 'carlow.php' ;
			endif; 
			?>
			
			
			</div>
			
			<?php include 'chat.php' ; ?>
	
	</div>
		
		<div id="footer">
				<div >
					<div class="panel-heading dark-overlay">Aldanzein User Panel</div>
					<div class="panel-body">
						<center><p>Aldan User Panel ---- Web yang menghubungkan Jutaan calon karyawan dengan puluhan juta Lapangan Pekerjaan yang menunggu anda </p>
					</div>
				</div>

		</div>
</body>
</html>
<?php

}
else{ ?>

  <script language="javascript">alert('Anda Tidak Layak Untuk Masuk');
document.location='index.php'</script><?php
}
?>