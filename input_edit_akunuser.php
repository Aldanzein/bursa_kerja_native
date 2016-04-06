<b>Edit Akun
<hr>

 <?php
 include "koneksi.php";
 
		$data = $_GET['id'];
		$sqldata= "select * from t_anggota where id_anggota='$data7'";
		$result=mysql_query($sqldata); 
		$data1=mysql_fetch_array($result);
?>


<center><table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
	`	 <form action="simupdate_user.php?id=<?php echo $data7;?>" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
			<tr>
			<td>Nama</td><td><input type="text" name="nama" value="<?php echo "$data1[nm_anggota]";?>"></td></tr>
			<tr>
			<td>Alamat</td><td><input type="text" name="alamat" value="<?php echo "$data1[alamat]";?>" ></td></tr>
			<tr>
			<td>Tanggal Lahir </td><td><input type="text" name="tgl" value="<?php echo "$data1[tgl_lahir]";?>" ></td></tr>
			<tr>
			<td>Pendidikan</td><td><input type="text" name="pendidikan" value="<?php echo "$data1[pendidikan]";?>" ></td></tr>
			<tr>
			<td>Kompetensi Keahlian</td><td><input type="text" name="komp" value="<?php echo "$data1[kompetensi_keahlian]";?>" ></td></tr>
			<tr>
			<td>Gambar</td><td><input name="gambar" type="file" id="file" size="1" value="<?php echo "$data1[gambar]";?>" ></td></tr>
			<tr>
			<td><input type="submit" name="yosha" value="Input"></td><td><input type="reset" name="Submit2" value="Baru"></td></tr>
			

			
			</table>
			</form></center>