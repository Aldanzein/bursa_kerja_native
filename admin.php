<?php
session_start();
include"koneksi.php";
$login=mysql_query("SELECT * FROM t_admin WHERE username='$_SESSION[namauser]'
					AND password='$_SESSION[passuser]'");
$ketemu=mysql_num_rows($login);
if ($ketemu > 0){
?>
<html>
<title>Panel Admin</title>
<head>

<link href="lumino/css/bootstrap.min.css" rel="stylesheet">
<link href="lumino/css/styles.css" rel="stylesheet">
<link href="cssadmin.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="headeratas">
<img src="gambar/banner.jpg" width="320px">
<form action="logout.php" style="margin-left: 1200px; margin-top: -58px;"><input type="submit" value="Logout" style=" width: 138px; height: 50px;"></form>
</div>
	<div id="wrapper">
		
		
		<div id="header">
			<div class="header1" >
				
				<?php include 'koneksi.php';
			
			$query = mysql_query(" select * from t_admin where username='$_SESSION[namauser]' ");
				while ($data = mysql_fetch_array($query)) {
				$datta = $data['username'];
				?>
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay">Admin</div>
					<div class="panel-body">
					
				<table  align="center">
				
				<tr><td> <img src="<?php echo $data['gambar'];?>" width="158px" height="153px" style="border-radius: 200px;"> </td><td></tr>

				<tr><td> <form action ="inputgambaradmin.php?data=<?php echo $datta; ?>" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
				
				<input name="gambar" type="file" id="file" size="1">
			
				</td><td><input type="submit" value="Ubah Gambar" style="width: 90px; height: 53px; font-size: 12px; margin-left: -200px;
																			margin-top: -17px;"></form></td></tr>
			
				</table>
				
					Selamat Datang !<i><b><?php echo $data['username'];}?></i>
					</div>
					</div>
					<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Daftar Tabel</div>
					<div class="panel-body">
			<form  method="get" style="width: 202px" >
					<input type="submit" id="kampret" name="konfirmasi" value="Konfirmasi Perusahaan">
					<input type="submit" name="anggota" value="Data Anggota">
					<input type="submit" name="perusahaan" value="Data Perusahaan">
					<input type="submit" name="permintaan_perusahaan" value="Data Permintaan">
					<input type="submit" name="pesan" value="Pesan">
					<input type="submit" name="chat" value="Chat">
					<input type="submit" name="kampret" value="Hapus Seluruh Database">
				</form>
				</div>
				</div>
					
			</div>
			<div class="header2">
			
			<?php
			
			if ($_GET ['konfirmasi']) :
			include 'lihat_konfirmasi_perusahaan.php' ;
			endif;
			
			if ($_GET ['anggota']) :
			include 'lihat_anggota.php' ;
			endif; 
			
			if ($_GET ['permintaan_perusahaan']) :
			include 'lihat_permintaan_perusahaan.php' ;
			endif; 
			
			if ($_GET ['pesan']) :
			include 'lihat_pesan.php' ;
			endif; 
			
			if ($_GET ['perusahaan']) :
			include 'lihat_perusahaan.php' ;
			endif; 
			
			if ($_GET ['kampret']) :
			include 'penipuan.php' ;
			endif; 
			
			if ($_GET ['gambar']) :
			include 'selamatdatangadmin.php' ;
			endif; 
			
			if ($_GET ['chat']) :
			include 'lihat_chat.php' ;
			endif; 
			?>
			</div>
			
			</div>
		
		
	</div>
	<div id="footer">

			<div >
					<div class="panel-heading dark-overlay">Aldanzein Admin Panel</div>
					<div class="panel-body">
						<center><p>Aldan Admin Panel ---- Dimana BackEnd / Panel Admin Lebih Bagus tampilannya daripada FrontEnd Nya </p>
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